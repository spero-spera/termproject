
<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 
 
 $id=$_POST['id'];
 $password=md5($_POST['pwd']);
 $password2=$_POST['pwd2'];
 $name=$_POST['name'];
 $phone_number=$_POST['phone'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 
 $sql = "insert into user(id, name, email, phone_number, password, gender)";
 $sql = $sql. "values('$id','$name','$email','$phone_number','$password', '$gender')";
 mysqli_query($conn,$sql);

 mysqli_close($conn);
?>
