<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="./img/icon.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <title>Mash-Up Market에 오신것을 환영합니다</title> 
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Custom styles for this template -->
    <link href="css./carousel.css" rel="stylesheet">
    <link href="css./my_custom.css" rel="stylesheet">
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
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
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
                            <li><a href="./register_list.php">Mash-Up리스트</a></li>
                        </ul>
                    </li>
                    <li><a href="./administrator.php">관리자페이지</a></li>
                    <li><a href="./board.php">게시판</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <br><?php include "./top_login1.php";?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="./img/flower7.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to Mash up Market!</h1>
              <p>사용자 재가공이 가능한 방송콘텐츠기반Mash up 서비스를 위한 콘텐츠 포맷 미디어서버</p>
              <p><a class="btn btn-lg btn-primary" href="./mem_form.php" role="button">가입하기</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./img/flower4.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>for Developer</h1>
              <p>Mash up 서비스를 위한 공급자가 등록할 수 있는 콘텐츠 포맷 미디어서버</p>
              <p><a class="btn btn-lg btn-primary" href="./mem_form.php" role="button">가입하기</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./img/ba.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Connection</h1>
              <p>사용자와 공급자의 의견을 나누는 소통 공간</p>
              <p><a class="btn btn-lg btn-primary" href="./mem_form.php" role="button">가입하기</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="./images/eye_icon.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>아이언맨3</h2>
          <p>전문성을 갖춘 언론사 기자들로 구성된 추천단이 1달 여에 걸쳐 추천-리뷰-토론 등 3단계의 절차를 통해 업성한 앱을 소개합니다. 금주의 빛나는 콘텐츠 Top1</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./images/light_icon.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>빛나거나미치거나</h2>
          <p>전문성을 갖춘 언론사 기자들로 구성된 추천단이 1달 여에 걸쳐 추천-리뷰-토론 등 3단계의 절차를 통해 업성한 앱을 소개합니다. 금주의 빛나는 콘텐츠 Top2</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./images/me_icon.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>미생</h2>
          <p>전문성을 갖춘 언론사 기자들로 구성된 추천단이 1달 여에 걸쳐 추천-리뷰-토론 등 3단계의 절차를 통해 업성한 앱을 소개합니다. 금주의 빛나는 콘텐츠 Top3</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
  </body>
</html>
