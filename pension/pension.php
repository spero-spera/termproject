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
   <td>address</td>
   <td><input type="text" size="30" name="address"></td>
  </tr>
  <tr>
  <td>phone_number</td>
   <td><input type="text" size="30" name="phone"></td>
  </tr>
  
  
  
  <tr>
  <td>explain</td>
   <td><input type="text" size="200" name="expl"></td>
  </tr>
  <tr>
   <td>pool</td>
   <td>Yes<input type="radio" size="5" value="1" name="pool">
   NO<input type="radio" size="5" value="0" name="pool"></td>
  </tr>
  <tr>
   <td>firecracker</td>
   <td>Yes<input type="radio" size="5" value="1" name="fire">
   No<input type="radio" size="5" value="0" name="fire"></td>
  </tr>
  <tr>
   <td>tent</td>
   <td>Yes<input type="radio" size="5" value="1" name="tent">
   NO<input type="radio" size="5" value="0" name="tent"></td>
  </tr>
  <tr>
   <td>valley</td>
   <td>Yes<input type="radio" size="5" value="1" name="valley">
   No<input type="radio" size="5" value="0" name="valley"></td>
  </tr>
 </table>
  <td><input type="hidden" size="30" name="count" value=0></td>
  
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>