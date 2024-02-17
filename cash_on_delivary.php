<?php 

session_start();
$username = $_SESSION['username'];
include 'include/config.php';
include'include/functions.php';

$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$error_msg      = '';

$total=0;
 $products = $_SESSION['products'];
 foreach ($_SESSION["products"] as $cart_itm){
 
  $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
 }

if (isset($_POST['submit'])) {
    
    
    

    /* ----------------Get data from form -------------------- */
    $location       = mysql_real_escape_string($_POST['location']);
    $phone     = mysql_real_escape_string($_POST['phone']);
//    $address    = mysql_real_escape_string($_POST['address']);
//    $email         = mysql_real_escape_string($_POST['email']);
//    $password    = mysql_real_escape_string($_POST['password']);
   

   
    
    if ($location  == '') {
        $error_msg .= "Please Enter Location<br>";
    }
    if ($phone == '') {
        $error_msg .= "Please Enter Phone<br>";
    }

    /* ------------------- error checking ------------------ */
 if ($error_msg == '') {
   
   $totals=$total+30;
        // insert in to datadase 
        $sql = "INSERT INTO `cash_on_delevary` SET
                        location     = '" .$location. "', 
                        phone   = '" . $phone . "',
                        username = '" . $username . "',
                        total_taka = '" . $totals. "'
		";
        $data = mysql_query($sql) or die(mysql_error());
        
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
	   <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
       <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
       <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        
          <div style="margin-left:560px; ">
        <?php
           if($error_msg!=''){
		echo "<div class='login_error_msg'>$error_msg</div>";
	}
        ?>
        </div>     
        <div style="margin-left:560px;width:290px;  ">
            
            
            <div class="onesidedropshadow" style="background-color:#84C4B2;margin-bottom:20px; ">              
  <h2>Product Item</h2>                 <!---------------------------------------End for product----------------------------------------------------->
 <?php
 

 foreach ($_SESSION["products"] as $cart_itm)
        {
      echo'<div >';
         echo '<div class="p-qty">Name : '.$cart_itm["name"].'</div>';
         echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
         echo '<div class="p-price">'.$currency.$cart_itm["price"].'</div>';
         
         

                        
echo'</div>';
        }
        
  ?>
            </div>                
            <div class="onesidedropshadow" style="background-color:#84C4B2; margin-bottom:20px;" >
                        
                        <h4> Total Taka without delivery : <?php echo $total; ?>  </h4>
                        <h4> delivery Cost :30 taka</h4>
                        <h4>total taka with delivery : <?php  echo $total=$total+30; ?></h4>
                    </div>
 
  <form action="cash_on_delivary.php"method="post">
      <div class="onesidedropshadow" style="background-color:#84C4B2;" >
                        <p><input type="text" name="location" placeholder="Please Entry your Location "/> </p>
                        <p><input type="text" name="phone" placeholder="Please Entry your Phone"/> </p>
                        <input type="submit" name="submit" value="submit"/>
                    </div>
  </form>                       
		            <!--------------------------------------------- Start for footer----------------------------------------------------->
				
	
                <!--------------------------------------------- End for footer----------------------------------------------------->
        
      
        
 
       </div> 
        
    </div>
    </body>
</html>
