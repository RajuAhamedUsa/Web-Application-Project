<?php 

  session_start();
 
   if (isset($_GET['remove'])) {
       $id=$_GET['remove'];
       echo '<script type ="text/javascript"> alert("sign button click") </script>';

      $stmt=$con->prepare("DELETE FROM cart WHERE id=?");
      $stmt->bind_param("i",$id);
      $stmt->execute();

      $_SESSION['showAlert']='block';
      $_SESSION['message']='Item removed from the cart';
      header('Location:cartform.php');

   }
   





?>