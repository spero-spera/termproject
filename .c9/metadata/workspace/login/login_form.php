{"filter":false,"title":"login_form.php","tooltip":"/login/login_form.php","undoManager":{"mark":94,"position":94,"stack":[[{"start":{"row":0,"column":0},"end":{"row":48,"column":0},"action":"remove","lines":["<meta charset=\"euc-kr\">","<?","   $id=$_POST['id']; $pass=$_POST['pass']; $name=($_POST['name']);$hp1=($_POST['hp1']); $hp2=($_POST['hp2']); $hp3=addslashes($_POST['hp3']); $email1=($_POST['email1']); $email2=($_POST['email2']);","   $nick=$_POST['nick'];","   $hp = $hp1.\"-\".$hp2.\"-\".$hp3;","   $email = $email1.\"@\".$email2;","","   $regist_day = date(\"Y-m-d (H:i)\");  // 현재의 '년-월-일-시-분'을 저장","   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장","","   include \"../lib/dbconn.php\";       // dconn.php 파일을 불러옴","","   $sql = \"select * from member where id='$id'\";","   $result = mysql_query($sql, $connect);","   $exist_id = mysql_num_rows($result);","\t","","   if($exist_id) {","     echo(\"","           <script>","             window.alert('해당 아이디가 존재합니다.')","             history.go(-1)","           </script>","         \");","         exit;","   }","   else","   {            // 레코드 삽입 명령을 $sql에 입력","\t    $sql = \"insert into member (id, pass, name, nick, hp, email, regist_day, level) \";","\t\t$sql = $sql. \"values('$id', '$pass', '$name', '$nick', '$hp', '$email', '$regist_day', 9)\";","","\t\tmysql_query($sql, $connect);  // $sql 에 저장된 명령 실행","\t","","   }","   ","","   mysql_close();                // DB 연결 끊기","   echo \"","\t\t","\t   <script>","\t   window.alert('가입이 완료됨')","\t    location.href = '../index.php';","\t   </script>","\t\";","?>","","   ",""],"id":5},{"start":{"row":0,"column":0},"end":{"row":90,"column":0},"action":"insert","lines":["<?","           session_start();","?>","<meta charset=\"euc-kr\">","<?","   // 이전화면에서 이름이 입력되지 않았으면 \"이름을 입력하세요\"","   // 메시지 출력","    $id=$_POST['id']; $pass=$_POST['pass'];","   if(!$id) {","     echo(\"","           <script>","             window.alert('아이디를 입력하세요.')","             history.go(-1)","           </script>","         \");","         exit;","   }","","   if(!$pass) {","     echo(\"","           <script>","             window.alert('비밀번호를 입력하세요.')","             history.go(-1)","           </script>","         \");","         exit;","   }","","   include \"../lib/dbconn.php\";","","   $sql = \"select * from member where id='$id'\";","   $result = mysql_query($sql, $connect);","","   $num_match = mysql_num_rows($result);","","   if(!$num_match) ","   {","     echo(\"","           <script>","             window.alert('등록되지 않은 아이디입니다.')","             history.go(-1)","           </script>","         \");","    }","    else","    {","        $row = mysql_fetch_array($result);","","        $db_pass = $row[pass];","","        if($pass != $db_pass)","        {","           echo(\"","              <script>","                window.alert('비밀번호가 틀립니다.')","                history.go(-1)","              </script>","           \");","","           exit;","        }","        else","        {\t","\t\t\t","","           $userid = $row[id];","\t\t   $username = $row[name];","\t\t   $usernick = $row[nick];","\t\t   $userlevel = $row[level];","","           $_SESSION['userid'] = $userid;","           $_SESSION['username'] = $username;","           $_SESSION['usernick'] = $usernick;","           $_SESSION['userlevel'] = $userlevel;","\t\t","","\t","","","// echo $_SESSION['pname'].\"님 로그인 되었습니다.\";","           echo(\"","              <script>","\t\t\t  ","\t\t\t\talert('로그인 성공.test')","                location.href = '../index.php';","              </script>","           \");","        }","   }          ","?>",""]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["<?","           session_start();","?>"],"id":6}],[{"start":{"row":3,"column":3},"end":{"row":4,"column":12},"action":"remove","lines":["// 이전화면에서 이름이 입력되지 않았으면 \"이름을 입력하세요\"","   // 메시지 출력"],"id":7}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["   "],"id":8}],[{"start":{"row":2,"column":2},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":9}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":37},"action":"remove","lines":["아이디를 입력하세요"],"id":10},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["i"]}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["d"],"id":11},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":[" "]}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["b"],"id":12}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["l"],"id":13}],[{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["a"],"id":14}],[{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["n"],"id":15}],[{"start":{"row":7,"column":34},"end":{"row":7,"column":35},"action":"insert","lines":["k"],"id":16},{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":["d"],"id":17}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":38},"action":"remove","lines":["비밀번호를 입력하세요"],"id":18},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["p"]}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["a"],"id":19}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["s"],"id":20}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["s"],"id":21}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["w"],"id":22}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["o"],"id":23}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["r"],"id":24}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["d"],"id":25}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":[" "],"id":26}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["b"],"id":27}],[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["l"],"id":28}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["n"],"id":30}],[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["k"],"id":31}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["e"],"id":32}],[{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["d"],"id":33}],[{"start":{"row":24,"column":2},"end":{"row":24,"column":31},"action":"remove","lines":[" include \"../lib/dbconn.php\";"],"id":34},{"start":{"row":24,"column":2},"end":{"row":25,"column":31},"action":"insert","lines":["$conn=mysqli_connect(\"127.0.0.1\",\"root\",\"1234\",\"c9\") or"," die( \"can't connect mysql.\"); "]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":[" "],"id":35}],[{"start":{"row":27,"column":25},"end":{"row":27,"column":31},"action":"remove","lines":["member"],"id":36},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["u"]}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["s"],"id":37}],[{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["e"],"id":38},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["r"]}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["i"],"id":39}],[{"start":{"row":28,"column":37},"end":{"row":28,"column":40},"action":"remove","lines":["ect"],"id":40}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["i"],"id":41}],[{"start":{"row":36,"column":27},"end":{"row":36,"column":41},"action":"remove","lines":["등록되지 않은 아이디입니다"],"id":42},{"start":{"row":36,"column":27},"end":{"row":36,"column":28},"action":"insert","lines":["n"]}],[{"start":{"row":36,"column":28},"end":{"row":36,"column":29},"action":"insert","lines":["o"],"id":43},{"start":{"row":36,"column":29},"end":{"row":36,"column":30},"action":"insert","lines":[" "]}],[{"start":{"row":36,"column":30},"end":{"row":36,"column":31},"action":"insert","lines":["i"],"id":44}],[{"start":{"row":36,"column":31},"end":{"row":36,"column":32},"action":"insert","lines":["d"],"id":45}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":21},"action":"insert","lines":["i"],"id":46}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":29},"action":"insert","lines":["w"],"id":47}],[{"start":{"row":45,"column":29},"end":{"row":45,"column":30},"action":"insert","lines":["o"],"id":48}],[{"start":{"row":45,"column":30},"end":{"row":45,"column":31},"action":"insert","lines":["r"],"id":49}],[{"start":{"row":45,"column":31},"end":{"row":45,"column":32},"action":"insert","lines":["d"],"id":50}],[{"start":{"row":51,"column":30},"end":{"row":51,"column":41},"action":"remove","lines":["비밀번호가 틀립니다."],"id":51},{"start":{"row":51,"column":30},"end":{"row":51,"column":31},"action":"insert","lines":["w"]}],[{"start":{"row":51,"column":31},"end":{"row":51,"column":32},"action":"insert","lines":["o"],"id":52},{"start":{"row":51,"column":32},"end":{"row":51,"column":33},"action":"insert","lines":["r"]}],[{"start":{"row":51,"column":32},"end":{"row":51,"column":33},"action":"remove","lines":["r"],"id":53}],[{"start":{"row":51,"column":31},"end":{"row":51,"column":32},"action":"remove","lines":["o"],"id":54}],[{"start":{"row":51,"column":31},"end":{"row":51,"column":32},"action":"insert","lines":["r"],"id":55}],[{"start":{"row":51,"column":32},"end":{"row":51,"column":33},"action":"insert","lines":["o"],"id":56}],[{"start":{"row":51,"column":33},"end":{"row":51,"column":34},"action":"insert","lines":["n"],"id":57}],[{"start":{"row":51,"column":34},"end":{"row":51,"column":35},"action":"insert","lines":["g"],"id":58}],[{"start":{"row":51,"column":35},"end":{"row":51,"column":36},"action":"insert","lines":[" "],"id":59}],[{"start":{"row":51,"column":36},"end":{"row":51,"column":37},"action":"insert","lines":["p"],"id":60},{"start":{"row":51,"column":37},"end":{"row":51,"column":38},"action":"insert","lines":["a"]}],[{"start":{"row":51,"column":38},"end":{"row":51,"column":39},"action":"insert","lines":["s"],"id":61}],[{"start":{"row":51,"column":39},"end":{"row":51,"column":40},"action":"insert","lines":["s"],"id":62}],[{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"insert","lines":["w"],"id":63},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"insert","lines":["o"]}],[{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"insert","lines":["r"],"id":64}],[{"start":{"row":51,"column":43},"end":{"row":51,"column":44},"action":"insert","lines":["d"],"id":65}],[{"start":{"row":67,"column":9},"end":{"row":72,"column":0},"action":"remove","lines":["  $_SESSION['userid'] = $userid;","           $_SESSION['username'] = $username;","           $_SESSION['usernick'] = $usernick;","           $_SESSION['userlevel'] = $userlevel;","\t\t",""],"id":66}],[{"start":{"row":67,"column":6},"end":{"row":67,"column":9},"action":"remove","lines":["   "],"id":67}],[{"start":{"row":70,"column":0},"end":{"row":71,"column":42},"action":"remove","lines":["","// echo $_SESSION['pname'].\"님 로그인 되었습니다.\";"],"id":68}],[{"start":{"row":69,"column":0},"end":{"row":70,"column":0},"action":"remove","lines":["",""],"id":69}],[{"start":{"row":68,"column":1},"end":{"row":69,"column":0},"action":"remove","lines":["",""],"id":70}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":1},"action":"remove","lines":["\t"],"id":71}],[{"start":{"row":67,"column":6},"end":{"row":68,"column":0},"action":"remove","lines":["",""],"id":72}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":17},"action":"remove","lines":["로그인 성공"],"id":73}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"remove","lines":["."],"id":74}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"remove","lines":["t"],"id":75}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"remove","lines":["e"],"id":76}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"remove","lines":["s"],"id":77}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"remove","lines":["t"],"id":78}],[{"start":{"row":71,"column":11},"end":{"row":71,"column":12},"action":"insert","lines":["l"],"id":79}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":13},"action":"insert","lines":["o"],"id":80}],[{"start":{"row":71,"column":13},"end":{"row":71,"column":14},"action":"insert","lines":["g"],"id":81}],[{"start":{"row":71,"column":14},"end":{"row":71,"column":15},"action":"insert","lines":["i"],"id":82}],[{"start":{"row":71,"column":15},"end":{"row":71,"column":16},"action":"insert","lines":["n"],"id":83}],[{"start":{"row":71,"column":16},"end":{"row":71,"column":17},"action":"insert","lines":[" "],"id":84}],[{"start":{"row":71,"column":17},"end":{"row":71,"column":18},"action":"insert","lines":["c"],"id":85},{"start":{"row":71,"column":18},"end":{"row":71,"column":19},"action":"insert","lines":["o"]}],[{"start":{"row":71,"column":19},"end":{"row":71,"column":20},"action":"insert","lines":["n"],"id":86}],[{"start":{"row":71,"column":20},"end":{"row":71,"column":21},"action":"insert","lines":["f"],"id":87}],[{"start":{"row":71,"column":21},"end":{"row":71,"column":22},"action":"insert","lines":["i"],"id":88}],[{"start":{"row":71,"column":22},"end":{"row":71,"column":23},"action":"insert","lines":["r"],"id":89}],[{"start":{"row":71,"column":23},"end":{"row":71,"column":24},"action":"insert","lines":["m"],"id":90}],[{"start":{"row":64,"column":5},"end":{"row":65,"column":30},"action":"remove","lines":["$usernick = $row[nick];","\t\t   $userlevel = $row[level];"],"id":91}],[{"start":{"row":64,"column":4},"end":{"row":64,"column":5},"action":"remove","lines":[" "],"id":92}],[{"start":{"row":64,"column":3},"end":{"row":64,"column":4},"action":"remove","lines":[" "],"id":93}],[{"start":{"row":64,"column":2},"end":{"row":64,"column":3},"action":"remove","lines":[" "],"id":94}],[{"start":{"row":64,"column":1},"end":{"row":64,"column":2},"action":"remove","lines":["\t"],"id":95}],[{"start":{"row":64,"column":0},"end":{"row":64,"column":1},"action":"remove","lines":["\t"],"id":96}],[{"start":{"row":63,"column":28},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":97}],[{"start":{"row":63,"column":27},"end":{"row":63,"column":28},"action":"remove","lines":[";"],"id":98}],[{"start":{"row":63,"column":27},"end":{"row":63,"column":28},"action":"insert","lines":[";"],"id":99}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":63,"column":28},"end":{"row":63,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-qqstring","mode":"ace/mode/php"}},"timestamp":1498210363769,"hash":"f7a3d9576d4fcba0444fef040dad5cfa918fabe9"}