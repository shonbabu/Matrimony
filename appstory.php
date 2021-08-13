<?php
include('DatabaseCon.php');
$db=new DatabaseCon();



$uid=$_GET['n'];


$sql="update tbl_story set status='true' where sid='$uid'";
$db->insertQuery($sql);

echo "<script>alert('Approved');window.location='viewstory.php'</script>";
?>