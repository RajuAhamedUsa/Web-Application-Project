<?php


require 'config/config.php';

?>
<!DOCTYPE  html>
 <html>
<head>
	<title>
		Login Page
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: 	#EE82EE">
	<div id="main-wrapper" style="background-color: #FFFF00		; border-radius: 16px;">
		<center>
			<h2 style="color: #008000; ">Login Form</h2>
		</center>
		<form class="myform" action="" method="post" style="background-color:red; border-radius: 8px;">
			<b><label style="color: #000000;">Username</label></b><br>
			<input style="background-color:	#FF69B4	; border-radius: 8px; "type="text" name="username" class="inputvalues" placeholder="Enter Your Username" required=""><br>
			<label style="color:#000000;">Password</label><br>
			<input style="background-color:	#FF69B4	; border-radius: 8px; "type="password" name="password" class="inputvalues" placeholder="Enter Your Password" required=""><br>
			<input style="color: black; border-radius: 8px; background-color: #A52A2A;	" type="submit" name="login" id="login_btn" value="Login"><br>
			<a href="register.php"><input style="border-radius: 8px; background-color: #A52A2A;color: black;" type="button" name="" id="register_btn" value="Don't have account ? Register "></a>

			
		</form>
		<?php
             if (isset($_POST['login']))
             {
             
                 $username=$_POST['username'];
                 $password=$_POST['password'];

                 $query="SELECT * from user where username ='$username' and password='$password'";
                 $query_run=mysqli_query($con, $query);

                 if (mysqli_num_rows($query_run)>0) 
                 {
                 	//valid part
                 	$_SESSION['username']=$username;
                 	header('location:inside.php');

                 }
                else
                {
                  echo '<script type ="text/javascript"> alert("Invalid Credentials") </script>';

                  
                }

             }


		?>
	</div>
</body>
</html>