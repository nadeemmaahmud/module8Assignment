<?php
session_start();

$message = '';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ( $password != $confirm_password ) {
        $message = "Passwords didn't match.";
    }

    else {
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header( "Location: login.php?success=1" );
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1 style="text-align: center;">Registration Form</h1>
                <form method="POST" action="register.php">
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" id="first_name" required><br><br>

                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" required><br><br>

                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required><br><br>

                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="confirm_password" required><br><br>

                    <input type="submit" value="Register">
                    <?php if(!empty($message)): ?>
                    <p><?php echo $message; ?></p>
                    <?php endif; ?>
                    <p>Already Registered?<a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>