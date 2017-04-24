<!DOCTYPE html>
<html lang="pl">
<head>
	<title>SQL Injection</title>
	<meta charset="utf-8" />
</head>

<body>
<?php
echo<<<END
<form action="odbierz.php">
Login: <input type="text" name="login" value="" / > <br /> <br />
Hasło: <input type="text" name="haslo" value="" / > <br /> <br />
<input type="submit" value="Wyślij"/>
</form>
END;
?>

</html>
