<!DOCTYPE html>
<html lang="pl">
<head>
<title></title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styl.css" />
<script src="skrypty/jquery-3.1.1.slim.js"></script>
<script src ="plik.js"></script>
</head>
<body onload="$(document).ready(function(){wczytajZdjecie()});">
<div id="kontener">
<header id="naglowek">
<div id="head1"><h5>Projekt 1A</h5>
Przydatne walidatory:<br /><a href="http://html5.validator.nu">http://html5.validator.nu<br /></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://validator.w3.org">http://validator.w3.org</a>
</div>
<div id="head2"></div>
<div style="clear: both;"></div>
</header>
<nav id="menu">
<a href="index.php?strona=start">Strona główna</a><br /><br />
<a href="index.php?strona=gra">Gry</a><br />
<a href="index.php?strona=losowanie">Losowanie</a>
</nav>
<section id="main">
<?php
if(isset($_REQUEST["strona"]))$strona = $_REQUEST["strona"];
else $strona = "start";
if(file_exists("skrypty/$strona.php"))
{
include("skrypty/$strona.php");
}
else
{
echo "Nieokreślony błąd strona niedostępna";
}

?>
</section>
<aside id="boczny"></aside>
<footer id="stopka"></footer>
</div>
</body>
</html> 