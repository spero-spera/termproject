{"filter":false,"title":"firstpage.php","tooltip":"/firstpage.php","undoManager":{"mark":58,"position":58,"stack":[[{"start":{"row":1,"column":0},"end":{"row":1,"column":12},"action":"remove","lines":["echo \"fuck\";"],"id":2},{"start":{"row":1,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["?","    if(!$_SESSION['userid'])","\t{","?>","          <a href=\"./login/login_form.php\">로그인</a> | <a href=\"./member/member_form.php\">회원가입</a>","<?","\t}","\telse","\t{","?>","\t\t<?=$_SESSION['usernick']?> (level:<?=$_SESSION['userlevel']?>) | ","\t\t<a href=\"./login/logout.php\">로그아웃</a> | <a href=\"./login/member_form_modify.php\">정보수정</a>","<?","\t}","?>"]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["?"],"id":3}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":[">"],"id":4}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["?"],"id":5}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":["?"],"id":6}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"remove","lines":["<"],"id":7}],[{"start":{"row":5,"column":96},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"remove","lines":[">"],"id":9}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":["?"],"id":10}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"remove","lines":["?"],"id":11}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":["<"],"id":12}],[{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"remove","lines":[">"],"id":13}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":["?"],"id":14}],[{"start":{"row":10,"column":62},"end":{"row":10,"column":63},"action":"remove","lines":[">"],"id":15}],[{"start":{"row":10,"column":61},"end":{"row":10,"column":62},"action":"remove","lines":["?"],"id":16}],[{"start":{"row":3,"column":2},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":17}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"remove","lines":["<?php","","    if(!$_SESSION['userid'])","\t{","          <a href=\"./login/login_form.php\">로그인</a> | <a href=\"./member/member_form.php\">회원가입</a>","\t}","\telse","\t{","","\t\t<?=$_SESSION['usernick']?> (level:<?=$_SESSION['userlevel']) | ","\t\t<a href=\"./login/logout.php\">로그아웃</a> | <a href=\"./login/member_form_modify.php\">정보수정</a>","","\t}","","?>"],"id":18},{"start":{"row":0,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["<?","\tsession_start();","?>","<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">","<html>","<head> ","<meta http-equiv=\"Content-Type\" content=\"text/html; charset=euc-kr\">","<link rel=\"stylesheet\" type=\"text/css\" href=\"css/common.css\">","</head>","","<body>","<div id=\"wrap\">","\t<div id=\"header\">","    <? include \"./lib/top_login1.php\"; ?>","\t</div>  <!-- end of header -->","","\t<div id=\"menu\">","\t<? include \"./lib/top_menu1.php\"; ?>","\t</div>  <!-- end of menu --> ","","  <div id=\"content\">","\t\t<div id=\"main_img\"><img src=\"./img/main_img.jpg\"></div>","  </div> <!-- end of content -->","</div> <!-- end of wrap -->","","</body>","</html>",""]}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":19},"action":"remove","lines":["_img"],"id":19}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":47},"action":"remove","lines":["img src=\"./img/main_img.jpg\">"],"id":20}],[{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["<"],"id":21}],[{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["w"],"id":22}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["e"],"id":23}],[{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["l"],"id":24}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["c"],"id":25}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["o"],"id":26}],[{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["m"],"id":27}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["e"],"id":28}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["/"],"id":29}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":["/"],"id":30}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":["/"],"id":31}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":["*"],"id":32}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":["*"],"id":33}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["/"],"id":34}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"remove","lines":["/"],"id":35}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"remove","lines":["."],"id":36}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["."],"id":37}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["/"],"id":38}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["h"],"id":39}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["o"],"id":40}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["m"],"id":41}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["e"],"id":42}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["/"],"id":43}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["u"],"id":44}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["b"],"id":45}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["u"],"id":46}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["n"],"id":47}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["t"],"id":48}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["u"],"id":49}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["/"],"id":50}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["w"],"id":51}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["o"],"id":52}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["r"],"id":53}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["k"],"id":54}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["s"],"id":55}],[{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["p"],"id":56}],[{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["a"],"id":57}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["c"],"id":58}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["e"],"id":59}],[{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"insert","lines":["/"],"id":60}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":2},"end":{"row":16,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1496542510274,"hash":"369d89a19715e84f076e203a3fa4e819afc2504b"}