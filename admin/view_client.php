<?php
error_reporting(0);
	if (isset($_GET[del]))
	{
		include('conn.php');
		$str="delete from registration where id='$_GET[del]'"; 
		mysql_query($str) or die("Not Perform");
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
    	Customer
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    	 <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
        	<tr>
            	<th>Id</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Profile</th>
                <th>Delete</th>
            </tr>
            <?php
			include('conn.php');
			$str="select * from registration";
			$res=mysql_query($str) or die ("Not Perform");
			while ($row=mysql_fetch_array($res))
			{
            	echo "<tr>";
            	echo "<td>".$row[id]."</td>";
            	echo "<td>".$row[fname]."</td>";
            	echo "<td>".$row[lname]."</td>";
            	echo "<td>"."<a href='profile.php?ids=$row[id]'>View</a>"."</td>";
				echo "<td>"."<a href='view_client.php?del=$row[id]'>Delete</a>"."</td>";
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