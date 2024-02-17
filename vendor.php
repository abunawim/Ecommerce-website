<?php

include 'include/config.php';

include 'include/functions.php';
$error_message = '';

if (isset($_POST['submit'])) {

    if ($_POST['username'] == '') {
		
        $error_message .= "<p> Username is require!!</p>";
    }
    if ($_POST['Phone'] == '') {
        $error_message .= "<p>Phone is require!!</p>";
    }
    if ($_POST['address'] == '') {
        $error_message .= "<p>address is require!!</p>";
    }
  
    if ($_POST['email'] == '') {
        $error_message .= "<p>Email is require!!</p>";
    } elseif (!vaildMail($_POST['email'])) {
        $error_message .= "<p>Email is invalid!!</p>";
    }
    if ($_POST['password'] == '') {
        $error_message .= "<p>password is require!!</p>";
    }
    
   
       if (empty($error_message)) { 
        $sql = "INSERT INTO `vendor`(`username`,`Phone`,`address`,`email`,`password`) 
 VALUES('" . $_POST['username'] . "','" . $_POST['Phone'] . "','" . $_POST['address'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "')";
        $result = mysql_query($sql);
        if ($result) {
            header('Location: vendor.php');
        } else {
            echo "something wrong";
        }
    }
}
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

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
		
		<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
		
		

       
    <script src="jquery-1.4.4.min.js" type="text/javascript"></script>

    <script src="jsCarousel-2.0.0.js" type="text/javascript"></script>

    <link href="jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />



	
		
		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        
        
        
        

    <script type="text/javascript">
      $(document).ready(function() {

    $('#carouselh').jsCarousel({autoscroll: false, circular: false, itemstodisplay:4, orientation: 'h' });
      $('#carouselhAuto').jsCarousel({autoscroll: false,circular: false,  itemstodisplay:4, orientation: 'h' });
	$('#carouselhAuto1').jsCarousel({ autoscroll: false,circular: false,  itemstodisplay: 4, orientation: 'h' });
	$('#carouselhAuto2').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false,circular: true,  itemstodisplay: 3, orientation: 'h' });

        });       
        
    </script>
	
		

    </head>
    <body>
       
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		
		
		<div id="head">
		      <div class="container">
			       <div class="row">
				     
					    <!--  <div class="col-lg-12" id="heada">
						        
							            
                                      
                                         
                                          
						  </div>
				           -->
				   </div>
			  </div>
		 </div>
		 
		              <!--for menu-->
		<div id="menu">
		      <div class="container">
			       <div class="row">
				            <div class="col-lg-12" id="menua">
			
<div class="navbar navbar-static" >
    <div class="navbar-inner" style="background-color:#009933">
    
    <div id="login">
     <button type="submit" class="btn"><a href="login.html"> Login </a> </button>
     <button type="submit" class="btn"><a href="registation.html"> Registation </a> </button>
  </div>  
  <!-- start for search-->     
<div class="input-append" id="search">
  <input class="span2" id="appendedInputButtons" type="text">
  <button class="btn" type="button">Search</button>
 
</div>
<!-- end for search-->

       
        <ul role="navigation" class="nav" id="menuho">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">another</a></li>
        </ul>
     
    </div>
</div>





					
						</div>
				   </div>
			  </div>
		</div>
		             <!--end menu-->
                     
		             <!--for sidebar-->
					 
		<div id="sidebar">
		     <div class="container">
			       <div class="row">
				         <div class="col-lg-3" id="sidebara">
						 
                         
 
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    <li><a href="#">Action</a>
    </li>
    <li><a href="#">Another action</a>
    </li>
    <li><a href="#">Something else here</a>
    </li>
    <li class="divider"></li>
    <li class="dropdown-submenu"> <a tabindex="-1" href="#">More options</a>

        <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Second level</a>
            </li>
            <li class="dropdown-submenu"> <a href="#">More..</a>

                <ul class="dropdown-menu">
                    <li><a href="#">3rd level</a>
                    </li>
                    <li><a href="#">3rd level</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Second level</a>
            </li>
            <li><a href="#">Second level</a>
            </li>
        </ul>
    </li>
</ul>
                         
						 
						 </div>
			
				   
				         <div class="col-lg-9" id="contanta" style="margin-top:-215px; margin-left:390px;" >
                        
                                    <div class="container">
   
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title"> Registation for vendor</h3>
                             <?php
        if (!empty($error_message)) {
            echo $error_message;
        }
        ?>
      
			 	</div>
			  	<div class="panel-body">
       
			    	<form accept-charset="UTF-8" role="form" method="post" action="vendor.php">
                    <fieldset>
                        <div class="form-group">
                           <input class="form-control" placeholder="Username" name="username" type="text" 
                            value="<?php if (isset($_POST['submit'])) { echo $_POST['username'];} ?>" >
			    		</div>
                        <div class="form-group">
                          
			    		    <input class="form-control" placeholder="Phone" name="Phone" type="text" 
                             value="<?php if (isset($_POST['submit'])) { echo $_POST['Phone'];} ?>" >
			    		</div>
                        <div class="form-group">
			    		    <input class="form-control" placeholder="Address" name="address" type="text" 
                             value="<?php if (isset($_POST['submit'])) { echo $_POST['address'];} ?>" >
			    		</div>
                       
                        <div class="form-group">
                            
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text"
                             value="<?php if (isset($_POST['submit'])) { echo $_POST['email'];} ?>" >
			    		</div>
			    	  	
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" 
                             value="">
			    		</div>
                        <div class="form-group">
			    			<input class="form-control" placeholder=" Confirm Password" name="password" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-small btn-success " type="submit" value="submit" name="submit">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	

                        </div>	

				   </div>
			  </div>
		</div>
         
         
		            <!--for footer-->
					
		<div id="footer">
		       <div class="container">
			       <div class="row">
				   
				        <div class="col-lg-12" id="footera">
                        
                                           <div id="footcontent">All are reserve by @bigshopbd.com</div>
                     
						      
						 </div>
					  
				   </div>
			  </div>
		</div>
        <!--  for photo gallary---->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        
                            <!-- start script for jscarousel -->
        
        


                             <!-- end script for jscarousel -->
       
	
    </body>
</html>
