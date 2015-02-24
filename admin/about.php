<?php
    error_reporting(0);
	if (isset($_GET[del]))
	{
		include('conn.php');
		$str="delete from about where id='$_GET[del]'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_POST['update']))
	{
		include('conn.php');
		$dis=$_POST['txtdescription'];
		$hid=$_POST['hid'];
		$str="update about set details='$dis' where id='$hid'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_GET[up]))
	{
		include('conn.php');
		$str="select * from about where id='$_GET[up]'"; 
		$res=mysql_query($str) or die("Not Perform");
		while ($row=mysql_fetch_array($res))
		{
			$disc=$row[details];
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
        	
	<div style="height:25px;width:1000px;background-color:#FFF;margin-top:10px;padding-top:5px;font-size:18px;border-radius:5px;">
    	Add About Details
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    <form action="about.php" method="post" name="form1" id="form1">
    	<table>
        	<tr>
            	<td>Description</td>
                <td>:</td>
                <input name="hid" type="hidden" value="<?php echo $hid;?>" />
                <td><textarea name="txtdescription"><?php echo $disc; ?></textarea></td>
            </tr>
            <tr align="center">
            <?php
            error_reporting(0);
				if (isset($_GET[up]))
				{	
            		echo "<td colspan='3'>"."<input type='submit' value='Update' name='update' />"."</td>";
				}
				else
				{
					echo "<td colspan='3'>"."<input type='submit' value='Add' name='add' />"."</td>";
				}
			?>
            <?php
            error_reporting(0);
				if (isset($_POST['add']))
				{
					include('conn.php');
					$dis=$_POST['txtdescription'];
					$str="insert into about values (0,'$dis')"; 
					mysql_query($str) or die("Not Perform");
				}
			?>
            </tr>
        </table>
        <hr style="width:900px;color:#666;box-shadow:#666 1px;" />
        <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
        	<tr>
            	<th>Id</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          	<?php
            error_reporting(0);
			include('conn.php');
			$str="select * from about";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
            	echo "<tr>";
            	echo "<td>".$row[id]."</td>";
            	echo "<td>".$row[details]."</td>";
            	echo "<td>"."<a href='about.php?up=$row[id]'>Edit</a>"."</td>";
            	echo "<td>"."<a href='about.php?del=$row[id]'>Delete</a>"."</td>";
            	echo "</tr>";
			}
			?>
        </table>
        </form>
    </div>
</center>
		</div>
    </div>
    
    <?php
    	include("footer.php");
	?>
</div>
</body>
</html>