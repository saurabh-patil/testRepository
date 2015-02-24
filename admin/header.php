<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Shopping</title>
    <link href="styleadmin.css" type="text/css" rel="stylesheet" />

</head>
<div class="header">
    	<div class="header_left">
        	<h1>Online Shopping</h1>
        </div>
        <div class="header_center">
        	<h1>Admin</h1>
        </div>
        <div class="header_right">
        	<?php
            	if (isset($_POST['logout']))
					{
					}
			?>
            <form name="frmlogout" method="post" action="index.php">
        		<input type="submit" name="logout" value="Logout" />
            </form>
        </div>
    </div>