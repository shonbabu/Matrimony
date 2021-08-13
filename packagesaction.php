<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$pack=$_GET['pn'];
$desp=$_GET['desp'];
$val=$_GET['val'];
$amount=$_GET['amount'];

$sql="insert into tbl_package(packname,desp,validity,amount) values('$pack','$desp','$val','$amount')";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='packages.php'</script>";
?>