<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Dodawanie nowego u¿ytkownika </title>
	<meta charset="utf-8" />
</head>
<body>
<p>Dodawanie u¿ytkownika</p>
<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];
$mail = $_REQUEST["mail"];
require_once("connect_dane.php");
$haslo = md5($haslo);
$status = 1;
srand(time());
$kod = uniqid(rand());
$serwer = mysqli_connect($host,$user,$password,$baza);
if($serwer)
{
	$wynik = $serwer -> query("INSERT INTO users
	(imie, nazwisko, login, haslo, kod, status, mail)
	VALUES ('$imie', '$nazwisko', '$login', '$haslo', '$kod', '$status', '$mail')");
	if($wynik)
	{
		$list ="Dziêki za rejestracje
		Chcesz potwierdzenie to masz tu:
		
			http://localhost/szkola/tai/mysql/wahoo/potwierdzenie.php?kod=$kod
		
		W przeciwnym razie miej to w dupie";
		$from = "jas@ktotam.pl";
		$headers ="From: ".$from;
		mail($mail, "Witamy w serwisie RAJ", $list, $headers);
		echo "Masz linka na mailu";	
	}
else
{
	echo "U¿ytkownik nie zosta³ zapisany do bazy";
}
}
else
{
	echo "Connection ERROR";
}
?>
</body>
</html>