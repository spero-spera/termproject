<div id="home"><a href="../index.php">Pension(go to home)</a></div>

<html>
<head> 
</head>
<body>
	<?php 
	$conn=mysqli_connect("127.0.0.1","root","1234","c9") or
	die( "can't connect mysql."); 
	$sql= "select userid, count(*) from reservation group by userid order by count(*) desc";
	$result = mysqli_query($conn, $sql);
	$sql2 = "select name, count(*) from reservation A, pension B where A.pension_number = B.number group by name order by count(*) desc";
	$result2 = mysqli_query($conn, $sql2);
	echo "user order by reservation_count";
	 ?>
     <table class="table" border=1>
     <thead>
     <th>id</th>
     <th>reservation_count</th>
     </thead>
     <?php while($list = mysqli_fetch_row($result)) :?>
     <tr>
     <td><?php echo $list[0]?></td>
     <td><?php echo $list[1]?></td>
    </tr>
    <?php endwhile ?>
    </table>
    <br>
    <?php 
    echo "pension order by reservation_count"; ?>
    <table class="table" border=1>
     <thead>
     <th>pension name</th>
     <th>reservation_count</th>
     </thead>
     <?php while($list2 = mysqli_fetch_row($result2)) :?>
     <tr>
     <td><?php echo $list2[0]?></td>
     <td><?php echo $list2[1]?></td>
    </tr>
    <?php endwhile ?>
    </table>
    <br>