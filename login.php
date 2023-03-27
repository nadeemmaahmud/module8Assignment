<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
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
			<h2 style="text-align: center;">Login Form</h2>
				<?php
				if ( isset( $_GET['success'] ) && $_GET['success'] == 1 ) {
					echo "<p>Registration successful! Please log in.</p>";
				}
				?>
				<form action="login.php" method="POST">
					<label for="email">Email:</label>
					<input type="email" name="email" required><br>

					<label for="password">Password:</label>
					<input type="password" name="password" required><br>

					<input type="submit" value="Login">
				</form>
				<?php
				session_start();

				if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
					$email = $_POST['email'];
					$password = $_POST['password'];

					if ( isset( $_SESSION['email'] ) && isset( $_SESSION['password'] ) && $_SESSION['email'] == $email && $_SESSION['password'] == $password ) {
						header( "Location: welcome.php?fname=" . $_POST['fname'] );
						exit();
					} else {
						echo "<p>Invalid email or password!</p>";
					}
				}
				?>
				<p>Not Registered?<a href="register.php">Register</a></p>
			</div>
		</div>
	</div>

</body>

</html>