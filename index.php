<?php 
	//Name: Afolabi Temidayo Timothy
	//Intern ID: SH-IT-48472
	//Stack: Web Development(Backend)
	//Program: Side Hustle Internship 3.0 

	session_start(); // starting session

	echo $_SESSION['email'] . "<br>";
				echo $_SESSION['password'] . "<br>";

	if(isset($_POST['login'])){ // check if login button is clicked 

		// passing data collected from user into a variables
		$email = $_POST['email'];
		$password = $_POST['password'];

		// preventing SQL Injection
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);

		// Form Validation
		if (empty($email)) {
			echo "Email field is required";
		}
		elseif (empty($password)) {
			echo "Password field is required";
		}
		else{
			if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
				echo "Invalid Details Provided";
			}
			else{
				echo "Login Successful"  . "<br>";
				//echo $_SESSION['email'] . "<br>";
				//echo $_SESSION['password'] . "<br>";
			}
		}

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Page</title>
</head>
<body>

  <form action="index.php" method="POST">
  	<legend>
  		<fieldset>
  			<h3>Login Page</h3>
		  	<label>Email Address:</label><br>
		  	<input type="email" name="email"><br>
		  	<label>Password:</label><br>
		  	<input type="password" name="password"><br><br>
		  	<input type="submit" name="login" value="Login">
		  	<p>Don't have an account? <a href="register.php"> Create Account</a></p>
		</fieldset>
  	</legend>
  </form>

</body>
</html>
