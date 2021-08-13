<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
 $uid=$_SESSION['uid'];
$mid=$_GET['id'];


$sql="insert into tbl_intr(iuid,mid) values($uid,$mid)";
$db->insertQuery($sql);
echo "<script>alert('Sent');window.location='search.php'</script>";
?>