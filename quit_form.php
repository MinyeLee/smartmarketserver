<?php session_start();?>
<meta charset="utf-8">
<?php
     include 'config.php';
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
        ('Error connecting to mysql');
        $dbname='test';
    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
          
   $sql = "select * from member where id='$_POST[id]'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysql_fetch_array($result);

        $db_pass = $row[pw];

        if($_POST[pw] != $db_pass)
        {
           echo("
              <script>
                window.alert('패스워드가 틀립니다.')
                history.go(-1)
              </script>
           ");

           exit;
        }
        else
        {
           echo("
               <script>
                window.alert('정말로 탈퇴하시겠습니까?')
                location.href = './home.php';
                </script>
           ");
           echo("<script>
                window.alert('탈퇴되셨습니다.')
                </script>
           ");   
           $sql="DELETE FROM member WHERE id='$_POST[id]'" ;
                   mysql_query($sql,$connect);
                   mysql_close();
                   
           unset($_SESSION['userid']);
           unset($_SESSION['usernick']);
           unset($_SESSION['userlevel']);     
        }
   }          
?>