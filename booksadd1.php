<?php
$userid=$_SESSION["userid"];
require_once("DBConn.php");
session_start();
	$username=$userid;
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];
    $edition=$_POST['edition'];
    $publisher=$_POST['publisher'];
    $category=$_POST['category'];
    $rent=$_POST['rent'];
    $publisher=$_POST['publisher'];
    $image=$_POST['image'];
    $sql="INSERT INTO ADDBOOKS"."(username,bookname,author,edition,category,rent,publisher,image)"."VALUES"."('$username','$bookname','$author','$edition','$category','$rent',$publisher','$image')";
    $retval=mysql_query($conn,$sql);
    
mysqli_close($conn);
session_destroy();
?>
