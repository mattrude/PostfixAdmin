#! /usr/bin/perl -w
#
# Virtual Vacation
# Version 1.1
# 2003 (c) High5!
# Created by: Mischa Peters <mischa at high5 dot net>
#
use DBI;

$db_name = "postfix";
$db_user = "postfixadmin";
$db_pass = "p0stf1xadmin";
$sendmail = "/usr/sbin/sendmail -t";
$logfile = "";

@input = <>;

for ($i = 0; $i <= $#input; $i++) {
	if ($input[$i] =~ /From: (.*)\n$/) { $from = $1; }
	if ($input[$i] =~ /To: (.*)\n$/) { $to = $1; }
	if ($input[$i] =~ /Subject: (.*)\n$/) { $subject = $1; }
}

$to =~ m/(\S*@\S*)/;
$email = $1;
if ($email =~ m/\<(.*)\>/) {
	$email = $1;
}

if ($logfile) {
	open (FILE, ">> $logfile") or die ("Unable to open log file");
	chop ($date = `date "+%Y/%m/%d %H:%M:%S"`);
	print FILE "$date: $from - $to - $subject\n";
	close (FILE);
}

$query = qq{
	SELECT subject,body
	FROM vacation
	WHERE email='$email'
};

$dbh = DBI->connect("DBI:mysql:$db_name", "$db_user", "$db_pass", { RaiseError => 1});
$sth = $dbh->prepare($query) or die "Can't prepare $query: $dbh->errstr\n";
$sth->execute or die "Can't execute the query: $sth->errstr";
$rv = $sth->rows;

if ($rv == 1) {
	@row = $sth->fetchrow_array;
	open (MAIL, "| $sendmail") or die ("Unable to open sendmail");
	print MAIL "From: $to\n";
	print MAIL "To: $from\n";
	print MAIL "Subject: $row[0]\n";
	print MAIL "X-Loop: Postfix Vacation\n\n";
	print MAIL "$row[1]";
	close (MAIL);
}
1;
