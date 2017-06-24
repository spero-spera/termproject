<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 
 $num=$_POST['num'];
 $sql = "delete from pension where number = $num";
 
 mysqli_query($conn,$sql);
  mysqli_close($conn);
  
  echo "
		
	   <script>
	   window.alert('success')
	    location.href = './list_pension.php';
	   </script>
	";
	?>