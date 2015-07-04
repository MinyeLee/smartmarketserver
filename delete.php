<?php session_start();?>
<?php 
         include 'config.php';
       
          $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die
	        ('Error connecting to mysql');
	        $dbname='test';
	    mysql_select_db($dbname) or die ('Couldn\'t open the database $dbname');   
      $order = "DELETE FROM mpk where id='$_GET[id]'";
      $result = mysql_query($order);
      ?>
   