<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>상품 등록 페이지</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link href="twitter-bootstrap-dev/docs/assets/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="twitter-bootstrap-dev/docs/assets/css/docs.css" rel="stylesheet" media="screen">
<link href="twitter-bootstrap-dev/docs/assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 
<!--file input <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"><script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>-->

<link href="./css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/fileinput.js" type="text/javascript"></script>

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
// $("#input-702").fileinput({
//     uploadUrl: "' . Url::to(['/site/file-upload']) . '"
//     maxFileCount: 10,
//     overwriteInitial: false,
//     initialPreview: [
//         '<img src="http://www.kodyaz.com/photos/windows_8/images/34677/secondarythumb.aspx " class="file-preview-image">',
//         '<img src="http://www.kodyaz.com/photos/windows_8/images/34676/secondarythumb.aspx " class="file-preview-image">',
//     ],
//     initialPreviewConfig: [
//         {caption: "Desert.jpg", width: "120px", url:"/site/file-delete", key:1},
//         {caption: "Tulips.jpg", width: "120px", url:"/site/file-delete", key:2}
//     ],
// });
</script>
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
                <a class="navbar-brand" href="#">홈</a>
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
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">계정<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">가입하기</a></li>
                            <li><a href="#">정보수정</a></li>
                            <li class="divider"></li>
                            <li><a href="#">회원탈퇴</a></li>
                        </ul>
                    </li>
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

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">상품등록페이지</h2>
            <p class="blog-post-meta"><a href="#"></a></p>
           
 <?php 
 
     include 'config.php';
     include 'opentest.php';

 
    if(isset($_POST['submit']))
    {
     $name = $_POST['name'];
     $query = "insert into mpk(name)values('$name')";
    // mysql_query($query, $connect);
    }
   ?>
 <form name='mpk' method='post' action='./pr.php' enctype='multipart/form-data'>
 <br>
    <font size = '4'>제품 세부정보</font>
    <div style='text-align:right'><font size = '2'>별표 표시*는 필수 입력란임</font></div>
    <br><br>
        <div class='form-group'>
            <label for='name'>상품명*</label>
            <input type='text' class='form-control' id='name' name='name' onKeyDown='textCounter(this.form.name,this.form.remLen0,45);'onKeyUp='textCounter(this.form.name,this.form.remLen0,45);'>
            <input type='text' name='remLen0' size='1' maxlength='3' value='45' readonly style='border:none'><font size = '2'>/45자 남음</font>
        </div>
         <div class='form-group'>
            <label for='short_description'>상품 요약 설명*</label>
            <input type='text' class='form-control' id='short_description' name = 'short_description' onKeyDown='textCounter(this.form.short_description,this.form.remLen,80);' 
            onKeyUp='textCounter(this.form.short_description,this.form.remLen,80);'>
            <input type='text' name='remLen' size='1' maxlength='3' value='80' readonly style='border:none'><font size = '2'>/80자 남음</font>
        </div>
        <div class='form-group'>
            <label for='long_description'>상품 상세 설명*</label>
              <textarea class='form-control' rows='5' id='long_description' name='long_description'  oonKeyDown='textCounter(this.form.long_description,this.form.remLen1,4000);' 
            onKeyUp='textCounter(this.form.long_description,this.form.remLen1,4000);'></textarea>
            <input type='text' name='remLen1' size='1' maxlength='3' value='4000' readonly style='border:none'><font size = '2'>/4000자 남음</font>
        </div>
         <font size = '4'>그래픽 저작물</font><br><br>
            <form enctype='multipart/form-data'>
                <div class='form-group'>
                    <label for= 'test-upload'>상품 대표 아이콘*</label> 
                    <input type='file' class='file' id='icon' multiple>
                    <div id='errorBlock' class='help-block'></div>
                </div>
                <div class='form-group'>
                    <label for='file-5'>상품 설명 이미지</label>
                    <input id='img' class='file' type='file' multiple=true data-preview-file-type='any' data-upload-url='#'>
                </div>
            </form>
        </div>
        <input type='submit' name = "submit" class='btn btn-default' value = '상품등록'>
        </form>
        </body>
        </html>