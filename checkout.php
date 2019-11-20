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

  <div style="text-align: left; color: black;"><button style="color: black;"> <a href="inside.php">Log-out</a> </button> &nbsp;<button> <a href="checkout.php">Previous Page</a> </button> </div>
 <div style="text-align: center; background-color: pink;"><h3>Mody Electronics Payment <br> Please provide your billing address and account information</h3></div>
<div class="row">
    <div class="col-75">
    <div class="container">
      <form action="review.php">
       <div class="row">
          <div class="col-50" style="border:solid black;">
            <h3 style="text-align: center;">User Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Type Your Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Type Your Email Address">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="User Home Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Region">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50" style="">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="5 Digit Zip Code">
              </div>
            </div>
          </div>

          <div class="col-50" style="border: solid black;">
            <h3 style="text-align: center;">User Account Information </h3>
            <label for="fname">We accept all cards below</label>
            <div class="icon-container">
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>

              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
                            <i class="fa fa-cc-visa" style="color:navy;"></i>

              
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Type your name as apper on your card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Jan-Dec">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Date</label>
                <input type="text" id="expyear" name="expyear" placeholder="mm/yyyy">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Three digit back of your card">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container" style="border: solid black;">
      <h4 style="text-align: center;">Order Summary </h4>
      <table>
        <tr>
          <th>Product Name</th> &nbsp;
          <th>Product Total Price</th>
        </tr>
         <?php 

                while ($row=$cartresult->fetch_assoc()):
                
                

            ?>
        <tr>
            <td>
                    <?php echo $row['product_name'];?>
                </td>

                 <td>
                   <p>&nbsp;&nbsp;&nbsp;$<?php echo $row['total_price'];?></p>
                </td>
        </tr>
          <?php 
               
                  $total+=$row['total_price'];
                

            ?>
   
                  <?php endwhile;?>


      </table>   
      <p><b>Grand Total </b> &nbsp;<b>$<?php echo $total; ?></p>



    </div>
  </div>
</div>

</body>
</html>
