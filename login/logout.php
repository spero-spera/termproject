<?php
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['userlevel']);
  setCookie('userid', '$userid', time()-(60*60));
  setCookie('admin', '$userlevel', time()-(60*60));
  setCookie('name', '$username', time()-(60*60));
  echo("
       <script>
          location.href = '../index.php'; 
         </script>
       ");
?>
