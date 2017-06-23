<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<doctype html>
    
<html>
<head>
<title>pension list</title>
</head>
<body>
<div id="list">
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die("can't connect mysql."); 
 $sql = "select * from pension";
 $qu =mysqli_query($conn,$sql);
 ?>
 <table class="table">
 <thead>
 <th>name</th>
 <th>address</th>
 <th>phone</th>
 <th> room_count </th>
 <th> more information </th>
 <th> delete pension</th>
 <th>
 <?php if($_COOKIE[admin]==1)
    {
    echo "room add";
    }?>
</th>
 </thead>
<?php while($list = mysqli_fetch_row($qu)) :?>
 <tr>
 <td><?php echo $list[1]?></td>
 <td><?php echo $list[2]?></td>
 <td><?php echo $list[3]?></td>
 <td><?php echo $list[4]?></td>
 <td><form name="more" method="post" action="more_info.php">
     <input type ="hidden"  name="num" value ="<?php echo $list[0]?>">
     <input type = "submit" value="more info" name = "moreinfo"></form></td>
 <td><form name="del" method="post" action="del.php">
     <input type ="hidden"  name="num" value ="<?php echo $list[0]?>">
     <input type = "submit" value="del" name = "del"></form></td>
 <td><form name="del" method="post" action="room.php">
     <input type ="hidden"  name="num" value ="<?php echo $list[0]?>">
     <input type = "submit" value="add" name = "add"></form></td>
 </tr>
<?php endwhile ?>
</table>
<?php
    mysqli_close($conn);
?>
</div>
</body>
</html>