<?php 
session_start();
include 'include/config.php';
include'include/functions.php';

$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	   <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
       <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
       <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
       
       <!--foe nevo slider-->
     <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
          <!--foe nevo slider-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body >
         <div style="width:1000px; margin-left:180px; ">
    		            <!--------------------------------------------- Start for Headarea----------------------------------------------------->
                <div id="head">
                      <div class="container">
                           <div class="row">
                           
                           </div>
                      </div>
                 </div>
                 	  <!--------------------------------------------- End for headarea----------------------------------------------------->
		            <!--------------------------------------------- Start for menu -------------------------------------------------------->
		<div id="menu">
		      <div class="container">
			       <div class="row">
				            <div class="col-lg-12" id="menua">
			
                                    <div class="navbar navbar-static" >
                                        <div class="navbar-inner" style="background-color:#009933">
                                                                <div id="login">
                                                                    <ul>
                                                                        <li><a class="btn" href="login.php">Login</a> </li>
                                                                        <li><a class="btn" href="userresgistation.php">Registration</a> </li>
                                                                    </ul>
                                                                </div>  
                                            
                                                              <!-- start for search-->     
                                                                <div class="input-append" id="search">
                                                                   <input class="span2" id="appendedInputButtons" type="text">
                                                                  <button class="btn" type="button">Search</button>
                                                               </div>
                                                                <!-- end for search-->
                                                                <ul role="navigation" class="nav" id="menuho">
                                                                    <li><a href="#">Home</a></li>
                                                                    <li><a href="pant.php">About Us</a></li>
                                                                    <li><a href="#">Contact Us</a></li>
                                                                </ul>
                                        </div> 
                                    </div> 
                         </div>
				   </div>
			  </div>
		</div>
		            <!--------------------------------------------------------- Emd for menu ----------------------------------------------------->
  		            <!--------------------------------------------- Start for Slider $ slider----------------------------------------------------->
		         
                            
                    <!---------------------------------------End for Slider $ slider----------------------------------------------------->

                    <!---------------------------------------End for product----------------------------------------------------->
                    <div class="container">
			       <div class="row">
                                   <div class="col-lg-12">
                                       
                                       <div style="width:300px; height:300px; background-color:#F4F4F4;margin-top:50px; border-radius:10px; text-align:center;">
                                           <img src="img/Capture.JPG" class="img-circle" width="100px;" height="100px;" style=""> 
                                           <p>Md:Abu Nawim </p>
                                           <p>daritamim66@gmail.com</p>
                                           <p>01827328014</p>
                                            <a href="http://twitter.com/minimalmonkey" class="icon-button twitter" style="text-decoration:none; "><i class="icon-twitter"></i><span></span></a>
                                            <a href="http://facebook.com" class="icon-button facebook" style="text-decoration:none; "><i class="icon-facebook"></i><span></span></a>
                                             <a href="http://plus.google.com" class="icon-button google-plus" style="text-decoration:none; "><i class="icon-google-plus"></i><span></span></a>
                                          </div>
                                       
                                       <div style="width:300px; height:300px; background-color:#F4F4F4;margin-top:50px; margin-left:329px; margin-top:-300px;border-radius:10px;text-align:center; ">
                                            <img src="img/Capture.JPG" class="img-circle" width="100px;" height="100px;" style=""> 
                                           <p>Md:Abu Nawim </p>
                                           <p>daritamim66@gmail.com</p>
                                           <p>01827328014</p>
                                           <a href="http://twitter.com/minimalmonkey" class="icon-button twitter" style="text-decoration:none; "><i class="icon-twitter"></i><span></span></a>
                                            <a href="http://facebook.com" class="icon-button facebook" style="text-decoration:none; "><i class="icon-facebook"></i><span></span></a>
                                             <a href="http://plus.google.com" class="icon-button google-plus" style="text-decoration:none; "><i class="icon-google-plus"></i><span></span></a>
                                       </div>
                                                
                                       <div style="width:300px; height:300px; background-color:#F4F4F4;margin-top:50px; margin-left:649px; margin-top:-300px;border-radius:10px; text-align:center; ">
                                            <img src="img/Capture.JPG" class="img-circle" width="100px;" height="100px;" style=""> 
                                           <p>Md:Abu Nawim </p>
                                           <p>daritamim66@gmail.com</p>
                                           <p>01827328014</p>
                                           <a href="http://twitter.com/minimalmonkey" class="icon-button twitter" style="text-decoration:none; "><i class="icon-twitter"></i><span></span></a>
                                            <a href="http://facebook.com" class="icon-button facebook" style="text-decoration:none; "><i class="icon-facebook"></i><span></span></a>
                                            <a href="http://plus.google.com" class="icon-button google-plus" style="text-decoration:none; "><i class="icon-google-plus"></i><span></span></a>
                                           
                                       </div>
                                       
                                   </div>
                               </div>
                    </div>
              <p>----Location---</p>
              <div>
                  <a class="locationimage" style="margin-left:10px; border-radius:10px; "> <img src="img/google2.jpg"/></a>
              </div>
     	            <!--------------------------------------------- Start for footer----------------------------------------------------->
				
		<div id="footer" >
		       <div class="container">
			       <div class="row">
				        <div class="col-lg-12" id="footera" style="border-radius:10px;">
                              <div id="footcontent">All are reserve by @bigshopbd.com</div>
						 </div>
				   </div>
			  </div>
		</div>
                <!--------------------------------------------- End for footer----------------------------------------------------->
                
                
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
       <!--nevo slider--> 

        
        
       </div> 
    </body>
</html>
