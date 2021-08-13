<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$n=$_GET['n'];
$sql="delete from tbl_package where pkid=$n";
$db->insertQuery($sql);
echo "<script>alert('deleted');window.location='packages.php'</script>";
?>