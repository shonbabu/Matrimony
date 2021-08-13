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

$sql="insert into tbl_proff(uid,education,occufield,occup,country,location) values($uid,'$edu','$occupfield','$occup','$country','$loc')";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='familymaster.php';</script>";
?>