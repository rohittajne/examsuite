<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Registration</title>
<style type="text/css">
body {
	background-image: url(images/content-bg.jpg);
	background-color: #F8F9FB;
}
body,td,th {
	color: #0066FF;
}
</style>
</head>

<body>
<table width="1318" height="481" border="1">
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="412" height="297" border="5" align="center">
      <tr>
        <td align="center"><h2>Backup</h2>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <p>
              <input type="submit" name="Backup" id="Backup" value="Backup" />
            </p>
            <p>Click Backup button to take backup...</p>
          </form>
          <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
</table>
<?php
if($_POST["Backup"]!="")
{
include("Auto_backup.php");
backup_tables('localhost','root','','examsuite','*');
}

?>
</body>
</html>
