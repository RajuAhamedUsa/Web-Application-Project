<?php
require 'config/productLaptop.php';
require 'config/config.php';
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}</style>

		

    </head>
	<body style="background-color: 	#FF00FF;">
		<form action="LaptopProductN.php" method="post"> 

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
			<!-- container -->
			<div class="container-fluid">
				<!-- row -->
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
			       <div class="col-md-6" style="text-align:center;padding:10px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p>
			       	<ul style="color:#008000;">
			       		
					<li>Stunning 13.3" Retina display with True Tone technology³</li>

					<li>Touch ID</li>

					<li>Dual-core 8th-generation Intel Core i5 processor</li>

					<li>Intel UHD Graphics 617</li>

					<li>Fast SSD storage</li>

					<li>8GB memory</li>

					<li>Stereo speakers with wider stereo sound</li>

	   				<li>Two Thunderbolt 3 (USB Type-C) ports</li>

					<li>Up to 12 hours of battery life¹</li>

					<li>Latest Apple-designed keyboard</li>


					<li>802.11ac Wi-Fi</li>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:373px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					2.4GHz dual-core Intel Core i5 processor (Turbo Boost up to 2.9GHz) with 3MB shared L3 cache<br>
256GB PCIe-based flash storage; 8GB 1600MHz DDR3L onboard memory<br>
13.3-inch (diagonal) Retina display, 2560x1600 pixel Resolution; LED-backlit with IPS technology<br>
Intel Iris Graphics; 802.11ac Wi-Fi wireless networking
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
			       		
					Nvidia GeForce RTX 2070 8GB GDDR6<br>
Intel Core i7-8750H Hexa-Core Processor<br>
144Hz 3ms 17.3” FHD (1920x1080) IPS Type Display<br>
16GB DDR4 2666MHz RAM | 512GB NVMe PCIe SSD + 1TB FireCuda HDD | Windows 10 Home<br>
802.11AC Wave 2 Gigabit Wi-Fi | Quad antennas and ROG RangeBoost technology provides up to 30% wider coverage<br>
Rog aura Sync system with RGB Keyboard, RGB logo, and RGB Light bar.Power:230V power adaptor
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:490px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Work with Intel Core i5-8265U processor, deliver incredible responsiveness and smooth, seamless multitasking<br>
15.6" Full HD (1920 x 1080) Touchscreen Display, Boasts Impressive Color and Clarity, Intel UHD 620 Graphics Integrated<br>
For a smooth, versatile PC experience with the latest Windows 10, it brings back the Start Menu from Windows 7 and introduces new features, like the Edge Web browser that lets you markup Web pages on your screen<br>
Easily switch back and forth between open applications with upgraded 16GB DDR4 memory. A SSD with up to 512GB of storage helps you keep on top of your files<br>
2 x USB 3.1 Gen 1, 1 x USB 2.0, 1x USB 3.1 Type C Gen 1 (Data Only), 1 x Combo Headphone / Microphone Jack, 1 x HDMI, 1 x RJ45, 1 x Media Card Reader
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
	 
			   </div><!--row-->
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
			       		
					AMD Ryzen 3 3200U Dual Core Processor (Up to 3.5GHz); 4GB DDR4 Memory; 128GB PCIe NVMe SSD<br>
15.6 inches Full HD (1920 x 1080) Widescreen LED backlit IPS Display; AMD Radeon Vega 3 Mobile Graphics<br>
1 USB 3.1 Gen 1 Port, 2 USB 2.0 Ports & 1 HDMI Port with HDCP support<br>
802.11ac WiFi; Backlit Keyboard; Up to 7.5 Hours Battery Life<br>
Windows 10 in S mode. Maximum Power Supply Wattage 65 W<br>
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
			   <hr><div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row19['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row19['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row19['product_price'];
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
										     $id=$row19['id'];
										     $productprice=$row19['product_price'];
										    $productname=$row19['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row19['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product19'])) 

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
			       		
					Intel Core i5-4300U 1.9 GHz (Turbo up to 3.3GHz) 4MB Cache, Intel HD Graphics 4400, No DVD Drive<br>
14" HD+ Anti-Glare LED-backlit (1600x900), 802.11b/g/n<br>
RAM is upgraded to 8GB memory for multitasking Adequate high-bandwidth RAM to smoothly run multiple applications and browser tabs all at once; Hard Drive is upgraded to 240GB SSD <br>
provides massive storage space for huge files, so that you can store important digital data and work your way through it with ease. It gives you enormous space to save all of your files. 
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product19" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row20['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row20['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row20['product_price'];
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
										     $id=$row20['id'];
										     $productprice=$row20['product_price'];
										    $productname=$row20['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row20['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product20'])) 

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
			       		
					Latest 8th generation Intel Core i7-8550U Quad Core Processor 8M Cache, up to 4.00 GHz, Intel UHD Graphics 620<br>
14-Inch wide-view Full-HD 1080p IPS Nano-edge 7.15 mm bezel (size of 13” chassis), touch display, Windows 10 Pre-installed<br>
Fast storage and memory featuring NVMe PCIe 512GB Solid State Drive (SSD) with 16GB LPDDR3 2133MHz RAM, Backlit keyboard<br>
Extensive connectivity with: 1 x HDMI/USB Type C, 2x USB 3.0, 802.11ac Wi-Fi, Bluetooth 4.2, SD Card Reader, 1x Combination Audio Jack<br>

					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product20" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row21['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row21['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row21['product_price'];
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
										     $id=$row21['id'];
										     $productprice=$row21['product_price'];
										    $productname=$row21['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row21['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product21'])) 

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
			       		
					Work with Intel Core i7-7500U, deliver incredible responsiveness and smooth, seamless multitasking.<br>
15.6 Inch diagonal FHD BrightView micro-edge WLED-backlit (1920x1080); Intel HD Graphics 620<br>
Windows 10 Home brings back the Start Menu from Windows 7 and introduces new features, Alike the Edge Web browser that lets you markup Web pages on your screen.<br>
1 x HDMI, 1 x USB 2.0, 2 x USB Type-A, 1 x 3-in-1 SD card reader, 1 x Audio jack
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product21" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row22['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row22['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row22['product_price'];
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
										     $id=$row22['id'];
										     $productprice=$row22['product_price'];
										    $productname=$row22['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row22['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product22'])) 

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
			       		
					13.3'' FHD (1920x1080) InfinityEdge Wide Viewing Angle (WVA) Display<br>
8th Generation Intel Core i7-8565U (Quad-Core, 8M Cache, 1.80GHz base speed, Max speed with Turbo Boost is 4.60GHz)<br>
16GB RAM; 512GB M.2 NVMe PCIe State Solid Drive (SSD)<br>
Windows 10 Professional<br>
Fingerprint Reader
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product22" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row23['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row23['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row23['product_price'];
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
										     $id=$row23['id'];
										     $productprice=$row23['product_price'];
										    $productname=$row23['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row23['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product23'])) 

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
			       		
				Display Type: LED-backlit LCD monitor / TFT active matrix| Diagonal Size: 14| Panel Type: IPS| Aspect Ratio: 16:9| Native Resolution<br>
				Screen Coating: Anti-glare| Backlight Technology: LED backlight| OSD Languages: Chinese (traditional), Chinese (simplified), English, German, French, Italian, Portuguese, Spanish, Dutch, Japanese<br>
				
				
				Assistant| OS Required: Microsoft Windows 7, Windows 8, Windows 10| ENERGY STAR Certified: Yes| ENERGY STAR Version<br>
				Humidity Range Operating: 20 - 80% (non-condensing)
<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product23" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row24['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row24['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row24['product_price'];
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
										     $id=$row24['id'];
										     $productprice=$row24['product_price'];
										    $productname=$row24['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row24['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product24'])) 

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
			       		
					Nvidia GeForce GTX 1650 4GB graphics (base: 1395MHz, Boost: 1560MHz, TDP: 50W)<br>
Quad-core AMD Ryzen 5 R5-3550H Processor<br>
120Hz 15.6" Full HD (1920x1080) IPS-Type Display Thin Bezel<br>
256GB NVMe SSD | 8GB DDR4 RAM | Windows 10 Home<br>
Gigabit wave 2 Wi-Fi 5 (802.11AC)<br>
RGB Keyboard<br>
Plug type :ø6.0 (mm)
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product24" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row25['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row25['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row25['product_price'];
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
										     $id=$row25['id'];
										     $productprice=$row25['product_price'];
										    $productname=$row25['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row25['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product25'])) 

                                              {
                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$pqtr','$productprice')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

									
										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:415px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			       		
					Work with Intel Quad Core i7-8565U processor, deliver incredible responsiveness and smooth, seamless multitasking<br>
15.6" diagonal FHD IPS anti-glare micro-edge WLED-backlit touch screen (1920 x 1080), Intel UHD Graphics 620<br>
For a smooth, versatile PC experience with the latest Windows 10, it brings back the Start Menu from Windows 7 and introduces new features, like the Edge Web browser that lets you markup Web pages on your screen<br>
Hard Drive is upgraded to 256GB SSD provides massive storage space for huge files, so that you can store important digital data and work your way through it with ease. It gives you enormous space to save all of your files.
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product25" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row26['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row26['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row26['product_price'];
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
										     $id=$row26['id'];
										     $productprice=$row26['product_price'];
										    $productname=$row26['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row26['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product26'])) 

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
			       		
					7th Gen Intel Core i5-7200u Dual Core Processor (2.5GHz up to 3.1GHz, 3MB Cache), 4GB DDR4 Memory, 256GB SSD<br>
15.6" HD (1366 x 768) Energy-efficient Touchscreen LED Backlight Display, Intel HD Graphics 620<br>
10/100Mbps Ethernet, 802_11_BGN, Bluetooth 4.0, Card Reader, Stereo Speakers with Waves MaxxAudio, Webcam<br>
2 x USB 3.0 Type-A, 1 x USB 2.0, 1 x HDMI, 1 x Headphone Out/Microphone in Combo Jack, 1 x RJ-45<br>
Full-size Island-style Keyboard with Numeric Keypad, Windows 10 Home 64-bit, 45WHr 4-cell lithium_ion, 5.07lb, Black
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product26" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row27['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row27['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row27['product_price'];
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
										     $id=$row27['id'];
										     $productprice=$row27['product_price'];
										    $productname=$row27['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row27['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product27'])) 

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
			       		
					Powerful 8th Generation Intel Core i5 8250U 1.6GHz (Turbo up to 3.4GHz) processor<br>
14.2 Inches Wide, 0.8 Inches Thin and portable footprint with 0.3 Inches Nano edge bezel for a stunning 80% screen to body ratio<br>
15.6 inches Anti glare full HD display with ASUS splendid software enhancement<br>
8GB DDR4 RAM and 1TB HDD<br>
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product27" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row28['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row28['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row28['product_price'];
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
										     $id=$row28['id'];
										     $productprice=$row28['product_price'];
										    $productname=$row28['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row28['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product28'])) 

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
			       		
					Clean, elegant design — thin and light, starting at just 2.79 pounds, Surface Laptop 3 is easy to carry<br>
Choose from rich tone-on-tone color combinations: new Sandstone, plus Matte Black, Cobalt Blue, and Platinum<br>
Improved speed and performance to do what you want, with the latest processors – Surface Laptop 3 is up to two times faster than Surface Laptop 2<br>
All-day power on the go, with up to 11.5 hours of battery life, Plus standby time when you’re away. Go from empty to a full battery with fast charging- up to 80% in about 1 hour
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product28" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row29['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row29['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row29['product_price'];
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
										     $id=$row29['id'];
										     $productprice=$row29['product_price'];
										    $productname=$row29['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row29['product_image'] ).'"/>';
										    $pqtr=1;
                                              if (isset($_POST['product29'])) 

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
			       		
					Microsoft Surface Laptop features a 7th generation Intel Core i5 processor, 256 GB of storage, 8 GB RAM, and up to 14.5 hours of video playback<br>
Backed by the best of Microsoft, including Windows and Office<br>
Four tone on tone color combinations. Exterior has aluminum casing<br>
Natural typing and trackpad experience, Ultra thin and light; luxurious Alcantara fabric covered keyboard<br>
Luxurious Alcantara fabric covered keyboard. 3.5 mm headset jack
					 <form  method="post">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product29" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>

            </form>



			       	</ul>
			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>

			</div> <!-- container-->

		
					
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
