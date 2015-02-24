<?php
error_reporting(0);
	$name=$_POST['txtuname'];
	$pass=$_POST['txtpassword'];
	if(isset($_POST['btnsubmit']))
	{
		if($name=="rahul" and $pass="123")
		{
			header("location: benar.php");
		}
	}
include("header.php");
?>

<body>
<center>
<h1><font color="#000099">Online Shopping Store</font></h1>
<form id="form1" name="form1" method="post" action="">
  <table width="345" style="margin-top:250px;">
    <tr>
      <th scope="row">Username</th>
      <td><label for="textfield"></label>
      <input type="text" name="txtuname" id="txtuname" /></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><label for="textfield2"></label>
      <input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="btnsubmit" id="btnsubmit" value="Login" /></th>
    </tr>
  </table>
</form>
</center>
</body>
</html>