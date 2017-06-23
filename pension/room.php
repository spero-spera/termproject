<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<doctype html>
    
<html>
<head>
<title>room add page</title>
</head>
<body>
<form name="add" method="post" action="add_room.php">
 <h1>input room information</h1>
 <table border="1">
  <tr>
   <td>name</td>
   <td><input type="text" size="30" name="name"></td>
  </tr>
  <tr>
   <td>capacity</td>
   <td><input type="text" size="30" name="capa"></td>
  </tr>
  <tr>
   <td>TV</td>
   <td>Yes<input type="radio" size="5" value="1" name="TV">
   NO<input type="radio" size="5" value="0" name="TV"></td>
  </tr>
  <tr>
   <td>wifi</td>
   <td>Yes<input type="radio" size="5" value="1" name="wifi">
   No<input type="radio" size="5" value="0" name="wifi"></td>
  </tr>
  <tr>
   <td>grill</td>
   <td>Yes<input type="radio" size="5" value="1" name="grill">
   NO<input type="radio" size="5" value="0" name="grill"></td>
  </tr>
  <tr>
   <td>aircon</td>
   <td>Yes<input type="radio" size="5" value="1" name="aircon">
   No<input type="radio" size="5" value="0" name="aircon"></td>
  </tr>
 </table>
 <?php $num = $_POST['num']; ?>
 <input type="hidden" name = "num" value = "<?php echo $num; ?>">
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>