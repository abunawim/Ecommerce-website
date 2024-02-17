<?php
session_start();
include 'include/config.php';
$username = $_SESSION['username'];

if (!isset($_SESSION['username']))
{ header("location:login.php");}

if (isset($_POST['submit'])) {
	
	}
//$order_id = $_SESSION['order_id'];

 
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
 <h1>Choose Payment method:</h1>
 <?php
 $products = $_SESSION['products'];
 
 ?>
 
 
 <div class="view-cart">
     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="daritamim66@gmail.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <!-- Specify details about the item that buyers will purchase. -->
    
    
    <?php
    $suffix = 1;
    foreach($products as $item):
?>
<input type="hidden" name="item_name_<?php echo $suffix; ?>" value="<?php echo $item['name']; ?>"> 
<input type="hidden" name="amount_<?php echo $suffix; ?>" value="<?php echo $item['price']; ?>">
<input type="hidden" name="quantity_<?php echo $suffix; ?>" value="<?php echo $item['qty']; ?>"> 
<?php
    $suffix++;
    endforeach;
?>
    <input type="hidden" name="return" value="http://www.google.com"/>
    <!-- Display the payment button. -->
    <input class="paymentbutton" style="max-width:100px; max-height:50px;" type="image" name="submit" border="0"
           src="img/x-click-but5.gif"
    alt="PayPal - The safer, easier way to pay online">
    <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    <a href="biksh.php"><img class="paymentbutton" style="max-width:100px; max-height:50px;" src="img/bkash.jpg"/></a>
    <a href="cash_on_delivary.php"><img class="paymentbutton" style="max-width:100px; max-height:50px;" src="img/BigRock-COD.png"/></a>
    </form>
 </div>
</div>
</body>
</html>
