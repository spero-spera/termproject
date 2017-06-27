
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
 
 if($_POST['pwd'] != $_POST['pwd2'])
 {
  echo("
           <script>
             window.alert('password unmatch.')
             history.go(-1)
           </script>
         ");
         exit;
 }
	if($id)
	{
	$sql = "select * from user where id='$id'";
 $result = mysqli_query($conn,$sql);
 $exist_id = mysqli_num_rows($result);
  if($exist_id) {
  echo("
           <script>
             window.alert('id already exist.')
             history.go(-1)
           </script>
         ");
         exit;
   }
  else {
 $sql = "insert into user(id, name, email, phone_number, password, gender)";
 $sql = $sql. "values('$id','$name','$email','$phone_number','$password', '$gender')";
 $reuslt = mysqli_query($conn,$sql);
  if($result)
  {
  echo 'success';
  }}
	}
	else
	{
	 $sql = "update user set name='$name', email='$email', phone_number='$phone_number', password='$password', gender='$gender' where id = '$_COOKIE[userid]'";
 mysqli_query($conn,$sql);
 setCookie('name', $name, time()+(60*60), '/');
	}

 mysqli_close($conn);
 echo "
		
	   <script>
	   window.alert('success')
	    location.href = '../index.php';
	   </script>
	";
?>
