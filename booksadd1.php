<?php
$userid=$_SESSION["userid"];
require_once("DBConn.php");
session_start();
	$name=$_POST['username'];
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];
    $edition=$_POST['edition'];
    $isdn=$_POST['isbn'];
    $publisher=$_POST['publisher'];
    $category=$_POST['category'];
    $rent=$_POST['rent'];
    $publisher=$_POST['publisher'];
    $image=$_POST['image'];
    $sql="INSERT INTO ADDBOOKS"."(usrname,bookname,author,edition,category,rent,publisher,image)"."VALUES"."('$username','$bookname','$author','$edition','$category','$rent',$publisher','$image')";
    $retval=mysql_query($conn,$sql);
    
mysqli_close($conn);
session_destroy();
?>