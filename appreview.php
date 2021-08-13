<?php
include('DatabaseCon.php');
$db=new DatabaseCon();



$uid=$_GET['n'];


$sql="update tbl_review set status='true' where tid='$uid'";
$db->insertQuery($sql);

echo "<script>alert('Approved');window.location='viewreview.php'</script>";
?>