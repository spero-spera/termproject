
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
 
 $normal = $_POST['normal'];
 $peak = $_POST['peak'];
 $child = $_POST['child'];
 
 $sql = "insert into room(name, wifi, grill, TV, aircon, number, capacity)";
 $sql = $sql. "values('$name','$wifi','$grill','$TV', '$aircon', '$num', $capa)";
 $reuslt = mysqli_query($conn,$sql);
 $sql2 = "insert into price(name, number, normal, child, peak)";
 $sql2 = $sql2. "values('$name','$num','$normal','$child', '$peak')";
 mysqli_query($conn,$sql2);
 $sql3 = "update pension set room_count = room_count +1 where number = '$num'";
 mysqli_query($conn,$sql3);
 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = './list_pension.php';
	   </script>
	";
?>
