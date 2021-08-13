<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$=$_GET[''];
$sql="delete from tbl_proff where =''";
$db->insertQuery($sql);
echo "<script>alert('success')</script>";
?>