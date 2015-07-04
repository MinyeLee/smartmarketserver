<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>상품 등록 페이지</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="twitter-bootstrap-dev/docs/assets/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="twitter-bootstrap-dev/docs/assets/css/docs.css" rel="stylesheet" media="screen">
<link href="twitter-bootstrap-dev/docs/assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="./img/icon.png" />
<!--file input <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"><script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>-->

<link href="./css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/fileinput.js" type="text/javascript"></script>
<link href="css./my_custom.css" rel="stylesheet">
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
            <h2 class="blog-post-title">상품등록페이지</h2>
            <p class="blog-post-meta"><a href="#"></a></p>
           
 <?php 
         include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
        ('Error connecting to mysql');
        $dbname='test';
    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
    if(isset($_POST['submit']))
    {
     $name = $_POST['name'];
     $short_description = $_POST['short_description'];
     $long_description = $_POST['long_description'];
     $app_type = $_POST['app_type'];
     $video = $_POST['video'];
     $category = $_POST['category'];
     $developer= $_POST['developer'];
     $email = $_POST['email'];
     $phone = isset($_POST['phone'])?($_POST['phone']):null;
     $video = isset($_POST['video'])?($_POST['video']):null;

   //uploading icon
    $filename = $_FILES["icon"]["name"];
    $path = "./images";
    move_uploaded_file($_FILES["icon"]["tmp_name"],$path."/".$filename);
    $mysql_path = $path."/".$filename;
    $query = "insert into mpk(name, short_description, long_description,app_type, category, developer, email, phone, video, icon)values('$name','$short_description','$long_description','$app_type','$category','$developer','$email','$phone','$video','$mysql_path')";
    mysql_query($query, $connect);

  if(isset($_FILES['img']['name']))
    {
        //$file_name_all="";
        for($i=0; $i<count($_FILES['img']['name']); $i++) 
        {
               $tmpFilePath = $_FILES['img']['tmp_name'][$i];    
               if ($tmpFilePath != "")
               {    
                   //$path = "./images"; // create folder 
                   $my_filename = $_FILES['img']['name'][$i];
                   //$size = $_FILES['img']['size'][$i];

                   // list($txt, $ext) = explode(".", $name);
                   // $file= time().substr(str_replace(" ", "_", $txt), 0);
                   // $info = pathinfo($file);
                   // $filename = $file.".".$ext;

                   move_uploaded_file($_FILES['img']['tmp_name'][$i], $path."/".$my_filename); 
                   $my_path = $path."/".$my_filename;
                   switch($i){
                       case 0:$my_query = "UPDATE mpk set img1='$my_path' where name='$name'";
                   mysql_query($my_query,$connect);break;
                       case 1:$my_query = "UPDATE mpk set img2='$my_path' where name='$name'";
                   mysql_query($my_query,$connect);break;
                       case 2:$my_query = "UPDATE mpk set img3='$my_path' where name='$name'";
                   mysql_query($my_query,$connect);break;
                       case 3:$my_query = "UPDATE mpk set img4='$my_path' where name='$name'";
                   mysql_query($my_query,$connect);break;
                       case 4:$my_query = "UPDATE mpk set img5='$my_path' where name='$name'";
                   mysql_query($my_query,$connect);break;
                        default: break;
                   }     
             }
        }//for

    }

    }
   ?>
 <form name='mpk' method='post' action='register.php' enctype='multipart/form-data'>
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
                <div class='form-group'>
                    <label for= 'test-upload'>상품 대표 아이콘*</label> 
                    <input type='file' class='file' name = 'icon' id='icon' multiple>
                    <div id='errorBlock' class='help-block'></div>
                </div>
                <div class='form-group'>
                    <label for='file-5'>상품 설명 이미지</label><br>
                    <font size = "2">최대 5개까지 스크린샷을 업로드 할 수 있습니다.
                    </font>
                    <input id='img' name = 'img[]' class='file' type='file' multiple=true data-preview-file-type='any' data-upload-url='#'>
                </div>
        </div>
    
        <div class='form-group'>
                <label for='video'>상품 설명 동영상</label>
                <input type='text' class='form-control' id='video' name='video'>
        </div>
        <font size = '2'>YouTube동영상 URL을 입력하세요.</font><br><br><br>
        <font size = '4'>카테고리</font><br><br> 
        <div class='form-group'>
                <label for='app_type'>상품 분류*</label>
                <input type='text' class='form-control' id='app_type' name='app_type'>
        </div>
        <div class='form-group'>
        <label for='category'>상품 유형*</label>
            <select class='form-control' id='category' name='category' width='41' style = 'width:170px'>
            <option value='교육'>교육</option>
            <option value='정보'>정보</option>
            <option value='라이프스타일'>라이프스타일</option>
            <option value='만화'>만화</option>
            <option value='미디어 및 동영상'>미디어 및 동영상</option>
            <option value='비즈니스'>비즈니스</option>
            <option value='생산성'>생산성</option>       
            <option value='스포츠'>스포츠</option>
            <option value='엔터테인먼트'>엔터테인먼트</option>
            <option value='의료'>의료</option>    
            </select>
        </div><br><br>
        <font size = '4'>MPK</font><br><br>
        <div class='form-group'>
                        <label for= 'mpk'>상품콘텐츠*</label> 
                        <input type='file' class='file' id='mpk' multiple>
                        <div id='errorBlock' class='help-block'></div>
        </div>
        <br><br><br>
        <font size = '4'>연락처 세부사항</font><br><br>
        <div class='form-group'>
                <label for='developer'>판매자명*</label>
                <input type='text' class='form-control' id='developer' name='developer'>
        </div>
        <div class='form-group'>
                <label for='email'>판매자 이메일*</label>
                <input type='text' class='form-control' id='email' name='email'>
                <font size = "2">회원 가입시 적은 이메일 주소를 입력해주세요. 이 주소는 앱과 함께 공개적으로 표시됩니다.</font>
        </div>
        <div class='form-group'>
                <label for='phone'>판매자 전화번호*</label>
                <input type='text' class='form-control' id='phone'  name='phone'>
        </div>
        <div class ="layout">
        <div class = "centre">
        <input type='submit' name = "submit" class="btn btn-primary btn-primary" value = '상품등록'>
        </form>
        </div>
        </div>
              </div>
        <hr>
       <footer>
       </footer>

    </div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="twitter-bootstrap-dev/docs/assets/js/bootstrap.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
