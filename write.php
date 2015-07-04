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
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
 #mydiv{
    display: table-cell;
 }
 label, textarea{
    display: inline-block;
    vertical-align: top;
 }
 div.layout
{
  float:right;
  text-align: right;
}
div.centre
{
  float:right;
  text-align: right;
  width: 400px;
  display: block;
}
</style>
<script language='JavaScript'>
    function textCounter(field, countfield, maxlimit) {
    if (field.value.length > maxlimit){ 
    field.value = field.value.substring(0, maxlimit);
    // 남은글자수  카운터 부분
    }
    else {
    countfield.value = maxlimit - field.value.length;
    }
    }

</script>
<body>
<?php 
    include 'config.php';
       
    $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
    ('Error connecting to mysql');
    $dbname='test';
    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
    if(isset($_POST['submit']))
    {
     $title = $_POST['title'];
     $contents = $_POST['content'];
     $nickname = $_SESSION['userid']; 
     date_default_timezone_set('Asia/Seoul');
	   $date = date('m/d/Y h:i:s a', time());
     $query = "insert into board(title, contents, nickname, date)values('$title','$contents','$nickname','$date')";
     mysql_query($query, $connect);
 }
   ?>
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
  <div class="blog-post">
            <h2 class="blog-post-title">글쓰기</h2>
            <p class="blog-post-meta"><a href="#"></a></p>
            <form name='my_form' method='post' action='./write.php'>
 			<br>
    
        <div class='form-group'>
            <label for='title'>제목*</label>
            <input type='text' class='form-control' id='title' name='title' onKeyDown='textCounter(this.form.title,this.form.remLen0,45);'onKeyUp='textCounter(this.form.title,this.form.remLen0,45);'>
            <input type='text' name='remLen0' size='1' maxlength='3' value='45' readonly style='border:none'><font size = '2'>/45자 남음</font>
        </div>
  
        <div class='form-group'>
            <label for='content'>내용*</label>
              <textarea class='form-control' rows='5' id='content' name='content'  oonKeyDown='textCounter(this.form.content,this.form.remLen1,4000);' 
            onKeyUp='textCounter(this.form.content,this.form.remLen1,4000);'></textarea>
            <input type='text' name='remLen1' size='1' maxlength='3' value='4000' readonly style='border:none'><font size = '2'>/4000자 남음</font>
        </div>

    
         
  <div class ="layout">
        <div class = "centre">
        <a href = './board.php' type='button' name = "back" class="btn btn-warning" >뒤로 가기</a>
        <a href = './board.php' type='button' name = "cancel" class="btn btn-success" >취소</a>
        <input type='submit' name = "submit" class="btn btn-primary btn-primary" value = '등록'>
        </form>
        </div>
        </div>
      <hr>

    </div><!--/.container-->

			
</body>
</html>