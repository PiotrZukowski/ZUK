<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Odbiór halo</title>
	<meta charset="utf-8" />
</head>

<body>
<?php

$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];

$baza = mysqli_connect('localhost','root','','korporacja');

if($baza)
{
	$wynik = $baza -> query("SELECT * FROM pracownicy");
	mysqli_close($baza);
}
else echo "<h3>Brak połączenia z bazą</h3>";

?>

</html>
