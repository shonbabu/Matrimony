<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uid=$_SESSION['uid'];

$DOB=$_GET['DOB'];
$height=$_GET['height'];
$weight=$_GET['weight'];
$complexion=$_GET['complexion'];
$martials=$_GET['martials'];

	
$date2 = Date('Y-m-d');

$diff = abs(strtotime($date2) - strtotime($DOB));

 $years = floor($diff / (365*60*60*24));
//echo $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//echo $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

if($years>=18){ 
$sql="update tbl_personal set dob='$DOB',height='$height',weight='$weight',comp='$complexion',ms='$martials' where uid=$uid";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='personal.php';</script>";
}
else
{
	echo "<script>alert('Invalid DOB');window.location='personal.php';</script>";
}
?>