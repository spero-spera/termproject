
<meta charset="euc-kr">
<?
    $id=$_POST['id']; $pass=$_POST['pass'];
   if(!$id) {
     echo("
           <script>
             window.alert('id blanked.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('password blanked.')
             history.go(-1)
           </script>
         ");
         exit;
   }

  $conn=mysqli_connect("127.0.0.1","root","1234","c9") or
  die( "can't connect mysql."); 

   $sql = "select * from user where id='$id'";
   $result = mysqli_query($sql, $conn);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('no id.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);

        $db_pass = $row[password];

        if($pass != $db_pass)
        {
           echo("
              <script>
                window.alert('wrong password')
                history.go(-1)
              </script>
           ");

           exit;
        }
        else
        {	
			

           $userid = $row[id];
		   $username = $row[name];

      
           echo("
              <script>
			  
				alert('login confirm')
                location.href = '../index.php';
              </script>
           ");
        }
   }          
?>
