<?php
require_once('header.php');
?>

<h3>What is it</h3>

<p>Postfix Admin is a web based interface used to manage mailboxes, virtual domains and aliases. It also features support for vacation/out-of-the-office messages.</p>

<p>It requires <a href="http://php.net">PHP</a>, <a href="http://postfix.org">Postfix</a> and one of <a href="http://www.mysql.org">MySQL</a> or <a href="http://www.postgresql.org">PostgreSQL</a>.</p>

<h3>License</h3>
<p>Postfixadmin is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. </p>

<p>If you make changes to it, or fix bugs, please consider donating your changes back to the community.</p>

<h3>Community</h3>

<ul>
	<li><a href="http://sourceforge.net/forum/forum.php?forum_id=676076">Postfixadmin Discussion Forum</a></li>
	<li><a href="http://sourceforge.net/mail/?group_id=191583">Mailing lists</a></li>
	<li>IRC - #postfixadmin on irc.freenode.net </li>
</ul>

<h3>Requirements</h3>
<ul>
	<li><a href="http://www.postfix.org">Postfix</a> (success has been reported with Exim!)</li>
	<li><a href="http://mysql.org">MySQL</a> or <a href="http://postgresql.org">PostgreSQL</a></li>
	<li><a href="http://php.net">PHP</a> v4 or v5 should both work</li>
	<li>And presumably a compatible IMAP/POP3 server (dovecot and courier seem to be the most popular)</li>
</ul>

<h3>Download - version 2.2.0</h3>

<p>v2.2.0 was released in April 2008. It is the latest version and we'd recommend users of previous versions upgrade.</p>

<p>v2.2.0 includes more language translations, support for fetchmail, a better upgrade procedure, improved vacation support, UTF8 support, broadcast message and many bug fixes.</p>

<p>You can download the software <a href="http://sourceforge.net/project/showfiles.php?group_id=191583&package_id=225300">here</a>, with the 2.2.0 release we also provide a .deb package (and there are <a href=""http://software.opensuse.org/search?q=postfixadmin">RPM packages elsewhere</a>) to hopefully make installation somewhat easier.</p>


<h3>Download - Development/Subversion release</h3>

<p>Since release of v2.2.0, not much has happened (yet). If you wish to live on the edge and run from Subversion, feel free to do so. You may occassionally experience breakage, and we'd suggest you join the IRC channel before 'svn update'ing any important installations.</p>

<code>svn co https://postfixadmin.svn.sourceforge.net/svnroot/postfixadmin postfixadmin</code>

<h3>Upgrading Postfixadmin</h3>

<p>The database schema between version 2.1.0 and anything later has changed in a number of ways, you should therefore run the 'upgrade.php' script which should take care of all database changes between revisions. </p>

<h3>Other Relevant links and related projects</h3>

<ul>
<li><a href="http://squirrelmail-postfixadmin.palepurple.co.uk">Postfixadmin/Squirrelmail plugin</a> - Integrate together <A href="http://squirrelmail.org">Squirrelmail</a> with Postfixadmin</a></li>
<li><a href="http://nejc.skoberne.net/rcpfa">Postfixadmin/Roundcube plugin</a> - Integrate together <A href="http://roundcube.net">RoundCube</a> with Postfixadmin</a></li>
<li><a href="http://codepoets.co.uk/postfixadmin-postgresql-courier-squirrelmail-debian-etch-howto-tutorial">Guide to installation on Etch with PostgreSQL and Courier</a></li>
</ul>

(If you would like to add links to any other relevant projects or documentation, please poke GingerDog on irc)

<?php
require_once('footer.php');
?>
