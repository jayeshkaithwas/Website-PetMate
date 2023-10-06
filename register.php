<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$nameErr = "";
	$emailErr = "";
	$passErr= "";
	$repassErr = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','id21095325_root','rOOttOOr@123','id21095325_users');

	// REGISTER USER
	if (isset($_POST['signup'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['pass']);
		$password_2 = mysqli_real_escape_string($db, $_POST['re_pass']);


		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required");
					$nameErr = "Username is required !"; }
		if (empty($email)) { array_push($errors, "Email is required");
					$emailErr = "Email is required !"; }
		if (empty($password_1)) { array_push($errors, "Password is required");
					$passErr = "Password is required !"; }
		if (empty($password_2)) { array_push($errors, "Password is required");
					$repassErr = "Please Repeat your Password !"; }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
					$repassErr = "Password does not match !";
		}
		$query = "SELECT * FROM register WHERE username='$username'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1)
			 {
				$nameErr="Username already exists !";
				array_push($errors,"Username already exists !");
			}

		$query = "SELECT * FROM register WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1)
			 {
				$emailErr="Email already exists !";
				array_push($errors,"Username already exists !");
			}
		function checkPasswordStrength($password_1) {
		    // Define password strength requirements using regular expressions
		    
		    $uppercase = preg_match('@[A-Z]@', $password_1);
		    $lowercase = preg_match('@[a-z]@', $password_1);
		    $number = preg_match('@[0-9]@', $password_1);
		    
			    // Define minimum length for the password
		    $minLength = 8;
    
		    // Check if the password meets all the requirements
		    if ($uppercase && $lowercase && $number && strlen($password_1) >= $minLength) {
		        return true;
		    }
		    else {
		        return false;
		    }
		}
		$checkpass = checkPasswordStrength($password_1);
		if ($checkpass == false){
			$repassErr = "Passwords must have at least 8 characters and<br>contain Uppercase, Lowercase, Number!!";
			array_push($errors,"week pass");
		} 
	
		
			// register user if there are no errors in the form
			if (count($errors) == 0) {
				$password = md5($password_1);//encrypt the password before saving in the database
				$query = "INSERT INTO register(id,username, email, password) 
						  VALUES(NULL,'$username', '$email', '$password')";
				mysqli_query($db, $query);
	
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: SignIn.php');

			}

	}

	// LOGIN USER
	if (isset($_POST['signin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
			$nameErr = "Username is required !";
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
			$passErr = "Password is required !";
			
		}

		if (count($errors) == 0) {
		    if (isset($_POST['remember-me']) && $_POST['remember-me'] == 'on') {
         		   // Set a cookie to remember the user for a longer period (e.g., 30 days)
         		   $cookie_name = "remember-me-cookie";
         		   $cookie_value = $username; // You can store any user identifier here
		
         		   // Set the cookie with an expiration date of 30 days (you can adjust this)
         		   setcookie($cookie_name, $cookie_value, time() + (30 * 24 * 60 * 60), "/");
        		}
			$password = md5($password);
			$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1)
			 {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
				$passErr="Wrong username and password!";
			}
		}
	}
	//Logout User
    if (isset($_GET['logout'])) {
        // Destroy the session to log the user out
        session_destroy();
        // Redirect the user to the login page after logging out
        header('Location: SignIn.php');
        exit();
    }
?>