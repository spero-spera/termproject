<?php
           session_start();
?>
<html>
<head> 
</head>

<body>
<div id="wrap">
	<div id="header">
    <?php include "/home/ubuntu/workspace/lib/menu1.php"; ?>
	</div>  
	<div id="menu">
	
	<echo> welcome Pension reservation cite </echo></br>
		<?php
		echo("hi " . "$_COOKIE[name]");
		if($_COOKIE[admin]==1)
		{
			?><br> 
		 <a href="./pension/pension.php">add pension</a><br>
		 
		 <a href="./pension/list_pension.php">show pension list and add room</a>
	<?php	}
	
		else
		{
		?>
			 <a href="./pension/list_pension.php">show pension list</a><br>
			 <a href="./pension/search.php">search pension list</a><br>
	<?php	}
		?>
		<a href="./mypage.php">my page</a><br>
		<?php if($_COOKIE[admin]==1)
		{
		?>
		<a href="./admin.php">page for admin </a><br>
		<?php
		}
		?>
	</div>  

  <div id="content">
		<div id="main">kk

	</div>
  </div>
</div> 

</body>
</html>
