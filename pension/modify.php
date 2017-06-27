<div id="home"><a href="../index.php">Pension(go to home)</a></div>
<doctype html>
<html>
<head>
<title>modify page</title>
</head>
<body>
<form name="modify" method="post" action="pension_add.php">
 <h1>modify pension</h1>
 
  <?php
   $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
     die( "can't connect mysql.");
     $num = $_POST['num'];
     $sql = "select * from pension A, facility B where A.number = '$num' and A.number = B.number";
     $result = mysqli_query($conn,$sql);
     $list = mysqli_fetch_row($result);
     
     ?>
 <table border="1">
  <tr>
   <td>name</td>
   <td><input type="text" size="30" name="name" value = "<?php echo $list[1]?>"></td>
  </tr>
  <tr>
   <td>address</td>
   <td><input type="text" size="30" name="address" value = "<?php echo $list[2]?>"></td>
  </tr>
  <tr>
  <td>phone_number</td>
   <td><input type="text" size="30" name="phone" value = "<?php echo $list[3]?>"></td>
  </tr>
  
  
  
  <tr>
  <td>explain</td>
   <td><input type="text" size="200" name="expl" value = "<?php echo $list[5]?>"></td>
  </tr>
  <tr>
   <td>pool</td>
   <td>Yes<input type="radio" size="5" value="1" name="pool" <?php if($list[6]==1){?> checked <?php }?> >
   NO<input type="radio" size="5" value="0" name="pool" <?php if($list[6]==0){?> checked <?php }?>></td>
  </tr>
  <tr>
   <td>firecracker</td>
   <td>Yes<input type="radio" size="5" value="1" name="fire" <?php if($list[7]==1){?> checked <?php }?>>
   No<input type="radio" size="5" value="0" name="fire" <?php if($list[7]==0){?> checked <?php }?>></td>
  </tr>
  <tr>
   <td>tent</td>
   <td>Yes<input type="radio" size="5" value="1" name="tent" <?php if($list[9]==1){?> checked <?php }?>>
   NO<input type="radio" size="5" value="0" name="tent" <?php if($list[9]==0){?> checked <?php }?>></td>
  </tr>
  <tr>
   <td>valley</td>
   <td>Yes<input type="radio" size="5" value="1" name="valley" <?php if($list[8]==1){?> checked <?php }?>>
   No<input type="radio" size="5" value="0" name="valley" <?php if($list[8]==0){?> checked <?php }?>></td>
  </tr>
 </table>
 
  <td><input type="hidden" size="30" name="num" value = "<?php echo $list[0]?>"></td>
  
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>