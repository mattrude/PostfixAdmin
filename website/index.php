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
<h3>Download - Stable release</h3>

<p>The latest stable release is 2.1.0. You can download it <a href="http://sourceforge.net/project/showfiles.php?group_id=191583&package_id=225300&release_id=495972">here</a></p>

<h3>Download - Not so stable release</h3>

<p>We've created a .deb package to make installation slightly easier, based on revision 207 of Subversion (11th November 2007). </p>
<p>This should be judged as being a <b>snapshot</b>, and although it <u>should work</u> - it may not - or some features may be lacking suitable documentation.</p>
<p>As this is based on the development branch, it's setup is slightly different from that for v2.1.0; but you should be able to figure that out when you visit http://yoursever/postfixadmin after installing it. Note, the .deb does not setup your database in any useful way - so you'll need to do this manually (see /usr/share/doc/postfixadmin)</p>

<p><a href="http://downloads.sourceforge.net/postfixadmin/postfixadmin_2.2.0-1rc1_all.deb?use_mirror=osdn">GingerDog's experimental .deb</a> for installation (based on Subversion revision 207).</p>

<h3>Download - Development release</h3>

<p>The development team expect the codebase in Subversion to become 2.2.0 before the end of 2007. There are a number of show stopping bugs still in place (for instance, no automated way of performing an upgrade, and a number of translations are missing). It should however work!</p>

<p>We would recommend that all new users use the version from Subversion, as it has a number of new features and bug fixes. However, it <strong>may contain bugs</strong>. </p>


<p>You can download the source code to Postfixadmin using Subversion :</p>

<code>svn co https://postfixadmin.svn.sourceforge.net/svnroot/postfixadmin postfixadmin</code>


<h3>Upgrading Postfixadmin</h3>

<p>The database schema between version 2.1.0 and what is in Subversion has changed - mostly for vacation related tables, and with the addition of UTF8 support. If you use neither, you <em>probably</em> won't need to do anything.</p>
<p>We are currently working on an 'upgrade.php' script which will take care of the database changes between revisions. This is still work in progress, and at the time of writing only MySQL is supported for this (due to GingerDog being lazy, and not doing the PostgreSQL changes)</p>

<h3>Other Relevant links and related projects</h3>

<ul>
<li><a href="http://postfixadmin-squirrelmail.palepurple.co.uk">Postfixadmin/Squirrelmail plugin</a> - Integrate together <A href="http://squirrelmail.org">Squirrelmail</a> with Postfixadmin</a></li>
</ul>

(If you would like to add links to any other relevant projects, please poke GingerDog on irc)

<?php
require_once('footer.php');
?>
