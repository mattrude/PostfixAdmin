<?php 
if ($CONF['logo'] == "YES")
{
   print "<img src=\"images/postfixadmin.png\" />\n";
}
else
{
   print "<h1>" . $CONF['header_text'] . "</h1>\n";
}
?>
<p />
<center>
<?php print $tMessage . "\n"; ?>
<table width="10%" border="0" cellspacing="0" cellpadding="0" height="100">
   <tr bgcolor="#999999">
      <td colspan="3" height="1">
      </td>
   </tr>
   <tr>
      <td bgcolor="#999999">
      </td>
      <td bgcolor="#eeeeee" valign="top">
         <table border="0" cellspacing="0" cellpadding="6">
         <tr>
            <td colspan="2" align="center">
            <br />
            <b><?php print $PALANG['pLogin_welcome']; ?></b><br />
            <br />
            </td>
         </tr>
            <td align="right">
               <form name="login" method="post">
               <?php print $PALANG['pLogin_username'] . ":\n"; ?>
            </td>
            <td align="left">
               <input type="text" name="fUsername" value="<?php print $tUsername; ?>" /><br />
            </td>
         </tr>
         <tr>
            <td align="right">
               <?php print $PALANG['pLogin_password'] . ":\n"; ?>
            </td>
            <td align="left">
               <input type="password" name="fPassword" /><br />
            </td>
         </tr>
         <tr>
            <td align="center" colspan="2">
               <input type="submit" name="submit" value="<?php print $PALANG['pLogin_button']; ?>" />
               </form>
            </td>
         </tr>
         <tr>
            <td align="center" colspan="2">
               <p />
               <a href="users/"><?php print $PALANG['pLogin_login_users']; ?></a>
               <p />
            </td>
         </tr>
         </table>
      </td>
      <td bgcolor="#999999">
      </td>
   </tr>
   <tr bgcolor="#999999">
      <td colspan="3" height="1">
      </td>
   </tr>
</table>
