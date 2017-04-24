<?php
echo "<h5>Gra liczby pierwsze</h5>";
if(isset($_REQUEST["n"]))$n=$_REQUEST["n"]+1;
else $n=3;
if($n>3)
{
$test = $_REQUEST["test"];
$odpowiedz=$_REQUEST["odpowiedz"];
if($test == $odpowiedz)
{
$test = 0;
for($i=2;$i<$n;$i++)
{
	if($n%$i == 0)$test = 1;
}
echo "Czy liczba: <b>".$n."</b> jest liczbą pierwszą?";
echo <<<END
<form action="index.php" method="get">
<input type="radio" name="odpowiedz" value="0" />TAK<br />
<input type="radio" name="odpowiedz" value="1" checked="checked" />NIE<br /><br />
<input type="hidden" name="test" value=$test />
<input type="hidden" name="n" value=$n />
<input type="hidden" name="strona" value="pierwsze" />
<input type="submit" value="Zatwierdź" />
</form>
END;
	
}
else
{
echo "<h3>BŁĄD - koniec testu</h3><br />"; $n=$n-4;
echo "<h4>Określiłeś prawidłowo ".$n." liczb</h4>";	
}	
}
else
{
$test=0;
for($i=2;$i<$n;$i++)
{
	if($n%$i==0)$test=1;
}
echo "Czy liczba: <b>".$n."</b> jest liczbą pierwszą?";
echo <<<END
<form action="index.php" method="get">
<input type="radio" name="odpowiedz" value="0" />TAK<br />
<input type="radio" name="odpowiedz" value="1" checked="checked" />NIE<br /><br />
<input type="hidden" name="test" value=$test />
<input type="hidden" name="n" value=$n />
<input type="hidden" name="strona" value="pierwsze" />
<input type="submit" value="Zatwierdź" />
</form>
END;
}
?>