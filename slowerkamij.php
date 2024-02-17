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
                                                                    <li><a href="index.php">Home</a></li>
                                                                    <li><a href="#">Profile</a></li>
                                                                    <li><a href="#">another</a></li>
                                                                </ul>
                                        </div> 
                                    </div> 
                         </div>
				   </div>
			  </div>
		</div>
		            <!--------------------------------------------------------- Emd for menu ----------------------------------------------------->
  		            <!--------------------------------------------- Start for Slider $ slider----------------------------------------------------->
					 
		<div id="sidebar">
		     <div class="container"> 
			       <div class="row">
                    <!--------------------------------------------- Start for Slider----------------------------------------------------->
				         <div class="col-lg-3" id="sidebara" >
                             <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                                       <li><a href="shirt.php">Shirt</a></li>
                                        <li><a href="pant.php">Pant</a></li> 
                                        <li><a href="punjabi.php">Panjabi</a></li>
                                        <li><a href="slowerkamij.php">Salwar kameez</a></li>
                             </ul>
						 </div>
				    <!--------------------------------------------- Start for  slider----------------------------------------------------->
				         <div class="col-lg-9">
                                <div id="slider">
                                      <img src="images/salower.jpg" />
                                </div>	
                        </div>
				   </div>
			  </div>
		</div>
                    <!---------------------------------------End for Slider $ slider----------------------------------------------------->
                    <!---------------------------------------End for product----------------------------------------------------->
                                                     <h2 style="text-align:center"> All Product of slowerkamij </h2>
                    
                    <?php
					
					
						$sql = "SELECT * FROM `program_project` where category_id=26";
				$result=mysql_query($sql);
				//
					$per_page =3;
					$pages = ceil(mysql_num_rows($result) / $per_page);
					$page =(isset($_GET['page'])? (int)$_GET['page']:$_GET['page']=1);
					//echo $pages; die();
					//if(!isset($_GET['page'])){
						//header('location:?page=1');
					//}else{	
						//$page = $_GET['page'];	
					//}
					
					
					$start = (($page-1)*$per_page);
					
					
					//////////////////
					
                         $sql= "select * from `program_project` where category_id=26 limit $start , $per_page ";
						$data= mysql_query($sql);
						//$record = mysql_num_rows($data); 
						
						while ($row =mysql_fetch_object($data)){
						
							?>
							
							
		 <div style="margin-left:170px;" >
                <div>
                        <div class="mainproduct" style="width:190px; height:300px; background-color:#FFF; margin-left:10px; margin-top:10px; float:left;">
                               <img src="<?php echo $config['BASE_URL']; ?>/admin_panel/programs/<?php echo $row->image; ?>"/>
                               <div>
                                   <?php echo '<form method="post" action="cart_update.php">';
		
            echo '<div class="product-content"><h5>'.$row->product_name.'</h5>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$row->price.'  </br>  ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" style="width:30px;"/>';
			echo '<button class="add_to_cart ">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$row->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';      ?>
                                   <!-- <p class="btn btn-primary">Details</p> 
                                   <p class="btn btn-primary"> Add to cart</p>
                                   -->
                               </div>
                        </div>
				</div>
     </div>
						<?php	
							}
 
					?>
      
 
 

      
      
      <div  class="pagination" style="padding:5px; margin-top:650px; text-align:center;"> <!-- this div for pagination menu -->
						<?php for($num=1; $num<=$pages; $num++){
                          		echo '<a href="?page='.$num.'" > '.$num.' </a >';	  
                        }?> 
                    </div>
                    
                    
                    <!---------------------------------------End for product----------------------------------------------------->
 
                   
                      <div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url= '.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        //echo '<div class="p-code">P code  : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart </a></span>';
}else{
    echo 'Your Cart is empty ';
}
?>
</div>

    
</div>
 
 
                    
                       
		            <!--------------------------------------------- Start for footer----------------------------------------------------->
				
		<div id="footer" style="margin-top:10px;">
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
        
        
   
        
        
       </div> 
    </body>
</html>
