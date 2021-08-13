<?php
include('DatabaseCon.php');
$db=new DatabaseCon();



$uid=$_GET['uid'];


$sql="update tbl_user set status='block' where uid='$uid'";
$db->insertQuery($sql);
$sql="update tbl_login set status='block' where uid='$uid'";
$db->insertQuery($sql);
echo "<script>alert('Blocked');window.location='viewuser.php'</script>";
?>