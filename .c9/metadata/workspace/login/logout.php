{"filter":false,"title":"logout.php","tooltip":"/login/logout.php","undoManager":{"mark":34,"position":34,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["<?","  session_start();","  unset($_SESSION['userid']);","  unset($_SESSION['username']);","  unset($_SESSION['usernick']);","  unset($_SESSION['userlevel']);","","  echo(\"","       <script>","          location.href = '../index.php'; ","         </script>","       \");","?>",""],"id":1}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"],"id":2}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":5},"action":"insert","lines":["[]"],"id":3}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":5},"action":"remove","lines":["[]"],"id":4}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":5}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"],"id":6}],[{"start":{"row":3,"column":31},"end":{"row":4,"column":31},"action":"remove","lines":["","  unset($_SESSION['usernick']);"],"id":7}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":2},"action":"insert","lines":["  "],"id":8}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["s"],"id":9}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["e"],"id":10}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["t"],"id":11}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["c"],"id":12}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["o"],"id":13}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["o"],"id":14}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["k"],"id":15}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["i"],"id":16}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["e"],"id":17}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":13},"action":"insert","lines":["()"],"id":18}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":13},"action":"remove","lines":["setcookie()"],"id":19},{"start":{"row":5,"column":2},"end":{"row":7,"column":54},"action":"insert","lines":["setCookie('userid', '$userid', time()+(60*60));","         setCookie('admin', '$userlevel', time()+(60*60));","         setCookie('name', $username, time()+(60*60));"]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":[" "],"id":20}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":6},"action":"remove","lines":["  "],"id":21}],[{"start":{"row":6,"column":2},"end":{"row":6,"column":4},"action":"remove","lines":["  "],"id":22}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":2},"action":"remove","lines":["  "],"id":23}],[{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"remove","lines":[" "],"id":24}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":6},"action":"remove","lines":["  "],"id":25}],[{"start":{"row":7,"column":2},"end":{"row":7,"column":4},"action":"remove","lines":["  "],"id":26}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":2},"action":"remove","lines":["  "],"id":27}],[{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":["+"],"id":28}],[{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"insert","lines":["-"],"id":29}],[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"remove","lines":["+"],"id":30}],[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":["-"],"id":31}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"remove","lines":["+"],"id":32}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":["-"],"id":33}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["'"],"id":34}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["'"],"id":35}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":31},"end":{"row":7,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1498221070559,"hash":"3d81974ad367582746579aa637fece7e46dd68b7"}