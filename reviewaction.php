<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uid=$_SESSION['uid'];
$testimony=$_GET['test'];

$sql="insert into tbl_review(review,uid,status) values('$testimony',$uid,'false')";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='userhome.php'</script>";
?>