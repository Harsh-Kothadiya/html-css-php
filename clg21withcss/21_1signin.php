<?php
$n=$_POST["name"];
$p=$_POST["pass"];

$name;
$pass;

$fname=fopen("21_1name.txt","r");
$name=fread($fname,filesize("21_1name.txt"));
fclose($fname);

$fpass=fopen("21_1pass.txt","r");
$pass=fread($fpass,filesize("21_1pass.txt"));
fclose($fpass);

	if( ($n==$name) && ($p==$pass) )
	{
		echo '
		<html>
		<head>
		</head>
		<body style="background-color:blue;">
		<div align="center">
		<form action="bothok.php">
		<input type="submit" value="next" style="background-color:red; color:white;"/>
		</form>
		</div>
		</body>
		</html>
		';
	}

	else if( ($n!=$name) && ($p!=$pass) )
	{
		echo '
		<html>
		<head>
		</head>
		<body style="background-color:#607d8b">
		<div align="center">
		<form action="bothnotok.php">
		<input type="submit" value="next" 
		style="background-color:#cddc39; color:black;"/>
		</form>
		</div>
		</body>
		</html>
		';
	}
	else if($n!=$name)
	{
		echo '
		<html>
		<head>
		</head>
		<body style="background-color:#9dd69f;">
		<div align="center">
		<form action="namenotok.php">
		<input type="submit" value="next"
		style="background-color:red; color:white;"/>
		</form>
		</div>
		</body>
		</html>
		';
	}
	else if($p!=$pass)
	{
		echo '
		<html>
		<head>
		</head>
		<body style="background-color:#8a2f13";>
		<div align="center">
		<form action="passnotok.php">
		<input type="submit" value="next"
		style="background-color:yellow; color:blue;"/>
		</form>
		</div>
		</body>
		</html>
		';
	}

?>
