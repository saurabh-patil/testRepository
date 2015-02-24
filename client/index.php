<?php
session_start();
//print_r($_SESSION);die;
?>
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
        	<div class="c1">
            	<h1> Festival Sale </h1>
                	<?php
						include("conn.php");
						$str="select * from offers";
						$res=mysql_query($str);
						while ($row=mysql_fetch_array($res))
						{
							$off=$row['o_name'];
					?>
                		<h3><li style="padding-top:5px;"><?php echo $off ?></li></h3>
                    <?php
                    	}
					?>             
            </div>
            <div class="c1">
            	<h1> Local Sale</h1>
                <h3><li style="padding-top:5px;"> 20% Clothing Sale</li></h3>
                <h3><li style="padding-top:5px;"> 5% Electronic Sale</li></h3>
                <h3><li style="padding-top:5px;"> 10% Book Sale</li></h3>
                <h3><li style="padding-top:5px;"> 25% Shoes Sale</li></h3>
            </div>
            <div class="c1">
            	<center>
            		<img src="img/offpic.png" height="250px" width="250px"/>
                </center>
            </div>
        </div>
        
        <?php
			include("footer.php");
		?>
    </div>
</body>
</html>