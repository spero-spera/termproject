<div id="home"><a href="../index.php">Pension(go to main)</a></div>

<?php
 $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
 die( "can't connect mysql."); 

 
 $chil=$_POST['chil'];
 $date=$_POST['date'];
 $name=$_POST['name'];
 $number=$_POST['number'];
 $norm=$_POST['norm'];
 $leng=$_POST['leng'];
 $leng_for_test = $leng;
 $test_date = "select date,length from reservation where pension_number = '$number' and room_name = '$name'";
 $test_date2 = mysqli_query($conn,$test_date);
 
 $tr = 1;
  while($test = mysqli_fetch_row($test_date2))
  {
   while($test[1])
   {
    $during = date("Y-m-d" , strtotime($test[0]."$test[1] days"));
    if($during >= $date && $during <= date("Y-m-d" , strtotime($date."$leng days")))
    {$tr = 0;
    break;}
    $test[1]= $test[1]-1;
   }
  }
 echo $tr;
 if(!$tr)
 { echo("
              <script>
                window.alert('date jung-bok')
                history.go(-1)
              </script>
           ");

           exit;
 }
 else {
  
 
  

 $sql = "select normal, child from price where name = '$name' and number = '$number'";
 $result = mysqli_query($conn,$sql);
 $list = mysqli_fetch_row($result);
 
 $price1 = $list[0]*$norm;
 $price2 = ($list[1]*$list[0]*$chil);
 $price = ($price1 + $price2)*$leng;

 $id = $_COOKIE['userid'];
 echo $id;
 $sql3 = "select name from pension where number = '$number'";
 $qu = mysqli_query($conn,$sql3);
 $qqu = mysqli_fetch_row($qu);
 
 
 
?>

<table class="table" border='1'>
 <thead>
 <th>pension_name</th>
 <th>room_name</th>
 <th>date</th>
 <th>length</th>
 <th>normal</th>
 <th>child</th>
 <th>total price</th>
 </thead>
 <tr>
 <td><?php echo $qqu[0]?></td>
 <td><?php echo $name?></td>
 <td><?php echo $date?></td>
 <td><?php echo $leng?></td>
 <td><?php echo $norm?></td>
 <td><?php echo $chil?></td>
 <td><?php echo $price?></td>
 </tr>
 </table>
 <form name="reservation" method="post" action="./payment.php">
     <input type ="hidden"  name="name" value ="<?php echo $name?>">
     <input type ="hidden"  name="number" value ="<?php echo $number?>">
      <input type ="hidden"  name="date" value ="<?php echo $date?>">
     <input type ="hidden"  name="norm" value ="<?php echo $norm?>">
      <input type ="hidden"  name="leng" value ="<?php echo $leng?>">
     <input type ="hidden"  name="chil" value ="<?php echo $chil?>">
     <br>
      <input type ="hidden"  name="price" value ="<?php echo $price?>">
      card<input type="radio" size="5" value="0" name="pay">
   account<input type="radio" size="5" value="1" name="pay">
    bitcoin<input type="radio" size="5" value="2" name="pay">
    <br>
    <table border="1">
   <tr>
   <td>halbu(0~10)</td>
   <td><input type="text" size="30" name="halbu"></td>
  </tr>
  
     <input type = "submit" value="pay" name = "topay"></form>
 <?php
 
 }
 mysqli_close($conn);
 
 ?>