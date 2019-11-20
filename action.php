<?php 

 require 'config/config.php';

  if(isset($_POST['pid'])){

 $pid= $_POST['pid'];
 $pname= $_POST['pname'];
 $pprice= $_POST['pprice'];
 $pimage= $_POST['pimage'];
 $pqty= 1;

 $query=" insert into cart values ('$pid','$pimage','$pname','$pprice','$pqty','$pprice')";
  $query_run=mysqli_query($con,$query);

echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Item Added</strong>
</div>'

  }


?>