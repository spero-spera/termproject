<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 $set = "set autocommit = 0";
 mysqli_query($conn,$set);
 $start = "begin";
 mysqli_query($conn,$start);
 
 $chil=$_POST['chil'];
 $date=$_POST['date'];
 $name=$_POST['name'];
 $number=$_POST['number'];
 $norm=$_POST['norm'];
 $leng=$_POST['leng'];
 
 $sql = "select normal, child, peak from price where name = '$name' and number = '$number'";
 $result = mysqli_query($conn,$sql);
 $list = mysqli_fetch_row($result);
 
 $price1 = $list[0]*$norm;
 $price2 = ($list[1]*$list[0]*$chil);
 $price = $price1 + $price2;

 $sql2 = "insert into reservation(pension_number, room_name, date, normal, child, length, price_total)";
 $sql2 = $sql2. "values('$number','$name', '$date', '$norm','$chil', '$leng', $price)";
 mysqli_query($conn,$sql2); 
 $sql3 = "select A.name from reservation B, pension A where A.number = B.pension_number";
 $qu = mysqli_query($conn,$sql3);
 $qqu = mysqli_fetch_row($qu);
 $date=date("Y-m-d");
?>

<table class="table" border='1'>
 <thead>
 <th>pension_name</th>
 <th>room_name</th>
 <th>date</th>
 <th>length</th>
 <th>normal</th>
 <th>child</th>
 <th>total price</th>
 </thead>
 <tr>
 <td><?php echo $qqu[0]?></td>
 <td><?php echo $name?></td>
 <td><?php echo $date?></td>
 <td><?php echo $leng?></td>
 <td><?php echo $norm?></td>
 <td><?php echo $chil?></td>
 <td><?php echo $price?></td>
 </tr>
 </table>
 <?
 $set = "set autocommit = 1";
 mysqli_query($conn,$set);
 $commit = "commit";
 mysqli_query($conn,$commit);
 mysqli_close($conn);
 
 ?>