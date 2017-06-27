<div id="home"><a href="../index.php">Pension(go to home)</a></div>
<doctype html>
<html>
<head>
<title>modify page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>modify your information<br> password must be filled and blanked box will be remained origin</h1>
 <table border="1">
  <?php
   $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
     die( "can't connect mysql.");
     $id = $_COOKIE[userid];
     echo $id;
     $sql = "select * from user where id = '$id'";
     $result = mysqli_query($conn,$sql);
     $list = mysqli_fetch_row($result);
     
     ?>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
   <td>Confirm Password</td>
   <td><input type="password" size="30" name="pwd2"></td>
  </tr>
  <tr>
   <td>name</td>
   <td><input type="text" size="12" maxlength="20" name="name"  value = "<?php echo $list[2]?>"></td>
  </tr>
  <tr>
   <td>phone_number</td>
   <td><input type="text" size="40" name="phone"  value = "<?php echo $list[4]?>"></td>
  </tr>
  <tr>
   <td>gender</td>
   <td><input type="text" size="6" maxlength="6" name="gender"  value = "<?php echo $list[6]?>"></td>
  </tr>
  <tr>
   <td>e-mail(not must)</td>
   <td><input type="text" size="30" name="email"  value = "<?php echo $list[3]?>"></td>
  </tr>
 </table>
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>
