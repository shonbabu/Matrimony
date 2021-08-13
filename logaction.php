<?php

include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$un=$_GET['t1'];
$up=$_GET['t2'];
$s="select * from tbl_login where uname='$un' and upass='$up'";
$rt=$db->selectQuery($s);
if($rt==1)
{
	$rs=$db->selectData($s);
	$row=mysqli_fetch_array($rs);
	$_SESSION['uid']=$row['uid'];
	$ut=$row['utype'];
	if($ut=="admin")
	{
	echo "<script>alert('Login success!Welcome Admin!');window.location='adminhome.php';</script>";	
		
	}
	else if($ut=="user")
	{
		$ss="select * from tbl_user where uid=".$row['uid'];
		$rss=$db->selectData($ss);
		$rw=mysqli_fetch_array($rss);
		$edate=strtotime($rw['edate']);
		$date2 = strtotime(Date('Y-m-d'));
		if($date2>$edate){
			echo "expired";
			$ss1="update tbl_user set status='false' where uid=".$row['uid'];
			$db->insertQuery($ss1);
			$ss1="update tbl_login set status='false' where uid=".$row['uid'];
			$db->insertQuery($ss1);
			echo "<script>alert('Package Expired! Kindly Upgrade');window.location='vpackages.php?uid=".$row['uid']."';</script>";	
		}else{
			
		if($row['status']=='true'){
			echo "<script>alert('Login success!Welcome User!');window.location='userhome.php';</script>";	
		}
		else if($row['status']=='block'){
			echo "<script>alert('Your Account has been blocked!');window.location='index.php';</script>";	
		}
		else{
			echo "<script>alert('Your Approval is Pending!! Please wait for confirmation');window.location='index.php';</script>";	
		}}
	}
	else
	{
	echo "<script>alert('Login Failed!');window.location='index.php';</script>";	
		
	}
}
else
	{
	echo "<script>alert('Login Ffailed!');window.location='index.php';</script>";	
		
	}
?>