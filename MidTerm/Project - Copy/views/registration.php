<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>

<body  style="background-color: LightYellow;">
	 <?php require 'Navbar.php'; ?>
	<form id="form1" name="form1" action="../controller/RegistrationAction.php" method="post" novalidate>
		<fieldset>
			<legend>Registration form</legend>
			<h4>1.Group: Basic Information: </h4>
			<label for="fname">1.First Name:</label>
			<input type="text" name="firstname" id="fname">
			


			<br><br>

			<label for="lname">2.Last Name:</label>
			<input type="text" name="lastname" id="lname">
			


			<br><br>

			<label>3.Gender:</label>
			<input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
			

            <br><br>

			<label for="birthday">4.Date of Birth</label>
			<input type="date" id="birthday" name="birthday">
			



			<br><br>

			<label for="religion">5.Religion:</label>
			<select name="religion" id="religion">
				<option value="Islam">Islam</option>
				<option value="Christianity">Christianity</option>
				<option value="Hinduism">Hinduism</option>
				<option value="Buddhism">Buddhism</option>
				<option value="Secular">Secular</option>
				
			</select>
			


			<br><br>

			<h4>2.Group: Contact Information: </h4>
			<label for="address">1.Present Address : </label>
			<br>
			<textarea name="address" id="address" rows="4" cols="40">
            </textarea> 

			<br><br>

			<label for="peraddress">2.Permanent Address:</label>
			<br>
			<textarea name="peraddress" id="peraddress" rows="4" cols="40"> </textarea>
			<br><br>

			<label for="phone">3.Phone :</label>
			<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

			<br><br>

			<label for="email">4.Email:</label>
			<input type="email" name="email" id="email">
			



			<br><br>
			<label for="url">5.Personal Website Link: </label>
			<input type="url" name="url" id="url" size="50">
			<br><br>

			<h4>3.Group: Credentials:</h4>
			<label for="uname">1.Username:</label>
			<input type="text" name="username" id="uname" maxlength="5">
			


			<br><br>
			<label for="pass">2.Password:</label>
			<input type="password" id="pass" name="password">
			

			<br> <br>

			<label for="confrimpass">3. Confrim Password:</label>
			<input type="password" id="confrimpass" name="confrimpass">
			

			<br><br>
			<input type="submit" name="submit" value="Submit">

		</fieldset>
		
	</form>

</body>

</html>