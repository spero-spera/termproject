<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<doctype html>
    
<html>
<head>
<title>pension add page</title>
</head>
<body>
<form name="add" method="post" action="pension_add.php">
 <h1>input pension information</h1>
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
   NO<input type="radio" size="5" value="0" name="fire"></td>
  </tr>
  <tr>
   <td>wifi</td>
   <td>Yes<input type="radio" size="5" value="1" name="wifi">
   No<input type="radio" size="5" value="0" name="valley"></td>
  </tr>
  <tr>
   <td>grill</td>
   <td>Yes<input type="radio" size="5" value="1" name="grill">
   NO<input type="radio" size="5" value="0" name="pool"></td>
  </tr>
  <tr>
   <td>aircon</td>
   <td>Yes<input type="radio" size="5" value="1" name="aircon">
   No<input type="radio" size="5" value="0" name="tent"></td>
  </tr>
 </table>
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>