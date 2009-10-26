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
	<li><a href="https://sourceforge.net/projects/postfixadmin/forums/forum/676076">Postfixadmin Discussion Forum</a></li>
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
<li>Release 2.4 - Merge in the Smarty branch - this should bring protection against XSS etc - November 2009?</li>
<li>Release 3.0 - ???????????? - Smarty / Doctrine refactoring, better vacation functionality, user controllable fetchmail</li>
</ul>

<h3>Download - version 2.3</h3>

<p><a href='https://sourceforge.net/projects/postfixadmin/files/'>Download the latest release</a></p>

<p>Version 2.3 was released October 26th 2009...</p>

<p>New features/changes/things of significance :</p>
<ul>
<li>Improved Aliased domains support (no longer relying on catch-all domains) - Note this requires Postfix configuration changes; old configuration(s) will continue to work.</li>
<li>Security fix for setup.php (password required to access; setup.php can generate this and help you)</li>
<li>Superadmin can now setup fetchmail for all users</li>
<li>Enhanced fetchmail.pl script (file locking, syslog logging, configuration file etc)</li>
<li>Added dovecot quota support (documentation + viewing in Postfixadmin) for dovecot 1.0/1.1 and &gt;= 1.2</li>
<li>Vacation re-notification after defineable timeout (default remains to notify only once)</li>
<li>Refactoring of /users (see /model) and XmlRpc interface for remote mail clients (E.g. <a href='http://squirrelmail-postfixadmin.palepurple.co.uk'>squirrelmail-postfixadmin</a>)</li>
<li>Add dovecot password support (see <a href='https://sourceforge.net/tracker/index.php?func=detail&aid=2607332&group_id=191583&atid=937966'>here</a>)</li>
<li>Added support for courier authlib authentication flavours ($CONF['authlib_default_flavor'])</li>
<li>update.php should handle all database updates for you</li>
<li>Lots of small updates and random new minor features</li>
<li>bug fixes, better Debian installer. </li>
</ul>
<p>Many thanks to all those who submitted patches and feedback during this release cycle. There are too many to easily name - we'd like to thank you all for taking the time to help make Postfixadmin better</p>

<h3>Download - Development/Subversion release</h3>

<p>'trunk' currently contains a working domain-domain aliasing implementation, but to use it, you'll need to alter some Postfix settings first. Once this is finished, it will probably form 2.3.0, which may be released within the next month or so.</p>

<code>svn co https://postfixadmin.svn.sourceforge.net/svnroot/postfixadmin/trunk postfixadmin</code>

<h3>Upgrading Postfixadmin</h3>

<p>The database schema between version 2.1.0 and anything later has changed in a number of ways, you should therefore run the 'upgrade.php' script which should take care of all database changes between revisions. This should run automatically when you hit the application, unless you've deleted 'setup.php'.</p>

<h3>Other Relevant links and related projects</h3>

<ul>
<li><a href="http://squirrelmail-postfixadmin.palepurple.co.uk">Postfixadmin/Squirrelmail plugin</a> - Integrate together <A href="http://squirrelmail.org">Squirrelmail</a> with Postfixadmin</a></li>
<li><a href="http://nejc.skoberne.net/rcpfa">Postfixadmin/Roundcube plugin</a> - Integrate together <A href="http://roundcube.net">RoundCube</a> with Postfixadmin</a></li>
<li><a href="http://codepoets.co.uk/2009/postfixadmin-setupinstall-guide-for-virtual-mail-users-on-postfix/">Guide to installation on Debian with PostgreSQL and Courier</a></li>
</ul>

(If you would like to add links to any other relevant projects or documentation, please poke GingerDog on irc)

<?php
require_once('footer.php');
?>
