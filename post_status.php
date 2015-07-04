<?php
 	include 'config.php'; 
      $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
      ('Error connecting to mysql');
      $dbname='test';
      mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');
 	    $my_name = $_REQUEST['postname'];
      $my_status = isset($_POST['poststatus'])?htmlspecialchars($_POST['poststatus']) : null;
      $query = "UPDATE mpk set checkinfo='$my_status' where name='$my_name'";
      mysql_query($query);
?>