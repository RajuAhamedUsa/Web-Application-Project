<?php
require 'config/config.php';
require 'config/productLaptop.php';  
include 'config/logonC.php';
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
		<form action="inside.php" method="post"> 

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" style="color: red;">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: red;"><img src="./img/moby.jpg" alt="" style="width:150px;height:90px;background-color: red; "></li>

						<li style="color: red;"><a href="index.php"><img src="./img/logout.jpg" alt="" style="width:20px;height:20px;background-color: red; ">
</i>Log-Out</a></li>
						
					</ul>
					<ul class="header-links pull-right" style="padding: 25px;">
						<li>
							<a href="cartform.php"><img src="./img/myaccount.jpg" style="width: 45px; height: 45px; background-color: blur; padding: 10px;">My Account</a>
						</li>
						
						
						</li>
					</ul>

					
				</div>
			</div>
			<!-- /TOP HEADER -->

            <div><b><h1 style="text-align: center; color:black;">Welcome To Moby Electronic </h1></b><br>
            	<p style="text-align: center;"><b>We offer variety of electronic product with low prices comparing to our competitors.</b>

 
            </div>		<!-- NAVIGATION -->
		<div style="text-align: center;"><nav id="navigation" style="background-color: #FF7F50;">
			<!-- container -->
			<div class="container" style="background-color:	#FF7F50;">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="product-link pull-left" >
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
		</nav></div>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
	
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					<!-- /section title -->
					<img src="">

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productone.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>'?></a>


												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row1['product_name'] ?></a></h3>
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
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product1" onclick="myFunction()" style="font-weight: 5px;"> add to cart</button><br>
											</div>
											

										</div>

										<?php 
										    //user=$_SESSION['user'];
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
										<!-- /product -->

										<!-- product -->
										<div class="product" >
											<div class="product-img">
											<a href="producttwo.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row2['product_image'] ).'"/>'?></a>

												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row2['product_name'] ?> </a></h3>
												<h4 class="product-price"><p>$<?php echo $row2['product_price'];
 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product2"onclick="myFunction()"></i> add to cart</button>
											</div>
										</div>
										<?php 
											$id=$row2['id'];
										     $productprice=$row2['product_price'];
										    $productname=$row2['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row2['product_image'] ).'"/>';
										    $q=1;
										    //$pqtr=1;
                                              if (isset($_POST['product2'])) 
                                              {
                                                  $query=" insert into cart values ('$row2','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productthree.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row3['product_image'] ).'"/>'?></a>
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row3['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row3['product_price'] ?></p></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product3"onclick="myFunction()"></i> add to cart</button>
											</div>
										</div>
										
										 <?php 

										 	$id=$row3['id'];
										     $productprice=$row3['product_price'];
										    $productname=$row3['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row3['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product3'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productfour.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row4['product_image'] ).'"/>'?></a>
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row4['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row4['product_price'] ?></p> </h4>
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
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn"name="product4"onclick="myFunction()"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
												$id=$row4['id'];
										     $productprice=$row4['product_price'];
										    $productname=$row4['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row4['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product4'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productfive.php"><img style="width: 250px; color: black;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row5['product_image'] ).'"/>'?></a>
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row5['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row5['product_price'] ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product5" onclick="myFunction()"> add to cart</button>
											</div>

                                              	<?php 
                                              	$id=$row5['id'];

										     $productprice=$row5['product_price'];
										    $productname=$row5['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row5['product_image'] ).'"/>';

										    $q=1;
                                              if (isset($_POST['product5'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);




                                              }


										?>
											<script>
															function myFunction() {
															  alert("Item Added");
															}
															</script>

										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
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
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productsix.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row10['product_image'] ).'"/>'?></a>
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row10['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row10['product_price'] ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product10"onclick="myFunction()"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
											$id=$row10['id'];
										     $productprice=$row10['product_price'];
										    $productname=$row10['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row10['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product10'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productseven.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row11['product_image'] ).'"/>'?></a>
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row11['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row11['product_price'] ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product11"onclick="myFunction()"> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
											$id=$row11['id'];
										     $productprice=$row11['product_price'];
										    $productname=$row11['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row11['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product11'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product" style=>
											<div class="product-img" >
											<a href="producteight.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row12['product_image'] ).'"/>'?></a>
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row12['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row12['product_price'] ?></p></h4>
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product12"onclick="myFunction()"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
											$id=$row12['id'];
										     $productprice=$row12['product_price'];
										    $productname=$row12['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row12['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product12'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productnine.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row13['product_image'] ).'"/>'?></a>
											</div>
											<div class="product-body">
												<h3 class="product-name"><?php echo $row13['product_name'] ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row13['product_price'] ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product13"onclick="myFunction()"> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
												$id=$row13['id'];
										     $productprice=$row13['product_price'];
										    $productname=$row13['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row13['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product13'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="productone.php"><img style="width: 250px;"<?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>'?></a>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row1['product_name']; ?></a></h3>
												<h4 class="product-price"><p>$<?php echo $row1['product_price'] ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn addItembtn" name="product1"onclick="myFunction()"> add to cart</button>
											</div>
										</div>
										<?php 
											$id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										    $q=1;
                                              if (isset($_POST['product1'])) 
                                              {
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$productprice','$q','$productprice')";
                                                  $query_run=mysqli_query($con,$query);

                                              }


										?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		
					
<script>
function myFunction() {
  alert("Item added");
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
