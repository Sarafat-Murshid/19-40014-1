<?php
	$bgcolor="";

	if(isset($_COOKIE['bgcolor'])){
		$bgcolor = $_COOKIE['bgcolor'];
	}
	else{
		$bgcolor="#FFFFFF";
	}
	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		$bgcolor = $_POST['bgcolor'];
	}
	setcookie("bgcolor", $bgcolor , time() + 30);
?>
<?php include "Navbar2.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COLOR</title>
</head>
<body style="background-color: <?php echo $bgcolor ?> ;">

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

                    <label for="bgcolor">Pick a Color</label>
                    <input type="color" name="bgcolor" >
                    <br>
                    <input type="submit" name="submit" value="Change Color">
</form>
</body>
</html>