<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>회원탈퇴 페이지</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .bs-example{
      margin: 20px;
    }
div.layout
{
  text-align: center;
}
div.centre
{
  text-align: left;
  width: 300px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./home.php">Mash-Up Market</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="./store.php">스토어</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">개발자<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="./register.php">Mash-Up등록</a></li>
                            <li><a href="#">Mash-Up리스트</a></li>
                        </ul>
                    </li>
                    <li><a href="./administrator.php">관리자페이지</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <br><?php include "./top_login1.php";?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div class="container">

<div class="page-header">
    <h1>회원탈퇴</h1>
</div>

<!-- Quit form - START -->
<!DOCTYPE html>
    <div class="container">

      <form method="post" action="quit_form.php" class="form-signin" >
        <h4 class="form-signin-heading"><strong>아이디와 패스워드를 입력하세요</strong></h4>

        <label for="id" class="sr-only">Id</label>
        <input type="text" name="id" class="form-control" placeholder="아이디" required autofocus><br>

        <label for="pw" class="sr-only">Password</label>
        <input type="text" name="pw" class="form-control" placeholder="패스워드" required><br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">탈퇴하기</button><br>
      </form>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<!-- Quit form - END -->
   <hr>
       <footer>
       </footer>
</div>
 <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
</body>
</html>