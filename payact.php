<?php
include('DatabaseCon.php');
$db=new DatabaseCon();


$pid=$_GET['pid'];
$uid=$_GET['uid'];
$amt=$_GET['amt'];

$sql="update tbl_user set pstatus='paid' where uid='$uid'";
$db->insertQuery($sql);
echo "<script>alert('Registration Completed !! Wait for Approval');window.location='index.php'</script>";
?>