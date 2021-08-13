<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$pid=$_GET['pid'];
$desp=$_GET['desp'];
$val=$_GET['val'];
$amount=$_GET['amount'];

$sql="update tbl_package set desp='$desp',validity='$val',amount='$amount' where pkid=$pid";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='packages.php'</script>";
?>