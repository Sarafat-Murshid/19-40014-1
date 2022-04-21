<?php require_once "../controller/regcn.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<script>
			function validate() {
				var fname = document.forms['form1']['fname'].value;
				var lname = document.forms['form1']['lname'].value;
				var uname = document.forms['form1']['uname'].value;
				var pass = document.forms['form1']['pass'].value;
				var gender = document.forms["form1"]["gender"].value;

				if (fname == "") {
					window.alert("Please enter your Firstname.");
					name.focus();
					return false;
				}

				if (lname == "") {
					window.alert("Please enter your username.");
					username.focus();
					return false;
				}

				if (uname == "") {
					window.alert("Please enter your username.");
					username.focus();
					return false;
				}

				if (password.value == "") {
					window.alert("Please enter your password");
					password.focus();
					return false;
				}


				return true;
			}
		</script>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<style>
	.logo{
	height: 100px;
	width: 100px;
	position: sticky;
}
	</style>
</head>

<body>
	<div>
	<a href="Welcome.php"><img class="logo" src="logo.png"></a>
	</div>
	<form class ="login-form" id="form1" name="form1" action="" onsubmit="return validate()" method="post" novalidate>
		<fieldset>
			<legend>Registration form</legend>
			<label for="name">FirstName:</label>
			<input class ="form-input-material" type="text" name="fname" id="fname">
			<span class="fname"> <?php echo $err_fname ?></span>
            
			<br><br>

			<label for="name">LastName:</label>
			<input class ="form-input-material" type="text" name="lname" id="lname">
			<span class="lname"> <?php echo $err_lname ?></span>
            
			<br><br>

			<label for="uname">Username:</label>
			<input class ="form-input-material" type="text" name="uname" id="uname" maxlength="5">
			<span class="uname"> <?php echo $err_uname ?></span>

			<br><br>
			<label for="pass">Password:</label>
			<input class ="form-input-material" type="password" id="pass" name="pass">
			<span class="pass"> <?php echo $err_pass ?></span>

			<br> <br>

			<label for="cpass">Confirm Password:</label>
			<input class ="form-input-material" type="password" id="cpass" name="cpass">
			<span class="error"> <?php echo $err_pass ?></span>

			<br><br>

			<label>Gender:</label>
			<input class ="form-input-material" type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
			<input class ="form-input-material" type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
			<span class="gender"> <?php echo $err_gender ?></span>

			

			<br><br>
			<input class ="button-30" type="submit" name="signup" value="Submit">
			<a href="Login.php"><input class ="button-30" type="button" value="Login"></a>
		</fieldset>
		
	</form>

</body>

</html>