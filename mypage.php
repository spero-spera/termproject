<div id="home"><a href="../index.php">Pension(go to home)</a></div>
<html>
<head> 
</head>
<body>
	<?php 
	$conn=mysqli_connect("127.0.0.1","root","1234","c9") or
	die( "can't connect mysql."); 
	$sql = "select * from user where id = '$_COOKIE[userid]'";
    $result = mysqli_query($conn,$sql);
    $list = mysqli_fetch_row($result);
    echo "id : ". $list[1]; 
    ?><br><?php
    echo "name : ". $list[2]; ?><br><?php
    echo "email : ". $list[3]; ?><br><?php
    echo "phone_number : ". $list[4];?><br><?php
    echo "gender : ", $list[6];?><br><?php
    mysqli_close($conn);
    
    include "/home/ubuntu/workspace/reservation/reservation_list.php"; ?>
    


</body>
</html>
