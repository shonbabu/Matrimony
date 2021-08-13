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
                        <h2>Personal Details</h2>
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
$s="select * from tbl_user where uid=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);

$s1="select * from tbl_personal where uid=$uid";
$rt=$db->selectQuery($s1);
if($rt==1){

$rs1=$db->selectData($s1);
$row1=mysqli_fetch_array($rs1);
?>
<form name="frm" action="upersonalaction.php" onsubmit="return check();" style="color:black">
<tr><th>First Name</th>
<td> <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $row['firstname'];  ?>" readonly></td></tr>
<tr><th>Last Name </th>
<td>  <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['lastname'];  ?>" readonly></td></tr>
<tr><th>DOB       </th>
<td> <input type="date" name="DOB" class="form-control" required value="<?php echo $row1['dob'];  ?>" ></td></tr>
<tr><th>Height   </th>
<td> <input type="text" id="height" name="height" class="form-control" value="<?php echo $row1['height'];  ?>"required></td></tr>
<tr><th>Weight    </th>
<td> <input type="text" id="weight" name="weight"  class="form-control"value="<?php echo $row1['weight'];  ?>"required></td></tr>
<tr><th>Complexion   </th>
<td>  <input type="text" id="complexion" name="complexion"value="<?php echo $row1['comp'];  ?>" class="form-control"required></td></tr>
<tr><th>Marital status</th>
<td>  <input type="text" id="martials" name="martials" value="<?php echo $row1['ms'];  ?>"class="form-control"required></td><br/></tr>
<tr><th></th><td><input type="submit" name="submit" value="UPDATE" class="send"></td></tr>

</form>









<?php } else{

?>
<form name="frm" action="personalaction.php" onsubmit="return oncheck();" style="color:black" method="post" enctype="multipart/form-data">
<tr><th>First Name</th>
<td> <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $row['firstname'];  ?>" readonly></td></tr>
<tr><th>Last Name </th>
<td>  <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['lastname'];  ?>" readonly></td></tr>
<tr><th>DOB       </th>
<td> <input type="date" name="DOB" class="form-control" required></td></tr>
<tr><th>Height   </th>
<td> <input type="text" id="height" name="height" class="form-control" required></td></tr>
<tr><th>Weight    </th>
<td> <input type="text" id="weight" name="weight"  class="form-control"required></td></tr>
<tr><th>Complexion   </th>
<td>  <input type="text" id="complexion" name="complexion" class="form-control"required></td></tr>
<tr><th>Martial status</th>
<td>  <input type="text" id="martials" name="martials" class="form-control"required></td></tr>
	  <tr>
 <th>Upload an image</th><td><input type="file" name="file" id="file" required /></td>
</tr>
<tr><th></th><td><input type="submit" name="submit" value="SUBMIT" class="send"></td></tr>

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
				

<script type="text/javascript">
var letters=/^[a-z A-Z]+$/;
var numbers=/^[0-9]+$/;
function check()
{
	if(!document.getElementByid("firstname").value.match(letters))
	{
		alert('please input alphabet characters only,enter firstname');
		return false;
	}
	else if(!document.getElementByid("lastname").value.match(letters))
	{
		alert('please input alphabet characher only,enter lastname');
		return false;
	}

	else if(!document.getElementByid("height").value.match(numbers))
	{
		alert('please input numeric characters only,enter height');
		return false;
	}
	else if(!document.getElementByid("weight").value.match(numbers))
	{
		alert('please input numeric characters only,enter weight');
		return false;
	}
	else if(!document.getElementByid("complexion").value.match(letters))
	{
		alert('please input alphabet characters only,enter complexion');
		return false;
	}
	else if(!document.getElementByid("maritals").value.match(letters))
	{
		alert('please input alphabet characters only,enter marital status');
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</html>