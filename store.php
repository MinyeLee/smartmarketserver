<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Mash-Up마켓</title>
  <link rel="icon" type="image/png" href="./img/icon.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
.admin{
      float:top;
    }
input.search-query {
    padding-left:26px;
}
form.form-search {
    position: relative;
}
form.form-search:before {
    display: block;
    width: 14px;
    height: 14px;
    content: "\e003";
    font-family: 'Glyphicons Halflings';
    background-position: -48px 0;
    position: absolute;
    top:8px;
    left:8px;
    opacity: .5;
    z-index: 1000;
}
</style>
  <script>
    $(function() {
        $('.modal').on('hidden.bs.modal', function(){
            $(this).removeData('bs.modal');
        });
    });
   
    var comMsg = function(xml){
  $("contents",xml).each(function(i) {
    $(this).find("name").text();
    $(this).find("phone").text();
  });   
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

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
            <div class="row">
          <?php 
          include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
          ('Error connecting to mysql');
          $dbname='test';
          mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');

            $number=1;
            $rs=mysql_query("SELECT count(*) FROM mpk where checkinfo = '등록완료'");
            $rw = mysql_num_rows($rs);
            if(!(isset($_GET["page"]))) $start = 0;
            else $start = ($_GET["page"]*9)-9;

            if((isset($_GET["cate"]))){
            	if($_GET["cate"] =="edu"){$my_cate = "교육";}
	            else if($_GET["cate"] =="info"){$my_cate = "정보";}
	            else if($_GET["cate"] =="life"){$my_cate = "라이프스타일";}
	            else if($_GET["cate"] =="ani"){$my_cate = "만화";}
	            else if($_GET["cate"] =="media"){$my_cate = "미디어 및 동영상";}
	            else if($_GET["cate"] =="business"){$my_cate = "비즈니스";}
	            else if($_GET["cate"] =="productivity"){$my_cate = "생산성";}
	            else if($_GET["cate"] =="sports"){$my_cate = "스포츠";}
	            else if($_GET["cate"] =="entertainment"){$my_cate = "엔터테인먼트";}
	            else {$my_cate = "의료";}

            	 $re=mysql_query("SELECT * FROM mpk where category like '$my_cate'&& checkinfo = '등록완료' limit $start,9 ");
            }
            else{
            	$re=mysql_query("SELECT * FROM mpk where checkinfo = '등록완료' limit $start,9 ");
            } 
  
            while($result=mysql_fetch_array($re))
            {
                echo ("
                  <div class='col-xs-6 col-lg-4'>
                  <br><br>
                  <p><img src = '$result[icon]' width = 200 height =200 class='img-rounded'></p>
                  <h4>$result[name]</h4>
                  <p><a class='btn btn-default'  href='remote_store.php?id=$result[id]' role='button' data-toggle='modal' data-target='#myModal'>View details &raquo;</a></p>
                  </div>
                  ");
            } 
            
          echo"</div>
        </div>
        <div class='col-xs-6 col-sm-3 sidebar-offcanvas' id='sidebar'>
        <form method ='get' action='./store_search.php'>
        <div style='padding-bottom:15px; padding-top:1px'>
            <form class='form-search form-inline'>
                <div class='input-group'>
                    <input type='text' name = 'term' class='form-control search-query' placeholder='Search...'' /> <span class='input-group-btn'>
                    <button type='submit' id = 'submit' name = 'submit' class='btn btn-primary'> Search</button>
                    </span>

                </div>
            </form>
        </div>
        </form>";
         mysql_close();
            ?>  
          <div class="list-group">
            <a href="store.php?" class="list-group-item active">전체</a>
            <a href="store.php?cate=edu" class="list-group-item">교육</a>
            <a href="store.php?cate=info" class="list-group-item">정보</a>
            <a href="store.php?cate=life" class="list-group-item">라이프스타일</a>
            <a href="store.php?cate=ani" class="list-group-item">만화</a>
            <a href="store.php?cate=media" class="list-group-item">미디어 및 동영상</a>
            <a href="store.php?cate=business" class="list-group-item">비즈니스</a>
            <a href="store.php?cate=productivity" class="list-group-item">생산성</a>
            <a href="store.php?cate=sports" class="list-group-item">스포츠</a>
            <a href="store.php?cate=entertainment" class="list-group-item">엔터테인먼트</a>
            <a href="store.php?cate=hospital" class="list-group-item">의료</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>
      <div class ="layout">
      <div class = "centre">
        <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="store.php?page=1" style="text-decoration:none">1</a></li>
            <li><a href="store.php?page=2" style="text-decoration:none">2</a></li>
            <li><a href="store.php?page=3" style="text-decoration:none">3</a></li>
            <li><a href="store.php?page=4" style="text-decoration:none">4</a></li>
            <li><a href="store.php?page=5" style="text-decoration:none">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>
        </div>
      <footer>
       
      </footer>

    </div><!--/.container-->

 <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div> <!-- /.modal-content -->
      </div> <!-- /.modal-dialog -->
  </div> <!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
   
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
  </body>

</html>
