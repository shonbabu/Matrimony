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
                              <li class="active"> <a href="userhome.php">Home</a> </li>
								<li> <a href="search.php">Partners</a> </li>
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
                        <h2>Professional Details</h2>
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


$s1="select * from tbl_proff where uid=$uid";
$rt=$db->selectQuery($s1);
if($rt==1){

$rs1=$db->selectData($s1);
$row1=mysqli_fetch_array($rs1);
?>
<form name="frm" action="uprofessionalaction.php" style="color:black">

<tr><th>
Education</th>
<td> <textarea rows="3" cols="25" name="education" required class="form-control"><?php echo $row1['education'];?></textarea></td></tr>
<tr><th>Occupation Field </th>
<td><input type="text" name="ocupfield"required class="form-control" value="<?php echo $row1['occufield'];?>"></td></tr>
<tr><th>Occupation</th>
<td><input type="text" name="occup"required class="form-control" value="<?php echo $row1['occup'];?>"></td></tr>
<tr><th>Country</th>
<td><input type="text" name="country" required class="form-control" value="<?php echo $row1['country'];?>"></td></tr>
<tr><th>Location</th>
<td><input type="text" name="loc"required class="form-control" value="<?php echo $row1['location'];?>"></td></tr>
<br/></tr>
<tr><th></th><td><input type="submit" value="UPDATE" class="send"></td></tr>
</form>









<?php } else{

?>
<form name="frm" action="professionalaction.php" style="color:black">

<tr><th>
Education</th>
<td> <textarea rows="3" cols="25" name="education" required class="form-control"></textarea></td></tr>
<tr><th>Occupation Field </th>
<td><input type="text" name="ocupfield"required class="form-control"></td></tr>
<tr><th>Occupation</th>
<td><input type="text" name="occup"required class="form-control"></td></tr>
<tr><th>Country</th>
<td><input type="text" name="country" required class="form-control"></td></tr>
<tr><th>Location</th>
<td><input type="text" name="loc"required class="form-control"></td></tr>
<br/>
<tr><th></th><td><input type="submit" value="ADD" class="send"></td></tr>
</form>
<?php } ?>
<br/>
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

