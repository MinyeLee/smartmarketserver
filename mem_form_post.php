<?php session_start();?>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>가입축하메세지</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css./cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link href="css./my_custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<?php 
         include 'config.php';
      $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
        ('Error connecting to mysql');
        $dbname='test';
    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
           

    if(isset($_POST['submit']))
    {
      $id = $_POST['id'];
      $pw = $_POST['pw'];
      $pw_check = $_POST['pw_check'];
      $nickname = $_POST['nickname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $male= $_POST['inlineRadioOptions'];
      $job = $_POST['job'];
      $addr = isset($_POST['addr'])?($_POST['addr']):null;
      $type = isset($_POST['type'])?($_POST['type']):null;

        if($pw != $pw_check) 
        {
        echo("
              <script>
                window.alert('비밀번호가 일치하지 않습니다. 다시 입력해주세요')
                history.go(-1)
              </script>
            ");
        }

        else
        {
          $sql = "select * from member where id='$_POST[id]'";
          $result = mysql_query($sql, $connect);
          $row = mysql_fetch_array($result);
          $db_id = $row[id];
          $db_nick = $row[nickname];

          if($db_id == $id)
          {
            echo("
                  <script>
                    window.alert('이미 등록된 아이디입니다.')
                    history.go(-1)
                  </script>
                ");
          }
          elseif($db_nick == $nickname)
          {
            echo("
                  <script>
                    window.alert('이미 등록된 닉네임입니다.')
                    history.go(-1)
                  </script>
                ");
          }

          else
          {
              $query = "insert into member(id, pw, pw_check,nickname, phone, email, male,job, addr, my_type)values('$id','$pw','$pw_check','$nickname','$phone','$email','$male','$job','$addr','$type')";
              mysql_query($query, $connect);
              mysql_close();
            ?>       
           <div class="site-wrapper">

                <div class="site-wrapper-inner">

                  <div class="cover-container">

                    <div class="masthead clearfix">
                      <div class="inner">
                        <h3 class="masthead-brand"></h3>
                        <nav>
                          <ul class="nav masthead-nav">
                            <li class="active"><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>

                    <div class="inner cover">
                      <h1 class="cover-heading">가입을 축하드립니다</h1>
                      <p class="lead">저희 Mash-Up 마켓을 이용해주세요</p>
                      <p class="lead">
                        <a href="./home.php" class="btn btn-lg btn-default">Mash-Up 마켓 바로가기</a>
                      </p>
                    </div>

                    <div class="mastfoot">
                      <div class="inner">
                       
                      </div>
                    </div>

                  </div>

                </div>

              </div>
<?php     }
        }          
    }
?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>