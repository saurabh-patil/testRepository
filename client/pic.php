<?php
			include('conn.php');
			$str="select * from banner";
			$res=mysql_query($str);
			while ($row=mysql_fetch_array($res))
			{
				$imgurl=$row['pic'];
			}
		?>
<div class="pic">
        	<img src="../admin/images/<?php echo $imgurl ?>" height="250px" width="960px" />
        </div>