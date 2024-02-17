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
                    
                 <div>
		       <div class="container">
                           <div>   
                               <h2> About us</h2>
                               <p> "But I must explain to you how all this mistaken idea of denouncing pleasure and praising 
                                 pain was born and I will give you a complete account of the system, and expound the actual teachings
                                 of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes,
                                 or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally
                                 encounter consequences that are extremely painful.</p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                                 because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example,
                                 which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who
                                 chooses to enjoy a pleasure that has no annoying consequences,
                                 or one who avoids a pain that produces no resultant pleasure
                           </div>
                       </div>
                 </div>
                       
		            <!--------------------------------------------- Start for footer----------------------------------------------------->
				
		<div id="footer" style="">
		       <div class="container">
			       <div class="row">
				        <div class="col-lg-12" id="footera">
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
