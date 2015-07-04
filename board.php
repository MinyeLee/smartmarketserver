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

			<a href = "./write.php" type = "button" class = "btn btn-default" style = "float:right">글쓰기</a><br><br>
            <?php 
         include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
	        ('Error connecting to mysql');
	        $dbname='test';
	    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
	           
           $number=1;
            $rs=mysql_query("SELECT count(*) FROM mpk");
            $rw = mysql_num_rows($rs);
            if(!(isset($_GET["page"]))) $start = 0;
            else $start = ($_GET["page"]*10)-10;

            $re=mysql_query("SELECT * FROM board limit $start,10");

            echo"<div class='container'>
              <h2></h2>
              <p></p>            
              <table class='table table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>제목</th>
                    <th>이름</th>
                    <th>등록일자</th>
                    <th>내용</th>
                  </tr>
                </thead>
                <tbody>";
                
            while($result=mysql_fetch_array($re))
            {
                echo ("
                  <tr>
                    <td> $number </td>
                    <td> $result[title] </td>
                    <td> $result[nickname]</td>
                    <td> $result[date] </td>
                    <td><a class='btn btn-default' href='board_detail.php?id=$result[id]'>내용 보기</a></td>
                  </tr>
                  ");
                $number++;
            }
       
            mysql_close();
            ?>
            </tbody>
        </table>
    </div>
  <div class ="layout">
      <div class = "centre">
          <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="board.php?page=1" style="text-decoration:none">1</a></li>
            <li><a href="board.php?page=2" style="text-decoration:none">2</a></li>
            <li><a href="board.php?page=3" style="text-decoration:none">3</a></li>
            <li><a href="board.php?page=4" style="text-decoration:none">4</a></li>
            <li><a href="board.php?page=5" style="text-decoration:none">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>
        </div>
      <hr>

     
    </div><!--/.container-->

			
</body>
</html>