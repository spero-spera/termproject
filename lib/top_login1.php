    <div id="logo"><a href="https://termp-ingan.c9users.io/index.php"><img src="./img/logo.gif" border="0"></a></div>
	<div id="top_login">
<?
    if(!$_SESSION['userid'])
	{
?>
          <a href="./login/login_form.php">login</a> | <a href="./member/member_form.php">register</a>
<?
	}
	else
	{
?>
		<?=$_SESSION['usernick']?> (level:<?=$_SESSION['userlevel']?>) | 
		<a href="./login/logout.php">logout</a> | <a href="./login/member_form_modify.php">modify</a>
<?
	}
?>
	 </div>
