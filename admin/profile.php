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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div style="height:25px;width:1000px;background-color:#FFF;margin-top:10px;padding-top:5px;font-size:18px;border-radius:5px;">
    	Customer Name : <?php
							include('conn.php');
							$str="select * from registration where id=$_GET[ids]";
							$res=mysql_query($str) or die ("Not Perform");
							while ($row=mysql_fetch_array($res))
							{
								$fname=$row['fname'];
								$lname=$row['lname'];
							}
							echo $fname." ".$lname;
						?>
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    	 <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
         <?php
		 	include('conn.php');
			$str="select * from registration where id=$_GET[ids]";
			$res=mysql_query($str) or die ("Not Perform");
			while ($row=mysql_fetch_array($res))
			{
             	echo "<tr>";
                	echo "<td>First Name</td>";
                	echo "<td>:</td>";
                	echo "<td>".$row[fname]."</td>";
            	echo "</tr>";
				echo "<tr>";
                	echo "<td>Last Name</td>";
                	echo "<td>:</td>";
                	echo "<td>".$row[lname]."</td>";
            	echo "</tr>";
				echo "<tr>";
                	echo "<td>Address</td>";
                	echo "<td>:</td>";
                	echo "<td>".$row[strret]." ".$row[area]." ".$row[city]." ".$row[state]." ".$row[pincode]."</td>";
            	echo "</tr>";
				echo "<tr>";
                	echo "<td>Ph-No</td>";
                	echo "<td>:</td>";
                	echo "<td>".$row[phno]."</td>";
            	echo "</tr>";
				echo "<tr>";
                	echo "<td>E-Mail Id</td>";
                	echo "<td>:</td>";
                	echo "<td>".$row[email]."</td>";
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