<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion</title>
</head>
<body>
	<form action="ConvAction.php" method="post" novalidate>

	<h1>Conversion</h1>
	<fieldset>
	<legend>Convert your currency</legend>
	
	<label>Enter currency value:</label>
	<input type="number" name="currval">
	<br>

	<label>Enter option to convert to:</label>
		<select name="select[]">
			<option value="bdt2usd">BDT->USD</option>
			<option value="usd2bdt">USD->BDT</option>	
		</select>
	<br>		
	<input type="submit" value="Submit">

	</fieldset>
</body>
</html>