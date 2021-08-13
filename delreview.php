<?php
include('DatabaseCon.php');
$db=new DtabaseCon();

$=$_GET[''];
$sql="delete*from tbl_review";
$db->insertQuery($sql);
echo "</script>alert('success')</script>";
?>