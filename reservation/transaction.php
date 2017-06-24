<?php

$set = "set autocommit = 1";
 mysqli_query($conn,$set);
 $commit = "commit";
 mysqli_query($conn, $commit);
 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = '../index.php';
	   </script>
	";
 ?>