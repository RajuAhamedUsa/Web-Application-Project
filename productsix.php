<?php
require 'config/config.php';



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
		<form action="" method="post"> 

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" style="color: red;">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: red;"><img src="./img/moby.jpg" alt="" style="width:150px;height:90px;background-color: red; ">
</i></a></li><li style="color: red;"><a href="index.php"><img src="./img/logout.jpg" alt="" style="width:20px;height:20px;background-color: red; ">
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

            <div><b><h1 style="text-align: center; color:black;"></h1></b></div>		<!-- NAVIGATION -->
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
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row10['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row10['product_name'] ?></a></h3>
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
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:500px;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			 <li style="size: 18px;">15.6 Inch 1920 x 1080 Display, Intel UHD Graphics?620, Intel Quad-Core i7-8565U Processor (1.8 GHz base frequency, up to 4.6 GHz with Intel Turbo Boost Technology, 8 MB cache)</li><br>
<li>RAM is upgraded to 8GB memory for multitasking Adequate high-bandwidth RAM to smoothly run multiple applications and browser tabs all at once</li><br>
1 x USB 3.1, 1 x USB-C, 1 x USB 2.0, 1 x HDMI, 1 x RJ-45 LAN, 1 x 3.5mm audio combo</li><br>
<li>Windows 10 Professional brings back the Start Menu from Windows 7 and introduces new features, like the Edge Web browser that lets you markup Web pages on your screen. | 1-Year Upgrade Pro Limited Warranty* | View description and warranty section below for more details.</li></p>
</li>
                        </ol>

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
