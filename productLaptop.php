<?php
 $con = new mysqli("localhost","root","") or die("Unable to connect");

 mysqli_select_db($con,"test");



$product14= "SELECT * from laptop where id=14 ";
$productquery14=mysqli_query($con, $product14);
$row14=mysqli_fetch_array($productquery14);


$product15= "SELECT * from laptop where id=15 ";
$productquery15=mysqli_query($con, $product15);
$row15=mysqli_fetch_array($productquery15);


$product16= "SELECT * from laptop  where id=16 ";
$productquery16=mysqli_query($con, $product16);
$row16=mysqli_fetch_array($productquery16);


$product17= "SELECT * from laptop  where id=17 ";
$productquery17=mysqli_query($con, $product17);
$row17=mysqli_fetch_array($productquery17);


$product18= "SELECT * from laptop  where id=18 ";
$productquery1=mysqli_query($con, $product18);
$row18=mysqli_fetch_array($productquery18);


$product19= "SELECT * from laptop  where id=19 ";
$productquery19=mysqli_query($con, $product19);
$row19=mysqli_fetch_array($productquery19);


$product20= "SELECT * from laptop  where id=20 ";
$productquery20=mysqli_query($con, $product20);
$row20=mysqli_fetch_array($productquery20);


$product21= "SELECT * from laptop  where id=21 ";
$productquery21=mysqli_query($con, $product21);
$row21=mysqli_fetch_array($productquery21);


$product22= "SELECT * from laptop  where id=22";
$productquery22=mysqli_query($con, $product22);
$row22=mysqli_fetch_array($productquery22);


$product23= "SELECT * from laptop  where id=23 ";
$productquery23=mysqli_query($con, $product23);
$row23=mysqli_fetch_array($productquery23);

$product24= "SELECT * from laptop  where id=24 ";
$productquery24=mysqli_query($con, $product24);
$row24=mysqli_fetch_array($productquery24);

$product25= "SELECT * from laptop  where id=25 ";
$productquery25=mysqli_query($con, $product25);
$row25=mysqli_fetch_array($productquery25);

$product26= "SELECT * from laptop  where id=26 ";
$productquery26=mysqli_query($con, $product26);
$row26=mysqli_fetch_array($productquery26);

$product27= "SELECT * from laptop  where id=27 ";
$productquery27=mysqli_query($con, $product27);
$row27=mysqli_fetch_array($productquery27);

$product28= "SELECT * from laptop  where id=28 ";
$productquery28=mysqli_query($con, $product28);
$row28=mysqli_fetch_array($productquery28);

$product29= "SELECT * from laptop  where id=29 ";
$productquery29=mysqli_query($con, $product29);
$row29=mysqli_fetch_array($productquery29);

$product30= "SELECT * from laptop  where id=33 ";
$productquery30=mysqli_query($con, $product30);
$row30=mysqli_fetch_array($productquery30);

$product31= "SELECT * from laptop  where id=34 ";
$productquery31=mysqli_query($con, $product31);
$row31=mysqli_fetch_array($productquery31);

$product32= "SELECT * from laptop  where id=35 ";
$productquery32=mysqli_query($con, $product32);
$row32=mysqli_fetch_array($productquery32);

?>