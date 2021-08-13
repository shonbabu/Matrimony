<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
  session_start();
$uid=$_SESSION['uid'];
$fathname=$_GET['fathername'];
$mothname=$_GET['mothername'];
$housname=$_GET['housename'];
$fs=$_GET['fs'];
$fv=$_GET['fv'];
$sql="update tbl_fammas set fathername='$fathname',mothername='$mothname',housename='$housname',fs='$fs',fv='$fv' where uid=$uid";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='familymaster.php';</script>";
?>