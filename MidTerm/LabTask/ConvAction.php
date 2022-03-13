<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion Action</title>
</head>
<body>
	<?php

		$currval = "";
		$select  = $_POST['select'];
		$err_msg = "";
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			
			$currval = $_POST['currval'];
			
			if(empty($currval)){
				echo "Enter a Value";
			}
				
			else if(isset($select)){
				foreach ($select as $a) {
					if($a === 'bdt2usd'){
						echo "Your Entered Amount of BDT was ";
						echo $currval;
						echo "<br>";
						echo $currval;
						echo " BDT in USD is ";
						echo $currval/80;
					}
					elseif ($a === 'usd2bdt') {
						echo "Your Entered Amount of USD was ";
						echo $currval;
						echo "<br>";
						echo $currval;
						echo " USD in BDT is ";
						echo $currval*80;
					}
				}
			}
		}
	?>
</body>
</html>