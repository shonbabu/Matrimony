<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$fid=$_GET['fid'];
$sql="delete from tbl_famchild where famchildid=$fid";
$db->insertQuery($sql);
echo "<script>alert('deleted');window.location='familychild.php'</script>";
?>