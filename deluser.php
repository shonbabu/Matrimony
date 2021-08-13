<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$uid=$_GET['uid'];
$sql="delete from tbl_user where uid=$uid";
$db->insertQuery($sql);
$sql="delete from tbl_login where uid=$uid";
$db->insertQuery($sql);
$sql="delete from tbl_fammas where uid=$uid";
$db->insertQuery($sql);
$sql="delete from tbl_famchild where uid=$uid";
$db->insertQuery($sql);
$sql="delete from tbl_personal where uid=$uid";
$db->insertQuery($sql);
$sql="delete from tbl_proff where uid=$uid";
$db->insertQuery($sql);
echo "<script>alert('Account deleted');window.location='index.php'</script>";
?>