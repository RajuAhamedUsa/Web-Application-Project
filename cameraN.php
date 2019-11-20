<?php
require 'config/productLaptop.php';
require 'config/cameraproduct.php';
require 'config/logonC.php';



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
		<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}</style>

		

    </head>
	<body style="background-color: 	#FF00FF;">
		<form action="cameraN.php" method="post"> 

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" style="color: red;">
				<div class="container">
					<ul class="header-links pull-left">
												<li style="color: red;"><img src="./img/moby.jpg" alt="" style="width:150px;height:90px;background-color: red; "></li>

						<!--<li style="color: red;"><a href="logon.php"><img src="./img/login.png" alt="" style="width:30px;height:30px;background-color: red; ">
</i>Log in or Register</a></li>-->


						
					</ul>
					<ul class="header-links pull-right">
						<li>
							<label style="color:white;">User Name</label> &nbsp;<input style="border-radius: 2px; padding: 2px; background-color:" type="text" name="username" class="inputvalues" placeholder="Enter Your Username" >&nbsp;<label style="color: white;">Password</label>&nbsp;<input style="border-radius: 2px; padding: 2px;" type="password" name="password" class="inputvalues" placeholder="Enter Your Password" >&nbsp;<input style="color: black; border-radius: 8px; background-color:;	" type="submit" name="login" id="login_btn" value="Login"> <a href="register.php" style="color:	#FF7F50;border-radius: 1px;padding: 2px;">Don't have account? Register here</a>

                            





						</li>
						
						
						</li>
					</ul>
				
					
				</div>
			</div>

            <div><b><h1 style="text-align: center; color:"></h1></b></div>		<!-- NAVIGATION -->
		<nav id="navigation" style="background-color: #FF7F50; text-align: center;">
			<!-- container -->
			<div class="container" style="background-color:	#FF7F50; text-align: center;">
				<!-- responsive-nav -->
				<div id="responsive-nav" style="text-align: center;">
					<!-- NAV -->
					<ul class="product-link pull-middle" >
						<li style="width: 1174px; height: 34px" class="auto-style5" >
							<a href="index.php"><span class="auto-style6">Home</span></a><span class="auto-style6">&nbsp;&nbsp;
							</span>
						<a href="LaptopProductN.php"><span class="auto-style6">Laptops</span></a><span class="auto-style6"> &nbsp;&nbsp;
						
						<a href="PhoneSmartN.php" style="">Smartphones</a>&nbsp;&nbsp;
						<a href="cameraN.php">Cameras</a>&nbsp;&nbsp;
						</span>
						<a href="tvhomeN.php"><span class="auto-style6">Smart TV</span></a></li>

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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			      KIT INCLUDES: Canon PowerShot G7 X Mark II Digital Camera (Black),64GB SDXC UHS-I Memory Card.<br>
Flexible Gripster Tripod, Carrying Case, Micro HDMI to HDMI Cable,<br>
High Speed Memory Card Reader, Memory Card Wallet High-Quality, Lens Cleaning Pen<br>
High-Quality Dust Blower, Extreme Electronics Cleaning Cloth<br>
A DSLR That's as easy to use as a point and shoot camera<br>
Compact, comfortable design That's great for travel and Special events<br>
Image sensor That's 15x larger than those Used in Typical smartphones for sharper<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product1" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:485px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
				This Camera Bundle Kit comes complete with all manufacturer supplied accessories with a 1-year warranty and includes:<br>
The EOS Rebel T7 DSLR Camera from Canon has a 24.1MP APS-C CMOS Sensor and DIGIC 4+ Image Processor. It has a 3.0" 920k-Dot LCD Monitor with Full HD 1080/30p Video Recording capabilities. <br>
It offers sharp details, accurate colors and low-noise imaging in both bright and low-light shooting situations. The Rebel T& can continuously shoot up to 3 fps.<br>
Canon 18-55mm II Lens - a standard zoom compatible with Canon APS-C format cameras. It features a focal length range of 18-55mm which is equivalent to 29-88mm in the 35mm format<br>
2 x SanDisk 32GB SDHC Memory Cards + Deluxe Padded Camera Case + Flash Light + 3pc Filter Kit + Extra Battery Pack + AC/DC Car & Home Charger + High Speed USB Card Reader + 50" Camera Tripod
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product2" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       		
					Superb DSLM image quality without the bulk and weight of traditional DSLRs<br>
Never miss a photo with three unique 4K Ultra HD Video pause and save 4K Photo Modes<br>
Fast and precise auto focusing tracks the subject. Focus mode AFS (single) / AFF (flexible) / AFC (continuous) / MF, AF mode face/eye detection / tracking / 49 area / custom multi / 1 area / pinpoint<br>
Class leading, ultra compact, interchangeable lens and accessory option. HDMI: microHDMI TypeD / VIERA Link,Video: Auto / 4K / 1080p / 1080i / 720p / 480p,Audio: Stereo<br>
Unwire Your Creativity with integrated Wi Fi sharing
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product3" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:485px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			      NIKON AUTHORIZED DEALER - Includes Full Nikon USA WARRANTY<br>
COOLPIX B500 Simply Brilliant Photos & Video - Simple to Use SUPER-ZOOM<br>
16MP 40x optical Zoom/80x Dynamic Zoom SUPER TELEPHOTO NIKKOR ED Lens<br>
BUILT-IN WI-FI, NFC & BLUETOOTH low energy (BLE) maintain a constant connection with a compatible SMARTPHONE or TABLET - Shoot from creative angles with the tilting 3.0-inch 921,000-dot LCD - Simple, convenient operation for stress-free shooting - 1080p Full HD video recording with stereo sound<br>
BUNDLE INCLUDES: Sandisk Ultra SDHC 16GB UHS Class 10 Memory Card - Deluxe Camera Case - 4x 2950mah Rechargeable AA Batteries w/ AA Charger - Corel PaintShop Pro X9 Digital Download - <br
>12-inch Rubberized Spider Tripod, Large (Red) - LCD/Lens Cleaning Pen - Hi-Speed SDHC Memory Card Reader - <br>
Trifold Memory Card Wallet - Lens Cap Keeper - 3pcs Lens Cleaning Kit - Beach Camera Microfiber Cleaning Cloth
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product4" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       		
					Nikon designed back side illuminated (BSI) full frame image sensor with no optical low pass filter<br>
45.7 megapixels of extraordinary resolution, outstanding dynamic range and virtually no risk of moiré<br>
Up to 9 fps1 continuous shooting at full resolution with full AF performance<br>
8K6 and 4K time lapse movies with new levels of sharpness and detail. File system : DCF 2.0, Exif 2.31, PictBridge<br>
Tilting touchscreen, Focus Shift shooting mode, outstanding battery performance and much more.Total Pixels: 46.89 million
4K Ultra HD video recording, slow motion up to 120 FPS at 1080p
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product5" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       		
					A DSLR That's as easy to use as a point and shoot camera
Compact, comfortable design <br>
That's great for travel and Special events<br>
Image sensor That's 15x larger than those Used in Typical smartphones for sharper, clearer pictures<br>
Works with Nikon's snapbridge app for sharing photos with a compatible smartphone or tablet<br>
1080P full HD videos with monaural sound at the touch of a button.Bluetooth Version 4.1
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product6" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       This Certified Refurbished product is refurbished to factory specifications, it shows limited or no wear<br>
Includes all original accessories plus a 90 Day Warranty<br>
Nikon D3500 24.2MP DSLR Camera with AF-P 18-55mm VR Lens & 70-300mm Dual Zoom Lens Kit<br>
In The BOX INCLUDES: D3500 Camera Body | EN-EL14a Rechargeable Li-ion Battery | MH-24 Quick Charger | AN-DC3 Strap | BF-1B Body Cap | DK-25 Rubber Eyecup | AF-P DX NIKKOR 18-55mm <br
>f/3.5-5.6G VR | LC-55A 55mm Snap-On Front Lens Cap | Rear Lens Cap | AF-P DX NIKKOR 70-300mm f/4.5-6.3G ED | LC-58 58mm Snap-On Front Lens Cap | Rear Lens Cap | Manufacturer Refurbished 90 Day Warranty
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
			       		
					POINT AND SHOOT LONG ZOOM CAMERA: 18.1 megapixel MOS sensor plus 60X zoom DC VARIO lens (20 1220mm) and POWER O.I.S. (Optical Image Stabilizer) captures far off moments<br>
HIGH RESOLUTION VIEWFINDER AND LCD DISPLAY: High resolution 1,170K dot viewfinder and rear touch enabled 3 inch LCD display (1040 dots) are clear even in bright sunlight<br>
4K VIDEO CAPTURE: 4K QFHD video recording (3840 x 2160), plus exclusive LUMIX 4K PHOTO and 4K Post Focus with internal Focus Stacking allows you to record photos up to 30fps and set your desired focus points after the photo has been taken<br>

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
			       		
					Photo and Video Capability: 16 Megapixel micro Four Thirds sensor confidently captures sharp images with a High Dynamic Range (HDR)<br>
4K Capture: 4K Ultra HD video recording (3840 x 2160) plus 4K photo pause and save frame that extracts individual high-resolution photos from 4K Ultra HD video<br>
Intuitive Controls: Easily control aperture and shutter speed settings with the front and rear dials while making white balance and ISO adjustments on the fly; Assign favorite settings to any of the six function buttons (6 on body, 5 on menu)<br>

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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			   POINT-AND-SHOOT CAMERA: Large, 1-inch 20.1-megapixel MOS sensor plus 3X zoom LEICA DC VARIO-SUMMILUX lens (24-72mm) and POWER O.I.S. (Optical Image Stabilizer) delivers brighter, more colorful photos with fewer image artifacts<br>
TILTING SELFIE DISPLAY: Rear touch-enabled 3-inch LCD display (1040K dots) tilts upward 180 degree for easy selfie photos; Temperature: 23 oC (73.4 oF) / Humidity: 50%RH when monitor is on.<br>
4K VIDEO CAPTURE: 4K QFHD video recording (3840 x 2160), plus exclusive LUMIX 4K PHOTO and 4K Post Focus with internal Focus Stacking allows you to record photos up to 30fps and set your desired focus points after the photo has been taken<br>
LENS-MOUNTED CONTROL RING: Manual lens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body<br>

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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			      20. 1MP 1. 0 Type stacked CMOS sensor, Zeiss Vario Sonnar T* 24 200 millimeter F2. 8 F4. 5 large aperture high magnification zoom lens
0. 02 sec. High AF speed, 357-point focal-plane <br> Phase detection AF and 425 point contrast detection AF
Up to 20 fps blackout free shooting, using up to 60 times/sec. Af/AE calculations<br>
Ai based real time tracking for stills and movies, and touch tracking. Real time eye AF for human (stills and movies), and for animal (stills only)<br>
4K video with s log3 and Interval Shooting. Microphone jack and vertical position data recording. Active mode image stabilization in 4K video recording, and Movie Edit add on compatible
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					20. 3 Megapixel MOS sensor plus 30x Leica DC VARIO ELMAR lens (24 720mm), Plus 5 axis Hybrid O. I. S. (Optical image Stabilizer)<br>
0. 2 Inch 1, 166k dot EVF (electronic view finder) with eye sensor for easier viewing under sunny outdoor conditions<br>
4K QFHD video recording (3840x2160), Plus exclusive Lumix 4K PHOTO and 4K post focus with internal focus Stacking feature<br>
Lens barrel mounted control ring enables quick, intuitive operation of important functions<br>
Wi Fi plus a 180 Degree front Flip up touch feature enabled screen simplifies selfie photography, and framing for unusual perspectives.Recording file format:Motion Picture: AVCHD Progressive, AVCHD, MP4.Wifi:IEEE 802.11b/g/n
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			      24 MP APS C CMOS sensor and Focus Sensitivity Range :EV 0 to EV 20 (at ISO 100 equivalent with F2.8 lens attached)<br>
ISO 100 25600 (expandable to 51200). Lens compatibility: Sony E mount lenses<br>
Hybrid AF with 179 point focal plane phase detection and 25 contrast detect points<br>
Up to 11 FPS continuous shooting. Battery Life (Still Images): Up to 360 shots.Metering Type:1200-zone evaluative metering<br>
3 inch tilting LCD with 921,000 dots.Viewfinder Type:0.39 in type electronic viewfinder (color)<br>
In the box: Rechargeable Battery NP FW50; Shoulder strap; Eyepiece cup; Micro USB cable USA.
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
			   <div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row14['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row14['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row14['product_price'];
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
										     $id=$row14['id'];
										     $productprice=$row14['product_price'];
										    $productname=$row14['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row14['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product14'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					30x Optical/60x Clear Image Zoom ZEISS Vario-Sonnar T* Lens, 18.2MP Exmor R CMOS Sensor for superb low light images, Built-in retractable OLED Tru-Finder viewfinder<br>
Versatile video w/ high-quality XAVC S, AVCHD & MP4 formats, Simple connectivity to smartphones via Wi-Fi w/NFC, 5-axis image stabilization greatly reduces camera shake blur
Selfie-ready 3"<br> Extra Fine LCD multi-angle display, P/A/S/M modes, customizable settings and Memory Recall mode, Enhance features w/ downloadable camera apps, Capture the decisive moments with up to 10fps or keep your subject in focus with Lock-on AF<br>
Focus Range Wide: 1.97" (5 cm) - Infinity Telephoto: 8.20' (2.5 m) - <br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product14" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row15['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row15['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row15['product_price'];
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
										     $id=$row15['id'];
										     $productprice=$row15['product_price'];
										    $productname=$row15['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row15['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product15'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Less bulky than a DSLR, the LUMIX G85 is the compact 4K video-enabled Micro Four Thirds Mirrorless (DSLM) camera with true-to-life photo image quality.<br>
Class leading 5-axis body stabilization that when mated to LUMIX 2-axis optically stabilized lenses for a “Dual IS” effect.<br>
4K Video recording at 30p/24p 100 Mbps plus a 3.5mm port for external microphones. (Full HD 60p 28Mbps)<br>
Weather sealed splash proof and dustproof, rugged enough to withstand even the most challenging environments.<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product15" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
                         


			   </div>
			   <div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row16['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row16['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row16['product_price'];
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
										     $id=$row16['id'];
										     $productprice=$row16['product_price'];
										    $productname=$row16['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row16['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product16'])) 

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
			       NEW SONY A7R MARK IV BUNDLE INCLUDES: 64GB Extreme Memory Card | Studio Headphones | Tripod | Camera Case | Memory Card Reader | Camera Grip | Monopod | Cleaning Kit<br>
61MP Full-Frame Exmor R BSI CMOS Sensor<br>
UHD 4K30p Video with HLG & S-Log3 Gammas<br>
Bluetooth & Wi-Fi, Dual UHS-II SD Slots<br>
3.0" 1.44m-Dot Tilting Touchscreen LCD
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product16" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr><div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row17['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row17['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row17['product_price'];
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
										     $id=$row17['id'];
										     $productprice=$row17['product_price'];
										    $productname=$row17['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row17['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product17'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					1.0"-type Exmor R CMOS sensor for a wide range of shooting conditions, High sensitivity and high resolution, Sony G Lens (optical 12x zoom) with Optical Steady Shot, 24x Clear Image Zoom, and 48x Digital Zoom<br>
Active Steady Shot corrects camera sway that occurs while walking, ND filter control mechanism, Three lens ring for focus, zoom, and iris manual control, XAVC S recording, 59.94p recording at Full HD 1920 x 1080<br>
Dual media slots for simultaneous/relay recording, and independent record control, Slow & Quick Motion, Picture Profile, 99 Camera Profiles, Multi Interface Shoe (MI Shoe) for flexible connection<br>
2 x 3-Pin XLR Audio Inputs . AVCHD 2.0, DV Recording Codecs<br>
Create & Share Picture Profiles. Discrete Manual Focus
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product17" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     



									
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
