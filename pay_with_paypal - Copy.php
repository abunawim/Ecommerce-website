<?php
session_start();
include 'include/config.php';
$username = $_SESSION['username'];

if (!isset($_SESSION['username']))
{ header("location:login.php");}

if (isset($_POST['submit'])) {
	
	}
$order_id = $_SESSION['order_id'];
 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="products-wrapper">
 <h1>Pay With Paypal Now:</h1>
 <?php
 $products = $_SESSION['products'];
// print_r($products);die();
   // echo $order_id;
    $sql = "SELECT * FROM `order` WHERE `order_id`=".$order_id;
    $results =mysql_query($sql);
    //echo $results;die();
  //  $num=  mysql_num_rows($results);
   // echo $num; die();
   // $obj = mysql_fetch_object($results);
   //print_r($obj);die(); 
 ?>
 <div class="view-cart">
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="daritamim66@gmail.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
   
   <?php while($obj = mysql_fetch_object($results)) { ?> 
    <?php $name= $obj->product_name; ?>
    <input type="hidden" name="item_name" value="<?php echo $name; ?>">
    <input type="hidden" name="item_name" value="<?php echo $obj->product_name; ?>">
    <input type="hidden" name="amount" value="<?php echo $obj->total_taka; ?>">
    <input type="hidden" name="currency_code" value="USD">
    <?php  }   //endwhile; ?>

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
    <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

    </form>
 </div>
</div>
</body>
</html>
