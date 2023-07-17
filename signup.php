<?php
// require 'config.php';
// if(isset($_POST["submit"])){
//   $username = $_POST["username"];
//   $email = $_POST["email"];
//   $password = $_POST["password"];
//   $confirmpassword = $_POST["confirmpassword"];
//   $duplicate = mysqli_query($conn, "SELECT * FROM form WHERE username = '$username' OR email = '$email'");
//   if(mysqli_num_rows($duplicate) > 0){
//     echo
//     "<script> alert('Username or Email Has Already Taken'); </script>";
//   }
//   else{
//     if($password == $confirmpassword){x`
//       $query = "INSERT INTO form VALUES('', '$username','$email','$password')";
//       mysqli_query($conn, $query);
//       echo
//       "<script> alert('Registration Successful'); </script>";
//     }
//     else{
//       echo
//       "<script> alert('Password Does Not Match'); </script>";
//     }
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="BG.png" type="image/x-icon">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>


</head>
<body>
    <!-- Registration Form -->
    <div class="container">
        <div class="forms">
            <div class="form login"></div>
            <span class="title">Sign Up</span>
            <form class=""  action="process-signup.php" method="post" autocomplete="off" novalidate>
            <div class="input-field">
                <input type="text" name="username" placeholder="Username">
                <i class="uil uil-user"></i>
            </div>
            <div class="input-field">
                <input type="text" name="email" placeholder="Email Address">
                <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
                <input type="password" name="password" class="password" placeholder="Password">
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showpass"></i>
            </div>
            <div class="input-field">
                <input type="password" name="confirmpassword" class="password" placeholder="Confirm Password">
                <i class="uil uil-lock icon"></i>
            </div>

            <div class="input-field button">
            <input type="submit" name="submit" value="Register">
                    </div>
                </form>
            <div class="signup">
                <span class="signtext">Already have an account?
                    <a href="login.php" class="textsignup">Sign in</a>
                </span>
            </div>
            </div>  
            

            


        </div>
    </div>
    <script src="signup.js"></script>
    


</body>
</html>