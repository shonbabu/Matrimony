<?php
include('DatabaseCon.php');
$db=new DatabaseCon();



$uid=$_GET['uid'];


$sql="update tbl_user set status='true' where uid='$uid'";
$db->insertQuery($sql);
$sql="update tbl_login set status='true' where uid='$uid'";
$db->insertQuery($sql);
echo "<script>alert('Approved');window.location='adminhome.php'</script>";
?>