<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<doctype html>
    
<html>
 <?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 $num=$_POST['num'];
 $sql = "select * from pension where number='$num'";
 $result = mysqli_query($conn,$sql);
 $sql2 = "select * from facility where number='$num'";
 $result2 = mysqli_query($conn,$sql2);
 $list2 = mysqli_fetch_row($result2);
 $sql3 = "select * from room where number='$num'";
 $result3 = mysqli_query($conn,$sql3);

 echo "Pension number : ". $num;
 ?>
<head>
<title>more info</title>
</head>
<body>
 <table class="table" border='1'>
 <thead>
 <th>name</th>
 <th>address</th>
 <th>phone</th>
 <th> room_count </th>
 <th> pool</th>
 <th> firecracker</th>
 <th> valley</th>
 <th> number</th>
 </thead>
 
 <?php $list = mysqli_fetch_row($result);?>
 <tr>
 <td><?php echo $list[1]?></td>
 <td><?php echo $list[2]?></td>
 <td><?php echo $list[3]?></td>
 <td><?php echo $list[4]?></td>
 <td><?php echo $list2[0]?></td>
 <td><?php echo $list2[1]?></td>
 <td><?php echo $list2[2]?></td>
 <td><?php echo $list2[3]?></td>
 </tr>
 </table>
 <br> More explain<br> 
 <?php echo $list[5]?>
 <br><br>
 Room information
 <table class="table2" border='1'>
 <thead>
 <th>name</th>
 <th>wifi</th>
 <th>grill</th>
 <th>TV</th>
 <th>aircon</th>
 <th>capa</th>
 <th>price</th>
 <th>
 <?php if($_COOKIE[admin]==1)
    {
    echo "reservation list";
    }
    else {
     echo "make reservation";
    }?>
</th>
 </thead>
<?php while($list3 = mysqli_fetch_row($result3)) :?>
 <tr>
 <td><?php echo $list3[0]?></td>
 <td><?php echo $list3[1]?></td>
 <td><?php echo $list3[2]?></td>
 <td><?php echo $list3[3]?></td>
 <td><?php echo $list3[4]?></td>
 <td><?php echo $list3[6]?></td>
 <td></td>
 <td></td>
 </tr>
<?php endwhile ?>
</table>
 </body>
 </html>