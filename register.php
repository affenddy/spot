<?php

	function sanitizeFormPassword($inputText) {
		$inputText = strip_tags($inputText);
		return $inputText;
	}
	

	function sanitizeFormUsername($inputText) {

		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ","", $inputText);
		return $inputText;
	}

	function sanitizeFormString($inputText) {

		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ","",$inputText);
		$inputText = ucfirst(strtolower($inputText));
		return $inputText;
	}



	if (isset($_POST['loginButton'])) {

		//echo "Login button was pressed";

	}


	if (isset($_POST['registerButton]')) {

	       // echo "Register button was pressed";

		$username = sanitizeFormUsername ($_POST['username']);
		$firstname = sanitozeFormString(['firstname']);
		$lastname = sanitozeFormString(['lastname']);
		$email = sanitozeFormString(['email']);
		$email2 = sanitozeFormString(['email2']);
		$password = sanitozeFormPassword(['password']);
		$password2 = sanitozeFormPassword(['password2']);

	}

?>


<html>
	<head>
		<title>Welcome to Slotify!</title>
	</head>

	<body>
		<div id="inputContainer">

			<form id="loginForm" action="register.php" method="POST">

				<h2>Login to your account</h2>

				<p>
                                    <label for="loginUsername">Username</label>
				    <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
				</p>

				<p>
				   <label for="loginPassword">Password</label>	
				   <input id="loginPassword" name="loginUsername" type="password" placeholder="Your password"  required>
				</p>

				<button type="submit" name="loginButton">Login</button>

			</form>

			<form id="RegisterForm" action="register.php" method="POST">

				<h2>Create your free account</h2>

				<p>
                                    <label for="username">Username</label>
				    <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
				</p>

				<p>
                                    <label for="firstname">FirstName</label>
				    <input id="firstname" name="firstname" type="text" placeholder="e.g. bart" required>
				</p>

				<p>
                                    <label for="lastname">LastName</label>
				    <input id="lastname" name="lastname" type="text" placeholder="e.g. Simpson" required>
				</p>

				<p>
                                    <label for="email">Email</label>
				    <input id="email" name="email" type="email" placeholder="e.g. bart@Simpson.com" required>
				</p>

				<p>
                                    <label for="email2">Confirm email</label>
				    <input id="email2" name="email2" type="text" placeholder="e.g. bart@Simpson.com" required>
				</p

				<p>
				   <label for="password">Password</label>	
				   <input id="password" name="password" type="password" placeholder="Your password"  required>
				</p>

				<p>
				   <label for="password2">Confirm password</label>	
				   <input id="password2" name="password2" type="password" placeholder="Your password" required>
				</p>
				<button type="submit" name="registerButton">Sign UP</button>

			</form>
		</div>
	</body>

</html>
