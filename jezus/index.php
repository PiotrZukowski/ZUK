<!DOCTYPE html>
<html lang="pl">

<head>
<meta charset="UTF-8" />
</head>

<body>
<?php
echo<<<KONIEC
<form action="index.php" method="post">
<input type="text" name="email" value="" />
<input type="submit" value="wyślij" />
</form>


KONIEC;
if(isset($_REQUEST["email"]))
{
	$wzorzec = "/([0-9]|[a-z]+@$)/";
	$email = $_REQUEST["email"];
	if(preg_match($wzorzec, $email))
	{
		echo "Ciag znaków jest zghodny";
		
	}
	else
	{
		echo "yu fakin gay mate";
	}
}
else
{echo "wpisz adres mailowy do formularza";}

?>
</body>
</html>