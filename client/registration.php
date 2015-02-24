<?php
	session_start();
$result = '';
?>
<?php
error_reporting(0);
			if (isset($_POST['btnsubmit']))
			{
	  			include('conn.php');
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$street=$_POST['street'];
				$area=$_POST['area'];				
				$city=$_POST['city'];
				$state=$_POST['state'];
				$pin=$_POST['pin'];
				$no=$_POST['no'];
				$emailid=$_POST['email'];
				$username=$_POST['uname'];
				$pass=md5($_POST['pass']);
				$str="insert into registration values(0,'$fname','$lname','$street','$area','$city','$state','$pin','$no','$emailid','$username','$pass')";
				$res=mysql_query($str) or die ("Not Perform");
					$result = 'You are successfully registered';
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="main">
    	<?php
			include("header.php");
		?>
        
        <?php
			include("menu.php");
		?>
        
        <?php
			include("pic.php");
		?>
        
        <div class="contant" id="main-contain">
        	<center>
                <form id="form1" method="post" enctype="multipart/form-data" name="form1"  action="">
                    <h1><b>Registration Form</b></h1>
                  <table width="500">
                    <tr>
                      <th scope="row">First Name</th>
                      <td><label for="textfield"></label>
                      <input type="text" name="fname" required/></td>
                    </tr>	
                    <tr>
                      <th scope="row">Last Name</th>
                      <td><label for="textfield2"></label>
                      <input type="text" name="lname" id="textfield2" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Street</th>
                      <td><label for="textfield3"></label>
                      <input type="text" name="street" id="textfield3" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Area</th>
                      <td><label for="textfield3"></label>
                      <input type="text" name="area" id="textfield3" required/></td>
                    </tr>                   
                    <tr>
                      <th scope="row">City</th>
                      <td><label for="textfield5"></label>
                      <input type="text" name="city" id="textfield5" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">State</th>
                      <td><label for="textfield6"></label>
                      <input type="text" name="state" id="textfield6" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Pin-Code</th>
                      <td><label for="textfield7"></label>
                      <input type="text" name="pin" id="textfield7" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Ph-No</th>
                      <td><label for="textfield8"></label>
                        <input type="text" name="no" id="textfield11" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Email Id</th>
                      <td><label for="textfield9"></label>
                      <input type="email" name="email" id="textfield9" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">UserName</th>
                      <td><label for="textfield10"></label>
                      <input type="text" name="uname" id="textfield10" required/></td>
                    </tr>
                    <tr>
                      <th scope="row">Password</th>
                      <td><label for="textfield8"></label>
                      <input type="password" name="pass" id="textfield8" required/></td>
                    </tr>
                      <tr>
                          <th scope="row"></th>
                          <td><label for="textfield8"></label>
                              <div><?php echo $result; ?></div>
                      </tr>
                    <tr>
                      <th colspan="2" scope="row"><input type="submit" name="btnsubmit" id="button" value="Submit" />
                      <input type="reset" name="btnreset" id="button2" value="Reset" /></th>
                    </tr>
                  </table>
                </form>
                </center>
        </div>
        
        <?php
			include("footer.php");
		?>
    </div>
</body>
</html>>