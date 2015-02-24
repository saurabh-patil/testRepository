<?php
session_start();
//print_r($_SESSION);die;
error_reporting(0);
	if(isset($_POST['btnlogin']))
	{
		include("conn.php");
		$id=$_POST['txtuid'];
		$pass=md5($_POST['txtpassword']);
		$str="select * from registration where userid='$id' and password='$pass'";
//        print_r($str);die;
//		$res=mysql_query($str) or die("not perform");
//        print_r(mysql_fetch_assoc(mysql_query($str)));
        $result = mysql_fetch_assoc(mysql_query($str));
		if(!empty($result)){
			$_SESSION['login']=$id;
            $_SESSION['email'] = $result['email'];
            $_SESSION['pass'] = $result['password'];
			header('location:index.php');
		}
		$msg="Try Again...!";
	}

?>

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
        
        <div class="contant" style="height:200px;">
            <center>
            	<form method="post" style="padding-top:25px">
                	<h1 style="padding-bottom:10px;">Login Here...!</h1>
                	<table>
                    	<tr>
                        	<td>User Id</td>
                            <td>:</td>
                            <td><input type="text" name="txtuid"/></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="txtpassword"/></td>
                        </tr>
                        <tr align="center">
                        	<td colspan="3"><input type="submit" name="btnlogin" value="Login" /></td>
                        </tr>
                        <tr align="center">
                        	<td colspan="3" style="color:red">
                            	<?php echo $msg ?>
                            </td>
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
</html>