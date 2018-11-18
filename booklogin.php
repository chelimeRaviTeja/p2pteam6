<?php
require_once("DBConn.php");
session_start();
$name = $_POST['username'];
$password = $_POST['password'];
$c = 0;
 $sql = 'SELECT *  FROM signup';

 $retval = mysql_query($sql, $conn);
 if(! $retval ){
     die('could not get data: '.mysql_error());
 }
 while($row = mysql_fetch_array($retval,MYSQL_ASSOC)){
  
     if($row['username']==$name && $row['password']==$password)
     {

       
         
          $_SESSION['userid']=$name;
        
         
          header('Location: home.html');
           exit;
        }
 }
 
  
?>