<?php require_once "Navbar2.php" ?>
<?php
	session_start();
	$err= "";
	$username = $_SESSION['username'];
?>
<?php
$con = mysqli_connect('localhost','root','','miniproject') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from user WHERE username= '$username' " );
$row=mysqli_fetch_assoc($result);
if($_POST["currentPassword"] == '' || $_POST["newPassword"] == '' || $_POST["confirmPassword"] == ''){
	$message = "Fill Up Correctly";
}
elseif($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($con,"UPDATE user set password='" . $_POST["newPassword"] . "' WHERE username='" . $username . "'");
$message = "Password Changed Sucessfully";
header("Location: ../controller/Logout.php");
} else{
 $message = "Password is not correct";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<style>
       

        .button-30 {
          align-items: center;
          appearance: none;
          background-color: #FCFCFD;
          border-radius: 4px;
          border-width: 0;
          box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
          box-sizing: border-box;
          color: #36395A;
          cursor: pointer;
          display: inline-flex;
          font-family: "JetBrains Mono",monospace;
          height: 48px;
          justify-content: center;
          line-height: 1;
          list-style: none;
          overflow: hidden;
          padding-left: 16px;
          padding-right: 16px;
          position: relative;
          text-align: left;
          text-decoration: none;
          transition: box-shadow .15s,transform .15s;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
          white-space: nowrap;
          will-change: box-shadow,transform;
          font-size: 18px;
        }

        .button-30:focus {
          box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        }

        .button-30:hover {
          box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
          transform: translateY(-2px);
        }

        .button-30:active {
          box-shadow: #D6D6E7 0 3px 7px inset;
          transform: translateY(2px);
}
</style>
</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
	Current Password:<br>
	<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
	<br>
	New Password:<br>
	<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
	<br>
	Confirm Password:<br>
	<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
	<br><br>
	<input class ="button-30" type="submit">
</form>
</body>
</html>