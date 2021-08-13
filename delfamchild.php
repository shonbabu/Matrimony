<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$=$_GET[''];
$sql="delete from tbl_famchild";
$db->insertQuery($sql);
echo "<script>alert('success')</script>";
?>