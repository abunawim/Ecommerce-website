<?php
session_start();
include 'include/config.php';

include 'include/functions.php';

//if (isset($_SESSION['username']) && isset($_SESSION['aid'])) {
  //  header('Location: index.php');
   // exit();
//}
$succ = '';
$err = '';
$user_name='';
$user_pass='';
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $log_qry = mysql_query("select * from `userresgistation` where username = '" . $username . "' AND password = '" . $password . "' AND status='1'");
	 $num_rows = mysql_num_rows($log_qry);
	
    if ($num_rows > 0) {
        $row = mysql_fetch_object($log_qry);
        $_SESSION['username'] = $row->username;
        $_SESSION['aid'] = $row->password;

        if ($_SESSION['username']) {
            $_SESSION['succ'] = "You Have Successfully Login.....";
            header("location:index.php");
            exit;
        }
    } else {
        $err = "Login Failed!! <br>Please Enter Valid User Name & Password";
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
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
   
    </head>
    <body>
       
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		
		
		<div id="head">
		      <div class="container">
			       <div class="row">
				     
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
     <button type="submit" class="btn" ><a href="login.php"> Login </a> </button>
     <button type="submit" class="btn"><a href="userresgistation.php"> Registation </a> </button>
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
					 

   <div class="container">
    <div class="row">
		<div class="col-lg-4 col-lg-offset-4" style="margin-left:250px";>
    		<div class="panel panel-default" >
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="login.php" method="post" >
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="username" name="username" type="text"  value="">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-small btn-success" type="submit" value="submit" name="submit">
			    	</fieldset>
			      	</form>
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

        
                            <!-- start script for jscarousel -->
        
        


                             <!-- end script for jscarousel -->
       
	
    </body>
</html>
