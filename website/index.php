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
	<li>IRC - #postfixadmin on irc.freenode.net </li>
</ul>

<h3>Requirements</h3>
<ul>
	<li><a href="http://www.postfix.org">Postfix</a> (success has been reported with Exim!)</li>
	<li><a href="http://mysql.org">MySQL</a> or <a href="http://postgresql.org">PostgreSQL</a></li>
	<li><a href="http://php.net">PHP</a> v4 or v5 should both work</li>
	<li>And presumably a compatible IMAP/POP3 server (dovecot and courier seem to be the most popular)</li>
</ul>

<h3>Plans...</h3>
<ul>
<li>Release 2.3 - May 2009 - Aliased domains, bug fixes, better Debian installer. See changelog/announcement when it arrives :)</li>
<li>Release 3.0 - ???????????? - Smarty / Doctrine refactoring, better vacation functionality, user controllable fetchmail</li>
</ul>

<h3>Download - version 2.2.1.1</h3>

<p>v2.2.1.1 was released in July 2008. It's the latest stable version and is basically all bug fixes from 'trunk' since 2.2.0 was released, without the new features (i.e. domain-domain aliasing). It is the latest version and we'd recommend users of previous versions upgrade.</p>

<p><small>2.2.1 was a slightly broken release, in that it displayed the wrong revision number; hence 2.2.1.1</small></p>

<p>You can download the software <a href="http://sourceforge.net/project/showfiles.php?group_id=191583&package_id=225300">here</a>; the release contains .deb and .rpm (SuSE) packages and of course a .tar.gz.</p>

<h3>Download - Development/Subversion release</h3>

<p>'trunk' currently contains a working domain-domain aliasing implementation, but to use it, you'll need to alter some Postfix settings first. Once this is finished, it will probably form 2.3.0, which may be released within the next month or so.</p>

<p>The 2.3 code base will allow for XMLRPC access - this will allow third party software to integrate (allowing users to change their password, set their vacation message etc)</p>

<code>svn co https://postfixadmin.svn.sourceforge.net/svnroot/postfixadmin/trunk postfixadmin</code>

<h3>Upgrading Postfixadmin</h3>

<p>The database schema between version 2.1.0 and anything later has changed in a number of ways, you should therefore run the 'upgrade.php' script which should take care of all database changes between revisions. This should run automatically when you hit the application, unless you've deleted 'setup.php'.</p>

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
