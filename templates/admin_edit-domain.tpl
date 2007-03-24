<center>
<?php print $tMessage . "\n"; ?>
<table class="form">
   <tr>
      <td align="center" colspan="3">
         <?php print $PALANG['pAdminEdit_domain_welcome'] . "\n"; ?>
         <br />
         <br />
      </td>
   </tr>
   <tr>
      <td>
         <form name="alias" method="post">
         <?php print $PALANG['pAdminEdit_domain_domain'] . ":\n"; ?>
      </td>
      <td>
         <?php print $domain . "\n"; ?>
      </td>
      <td>
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
         <?php print $PALANG['pAdminEdit_domain_description'] . ":\n"; ?>
      </td>
      <td>
         <input type="text" name="fDescription" value="<?php print htmlspecialchars ($tDescription, ENT_QUOTES); ?>" />
      </td>
      <td>
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
         <?php print $PALANG['pAdminEdit_domain_aliases'] . ":\n"; ?>
      </td>
      <td>
         <input type="text" name="fAliases" value="<?php print $tAliases; ?>" />
      </td>
      <td>
         <?php print $PALANG['pAdminEdit_domain_aliases_text'] . "\n"; ?>
      </td>
   </tr>
   <tr>
      <td>
         <?php print $PALANG['pAdminEdit_domain_mailboxes'] . ":\n"; ?>
      </td>
      <td>
         <input type="text" name="fMailboxes" value="<?php print $tMailboxes; ?>" />
      </td>
      <td>
         <?php print $PALANG['pAdminEdit_domain_mailboxes_text'] . "\n"; ?>
      </td>
   </tr>
<?php
if ($CONF['quota'] == 'YES')
{
   print "   <tr>\n";
   print "      <td>\n";
   print "         " . $PALANG['pAdminEdit_domain_maxquota'] . ":\n";
   print "      </td>\n";
   print "      <td>\n";
   print "         <input type=\"text\" name=\"fMaxquota\" value=\"$tMaxquota\" />\n";
   print "      </td>\n";
   print "      <td>\n";
   print "         " . $PALANG['pAdminEdit_domain_maxquota_text'] . "\n";
   print "      </td>\n";
   print "   </tr>\n";
}
?>
   <tr>
      <td>
         <?php print $PALANG['pAdminEdit_domain_backupmx'] . ":\n"; ?>
      </td>
      <td>
         <?php $checked = (!empty ($tBackupmx)) ? 'checked' : ''; ?>
         <input type="checkbox" name="fBackupmx" <?php print $checked; ?> />
      </td>
      <td>
         &nbsp;
      </td>
   </tr>
   <tr>
      <td>
         <?php print $PALANG['pAdminEdit_domain_active'] . ":\n"; ?>
       </td>
      <td>
         <?php $checked = (!empty ($tActive)) ? 'checked' : ''; ?>
         <input type="checkbox" name="fActive" <?php print $checked; ?> />
      </td>
      <td>
         &nbsp;
      </td>
   </tr>
   <tr>
      <td align="center" colspan="3">
         <input type="submit" name="submit" value="<?php print $PALANG['pAdminEdit_domain_button']; ?>" />
         </form>
      </td>
   </tr>
</table>
<p />
