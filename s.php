<?php
      include 'include/config.php';
include'include/functions.php';
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);


    
 if (isset($_POST['product_name'])) {
 $product_name = $_POST['product_name'];
       echo $product_name ;    die();
    $sql = "SELECT * FROM `program_project` where product_name='" . $product_name . "'";
    $result=mysql_query($sql);
    
}
?>