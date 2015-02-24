
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Shopping</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<?php error_reporting(0);session_start(); ?>

<div class="header">
        	<div class="headerleft">
            	<h1>Shop Online</h1>
            </div>
            <div class="headerrigth">
            	<div class="headingrighttop">
                	<a href="index.php">Home</a>
                    <a href="about.php">About us</a>
                    <?php
                    	session_start();
						if ($_SESSION['login']=="")
						{
					?>
                    		<a href="login.php">Login</a>
		                    <a href="registration.php">Registration</a>		                   
                    <?php
						}
						else
						{
					?>
                    			<a>Welcome : <span style="color:red"><?php echo $_SESSION['login'] ?></span></a>
                                <a href="logout.php">Log out</a>
                    <?php
						}
					?>
                </div>
                <div class="headingrightdown">
                	<form method="post">
                    	<input type="text" name="txtsearch" style="width:450px;height:25px;"/><span><button type="submit" style="background-color:#999;border-top-left-radius:10px;border-bottom-right-radius:10px;height:30px;color:#FFF" value="">Search Items</button></span>
                    </form>
                </div>
            </div>
        </div>