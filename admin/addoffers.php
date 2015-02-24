<?php
error_reporting(0);
	if (isset($_GET[del]))
	{
		include('conn.php');
		$str="delete from offers where o_id='$_GET[del]'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	{
		include('conn.php');
		$subimagename=$_POST['txtsubimanename'];
		$hid=$_POST['hid'];
		$str="update offers set o_name='$subimagename' where o_id='$hid'"; 
		mysql_query($str) or die("Not Perform");
	}
?>
<?php
error_reporting(0);
	if (isset($_GET[up]))
	{
		include('conn.php');
		$str="select * from offers where o_id='$_GET[up]'"; 
		$res=mysql_query($str) or die("Not Perform");
		while ($row=mysql_fetch_array($res))
		{
			$subimgname=$row[o_name];
			$hid=$row[o_id];
		}
	}
?>

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
<form action="addoffers.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div style="height:25px;width:1000px;background-color:#FFF;margin-top:10px;padding-top:5px;font-size:18px;border-radius:5px;">
    	Add Offers
    </div>
    <div style="margin-top:10px;height:470px;width:1000px;border-radius:5px;background-color:#FFF;padding-top:10px;">
    	<table>
        	<tr>
            	<td>Offers Name</td>
                <td>:</td>
                <td><input type="text" name="txtsubimanename" value="<?php echo $subimgname; ?>"/>
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
            			echo "<td colspan='3'>"."<input type='submit' name='btnsubadd' value='Add' />"."</td>";
					}
				?>
                <?php
                error_reporting(0);
					if (isset($_POST['btnsubadd']))
					{
						include('conn.php');
						$subimgname=$_POST['txtsubimanename'];
						$str="insert into offers values (0,'$subimgname')"; 
						mysql_query($str) or die("Not Perform");
					}
				?>
            </tr>
        </table>
        <hr style="width:900px;color:#666;box-shadow:#666 1px;" />
        <table style="margin-top:10px;" border="1px" cellpadding="10px;" bordercolor="#999999">
        	<tr>
            	<th>Id</th>
                <th>Offers Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
			include('conn.php');
			$str="select * from offers";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
            	echo "<tr>";
            		echo "<td>".$row[o_id]."</td>";
                	echo "<td>".$row[o_name]."</td>";
                  	echo "<td>"."<a href='addoffers.php?up=$row[o_id]'>Edit</a>"."</td>";
                	echo "<td>"."<a href='addoffers.php?del=$row[o_id]'>Delete</a>"."</td>";
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