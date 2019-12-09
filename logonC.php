<?php
             if (isset($_POST['login']))
             {
             
                 $username=$_POST['username'];
                 $password=$_POST['password'];
                 $_SESSION['user']=$username;

                 $query="SELECT * from user where username ='$username' and password='$password'";
                 $query_run=mysqli_query($con, $query);

                 if (mysqli_num_rows($query_run)>0) 
                 {
                 	
                 	header('location:inside.php');

                 }
                  else
                {
                  echo '<script type ="text/javascript"> alert("Username and password does not match") </script>';

                  
                }
                {
                
                  
                }

             }


		?>
