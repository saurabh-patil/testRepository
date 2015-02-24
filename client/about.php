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
        
        <div class="contant">
        	<center>
            <?php
			include('conn.php');
			$str="select * from about";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
				$about=$row['details'];
			}
			?>
            	<h1>About us</h1>
                <p style="padding-top:20px;">
                	<?php echo $about ?> 
                </p>
            </center>
        </div>
        
        <?php
			include("footer.php");
		?>
    </div>
</body>
</html>