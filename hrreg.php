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
.style22 {color: #FF0000; font-weight: bold; font-size: 14px; }
</style>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>
<table width="1318" height="481" border="1">
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="529" height="260" border="5" align="center">
      <tr>
        <td width="519"><table width="558" border="0" align="center">
          <tr>
            <td height="34" colspan="2" align="center" valign="middle"><h2><em><strong>H.R. Registration</strong></em></h2></td>
          </tr>
          <tr>
            <td width="199" height="38"><strong>Name :-</strong></td>
            <td width="310"><input name="name" type="text" id="name" size="30" />
             <?php 
					if($_POST["name"]=="" && $_POST["submit"]!="")
					{
					?>	                    <span class="style22">Name cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
            </td>
          </tr>
          <tr>
            <td height="36"><strong>Name of Company :-</strong></td>
            <td><input name="comp" type="text" id="comp" size="30" />
             <?php 
										if($_POST["comp"]=="" && $_POST["submit"]!="")
										{
										$error=1;
										?>
                                        <span class="style22">Company name should not be blank.</span>										
                                        <?php
										}
										?>
            
          </tr>
          <tr>
            <td height="35"><strong>Address of Company :-</strong></td>
            <td><textarea name="address2" id="address2" cols="35" rows="2"></textarea></td>
          </tr>
          <tr>
            <td height="36"><label><strong>Gender :- </strong></label></td>
            <td><label>
              <input type="radio" name="gender" value="radio" id="gender_0" />
              Male</label>
              <label>
                <input type="radio" name="gender" value="radio" id="gender_1" />
                Female</label>
                 <?php 
										if($_POST["gender"]=="" && $_POST["submit"]!="")
										{
										$error=1;
										?>
                                        <span class="style22">Please select gender</span>										
                                        <?php
										}
										?>
             
          </tr>
          <tr>
            <td height="34"><strong>Birth Date :- </strong></td>
            <td><select name="date" id="date">
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
              <label for="month"></label>
              <select name="month" id="month">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              <label for="year"></label>
              <select name="year2" id="year">
              </select></td>
          </tr>
          <tr>
            <td><label for="address"><strong>Address :-</strong></label></td>
            <td><textarea name="address" id="address" cols="35" rows="2"></textarea></td>
          </tr>
          <tr>
            <td height="36"><strong>Contact :-</strong></td>
            <td><form id="form2" name="form2" method="post" action="">
              <label for="number"></label>
              <input name="number" type="text" id="number" size="30" />
            </form>
             <?php  
					if(is_numeric($_POST["contact"])=="" && $_POST["submit"]!="")
					{
					?>	                    <span class="style22"> Invalid contact number </span></td>
                    <?php
					$error=1;
				}
					?>
            
          </tr>
          <tr>
            <td height="37"><strong>Email ID:-</strong></td>
            <td><form id="form3" name="form3" method="post" action="">
              <label for="email"></label>
              <input name="email" type="text" id="email" size="30" />
            </form><?php 
					if($_POST["email"]=="" && $_POST["submit"]!="")
					{
					?>	                    <span class="style22">Email id cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
          </tr>
          <tr>
            <td height="39"><strong>Blood Group:-</strong></td>
            <td><form id="form4" name="form4" method="post" action="">
              <label for="bloodgroup"></label>
              <input name="bloodgroup" type="text" id="bloodgroup" size="30" />
            </form></td>
          </tr>
          <tr>
            <td height="38"><strong>Passport Photo :-</strong></td>
            <td><form id="form5" name="form5" enctype="multipart/form-data" method="post" action="">
              <label for="photo"></label>
              <input name="photo" type="file" id="photo" size="32" />
            </form></td>
          </tr>
          <tr>
            <td height="36"><strong>Password :-</strong></td>
            <td><form id="form6" name="form6" method="post" action="">
              <span id="sprypassword1">
              <label for="password"></label>
              <input name="password" type="password" id="password" size="30" />
              <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span><span class="passwordInvalidStrengthMsg"></br>Strength :- Short</span></span>
            </form></td>
          </tr>
          <tr>
            <td height="39"><strong>Confirm Password :-</strong></td>
            <td><form id="form7" name="form7" method="post" action="">
              <label for="cnfrm"></label>
              <input name="cnfrm" type="password" id="cnfrm" size="30" />
            </form></td>
          </tr>
          <tr>
            <td height="61" colspan="2" align="center" valign="middle"><form id="form1" name="form1" method="post" action="">
              <input type="submit" name="submit" id="submit" value="     Submit     " />
              <input type="submit" name="cancel" id="cancel" value="     Cancel     " />
            </form>
      <?php

if($_POST["submit"]!="")
{
$error=0;
$nm=$_POST["name"];
$comp=$_POST["comp"];
$add2=$_POST["address2"];
$yr=$_POST["year"];
$gn=$_POST["gender"];
$bd=$_POST["date"];
$bm=$_POST["month"];
$byr=$_POST["year2"];
$add=$_POST["address"];
$con=$_POST["number"];
$eid=$_POST["email"];
$bg=$_POST["bloodgroup"];
$pp=$_POST["photo"];
$pwd=$_POST["password"];
$cnfrm=$_POST["cnfrm"];
$f=$_FILES[pp]["name"];

$d=getdate();
$id=$_POST["flag"];
$res=move_uploaded_file($_FILES[pp]["tmp_name"],"hruploads/$f");
$fp="hruploads/".$f;
$dob=$bd." / ". $bm." / ".$byr;

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("examsuite",$link);
 
$sel="SELECT * 
FROM `studrec` 
WHERE `name` = '$nm';";
$res=mysql_db_query('examsuite',$sel);
/*if (mysql_num_rows($res) != 0) 
{
            $error=1;
			?>
			<span class="style22">User Already Exits</span>                      </div>
                 
<?php }*/

if($error==0)
{
$s1="INSERT INTO `examsuite`.`hrrec` (`name`, `compname`, `compadd`, `gender`, `birthdate`, `add`, `contact`, `email`, `bloodgroup`, `photo`, `password`) VALUES(
'$nm', '$comp', '$add2 , '$gn', '$dob', '$add', '$con', '$eid', '$bg', '$fp', '$pwd',);
";
 
}
$res=mysql_db_query('examsuite',$s1);

mysql_close($link);

}
?>           
            
            </td>
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
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars:30, minAlphaChars:1, minNumbers:1, minUpperAlphaChars:1, minSpecialChars:1, validateOn:["blur", "change"], maxAlphaChars:20, maxNumbers:20, maxUpperAlphaChars:20, maxSpecialChars:20});
</script>
</body>
</html>
