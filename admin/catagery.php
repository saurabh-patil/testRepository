<?php
error_reporting(0);
	if (isset($_GET[del]))
	{
		include('conn.php');
		$str="delete from catagery where id='$_GET[del]'"; 
		mysql_query($str) or die("	Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_POST['update']))
	{
		include('conn.php');
		$menuid=$_POST['txtmid'];
		$imagename=$_POST['txtimagename'];
		$imgurl=$_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		move_uploaded_file($image_tmp,"images/$imgurl");
		$hid=$_POST['hid'];
		$str="update catagery set mid='$menuid',pic='$imgurl',name='$imagename' where id='$hid'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_GET[up]))
	{
		include('conn.php');
		$str="select * from catagery where id='$_GET[up]'"; 
		$res=mysql_query($str) or die("Not Perform");
		while ($row=mysql_fetch_array($res))
		{
			$mid=$row[mid];
			$cname=$row[c_name];
			$imgname=$row[pic];
			$hid=$row[id];
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
<form action="catagery.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div style="height:25px;width:1000px;background-color:#FFF;margin-top:10px;padding-top:5px;font-size:18px;border-radius:5px;">
    	Add Catagery
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    	<table>
        	<tr>
            	<td>Menu Id</td>
                <td>:</td>
                <td><input type="text" name="txtmid" value="<?php echo $mid;?>"/></td>
            </tr>
        	<tr>
            	<td>Catagery Name</td>
                <td>:</td>
                <td><input type="text" name="txtimagename" value="<?php echo $cname;?>"/></td>
            </tr>
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
						$menuid=$_POST['txtmid'];
						$imagename=$_POST['txtimagename'];
						$imgurl=$_FILES['image']['name'];
						$image_tmp = $_FILES['image']['tmp_name'];
						move_uploaded_file($image_tmp,"images/$imgurl");
						$str="insert into catagery values (0,'$menuid','$imgurl','$imagename')"; 
						mysql_query($str) or die("Not Perform");
					}
				?>
            </tr>
        </table>
        <hr style="width:900px;color:#666;box-shadow:#666 1px;" />
        <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
        	<tr>
            	<th>Id</th>
                <th>Menu Id</th>
                <th>Cat Name</th>
                <th>Cat Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php	
			include('conn.php');
			$str="select * from catagery";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
            	echo "<tr>";
            	echo "<td>".$row[id]."</td>";
				echo "<td>".$row[mid]."</td>";
				echo "<td>".$row[name]."</td>";
				echo "<td>"."<img src='images/".$row[pic]."' height='50px' width='50px'>"."</td>";
            	echo "<td>"."<a href='catagery.php?up=$row[id]'>Edit</a>"."</td>";
            	echo "<td>"."<a href='catagery.php?del=$row[id]'>Delete</a>"."</td>";
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