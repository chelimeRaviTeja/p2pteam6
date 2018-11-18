<?php

$userid=$_SESSION["userid"];
require_once("DBConn.php");
session_start();
	$name=$_POST['name'];
	$author=$_POST['author'];
    $edition=$_POST['edition'];
    $isdn=$_POST['isbn'];
    $publisher=$_POST['publisher'];
    $category=$_POST['category'];
    $interest=$_POST['interest'];
    $sql="INSERT INTO ADDBOOKS"."(bookname,author,edition,category,rent,publisher,image,userid)"."VALUES"."('$name','$author','$edition','$category','$interest',$publisher','$image','$userid')";
    $retval=mysql_query($conn,$sql);

    
mysqli_close($conn);
session_destroy();
?>