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
                        <nav class="main-menu">
                             <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
                        
                              <li class="mean-last"> <a href="user.php">sign up</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                 <li><a class="buy" href="login.php">Login</a></li>
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
                        <h2>Sign Up</h2>
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

                    <form name="frm" action="useraction.php" onsubmit="return check();" style="color:black" class="main_form" method="post" enctype="multipart/form-data">
                        <div class="row">
                        
                          


<div class="col-md-6">

<tr>
<th>First Name</th>
<td><input type="text" id="firstname" name="firstname"  class="form-control" required /></td>
</tr>
<tr>
<th>Last Name</th>
<td><input type="text" id="lastname" name="lastname" class="form-control"required ></td>
</tr>
<tr><th>Emailid </th>
<td>   <input type="email" name="emailid" class="form-control"placeholder=" @gmail.com"></td></tr>

<tr><th>Phoneno</th>
<td>    <input type="text" id="phoneno" name="phoneno" required class="form-control"maxlength="10"></td></tr>
<tr><th>Gender<br/> </th>
<td>    <input type="radio" name="gender"  value="F" required>
		 <label for="female">female</label>
		 <input type="radio" name="gender"  value="M" required>
	     <label for="female">male</label></td></tr>

</div><div class="col-md-6">

<tr>
<th>city  </th>
<td>      <input type="text" id="city" name="city" class="form-control"required></td></tr>
<tr><th>District </th>
<td>  <input type="text" id="district" name="district"class="form-control"required></td></tr>
<tr><th>Pincode  </th>
<td>  <input type="text" id="pincode" name="pincode" class="form-control"required maxlength="6"></td></tr>
<tr><th>Password  </th>
<td> <input type="password" id="password" name="password" class="form-control"required></td></tr>
	  <tr>
 <th>Upload an image<br/></th><td><input type="file" name="file" id="file" required /></td>
</tr>
</div>

<div class="col-md-12">

<tr>
<th>Address </th>
<td>   <textarea   name="address" class="form-control"required></textarea></td>
</tr>
</div>

</div>
<div class="col-md-12">
<tr><th></th><td><input type="submit" name="submit" class="send " value="REGISTER"></td></tr>
</div>


                        </div>
                    </form>
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
			
			
<script type="text/javascript">
var letters=/^[a-z A-Z]+$/;
var numbers=/^[0-9]+$/;
function check()
{
	if(!document.getElementById("firstname").value.match(letters))
	{
		alert('please input alphabet character only,enter firstname');
		return false;
	}
	else if(!document.getElementById("lastname").value.match(letters))
	{
		alert('please input alphabet characher only,enter lastname');
		return false;
	}

	else if(!document.getElementById("city").value.match(letters))
	{
		alert('please input alphabet characters only,enter city');
		return false;
	}
	else if(!document.getElementById("district").value.match(letters))
	{
		alert('please input alphabet characters only,enter district');
		return false;
	}
	else if(!document.getElementById("pincode").value.match(numbers))
	{
		alert('please input numeric characters only,enter pin number');
		return false;
	}
	else if(document.getElementById("pincode").value.length<6)
	{
		alert('invalid pin number,enter pin number');
		return false;
	}
	else if(!document.getElementById("phoneno").value.match(numbers))
	{
		alert('please input numeric characters only,enter phoneno');
		return false;
	}
	else if(document.getElementById("phoneno").value.length<10)
	{
		alert('invalid phoneno,enter phoneno');
		return false;
	}
	else if(document.getElementById("password").value.length<8)
	{
		alert('enter password with minumium length of 8 characters');
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</html>