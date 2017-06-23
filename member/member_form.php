
<? 
	session_start(); 
?>
<html>
<head> 
<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.id.value)
      {
          alert("write id");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value)
      {
          alert("write password");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("write password check");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("write name");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("write nick");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("write phone");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("password not confirm.\nrewrite plz.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>
</head>

<body>
<div id="wrap">
  <div id="header">
    <?php include "/home/ubuntu/workspace/lib/top_login1.php"; ?>
  </div>  <!-- end of header -->

  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 

  <div id="content">

	<div id="col1">
        <form  name="member_form" method="post" action="insert.php"> 
		<div id="title">
			<img src="../img/title_join.gif">
		</div>

		<div id="form_join">
			<div id="join1">
			<ul>
			<li>* ID<div id="id1"><input type="text" name="id"></div><div id="id2"><a href="#">check_id<onclick="check_id()"></a></div><div id="id3">4~12 alphabet down letter, number,etc only used .</div></li>
			<li>* Password</li><li><input type="password" name="pass"></li>
			<li>* Password check</li><li><input type="password" name="pass_confirm"></li>
			<li>* Name</li><li><input type="text" name="name"></li>
			<li>* Nick</li><li><div id="nick1"><input type="text" name="nick"></div><div id="nick2" ><a href="#"><img src="../img/check_id.gif" onclick="check_nick()"></a></div></li>
			<li>* Phone</li><li><select class="hp" name="hp1"> 
              <option value='010'>010</option>
              <option value='011'>011</option>
              <option value='016'>016</option>
              <option value='017'>017</option>
              <option value='018'>018</option>
              <option value='019'>019</option>
              </select>  - <input type="text" class="hp" name="hp2"> - <input type="text" class="hp" name="hp3"></li>
			<li>&nbsp;&nbsp;&nbsp;email</li>
			</ul>
			</div>
			<div id="join2">
			<ul>
			<li><input type="text" id="email1" name="email1"> @ <input type="text" name="email2"></li>
			</ul>
			</div>
			<div class="clear"></div>
			<div id="must"> * must written.^^</div>
		</div>

		<div id="button"><a href="#">save<onclick="check_input()"></a>&nbsp;&nbsp;
		                 <a href="#">reset <onclick="reset_form()"></a>
		</div>
	    </form>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
