<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Give Test</title>
<style type="text/css">
body {
	background-image: url(images/content-bg.jpg);
	background-color: #F8F9FB;
}
</style>
</head>

<body>
<table width="1318" height="481" border="1">
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="481" height="362" border="4" align="center">
      <tr>
        <td width="493"><table width="464" height="350" border="0" align="center">
          <tr>
            <td height="111" colspan="2" align="center" valign="middle"><h2><strong>Set Test</strong></h2></td>
          </tr>
          <tr>
            <td width="163" height="73"><form id="form2" name="form2" method="post" action="">
              <label for="year"> Year :- </label>
            </form></td>
            <td width="291"><select name="year" id="year">
              <option>1st Year</option>
              <option>2nd Year</option>
              <option>3rd Year</option>
            </select></td>
          </tr>
          <tr>
            <td height="74">Subject :- </td>
            <td><form id="form3" name="form3" method="post" action="">
              <label for="sub"></label>
               <?php
$conn = mysql_connect("localhost", "root", "");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
} 
if (!mysql_select_db("examsuite")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
$sql = "SELECT * 
FROM  `subrec`";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

?><select name="sub">
              
      <?php
  $cnt=0;
while ($row = mysql_fetch_assoc($result)) {
   $cnt++;
   ?>
   
  <option value="<?php echo $row["subname"]; ?>"><?php echo $row["subname"]; ?></option>>
	 <?php
	 }
	 ?>   
              
              </select>
            </form></td>
          </tr>
          <tr>
            <td height="82" colspan="2" align="center" valign="middle"><form id="form1" name="form1" method="post" action="">
              <input type="submit" name="cancel" id="cancel" value=" Set Test " />
              <input type="submit" name="settest" id="settest" value="   Cancel   " />
              <?php
			  if($_POST["settest"]!="")
			  { ?>
				  <script type="text/javascript">
	window.location=""
</script>
			 <?php }
			  
			  ?>
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
</body>
</html>
