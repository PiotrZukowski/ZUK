<?php
echo "wybierz osobe do losowania:";
echo <<<KONIEC
<form action="index.php?strona=losowanie" method="post">
<select name="klasa">
	<option>2ti</option>
	<option>3ti</option>
</select>
<select name="grupa">
	<option>grupa_1</option>
	<option>grupa_2</option>
</select><br /><br />
<input type="text" name="numerek" value="" placeholder="Tu wpisz szczęśliwy numerek" 
/><br /><br />
<input type="radio" name="typLosowania" value="rand" />Użyj funkcji rand()
<input type="radio" name="typLosowania" value="my_rand" />Użyj funkcji mt_rand()<br
	/><br />
<input type="submit" value="losuj" />
</form>
KONIEC;
}
else if($ukryty == "losuj")
{
		$numerek = $_REQUEST["numerek"];
		$klasa = $_REQUEST["klasa"];
		$grupa = $_REQUEST["grupa"];
		$typ_rand = $_REQUEST["random"];
		
		$uczen = wylosujUcznia($klasa, $grupa, $numerek, $typ_rand);
}
else
{
	echo "wystapil nieokreslony blad, strona niedostepna.";	
}

function wylosujUcznia($czas, $group, $number, $typ_rand)
{
	if($class == "3Ti" && $group == "Group_1")
	{
		do
		{
		
			$wylosowany=rand(1, 15);
		}while($wylosowany == $number);
	}
	if($class == "3Ti" && $group == "Group_2")
	{
	
	}
	if($class == "2Ti" && $group == "Group_1")
	{
	
	}
	if($class == "2Ti" && $group == "Group_2")
	{
	
	}
	return $wylosowany;
}
?>