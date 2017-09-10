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
</style>
</head>

<body>
<table width="1318" height="481" border="1">
  <tr>
    <td height="174">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="601" height="343" border="5" align="center">
      <tr>
        <td width="583" height="329"><table width="611" height="339" border="0">
          <tr>
            <td colspan="2" align="center" valign="middle"><h2>Add Question</h2></td>
            </tr>
          <tr>
            <td height="54" colspan="2" align="left" valign="middle"><h3>
              <label for="que"></label> 
              Subject :- 
              <select name="sub" id="sub">
              </select>
            </h3></td>
            </tr>
          <tr>
            <td height="55" colspan="2" valign="top"><strong>Question :-</strong>              <textarea name="que" id="que" cols="70" rows="2"></textarea></td>
          </tr>
          <tr>
            <td width="287">Option A :-
              <label for="A"></label>
               <input type="text" name="A" id="A" />
              </td>
            <td width="286">Option B 
              :- 
              <label for="B"></label>
                <input type="text" name="B" id="B" /></td>
          </tr>
          <tr>
            <td>Option C :- 
              <label for="C"></label>
                <input type="text" name="C" id="C" />
              </td>
            <td>Option D :- 
              <label for="D"></label>
                <input type="text" name="D" id="D" />
              </td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="middle"><input type="submit" name="submit" id="submit" value="    Submit    " />
              <input type="submit" name="cancel" id="cancel" value="    Cancel    " /></td>
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
