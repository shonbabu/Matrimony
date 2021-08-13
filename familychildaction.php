<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
   session_start();
$uid=$_SESSION['uid'];
$sibname=$_GET['siblingname'];
$sta=$_GET['status'];
$g=$_GET['g'];
$sql="insert into tbl_famchild(siblingname,status,gen,uid) values('$sibname','$sta','$g',$uid)";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='familychild.php';</script>";
?>