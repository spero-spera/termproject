
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 $num=$_POST['num'];
 $name=$_POST['name'];
 $capa=$_POST['capa'];
 $wifi=$_POST['wifi'];
 $grill=$_POST['grill'];
 $aircon=$_POST['aircon'];
 $TV=$_POST['TV'];
 
 $sql = "insert into room(name, wifi, grill, TV, aircon, number, capacity)";
 $sql = $sql. "values('$name','$wifi','$grill','$TV', '$aircon', '$num', $capa)";
 $reuslt = mysqli_query($conn,$sql);
  if($result)
  {
  echo 'success';
  }
 
 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = './list_pension.php';
	   </script>
	";
?>
