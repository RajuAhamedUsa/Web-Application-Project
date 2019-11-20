
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
 <title>
     Cart Form
 </title>
 <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        </head>
 </head>

    
    <body style="background-color:white

    ;">
      <header>
      <!-- TOP HEADER -->
      <div id="top-header" style="color:gray;">
        <div class="container">
          <ul class="header-links pull-left">
            <li style="color: red;"><a href="index.php"><img src="./img/logout.jpg" alt="" style="width:20px;height:20px;background-color: red; ">
</i>Log-Out</a></li>
</ul></div></div></header>
        

      <div class="col-md-9" style="padding: 35px;">  <table align="center" border ="5px" style="width:1100px; line-height:30px; padding:45px;">     
        <tr>
            <th colspan="9"; style="text-align: center; color: black; background-color:#c63939;"><h3>Shoping summary </h3>
                


            </th></tr>
            
            <tr>
                
                <th>Product Name</th>
                <th>Product Color</th>
                <th>Product Size
                <th>Product image</th>
                <th>Product Price</th>
                <th>Delivery Type</th>
                <th>Product Quantity</th>
                <th>Total</th>
                <th>
                    <a href="" class="clear cartItem" onclick="return confirm('Are you sure to clear your cart?');" style="color: red; padding: 2px;">Clear All Item</a>
                </th>
            </t>
            <?php 

                while ($row=$cartresult->fetch_assoc()):
                
                

            ?>
            <tr>

                <td>
                    <?php echo $row['product_name'];?>
                </td>
                <td>
                  <?php echo $row['product_color'] ?>
                </td>
                <td>
                  <?php echo $row['product_size'] ?>
                </td>
                <td>
                   <img style="width:75px;"<?php echo $row['product_image'];?>
                </td>
                <td>
                   <p>$<?php echo $row['product_price'];?></p>
                </td>
                <td>
                  <?php echo $row['Delivery Type'] ?>
                </td>
                <td>
                <input type="number" name="" class="form-control ItemQty" value="<?= 
                    $row['Qty'] ?>" style="width: 90px;">
                </td>
                <td>
                    
                    <p>$<?php echo $row['total_price'];?></p>


                </td>
                <td>
                    <a href="cartform.php<?php $id=$row['id'];
                    $query ="DELETE FROM cart WHERE id='$id";
                     $query_run=mysqli_query($con ,$query);


                     ?>" class="text-danger lead" ><i class='fas fa-trash-alt' style='font-size:25px;color:red' onclick="return confirm('Are you sure to delete this item ?');"></i></a>

                </td>



            </tr>
            <?php 
               
                  $total+=$row['total_price'];
                

            ?> 
          <?php endwhile;?>

        
          <tr>
              <td colspan="7">
                  <a href="inside.php">Continue Shoping</a>
              </td>
              <td colspan="2"><b>Grand Total </b> &nbsp;<b>$<?php echo $total; ?></b>&nbsp;&nbsp;&nbsp;<a href="checkout.php" class="btn-btn-info" <?php ($total>1)?"":"disabled"?> ><i class="far fa-credit-card"></i>Checkout</a></td>
              <td>
                  

              </td>
            
          </tr>
        </div>
    </table>
    </body>
            




</html>

