<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>가입 페이지</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">	
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
    <h1>회원가입</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form  method='post' action='mem_form_post.php'>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>필수 입력란</strong></div>
                <div class="form-group">
                    <label for="name">아이디 (4~12자의 영문 소문자, 숫자만 사용할 수 있습니다.)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="id" id="name"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw">비밀번호 (8자리이상)</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pw" name="pw" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw_check">비밀번호 확인</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pw_check" name="pw_check" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname">닉네임</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nickname" id="nickname"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">전화번호</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="phone" name="phone" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email">이메일</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                	<label for="inlineRadioOptions">성별</label><br>
                    <label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="남자">남자
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="여자">여자
					</label>
                </div>
                <div class="form-group">
                    <label for="job">직업</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="job" id="job">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="addr">주소</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="addr" name="addr">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                	<label for="type">유형</label><br>
                    <label class="radio-inline">
					  <input type="radio" name="type" id="type" value="사용자">사용자
					</label>
					<label class="radio-inline">
					  <input type="radio" name="type" id="type1" value="판매자">판매자
					</label>
					<label class="radio-inline">
					  <input type="radio" name="type" id="type2" value="관리자">관리자
					</label>
                </div>           
                <input type="submit" name="submit" id="submit" value="가입하기" class="btn btn-info pull-right">
            </div>
        </form>
        
    </div>
</div>
<!-- Registration form - END -->
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