<?php
 $con = new mysqli("localhost","root","") or die("Unable to connect");

 mysqli_select_db($con,"test");



$product1= "SELECT * from smartphone where id=1 ";
$productquery1=mysqli_query($con, $product1);
$row1=mysqli_fetch_array($productquery1);

$product2= "SELECT * from smartphone where id=2 ";
$productquery2=mysqli_query($con, $product2);
$row2=mysqli_fetch_array($productquery2);

$product3= "SELECT * from smartphone where id=3 ";
$productquery3=mysqli_query($con, $product3);
$row3=mysqli_fetch_array($productquery3);

$product4= "SELECT * from smartphone where id=4 ";
$productquery4=mysqli_query($con, $product4);
$row4=mysqli_fetch_array($productquery4);

$product5= "SELECT * from smartphone where id=5 ";
$productquery5=mysqli_query($con, $product5);
$row5=mysqli_fetch_array($productquery5);

$product6= "SELECT * from smartphone where id=6 ";
$productquery6=mysqli_query($con, $product6);
$row6=mysqli_fetch_array($productquery6);

$product7= "SELECT * from smartphone where id=7 ";
$productquery7=mysqli_query($con, $product1);
$row7=mysqli_fetch_array($productquery7);

$product8= "SELECT * from smartphone where id=8 ";
$productquery8=mysqli_query($con, $product8);
$row8=mysqli_fetch_array($productquery8);

$product9= "SELECT * from smartphone where id=9 ";
$productquery9=mysqli_query($con, $product9);
$row9=mysqli_fetch_array($productquery9);


$product10= "SELECT * from smartphone where  id=10 ";
$productquery10=mysqli_query($con, $product10);
$row10=mysqli_fetch_array($productquery10);

$product11= "SELECT * from smartphone where  id=11 ";
$productquery11=mysqli_query($con, $product11);
$row11=mysqli_fetch_array($productquery11);

$product12= "SELECT * from smartphone where  id=12";
$productquery12=mysqli_query($con, $product12);
$row12=mysqli_fetch_array($productquery12);

$product13= "SELECT * from smartphone where  id=13 ";
$productquery13=mysqli_query($con, $product13);
$row13=mysqli_fetch_array($productquery13);




?>