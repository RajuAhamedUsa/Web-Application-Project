<?php 
  require 'config/config.php';
  require 'config/action.php';
  include 'config/logonC.php';
  //$user=$_SESSION['user'];

  $cart="SELECT * FROM cart";
  $cartresult=mysqli_query($con ,$cart);
   $total=null;
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/check.css">

</head>
<body>

  <div style="text-align: left; color: black;"><button style="color: black;"> <a href="inside.php">Log-out</a> </button> &nbsp;<button> <a href="cartform.php">Previous Page</a> </button> </div>
<div class="row">
    <div class="col-75">
     <form style="border: solid black; background-color: pink;">
        <h2 style="text-align: center;">Please Review Your Order</h2>


     </form>
     
           
         
 


    </div>
  </div>
</div>

</body>
</html>
