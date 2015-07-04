<?php session_start();?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>자유게시판</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="icon" type="image/png" href="./img/icon.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="css./my_custom.css" rel="stylesheet">
<style type="text/css">
  .bs-example{
      margin: 20px;
    }
div.layout
{
  text-align: right;
}
div.centre
{
  text-align: right;
  width: 300px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
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
<div class="container">
      <div class="blog-header">
        <h1 class="blog-title"></h1>
        <p class="lead blog-description"></p>
      </div>

          <div class="blog-post">
            <h2 class="blog-post-title">자유게시판</h2>
            <p class="blog-post-meta"><a href="#"></a></p>

			<br><br>
            <?php 
         include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
	        ('Error connecting to mysql');
	        $dbname='test';
	    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
	           
      $order = "SELECT * FROM board where id='$_GET[id]'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
    
  echo"
	   		<div class='form-group'>
	            <label for='name'>제목</label>
	            <input type='text' class='form-control' id='name' name='name' value = '$row[title]'>
	        </div>
	        <div class='form-group'>
	            <label for='long_description'>내용</label>
	              <textarea class='form-control' rows='5'>$row[contents]</textarea>
	        </div>

  <form> ";?>
      
     
    
 		<div class ="layout">
        <div class = "centre" style = "float:right">
        <a href = './board.php' type='button' name = "back" class="btn btn-warning">뒤로 가기</a>
        </form>
        </div>
        </div>
    
    </div><!--/.container-->

			
</body>
</html>