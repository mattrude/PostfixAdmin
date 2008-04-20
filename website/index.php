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
	<li><a href="http://php.net">PHP</a></li>
	<li>And presumably a compatible IMAP/POP3 server (dovecot, courier or cyrus?)</li>
</ul>

<h3>Download - Nearly stable release</h3>

<p>We've created a .deb and .rpm packages to try and make installation easier. </p>
<p>RPM packages for Fedora and openSUSE are available via openSUSE buildservice and usually contain the latest Subversion version.</p>
<p>This should be judged as being a <b>snapshot</b>, and although it <u>should work</u> - it may not - or some features may be lacking suitable documentation.</p>
<p>As this is based on the development branch, it's setup is slightly different from that for v2.1.0; but you should be able to figure that out when you visit http://yoursever/postfixadmin after installing it. Note, the .deb does not setup your database in any useful way - so you'll need to do this manually (see /usr/share/doc/postfixadmin)</p>

<p><a href="http://downloads.sourceforge.net/postfixadmin/postfixadmin_2.2.0-1rc4_all.deb?use_mirror=osdn">GingerDog's experimental .deb</a> for installation (based on Subversion revision 337) (built on 20th April 2008)</p>
<p><a href="http://software.opensuse.org/search?q=postfixadmin">RPM packages for openSUSE and Fedora</a> (usually latest Subversion revision).</p>

<h3>Download - Previous stable release</h3>

<p>Note: This version is pretty much unsupported; you are strongly encouraged to use one of the newer builds off the 2.2 development cycle.</p>

<p>If you still want to use it, try <a href="http://sourceforge.net/project/showfiles.php?group_id=191583&package_id=225300&release_id=495972">here</a></p>

<h3>Download - Development/Subversion release</h3>

<p>The development team expected the codebase in Subversion to become 2.2.0 before the end of 2007. Suffice to say, they're not very good at estimating release dates, but as of April 2008, they think 2.2.0rc4 is probably pretty close to the final release.</p>

<p>We would recommend that all new users use one of the 2.2.0rc releases, or run from Subversion. Use of v2.1.0 will probably cause you unnecessary headaches. </p>


<p>You can download the source code to Postfixadmin using Subversion :</p>

<code>svn co https://postfixadmin.svn.sourceforge.net/svnroot/postfixadmin postfixadmin</code>


<h3>Upgrading Postfixadmin</h3>

<p>The database schema between version 2.1.0 and anything later has changed in a number of ways, you should therefore run the 'upgrade.php' script which should take care of all database changes between revisions. </p>

<h3>Other Relevant links and related projects</h3>

<ul>
<li><a href="http://squirrelmail-postfixadmin.palepurple.co.uk">Postfixadmin/Squirrelmail plugin</a> - Integrate together <A href="http://squirrelmail.org">Squirrelmail</a> with Postfixadmin</a></li>
<li><a href="http://codepoets.co.uk/postfixadmin-postgresql-courier-squirrelmail-debian-etch-howto-tutorial@">Guide to installation on Etch with PostgreSQL and Courier</a></li>
</ul>

(If you would like to add links to any other relevant projects, please poke GingerDog on irc)

<?php
require_once('footer.php');
?>
