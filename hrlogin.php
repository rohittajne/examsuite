<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Online Exam Suite</title>
<style type="text/css">
body {
	background-image: url(images/content-bg.jpg);
	background-color: #F3F4F6;
}
body,td,th {
	color: #0099FF;
}
</style>


<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<?php 
if($_POST["submit"]!="")
{
$unm=$_POST["loginid"];
$upwd=$_POST["pass"];

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("examsuite",$link);

if($unm=="admin" && $upwd=="P@ss123")
{ ?>
    <script type="text/javascript">
    window.location="Admin.php"
    </script>
	<?php		
}
else
{
$sel="SELECT * 
FROM `hrrec` 
WHERE `name` = '$unm'
AND `password` = '$upwd';";
$res2=mysql_db_query("examsuite",$sel);

if (mysql_num_rows($res2) == 0) 
{
echo "invalid user";
}
else
{
$s=getdate();
$d=$s[mday].$s[month].$s[year];
$t=$s[hours].":".$s[minutes];
$link = mysql_connect('localhost','root',"");
if(!$link){
	die('Could not connect:'.mysql_error());
}
mysql_select_db("examsuite",$link);
$s1="INSERT INTO 'examsuite'.'hrlogs'(
'date',
'time',
'user'
)
VALUES(
'$d','$t','$unm'
);
";
$res=mysql_db_query("examsuite",$s1);
mysql_close($link);
?>
<script type="text/javascript">
	window.location="hrprofile.php?user=<?php echo $unm;?>"
</script>
<?php
}
}

mysql_close($link);
}
?>
<body>
<table width="1124" height="755" border="0" align="center">
  <tr>
    <td width="1118" height="174">&nbsp;</td>
  </tr>
  <tr>
    <td height="341">
      <table width="406" height="380" border="30" align="center">
        <tr>
          <td width="338" height="316" align="center" valign="middle"><table width="364" height="313" border="0" align="center">
      <tr>
        <td height="94" align="center" valign="middle"><h2><em><strong>Login</strong></em></h2></td>
      </tr>
      <tr>
        <td height="50" align="center"><form id="form1" name="form1" method="post" action="">
          <label for="loginid"><strong>Login ID :-</strong></label>
          <input name="loginid" type="text" id="loginid" size="30" />
          </form></td>
      </tr>
      <tr>
        <td height="49" align="center"><form id="form2" name="form2" method="post" action="">
          <span id="sprypassword1">
          <label for="pass"><strong>Password:-</strong></label>
          <input name="pass" type="password" id="pass" size="30" maxlength="30" />
          <span class="passwordRequiredMsg"></br>A value is required.</span></span>
        </form></td>
      </tr>
      <tr>
        <td height="110" align="center"><form id="form3" name="form3" method="post" action="">
          <p>
            <input type="submit" name="submit" id="submit" value="    Log In    " />
            
          </p>
          <h3><a href="register.php"><strong><em>Register Account</em></strong></a></h3>          
        
        </form></td>
        </tr>
    </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minAlphaChars:1, minNumbers:1, minUpperAlphaChars:1, minSpecialChars:1, maxAlphaChars:20, maxNumbers:20, maxUpperAlphaChars:20, maxSpecialChars:20, validateOn:["blur", "change"]});
</script>
</body>
</html>
