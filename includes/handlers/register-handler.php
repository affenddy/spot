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

	function validateUsername($un) {

	}

	function validateFirstName($un) {

	}

	function validateLastName($un) {

	}

	function validateEmails($un) {

	}

	function validatePasswords($un) {

	}


	if (isset($_POST['registerButton'])) {

	       // echo "Register button was pressed";

		$username = sanitizeFormUsername ($_POST['username']);
		$firstname = sanitozeFormString(['firstname']);
		$lastname = sanitozeFormString(['lastname']);
		$email = sanitozeFormString(['email']);
		$email2 = sanitozeFormString(['email2']);
		$password = sanitozeFormPassword(['password']);
		$password2 = sanitozeFormPassword(['password2']);

		validateUsername($username);
		validateFirstname($firstName);
		validateLastname($lastName);
		validateEmails($email, $email2);
		validatePasswords($password, $password2);

	}

?>


