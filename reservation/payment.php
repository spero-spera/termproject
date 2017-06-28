<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 

 
 $chil=$_POST['chil'];
 $date=$_POST['date'];
 $name=$_POST['name'];
 $number=$_POST['number'];
 $norm=$_POST['norm'];
 $leng=$_POST['leng'];
 $price=$_POST['price']; 
 $pay = $_POST['pay'];
 $halbu = $_POST['halbu'];
 
  $set = "set autocommit = 0";
 mysqli_query($conn,$set);
 $start = "start transaction";
 mysqli_query($conn,$start);

if($pay==0)
 {
  $one = 1;
 }
else
{
 $one = 0;
}
if($pay==1)
 {
  $two = 1;
 }
else
{
 $two = 0;
}
if($pay==2)
 {
  $three = 1;
 }
else
{
 $three = 0;
}

 $id = $_COOKIE['userid'];
 echo $id;
 $sql2 = "insert into reservation(pension_number, room_name, date, normal, child, length, price_total, userid)";
 $sql2 = $sql2. "values('$number','$name', '$date', '$norm','$chil', '$leng', $price, '$id')";
 $result = mysqli_query($conn,$sql2);
 $sql = "select number from reservation where pension_number = '$number' and room_name = '$name' and date = '$date'";
 $reg_num = mysqli_query($conn, $sql);
 $qqqu = mysqli_fetch_row($reg_num);
 
 $sql3 = "insert into payment(reservation_number, card, bitcoin, account, hal_bu)";
 $sql3 = $sql3. "values('$qqqu[0]','$one', '$two', '$three','$halbu')";
 $qu = mysqli_query($conn,$sql3);

 
 
 

 
 if($result && $qu)
 {
  $set = "set autocommit=1";
  $commit = "commit";
  mysqli_query($conn, $set);
  mysqli_query($conn, $commit);
  echo "success thx";
 }
 else {
  $set = "set autocommit=1";
  $roll = "rollback";
  mysqli_query($conn, $roll);
  mysqli_query($conn, $set);
  
  echo "sorry something wrong";
 }

 mysqli_close($conn);
 
 ?>