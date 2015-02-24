<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php session_start();?>
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
        
        <div class="contant" style="height:600px">
        	<?php
				include("conn.php");
            	$str="select * from product where c_id='$_GET[id]'";
				$res=mysql_query($str);
				while ($row=mysql_fetch_array($res))
				{
					$id=$row['id'];
					$imgurl=$row['pic'];
					$name=$row['name'];
			?>
            <a href="shoppingCart.php?id=<?php echo $id ?>">
        		<div class="c1">
            		<img src="../admin/images/<?php echo $imgurl ?>" style="border-radius:10px;" height="250px" width="250px" /><br />
               		<div style="height:20px;text-align:center;background-color:#666;width:250px;color:#FFF;margin-top:5px"><?php echo $name ?>-Add Cart</div>
            	</div>
            </a>
            <?php
				}
			?>
        </div>
        
        <?php
			include("footer.php");
		?>
    </div>
</body>
</html>