
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 $expl=$_POST['expl'];
 $name=$_POST['name'];
 $phone_number=$_POST['phone'];
 $addr=$_POST['address'];
 $count=$_POST['count'];
 $pool=$_POST['pool'];
 $fire=$_POST['fire'];
 $valley=$_POST['valley'];
 $tent=$_POST['tent'];

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
 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = '../index.php';
	   </script>
	";
?>
