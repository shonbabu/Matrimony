<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
$gender=$_POST['gender'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	  
	$sql="insert into tbl_user(firstname,lastname,adress,city,district,pincode,emailid,gender,phoneno,img,status,pstatus) values('$firstname','$lastname','$address','$city','$district','$pincode','$emailid','$gender','$phoneno','$target_file','false','pending')";
$db->insertQuery($sql);
$s="select max(uid) as uid from tbl_user";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
$uid=$row['uid'];
$ss="insert into tbl_login values($uid,'$emailid','$password','user','false')";
$db->insertQuery($ss);
echo "<script>alert('Select Packages to complete Registration!! Next Step');window.location='vpackages.php?uid=".$uid."';</script>";


  }
  else
	  {
  echo "<script>alert('Sorry, there was an error uploading your file.');window.location='index.php';</script>";
  }
}

?>
