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
	</div>  <!-- end of header -->

	<div id="menu">
	
	<echo> welcome Pension reservation cite </echo></br>
		<?php
		echo("hi " . "$_COOKIE[name]");
		if($_COOKIE[admin]==1)
		{
			?>
		 <a href="./pension/pension.php">add pension</a>
	<?php	}
	?>
	</div>  <!-- end of menu --> 

  <div id="content">
		<div id="main">kk

	</div>
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
