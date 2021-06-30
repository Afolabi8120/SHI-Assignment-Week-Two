<?php 

	//Name: Afolabi Temidayo Timothy
	//Intern ID: SH-IT-48472
	//Stack: Web Development(Backend)
	//Program: Side Hustle Internship 3.0

	session_start();

	if(isset($_POST['register'])){
		// passing data collected from user into a variables
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// preventing SQL Injection
		$fullname = htmlspecialchars($fullname);
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);

		// Form Validation
		if(empty($fullname)){
			echo "Full name field is required";
		}
		elseif (empty($email)) {
			echo "Email field is required";
		}
		elseif (empty($password)) {
			echo "Password field is required";
		}
		else{
			// Storing the data's collected from user into a session
			$_SESSION['fullname'] = $fullname;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;

			echo "Account has been created successfully";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

  <form action="register.php" method="POST">
  	<legend>
  		<fieldset>
  			<h3>Registration Page</h3>
  			<label>Full Name:</label><br>
		  	<input type="text" name="fullname"><br>
		  	<label>Email Address:</label><br>
		  	<input type="email" name="email"><br>
		  	<label>Password:</label><br>
		  	<input type="password" name="password"><br><br>
		  	<input type="submit" name="register" value="Submit">
		  	<p>Already have an account? <a href="index.php">Login</a></p>
		</fieldset>
  	</legend>
  </form>

</body>
</html>
