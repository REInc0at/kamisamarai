<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"]  === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT  * FROM user 
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

       if (password_verify($_POST["password"], $user["password_hash"])){

           session_start();

           session_regenerate_id();

           $_SESSION["user_id"] = $user["id"];

           header("Location: index1.php");
           exit;

        }
    }

    $is_invalid = true;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="BG.png" type="image/x-icon">
</head>
<body>
    <div class="center">
    <h1>SIGN IN TO CONTINUE</h1>
    <!--<h2>Sign in to continue</h2>-->

    <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
    <?php endif; ?>

    <form class="" method="post" action="" autocomplete="off">
        <div class="txt__field">
        <input type="email" name="email" id="email" required
                value="<?= htmlspecialchars($_POST["email"] ?? " ") ?>">

        <span></span>
        <label required>Email:</label>
            </div>
        <div class="txt__field">
            <input type="password" name="password" id="password" required>
            <span></span>
            <label required>Password:</label>
            </div>
        <div class="pass">
        <a href="forgot-password.php">Forgot Password?</a></div>
        <input type="submit" name="submit" value="Login">
        <span></span>
        <div class="signup__link">Create Account?
            <a href="signup.php">Sign Up</a>
        </div>      
    </form>
</div>
    <nav class="banner">
        <div class="banner__container">
            <a href="index.php" id="banner__logo"> <img src="BG.png"></a>
            </div>
        </nav>
    

        
    
</body>
</html>