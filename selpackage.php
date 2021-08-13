<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$uid=$_GET['uid'];
$pid=$_GET['n'];
$v=$_GET['v'];
$amt=$_GET['amt'];

$d=Date('Y-m-d');
$ed=Date('Y-m-d', strtotime($d. ' + '.$v.' months'));
$sql="update tbl_user set pack=$pid,apdate='$d',edate='$ed' where uid='$uid'";
$db->insertQuery($sql);
echo "<script>alert('Package Selected! Complete Payment for Final registration');window.location='pay.php?pkid=".$pid."&amt=".$amt."&uid=".$uid."'</script>";
?>