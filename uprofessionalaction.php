<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
 session_start();
$uid=$_SESSION['uid'];
$edu=$_GET['education'];
$occupfield=$_GET['ocupfield'];
$occup=$_GET['occup'];
$country=$_GET['country'];
$loc=$_GET['loc'];

$sql="update tbl_proff set education='$edu',occufield='$occupfield',occup='$occup',country='$country',location='$loc' where uid=$uid";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='professional.php';</script>";
?>