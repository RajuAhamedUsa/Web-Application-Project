<?php
require 'config/config.php';
require 'config/tvconfig.php';
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
		<form action="tvhomeN.php" method="post"> 

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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:350px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			     Hisense’s ULED technologies amplifies color, contrast, brightness and provides smooth motion— raising the bar for picture quality<br>
Your favorite content is always front and center to binge-watch or pick up where you left off with Android TV<br>
With the Google Assistant built in, you can quickly access entertainment, get answers, and control devices around your home—all with just your voice<br>
Dolby Vision HDR + HDR10 provides high dynamic range which adds details, dramatic color, contrast and brightness<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			   Fire TV experience built-in - Fire TV Edition brings together live-over-the air TV, and your favorite streaming content on the home screen. Connect any HD antenna (sold separately) to watch live over-the-air TV, or stream movies and shows from Netflix, Prime Video, Hulu, HBO and more.<br>
Dolby Vision HDR - Enhanced 4K HDR picture with an expanded range of contrast and superior brightness.<br>
True-to-life picture quality - Experience breathtaking 4K Ultra HD picture quality with over 8 million pixels for stunning clarity, deep contrast and vivid colors. Watch movies and TV shows come to life in ultra high definition.<br>
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
			       		
					Dimensions (W x H x D): TV without stand: 35.6 X 20.5 X 2.9 inches, TV with stand: 35.6 X 22.7 X 7.2 inches<br>
Smart functionality delivers all your favorite content with over 500, 000 movies and TV episodes, accessible through the simple and intuitive Roku TV<br>
1080p HD resolution for a crisp picture. Stand Separation Distance 28.7 inch<br>
Direct lit LED produces great picture quality<br>
Inputs: 3 HDMI 2.0 with HDCP 2.2 (one with HDMI ARC), 1 USB (media player), RF, Composite, Headphone Jack, Optical Audio Out<br>
Compatible with Alexa and Google Assistant<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:400px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			     4K UHD PROCESSOR: Powerful 4K UHD processor optimizes your TV’s performance by upscaling every show, season, and scene with 4K picture quality<br>
ENHANCED DETAIL WITH HDR: 4K depth of detail with high dynamic range lets you see shades of color that reveal more detail than HDTV can deliver<br>
PURCOLOR REVEALS SPECTRUMS OF COLOR: Millions of shades of color reveal a vibrant, lifelike picture that conventional HDTV can’t create<br>
SMART TV FEATURES: Simple on-screen universal guide to find streaming content and live TV shows, OneRemoteA to control all compatible devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more<br>
CURVED SCREEN DESIGN: Get pulled into the action with Auto Depth Enhancer on curved TVs for immersive viewing
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
			       		
					4K UHD PROCESSOR: Powerful 4K UHD processor optimizes your TV’s performance by upscaling every show, season, and scene with 4K picture quality<br>
ENHANCED DETAIL WITH HDR: 4K depth of detail with high dynamic range lets you see shades of color that reveal more detail than HDTV can deliver<br>
PURCOLOR REVEALS SPECTRUMS OF COLOR: Millions of shades of color reveal a vibrant, lifelike picture that conventional HDTV can’t create<br>
SMART TV FEATURES: Simple on screen universal guide to find streaming content and live TV shows, OneRemoteA to control all compatible devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:400px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					LG a7 GEN 2 INTELLIGENT PROCESSOR: Images, action and color are brought to new life to instantly enhance picture quality through LG's best 4K processor, empowered by AI at its core.<br>
LG THINQ, ALEXA AND GOOGLE ASSISTANT: LG TVs are the first to integrate both the Google Assistant and Alexa with LG ThinQ AI technology.<br>
DOLBY VISION AND DOLBY ATMOS: Transform your TV into an entertainment powerhouse Advanced image and sound technologies inspired by the cinema optimize picture and sound for a spectacular, more lifelike experience in every scene. The ultra-vivid picture and powerful, moving audio seem to flow all around you.<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			     QUAD CORE PROCESSOR: improves images, action and color, reducing distracing video noise and motion blur, enhancing sharpness and portraying accurate colors.<br>
LG THINQ, ALEXA AND GOOGLE ASSISTANT: LG TVs are the first to integrate both the Google Assistant and Alexa with LG ThinQ AI technology.<br>
4K ACTIVE HDR: 4K resolution TV detail and more lifelike picture with scene by scene picture adjustment. Supports HDR formats, HDR10 and HLG.<br>
IPS 4K: wide viewing angle keeps you enthralled with spectacular realism displaying almost 100% color accuracy, even from a 60 degree angle.<br>
AIRPLAY 2: with AirPlay 2 built in.
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
			       		
					5K UHD PROCESSOR: Powerful 4K UHD processor optimizes your TV’s performance by upscaling every show, season, and scene with 4K picture quality<br>
ENHANCED DETAIL WITH HDR: 4K depth of detail with high dynamic range lets you see shades of color that reveal more detail than HDTV can deliver<br>
DYNAMIC CRYSTAL COLOR: Millions of shades of color reveal a vibrant, lifelike picture that HDTV can’t create<br>
SMART TV FEATURES: Simple on screen universal guide to find streaming content and live TV shows, OneRemote to control all compatible devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       	4K HDR, - HDR10 & HLG for advanced detail and clarity<br>
Upscale to a more natural picture with 4K X-Reality PRO<br>
Content appears with lifelike motion with Motion flow XR technology<br>
Scenes appear more realistic with Dynamic Contrast Enhancer<br>
Compatible with Google Home and Alexa for an even smarter home. Power Requirements (voltage/frequency)- 50/60 Hz / AC 110-240 V<br>
Slice of living design with built-in cable management<br>
Dimensions (W x H x D): TV without stand: 48 7/8 x 28 1/2 x 3 1/8(7/16) inch, With Stand: 48 7/8 x 31 x 13 1/4 inch<br>
In the box: TV, stands, remote controller, batteries, power cord, IR blaster, quick start up guide, manual
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
			   LG a7 GEN 2 INTELLIGENT PROCESSOR: Images, action and color are brought to new life to instantly enhance picture quality through LG's best 4K processor, empowered by AI at its core.<br>
LG THINQ, ALEXA AND GOOGLE ASSISTANT: LG TVs are the first to integrate both the Google Assistant and Alexa with LG ThinQ AI technology.<br>
DOLBY VISION AND DOLBY ATMOS: Transform your TV into an entertainment powerhouse Advanced image and sound technologies inspired by the cinema optimize picture and sound for a spectacular, more lifelike experience in every scene. The ultra-vivid picture and powerful, moving audio seem to flow all around you.<br>
AIRPLAY 2: with AirPlay 2 built in, you can effortlessly cast anthing from Apple iPhone or laptop to your LG AI TV.
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
			      Dimensions (W x H x D): TV without stand: 20" x 2.1" x 12.5", TV with stand: 20" x 5.8" x 14.1"
No smart functionality.VESA 75x75<br>
1080p Full HD resolution for a lifelike picture<br>
Direct lit LED produces great picture quality<br>
60Hz refresh rate allows fast moving action scenes to be seen with minimal motion blur (120Hz effective rate)<br>
Inputs: 1 HDMI. Pixel Pitch (mm) 0.24795 x 0.24795
Refresh Rate: 75 Hz
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
			       		
					MEMC 120 with a MEMC 120 (Motion Estimation and Motion Compensation), all action-packed sequences will flow smoothly from frame to frame for the ultimate experience<br>
Mobile high-definition Link (MHL) MHL allow streaming of Contents from your compatible smartphone or tablet to Sceptre TV, which capitalize on the visually enhanced picture quality<br>
Energy Star V7.0 products that are energy star-qualified prevent greenhouse gas emissions by meeting strict energy efficiency guidelines set by the U.S. Environmental protection agency and the U.S<br>
3 x HDMI (HDMI 1 shared with MHL) ATSC clear QAM<br>

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
			     100% COLOR VOLUME WITH QUANTUM DOTS: Powered by Quantum dots, Samsung’s 4K QLED TV offers over a billion shades of brilliant color and 100% color volume for exceptional depth of detail that will draw you in to the picture for the best 4K TV experience<br>
QUANTUM PROCESSOR 4K: Intelligently powered processor instantly upscales content to 4K for sharp detail and refined color<br>
QUANTUM HDR 4X: 4K depth of detail with high dynamic range powered by HDR10+ delivers the lightest to darkest colors, scene by scene, for amazing picture realism<br>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       	R7E offers a clearer, more defined picture when compared to Full HD. Plus, easily make the most of the brilliant picture by accessing 4K Ultra High Definition movies and TV with the 4K Spotlight Channel<br>
High dynamic range (HDR*) boosts the contrast of every image while delivering vivid, deep colors. With enhancements to the darkest and lightest areas of the picture, HDR delivers an image that looks closer to life<br>
With dual band wireless built in, the R7E can make the most of modern routers, giving you blazing-fast connection speeds without a mess of tangled cables<br>
Dimensions (L x H x W): TV without stand: 44. 4" X 25. 7" X 3. 3", TV with stand: 44. 4" X 27. 7" X 9. 7"
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:515px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					LG a9 GEN 2 INTELLIGENT PROCESSOR: Images, action and color are brought to new life to instantly enhance picture quality through LG's best 4K processor, empowered by AI at its core.<br>
LG THINQ, ALEXA AND GOOGLE ASSISTANT: LG TVs are the first to integrate both the Google Assistant and Alexa with LG ThinQ AI technology.<br>
DOLBY VISION AND DOLBY ATMOS: Transform your TV into an entertainment powerhouse Advanced image and sound technologies inspired by the cinema optimize picture and sound for a spectacular, more lifelike experience in every scene. The ultra-vivid picture and powerful, moving audio seem to flow all around you.<br>
NVIDIA G-SYNC COMPATIBILITY: exceptional picture quality of perfect black and intense colors combine with smooth gameplay to take PC gaming to new heights.<br>
WISA SPEAKER COMPATIBILITY: works seamlessly to deliver high fidelity in wireless audio. It dramatically elevates the cinematic sound of everything you watch. Only supports 5.1 Channel and 2.0 Channel. Transmitter dongle required and sold separately.<br>
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
			       <div class="col-md-6" style="text-align:center;padding:5px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			      UNCOVER THE DETAIL: Enjoy 70 inches of exceptional contrast with 4K UHD resolution and HDR content<br>
NEXT LEVEL CONTRAST: Takes non HDR imaging to near 4K HDR quality by optimizing the overall contrast<br>
AUTHENTIC COLOR: TRILUMINOS Display creates vibrant shades and smooth gradations of red, green, blue<br>
FAST MOTION CLARITY: Motionflow XR 960 enhances the native 120Hz panel for fast moving action scenes<br>
SLICE OF DESIGN: Hidden cable management system to coexist with other sound systems and devices<br>
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
			       <div class="col-md-6" style="text-align:center;padding:10px; background-color:#FF69B4; border-radius: 55px; height:410px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Fire TV experience built-in - Fire TV Edition brings together live-over-the air TV, and your favorite streaming content on the home screen. Connect any HD antenna (sold separately) to watch live over-the-air TV, or stream movies and shows from Netflix, Prime Video, Hulu, HBO and more.<br>
Dolby Vision HDR - Enhanced 4K HDR picture with an expanded range of contrast and superior brightness.<br>
True-to-life picture quality - Experience breathtaking 4K Ultra HD picture quality with over 8 million pixels for stunning clarity, deep contrast and vivid colors. Watch movies and TV shows come to life in ultra high definition.<br>
Keeps getting smarter - This TV is smart and simple in every way. Just plug it in, connect to Wi-Fi and enjoy. Plus, your TV keeps getting smarter with new Alexa skills
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
	 
			   </div> 
			   <hr>

			    <div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row18['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row18['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row18['product_price'];
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
										     $id=$row18['id'];
										     $productprice=$row18['product_price'];
										    $productname=$row18['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row18['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product18'])) 

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
			       HDR Plus: See movies and shows just as the director intended in stunning high dynamic range.<br>
Ultra Slim Array: The Ultra Slim Array dynamically fine tunes the deepness of the blacks, to the brightness of the whites, for a picture with sensational contrast.<br>
Dynamic Crystal Color: Discover an expanded world of colors where millions of shades HDTVs can’t replicate make all the difference.*<br>
Motion Rate 240: Enjoy smooth, crisp action even in the fastest scenes.<br>
Smart TV with Bixby Voice: A revolutionary way to help find streaming and live TV shows with a Universal Guide, one remote and voice assistance.
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product18" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
