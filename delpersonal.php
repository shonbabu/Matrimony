<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$=$_GET[''];
$sql="delete from tbl_personal where name='$name'";
$db->insertQuery($sql);
echo "<script>alert(successs)</script>";
?>