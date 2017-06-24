<div id="home"><a href="../index.php">Pension(go to home)</a></div>
<doctype html>
<html>
<head>
<title>reservation page</title>
</head>
<body>
<form name="reservation" method="post" action="reservation_add.php">
 <h1>input your information</h1>
 <table border="1">
  <tr>
   <td>date</td>
   <td><input type="date" size="30" name="date"></td>
  </tr>
  <tr>
   <td>length</td>
   <td><input type="text" size="30" name="leng"></td>
  </tr>
  <tr>
   <td>noraml</td>
   <td><input type="text" size="30" name="norm"></td>
  </tr>
  <tr>
   <td>child</td>
   <td><input type="text" size="12" name="chil"></td>
  </tr>
 </table>
 <?php $name = $_POST['name'];
        $number = $_POST['number'];
        echo $name;
        echo $number;
        ?>
   <input type ="hidden"  name="name" value ="<?php echo $name?>">
   <input type ="hidden"  name="number" value ="<?php echo $number?>">
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>
