<?php


require 'config/config.php';

?>
<!DOCTYPE  html>
 <html>
<head>
	<title>
		Registration  Page
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	
    <div style="" align="center" class="col-md-8">
		<form  action="" method="post" style="background-color:#ff8080;width: 500px; border-radius: 5px;">
        <center>
      <h2  >Moby Electronics <br>Registration</h2>
    </center>
      
			<b><label style="color: black;">Username</label></b><br>
			<input style="border-radius: 5px;"type="text" name="username" class="inputvalues" placeholder="Enter Your Username" required=""><br>
			<label style="color: black;">Password</label><br>
			<input style="border-radius: 3px;"type="password" name="password" class="inputvalues" placeholder="Enter your password" required=""><br>
			<label style="color: black;">Confirm Password</label><br>
			<input style="border-radius: 3px;"type="password" name="cpassword" class="inputvalues" placeholder="Confirm your password" required=""><br>
			<input style="width:200px; color:white;background-color:#0080ff; border-radius:10px;" type="submit" name="submit_btn" id="signup_btn" value="Register"><br>
      <a href="index.php" style="text-align: center;color: black;">Have Account? Sign In</a>
     


      
    </form></div>

			
	

		<?php
          if (isset($_POST['submit_btn']))
           {
          	//echo '<script type ="text/javascript"> alert("sign button click") </script>';
            $username= $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $sql = "CREATE TABLE $username (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_image VARCHAR(30) NOT NULL,
product_name VARCHAR(30) NOT NULL,
prodct_price VARCHAR(50),
Qty varchar(150),
total_price varchar(100)
)";
 $query_run=mysqli_query($con,$sql);

                if ($password==$cpassword) 
              {

                 $query ="select * from user WHERE username='$username'";
                 $query_run=mysqli_query($con ,$query);
                if (mysqli_num_rows($query_run) >0) 
                {
                   echo '<script type ="text/javascript"> alert("User already exists ..try another username") </script>';
                  // header('Location:register.php');
                }
                else {
                     $query="insert into user values('$username','$password')";
                     $query_run=mysqli_query($con,$query);
                 
                    	//echo '<script type ="text/javascript"> alert("User Registered ..Go to Home Page to Login") </script>';
                        header('Location: index.php');
                         //echo "<a href='index.php'></a>";

                    }
         


         }
         else
          echo '<script type ="text/javascript"> alert("Password does not match") </script>';



          }

		?>

	</div>
	

</body>

</html>
