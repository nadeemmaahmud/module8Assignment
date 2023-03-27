<?php
session_start();

if (!isset($_SESSION['email'])) {
	header("Location: login.php");
	exit();
}

$first_name = $_SESSION['first_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $first_name; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1 style="text-align: center;">Welcome <?php echo $first_name; ?>!</h1>
                <p style="text-align: center;">You have successfully logged in.</p>
                <p style="text-align: center;"><a href="login.php">Log out</a></p>
            </div>
        </div>
    </div>
</body>
</html>