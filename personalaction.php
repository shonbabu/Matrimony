<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uid=$_SESSION['uid'];

$DOB=$_POST['DOB'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$complexion=$_POST['complexion'];
$martials=$_POST['martials'];

	
$date2 = Date('Y-m-d');

$diff = abs(strtotime($date2) - strtotime($DOB));

 $years = floor($diff / (365*60*60*24));
//echo $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//echo $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

if($years>=18){ 



$target_dir = "uploads/";
$target_file = $target_dir .$uid. basename($_FILES["file"]["name"]);
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
	  

$sql="insert into tbl_personal(dob,height,weight,comp,ms,uid,img) values('$DOB','$height','$weight','$complexion','$martials',$uid,'$target_file')";
$db->insertQuery($sql);
echo "<script>alert('Value Entered! Fill up Proffesional Details');window.location='professional.php';</script>";

  }
  else
	  {
  echo "<script>alert('Sorry, there was an error uploading your file.');window.location='personal.php';</script>";
  }
}
}
else
{
	echo "<script>alert('Invalid DOB');window.location='personal.php';</script>";
}
?>