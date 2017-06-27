
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 $num = $_POST['num'];
 $expl=$_POST['expl'];
 $name=$_POST['name'];
 $phone_number=$_POST['phone'];
 $addr=$_POST['address'];
 $count=$_POST['count'];
 $pool=$_POST['pool'];
 $fire=$_POST['fire'];
 $valley=$_POST['valley'];
 $tent=$_POST['tent'];

 if($num)
 {
  $sql = "update pension set name='$name', address='$addr', phone_number='$phone_number', expl='$expl' where number = '$num'";
 $reuslt = mysqli_query($conn,$sql);
 $sql2 = "update facility set pool = '$pool', firecracker = '$fire', valley = '$valley', tent = '$tent' where number = '$num'";
 mysqli_query($conn,$sql2);
 }
 else{
 $sql = "insert into pension(name, address, phone_number, room_count, expl)";
 $sql = $sql. "values('$name','$addr','$phone_number','$count', '$expl')";
 $reuslt = mysqli_query($conn,$sql);
  if($result)
  {
  echo 'success';
  }
 $sql = "select number from pension where address='$addr' and name ='$name'";
 $result = mysqli_query($conn,$sql);
 $number =  mysqli_fetch_row($result);
 echo $number[0];
 
 $sql = "insert into facility(pool, firecracker, valley, tent, number)";
 $sql = $sql. "values('$pool','$fire','$valley','$tent', '$number[0]')";
 mysqli_query($conn,$sql);
 }
 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = '../index.php';
	   </script>
	";
?>
