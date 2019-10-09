<?php
	
	$n=$_POST["name"];
	$p=$_POST["pass"];

	$fname=fopen("21_1name.txt","w");
	fwrite($fname,$n);
	fclose($fname);

	$fpass=fopen("21_1pass.txt","w");
	fwrite($fpass,$p);
	fclose($fpass);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #B1624EFF;">

<div align="center">
	<h1>
		<label style="background-color: #FEE715FF;">
			<?php
				echo "your account created";
			?>
		</label>
	</h1>
</div>

</body>
</html>