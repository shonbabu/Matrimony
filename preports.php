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
                        <p>&nbsp;</p>
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
                    
                     </div>
                  </div>
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
                        <h2>REPORTS</h2>
						
						<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

?>

<?php
$pid=$_GET['pid'];
$d1=$_GET['d1'];
$d2=$_GET['d2'];
$s1="select count(*) as cnt from tbl_user where pack=$pid and apdate between '".$d1."' and '".$d2."'";
$rs1=$db->selectData($s1);
$row1=mysqli_fetch_array($rs1);
$cnt=$row1['cnt'];
////
$s="select*from  tbl_package WHERE pkid=$pid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>
<h3><br/>Total <?php echo $row['packname'];?> Members: <?php echo $cnt;?></h3>
<h3><br/>Report Dates: <?php echo $d1;?> to <?php echo $d2;?></h3>				
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
			<button class="btn btn-primary" style="float:right" onclick="window.print()">Print</button>
<table border="1" style="color:black;width:100%;text-align:center;" >


<tr style="background-color:#F85A16;color:black;height:30px">
<th style="padding:10px;">First name</th>
<th style="padding:10px;">Last name</th>
<th style="padding:10px;">Address</th>
<th style="padding:10px;">City</th>
<th style="padding:10px;">District</th>
<th style="padding:10px;">Pincode</th>
<th style="padding:10px;">Email id</th>
<th style="padding:10px;">Gender</th>
<th style="padding:10px;">Phone no</th>
<th style="padding:10px;">Package Valid Till</th>
</tr>
<?php

$s="select*from tbl_user where pack=$pid and apdate between '".$d1."' and '".$d2."'";
$rs=$db->selectData($s);
while($row=mysqli_fetch_array($rs)){
?>
<tr style="height:50px;">
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['adress'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['pincode'];?></td>
<td><?php echo $row['emailid'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['phoneno'];?></td>
<td><?php echo $row['edate'];?></td>


</tr>
<?php } ?>
</table>
<br/>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
      <!--  footer --> 
      <footr>
   
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
			

	
