<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Remote file for Bootstrap Modal</title>  
  <script type = "text/javascript" src = "jquery.js"></script>
</head>
<script type = "text/javascript">
function post_value()
{
  var status = $('#status').val();
  var name = $('#pl').val();
  $.post('post_status.php',{poststatus: status, postname: name}, 
  function(data)
  {
   $('#result').html(data); 
  // alert(status);
  });
}
function CloseMe()
{
    window.opener.location.reload();
    window.close();
}  
</script>
<body>
  <?php
         include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
          ('Error connecting to mysql');
          $dbname='test';
          mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
          $order = "SELECT * FROM mpk where id='$_GET[id]'";
          $result = mysql_query($order);
          $row = mysql_fetch_array($result);
    
  echo"
  <form> 
  <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                 <h4 class='modal-title'>상품정보관리</h4>
            </div>			
            <div class='modal-body'>
            <form method='POST' action = './administrator.php' >
             <p style = 'float:left'><img STYLE='margin-left: 60px; margin-right: 50px; margin-top: 40px; WIDTH:250px; HEIGHT:250px ' src='$row[icon]' class='img-rounded' alt='IMG not registered'></p>
                    <p>
                           <label class='col-sm-2 control-label' for='lg' style = 'margin-top:40px '>상품명</label>
                          <div class='col-sm-4' style = 'margin-top:30px'>
                            <input class='form-control' id = 'pl' type='text' id='lg' value='$row[name]'>
                          </div>
                            <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>상품 분류</label>
                          <div class='col-sm-4' style = 'margin-top:20px'>
                            <input class='form-control' type='text' id='lg' value='$row[app_type]'>
                          </div>
                            <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>상품 유형</label>
                          <div class='col-sm-4' style = 'margin-top:20px' >
                            <input class='form-control' type='text' id='lg' value='$row[category]'>
                          </div>
                            <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>등록일자</label>
                          <div class='col-sm-4' style = 'margin-top:20px' >
                            <input class='form-control' type='text' id='lg' value='$row[date]'>
                          </div>
                            <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>판매자명</label>
                          <div class='col-sm-4' style = 'margin-top:20px'>
                            <input class='form-control' type='text' id='lg' value='$row[developer]'>
                          </div>
                    </p>       
                  </div>
                  <div>
                  
                    <p style = 'float:left'>
                      <img STYLE='margin-left: 40px; margin-top: 20px; WIDTH:150px; HEIGHT:250px ' src='$row[img1]'class='img-rounded' ";?>  onError="this.src = './img/placeholder.jpg'"> <?php echo"
                      <img STYLE='margin-left: 10px; margin-top: 20px; WIDTH:150px; HEIGHT:250px 'src='$row[img2]'class='img-rounded' ";?>  onError="this.src = './img/placeholder.jpg'"> <?php echo"
                      <img STYLE='margin-left: 10px; margin-top: 20px; WIDTH:150px; HEIGHT:250px 'src='$row[img3]' class='img-rounded' ";?>  onError="this.src = './img/placeholder.jpg'"> <?php echo"
                      <img STYLE='margin-left: 10px; margin-top: 20px; WIDTH:150px; HEIGHT:250px ' src='$row[img4]'class='img-rounded' ";?>  onError="this.src = './img/placeholder.jpg'"> <?php echo"
                      <img STYLE='margin-left: 10px; margin-top: 20px; WIDTH:150px; HEIGHT:250px '' src='$row[img5]'class='img-rounded' ";?>  onError="this.src = './img/placeholder.jpg'"> <?php echo"
                  </p>

                  </div>
                  <div>
                    <p style = 'float:right; margin-right: 50px'>
                   <b>상품 설명 이미지</b>
                    </p>
                   
                  </div>
                  <div>
                        
                        <p class'muted'>
                        <label class='col-sm-2 control-label' for='lg'style = 'float:left; margin-top: 50px'>상품 요약 설명</label>
                        <div class='col-sm-10'>
                        <input class='form-control' style = 'margin-top:20px; margin-bottom:10px' type='text' id='lg' value='$row[short_description]'>
                        </div>
                        </p>

                        <p class = 'muted'>
                        <form role = 'form'>
                        <div class='form-group'>
                        <label for = 'desc' style = 'float:left; margin-top: 50px; margin-left: 15px; margin-right:55px'>상품 상세 설명</label>
                        <textarea class= 'form-control' rows = '4' style = 'width: 80%; margin-top: 60px; margin-left: 10px'>$row[long_description]</textarea>
                        </div>
                        </form>
                        </p>

                        <p class='muted'>
                        <label class='col-sm-2 control-labe' for='lg' style = 'margin-top:20px'>상품 설명 동영상</label>
                        <div class='col-sm-4' style = 'margin-top:20px'>
                        <input class='form-control' type='text' id='lg' value='$row[video]'>
                        </div>
                        <p class='muted'>
                        <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>판매자 이메일</label>
                        <div class='col-sm-4' style = 'margin-top:20px'>
                        <input class='form-control' type='text' id='lg' value='$row[email]'>
                        </div>
                        <p class='muted'>
                        <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>판매자 전화번호</label>
                        <div class='col-sm-4' style = 'margin-top:20px'>
                        <input class='form-control' type='text' id='lg' value='$row[phone]'>
                        </div>
                        </p>
                        <p style = 'float:right'>
                        <div>
                        
                         <label class='col-sm-2 control-label' for='lg' style = 'margin-top:20px'>상품 상태</label>
                          <label>
                           <select class='form-control' id = 'status' name = 'status' style='width:270px; flat:right; margin-top:20px; margin-left:15px'>
                            <option value='검수요청'>검수요청</option>
                            <option value='미검수'>미검수</option>
                            <option value='등록완료'>등록완료</option>
                        </select>
                          </label>
                        </div>
                        
                        </p>
                     
            </div>			
            <div class='modal-footer'>
             <a href='#' class='btn btn-success btn-large' style = 'margin:right:100px' style = 'margin-top:100px'>Try Download</a>
                <button type='button' class='btn btn-default' data-dismiss='modal' function = 'CloseMe()'>Close</button>
                <button type='submit' id = 'execute' name = 'execute' class='btn btn-primary'  onclick='post_value()'>Save changes</button>
            </div>		
        </div>   
    </form>  
</body>";?>
</html>