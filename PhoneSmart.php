<?php
require 'config/productLaptop.php';
require 'config/smartphone.php';


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 

		<title>Homepage
		</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/radio.css">
		<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}</style>

		

    </head>
	<body style="background-color: 	#FF00FF;">
		<form action="PhoneSmart.php" method="post"> 

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" style="color: red;">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: red;"><a href="index.php"><img src="./img/logout.jpg" alt="" style="width:20px;height:20px;background-color: red; ">
</i>Log-Out</a></li>
						
					</ul>
					<ul class="header-links pull-right">
						<li>
							<a href="cartform.php"><img src="./img/myaccount.jpg" style="width: 45px; height: 45px; background-color: blur; padding: 10px;">My Account</a>
						</li>
						
						
						</li>
					</ul>

					
				</div>
			</div>
			<!-- /TOP HEADER -->

            <div><b><h1 style="text-align: center; color:"></h1></b></div>		<!-- NAVIGATION -->
		<nav id="navigation" style="background-color: #FF7F50; text-align: center;">
			<!-- container -->
			<div class="container" style="background-color:	#FF7F50; text-align: center;">
				<!-- responsive-nav -->
				<div id="responsive-nav" style="text-align: center;">
					<!-- NAV -->
					<ul class="product-link pull-middle" >
						<li style="width: 1174px; height: 34px" class="auto-style5" >
							<a href="inside.php"><span class="auto-style6">Home</span></a><span class="auto-style6">&nbsp;&nbsp;
							</span>
						<a href="LaptopProduct.php"><span class="auto-style6">Laptops</span></a><span class="auto-style6"> &nbsp;&nbsp;
						
						<a href="PhoneSmart.php" style="">Smartphones</a>&nbsp;&nbsp;
						<a href="camera.php">Cameras</a>&nbsp;&nbsp;
						</span>
						<a href="tvhome.php"><span class="auto-style6">Smart TV</span></a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
	
		<!-- SECTION -->
	<div class="container-fluid">
				<!-- row -->
				<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row1['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row1['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product1'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:5px; background-color:	#FF69B4	; border-radius: 55px; height:400px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Compatibility: This LCD display screen is ONLY for iPhone 7(4.7 inch).Compatible with models: A1660, A1778, A1779. Make sure your model before purchasing.<br>
Note: Pay attention to select the Repair Tool Kit in this listing. Note the installation way image in the listing when you press the display.100 days warranty. If you have any question, please contact with us.<br>
Good Quality: All screens 100% tested by professional QC team before shipping. The display screen is high clarity and high response sensitivity. So you will have good experience.<br>
Easy to use: You just need to do is: transfer your original home button to the new replacement and make camera, earpiece, facing proximity sensor and metal back plate stay in the same place.<br>

					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product1" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


		</div>
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row2['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row2['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row2['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row2['id'];
										     $productprice=$row2['product_price'];
										    $productname=$row2['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row2['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product2'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:30px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					5.7-inch IPS LCD Capacitive Touchscreen, 1440 x 2880 pixels with Corning Gorilla Glass 3<br>
IP68 Dust/Water Proof (Up to 1.5m for 30mins) & MIL-STD-810G Compliant<br>
Android OS<br>
Internal Memory: 32GB, 4GB RAM - microSD Up to 256GB<br>
Dual 13 Megapixel Camera (f/1.8, OIS, 3-axis, phase detection AF)|13MP (f/2.4, No AF), Dual-LED Flash, 1/3 inch sensor size & 5MP Front Camera with f/2.2
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product2" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  

			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row3['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row3['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row3['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row3['id'];
										     $productprice=$row3['product_price'];
										    $productname=$row3['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row3['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product3'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					6.1" QHD+ 19.5:9 FullVision Super Bright Display (3120 x 1440 / 564ppi)<br>
64GB/4GB + MicroSD slot (Up to 2TB)<br>
16MP+16MP (Wide angle) rear camera + 8MP front-facing camera | Super bright camera with AI and display Google Assistant physical button<br>
Boom box speaker - DTS: x 3D Surround
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product3" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row4['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row4['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row4['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row4['id'];
										     $productprice=$row4['product_price'];
										    $productname=$row4['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row4['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product4'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       Memory, Storage and SIM: 4GB RAM | 64GB internal memory expandable up to 512GB | Dual SIM (nano+nano) dual-standby (4G+4G)<br>
Android Pie V9.0 operating system with 2.29 Ghz Exynos 9610 Octa Core Processor<br>
4000mAH lithium-ion battery with Type-C fast charging | 15W Charger in the box<br>
16.21 centimeters (6.4-inch) FHD+ multi-touch capacitive touchscreen with 2340 x 1080 pixels resolution and 16M color support
25MP + 5MP + 8MP with F1.7, F2.2 wide Angle and F2.2 with Flash | 25 MP front camers with F2.0
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product4" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row5['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row5['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row5['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row5['id'];
										     $productprice=$row5['product_price'];
										    $productname=$row5['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row5['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product5'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Memory, Storage and SIM: 4GB RAM | 64GB internal memory expandable up to 512GB | Dual SIM (nano+nano) dual-standby (4G+4G)<br>
Android Pie V9.0 operating system with 2.29 Ghz Exynos 9610 Octa Core Processor<br>
4000mAH lithium-ion battery with Type-C fast charging | 15W Charger in the box<br>
16.21 centimeters (6.4-inch) FHD+ multi-touch capacitive touchscreen with 2340 x 1080 pixels resolution and 16M color support<br>
25MP + 5MP + 8MP with F1.7, F2.2 wide Angle and F2.2 with Flash | 25 MP front camers with F2.0
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product5" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row6['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row6['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row6['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row6['id'];
										     $productprice=$row6['product_price'];
										    $productname=$row6['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row6['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product6'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					An immersive Cinematic Infinity Display, Pro grade Camera and Wireless PowerShare The next generation is here<br>
Ultrasonic in display fingerprint ID protects and unlocks with the first touch<br>
Pro grade Camera effortlessly captures epic, pro quality images of the world as you see it<br>
Intelligently accesses power by learning how and when you use your phone<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product6" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>
<div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
		        
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			          <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="0">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div>

										<?php 
										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										   
                                              if (isset($_POST['product'])) 

                                              {

                                                   $q=$_POST['qty'];
                                                   $color=$_POST['color'];
                                                   $size=$_POST['size'];
                                                   $Rdelivery=$_POST['delivery'];
                                                  $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$q)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$q)+10;
										     	# code...
										     }

 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$q','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

			   <hr>  
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row7['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row7['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row7['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row7['id'];
										     $productprice=$row7['product_price'];
										    $productname=$row7['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row7['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product7'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       The largest battery in a Note, ever. When you have a long-lasting battery, you really can go all day and all night.<br>
The Note9 has twice as much storage as the Note8, which means more music, more videos, more pictures, and less worry when it comes to space on your phone.<br>
The Note9 gives you a quick network connection for incredibly fast streaming and downloading, so you can do more, uninterrupted.<br>
Still amazing on screen, but now the S-Pen has more power off screen. Remotely control different applications and use the S pen to capture shots from far away, scroll, and play music.
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product7" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>

			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row8['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row8['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row8['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row8['id'];
										     $productprice=$row8['product_price'];
										    $productname=$row8['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row8['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product8'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					8GB RAM<br>
128GB ROM<br>
6.1" Display Size, Unlocked Smartphone, Gorilla Glass<br>
International version phones may come with the start-up screen in a foreign language. Nevertheless, customer can pick a language of their choice at the time of startup<br>
International version Samsung do not always bear a seal. Do not be alarmed by that. It's merely a decision of the manufacturer<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product8" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row9['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row9['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row9['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row9['id'];
										     $productprice=$row9['product_price'];
										    $productname=$row9['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row9['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product9'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Infinity Display: a bezel less, full frontal, edge to edge screen. Default resolution is Full HD+ and can be changed to Quad HD+ (WQHD+) in Settings<br>
Camera resolution Front: 8 MP AF, Rear: 12 MP OIS AF<br>
Memory: Internal Memory 64 GB, RAM 4GB<br>
Battery, talk time is up to 30 hrs, video play time is up to 17 hrs<br>
Dust and Water resistant Water resistant and dustproof based on IP68 Rating, which tests submersion up to 1.5 meter for up to 30 minutes. Not shockproof
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product9" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row10['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row10['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row10['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row10['id'];
										     $productprice=$row10['product_price'];
										    $productname=$row10['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row10['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product10'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
				This certified refurbished product has been tested and certified to work and look like new, with minimal to no signs of wear, by a specialized third-party seller approved by amazon. <br>
				The product is backed by a minimum 90-day warranty and may arrive in a generic brown or white box. Accessories may be generic and not directly from the manufacturer.<br>
Infinity display: a bezel-less, full-frontal, edge-to-edge screen. Default resolution is full HD+ and can be changed to quad HD+ (WQHD+) in settings<br>
Camera resolution - front: 8 MP AF, rear: 12 MP OIS AF<br>
Memory: Internal memory 64 GB, RAM 4GB
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product10" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row11['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row11['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row11['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row11['id'];
										     $productprice=$row11['product_price'];
										    $productname=$row11['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row11['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product11'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       Dual Nano Sim 4G LTE Unlocked Any GSM Carrier Desbloqueados GSM (NOT FOR VERIZON SPRINT NET10 OR ANY CDMA CARRIER)<br>
Lte Bands: B1(2100), B2(1900), B3(1800), B4(AWS), B5(850), B7(2600), B8(900), B17(700), B28(700) 3G UTMS B1(2100), B2(1900), B4(AWS), B5(850), B8(900)<br>
Android 8 Oreo (Go edition) 8mp Flash Rear Camera + 5Mp Front Camera<br>
Quad Core 1.4GHZ / 8GB (4.1GB USER) 1GB Ram Support Micro SD Up to 256 gb (not included)<br>
5.0 inch 540 x 960 (qHD) Factory Unlocked International Version Latin Specs
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product11" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>

	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row12['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row12['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row12['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row12['id'];
										     $productprice=$row12['product_price'];
										    $productname=$row12['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row12['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product12'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Fast-charging, long-lasting intelligent power and super speed processing outlast whatever you throw at Note 10+.<br>
S pen’s newest Evolution gives you the power of air gestures, a remote shutter and playlist button and handwriting-to-text, all in One Magic wand.<br>
With a full set of Pro lenses, super-stabilization, live video bokeh and precision audio recording, Note 10+ is a studio in your pocket.<br>
Note 10’s nearly bezel-less Infinity display gives an immersive, cinematic quality to whatever you’re viewing.<br>
Number of SIM - Dual-SIM; SIM size - Nano-SIM (4FF) ; SIM Slot Type - SIM 1 + Hybrid (SIM or MicroSD)
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product12" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
			   	<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row13['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row13['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row13['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										<?php 
										     $id=$row13['id'];
										     $productprice=$row13['product_price'];
										    $productname=$row13['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row13['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product13'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       BODY BUILD: Front/back glass (Gorilla Glass 5), aluminum frame<br>
IP68 dust/water proof (up to 1.5m for 30 mins)<br>
DISPLAY SIZE: 5.8 inches, 82.8 cm2 (~83.3% screen-to-body ratio)<br>
DISPLAY RESOLUTION: 1080 x 2280 pixels, 19:9 ratio (~438 ppi density)<br>
Please note, this product is Factory Unlocked International Model. It comes with no warranty in the USA. This product will work with most GSM carriers around the world, this will NOT work with CDMA carriers like Verizon, Sprint, and Boost in the USA.
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product13" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     



									
									<div id="slick-nav-1" class="products-slick-nav"></div>

								<!--</div>-->

								<!-- /tab -->
							<!--</div>-->
						<!--</div>-->


					<!--</div>-->
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		

		<!-- SECTION -->
		
					
<script>
function myFunction() {
  alert("Item Added to cart");
}
</script>
		
			

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</form>


	</body>
</html>
