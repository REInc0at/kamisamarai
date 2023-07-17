<?php

session_start();



if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <link rel="stylesheet" href="signupsucess.css">

</head>
<body>
    <h1>Login Sucessful!</h1>

    <?php if (isset($user)): ?>

        <p>You can now proceed <?= htmlspecialchars($user["username"]) ?> <a href="User Dashboard.php">Home</a>.</p>

    <?php else: ?>

        <p><a href="login.php">Log in</a> or <a href="signup.php">Signup</a>

    <?php endif; ?>


</body>
</html>