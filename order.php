<?php 
session_start();
include 'include/config.php';
include 'include/functions.php';
$total=0;
$username = $_SESSION['username'];
//$session_products = $_SESSION['products'];
//echo $username;
//print_r($products);
$sql = "SELECT max(`order_id`) as `order_id` FROM `order`;";
$results =mysql_query($sql);
$obj = mysql_fetch_object($results);
$order_id = $obj->order_id+1;
$_SESSION['order_id'] = $order_id-1;
//echo $order_id;
$cart_items = 0;
foreach ($_SESSION["products"] as $cart_itm){
    $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
    
			$total = ($total + $subtotal);

  $price=$cart_itm["price"];
  $qty=$cart_itm["qty"];
  $name=$cart_itm["name"];
  $code=$cart_itm["code"];
  //echo $total;
  
  $sql = "INSERT INTO `order`(`order_id`,`product_code`,`product_name`,`quentity`,`username`,`taka`,`total_taka`) 
 VALUES('" . $order_id . "','" . $code . "','" . $name . "','" . $qty. "','" . $username. "','" .$cart_itm["price"]. "','" .$total. "')";
  $result = mysql_query($sql);
}
//unset($_SESSION['products']);
//echo "Payment has been done successfully.";
header("Location:pay_with_paypal.php");

?>