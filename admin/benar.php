<?php
error_reporting(0);
	if (isset($_GET[del]))
	{
		include('conn.php');
		$str="delete from banner where b_id='$_GET[del]'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_POST['update']))
	{
		include('conn.php');
		$imagename=$_POST['txtimagename'];
		$imgurl=$_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		move_uploaded_file($image_tmp,"images/$imgurl");
		$hid=$_POST['hid'];
		$str="update banner set pic='$imgurl' where b_id='$hid'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_GET[up]))
	{
		include('conn.php');
		$str="select * from banner where b_id='$_GET[up]'"; 
		$res=mysql_query($str) or die("Not Perform");
		while ($row=mysql_fetch_array($res))
		{
			$imgname=$row[pic];
			$hid=$row[b_id];
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styleadmin.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="main">
	<?php
    	include("header.php");
	?>
    
    <div class="maincontain">
    	<?php
        	include("menu.php");
		?>
        <div class="maincontain_right">
<center>
<form action="benar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div style="height:25px;width:1000px;background-color:#FFF;margin-top:10px;padding-top:5px;font-size:18px;border-radius:5px;">
    	Add Banner Images
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    	<table>
            <tr>
            	<td>Image</td>
                <td>:</td>
                <td><input type="file" name="image" /></td>
            </tr>
            <input name="hid" type="hidden" value="<?php echo $hid;?>" />
            <tr align="center">
            	<?php
                error_reporting(0);
					if (isset($_GET[up]))
					{	
            			echo "<td colspan='3'>"."<input type='submit' value='Update' name='update' />"."</td>";
					}
					else
					{
            			echo "<td colspan='3'>"."<input type='submit' name='btnadd' value='Add' />"."</td>";
					}
				?>
                <?php
                error_reporting(0);
					if (isset($_POST['btnadd']))
					{
						include('conn.php');
						$imgurl=$_FILES['image']['name'];
						$image_tmp = $_FILES['image']['tmp_name'];
						move_uploaded_file($image_tmp,"images/$imgurl");
						$str="insert into banner values (0,'$imgurl')"; 
						mysql_query($str) or die("Not Perform");
					}
				?>
            </tr>
        </table>
        <hr style="width:900px;color:#666;box-shadow:#666 1px;" />
        <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
        	<tr>
            	<th>Id</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
			include('conn.php');
			$str="select * from banner";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
            	echo "<tr>";
            	echo "<td>".$row[b_id]."</td>";
				echo "<td>"."<img src='images/".$row[pic]."' height='50px' width='50px'>"."</td>";
            	echo "<td>"."<a href='benar.php?up=$row[b_id]'>Edit</a>"."</td>";
            	echo "<td>"."<a href='benar.php?del=$row[b_id]'>Delete</a>"."</td>";
            	echo "</tr>";
			}
			?>
        </table>
    </div>
</form>
</center>
</div>
    </div>
    
    <?php
    	include("footer.php");
	?>
</div>
</body>
</html>