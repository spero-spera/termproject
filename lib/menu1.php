
<div id="menu">
<?php
    
    if(!$_SESSION['userid'])
	{
?>
    <div class="menus"><a href="../login/login.php">login</a> | 
    <a href="/lib/useradd.php">add id</a></div>
<?php
	}
	else
	{   
?>
	    <echo>Your id : </echo>
<?php
	    echo $_SESSION['userid'];
	    if($_SESSION['userlevel']==1)
	    {
?>
	    <echo><br>You admin </echo>
<?php
        }
?>
        <div class="menus1"><a href="../login/logout.php">logout</a> |
		<a href="./lib/modify.php">modify</a></div>
<?php
	}
?>
	 </div>
