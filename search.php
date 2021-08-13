<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Matrimony</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
   <?php  session_start(); ?>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                  
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p> &nbsp;</p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                             <ul class="menu-area-main">
                              <li > <a href="userhome.php">Home</a> </li>
								<li class="active"> <a href="search.php">Partners</a> </li>
						      <li> <a href="interests.php">Interests </a> </li>
							    <li>  <a href="myprofile.php">Profile</a></li>
							   <li> <a href="myint.php">My Interests</a> </li>
						
                         </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
           <li><a class="buy" href="index.php">Logout</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Search Partners</h2>
						<form action="search.php">
						<input type="number" placeholder="Enter Search Age1" name="age1" min="18" value=""  />
							<input type="number" placeholder="Enter Search Age2" name="age2" min="18" value=""  />
						<input type="text" placeholder="Enter District" name="dist" value="" />
							<input type="text" placeholder="Occupation Field" name="occupfield" />
						<input type="submit" value="search" style="color:black"/>
						</form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
	<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$uid=$_SESSION['uid'];
$ss="select * from tbl_user where uid=$uid";
$rss=$db->selectData($ss);
$rw=mysqli_fetch_array($rss);
$g=$rw['gender'];

if(isset($_GET['age1']) && isset($_GET['age2'])&& isset($_GET['dist'])){
	$dist=$_GET['dist'];
	$age1=$_GET['age1'];
$age2=$_GET['age2'];

 $s="SELECT * from tbl_personal inner join tbl_user on tbl_user.uid=tbl_personal.uid where (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0) between $age1 and $age2 and gender!='$g' or tbl_user.uid!=$uid and district = '$dist' and tbl_user.status='true'";

	
}
else{
	$s="select*from tbl_user WHERE gender!='$g' and uid!=$uid and status='true'";
}
?>
<table border="1" style="color:black;width:100%;text-align:center;" >
<tr style="background-color:#F85A16;color:black;height:30px">
<th></th>
<th style="padding:10px;">First name</th>
<th style="padding:10px;">Last name</th>
<th style="padding:10px;">Address</th>
<th style="padding:10px;">City</th>
<th style="padding:10px;">District</th>
<th style="padding:10px;">Pincode</th>
<th style="padding:10px;">Email id</th>

<th style="padding:10px;">Phone no</th>

</tr>
<?php

$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr style="height:50px;">
<td><a href="<?php echo $row['img'];?>" target="_blank"><img src="<?php echo $row['img'];?>" width="100px" height="100px"/></a></td>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['adress'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['pincode'];?></td>

<td><?php echo $row['emailid'];?></td>

<td><?php echo $row['phoneno'];?></td>
<td><a href="details.php?uid=<?php echo $row['uid'];?>" style="color:red">Details</a></td>

</tr>
<?php } ?>
</table>	<br/>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
      <!--  footer --> 
      <footr>
         <div class="footer">
       
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>
			

