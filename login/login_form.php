<?php
           session_start();
?>
<?php
    $id=$_POST['id']; 
    $password=md5($_POST['pwd']);
   if(!$id) {
     echo("
           <script>
             window.alert('id blanked.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$password) {
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
   $result = mysqli_query($conn, $sql);

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

        if($password != $db_pass)
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
		   $userlevel = $row[admin];

         $_SESSION['userid'] = $userid;
         $_SESSION['username'] = $username;
         $_SESSION['userlevel'] = $userlevel;
          
         setCookie('userid', $userid, time()+(60*60), '/');
         setCookie('admin', $userlevel, time()+(60*60), '/');
         setCookie('name', $username, time()+(60*60), '/');
         


           echo("
              <script>
			  
				alert('login confirm')
                location.href = '../index.php';
              </script>
           ");
        }
   }          
?>
