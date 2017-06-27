<doctype html>
    
<html>
<head>
<title>reservation list</title>
</head>
<body>
 

<?php

$conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 



if($_COOKIE[admin]==1)
    {
    echo "reservation list";
    
    $sql = "select B.name, A.room_name, A.date, A.normal, A.child, A.length, A.price_total from reservation A, pension B";
    $result = mysqli_query($conn,$sql);
    ?>
<table class="table" border='1'>
 <thead>
 
 <th>pension_name</th>
 <th>room_name</th>
 <th> date </th>
 <th> normal</th>
 <th> child</th>
 <th> length</th>
 <th> price</th>
 </thead>
 <?php while($list = mysqli_fetch_row($result));?>
 <tr>
 <td><?php echo $list[0]?></td>
 <td><?php echo $list[1]?></td>
 <td><?php echo $list[2]?></td>
 <td><?php echo $list[3]?></td>
 <td><?php echo $list[4]?></td>
 <td><?php echo $list[5]?></td>
 <td><?php echo $list[6]?></td>
 </tr>
 </table>
    <?php }
    else if($_COOKIE['userid'])
    {
        echo $_COOKIE['userid'];
        echo " reservation list";
     $sql = "select B.name, A.room_name, A.date, A.normal, A.child, A.length, A.price_total from reservation A, pension B where A.userid = '$_COOKIE[userid]' and A.pension_number =B.number";
     $result = mysqli_query($conn,$sql);
     ?>
  <table class="table" border='1'>
 <thead>
 <th>Your_name</th>
 <th>pension_name</th>
 <th>room_name</th>
 <th> date </th>
 <th> normal</th>
 <th> child</th>
 <th> length</th>
 <th> price</th>
 </thead>
 <?php while($list = mysqli_fetch_row($result)) : ?>
 <tr>
     <td><?php echo $_COOKIE['userid'];?></td>
 <td><?php echo $list[0]?></td>
 <td><?php echo $list[1]?></td>
 <td><?php echo $list[2]?></td>
 <td><?php echo $list[3]?></td>
 <td><?php echo $list[4]?></td>
 <td><?php echo $list[5]?></td>
 <td><?php echo $list[6]?></td>
 </tr>
 <?php endwhile ?>
 </table>
    <?php } mysqli_close($conn);?>
</body>
</html>