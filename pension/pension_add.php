
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 $expl=$_POST['expl'];
 $name=$_POST['name'];
 $phone_number=$_POST['phone'];
 $addr=$_POST['address'];
 $count=$_POST['count'];
 

 $sql = "insert into pension(name, address, phone_number, room_count, expl)";
 $sql = $sql. "values('$name','$addr','$phone_number','$room_count', '$expl')";
 $reuslt = mysqli_query($conn,$sql);
  if($result)
  {
  echo 'success';
  }
 
  

 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = '../index.php';
	   </script>
	";
?>
