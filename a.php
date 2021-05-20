<?php
echo("<a href='index.php'> Powrót do strony głównej</a><li>");
echo("W linku wpisz ?liczba1=5&liczba2=10 (lub kazda dowolna liczbe)<br>");

$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];

$wynik1 = $liczba1 + $liczba2;
$wynik2 = $liczba1 - $liczba2;
$wynik3 = $liczba1 * $liczba2;
$wynik4 = $liczba1 / $liczba2;

echo("Suma wynosi $wynik1<br>");
echo("Roznica wynosi $wynik2<br>");
echo("Iloczyn wynosi $wynik3<br>");
echo("Iloraz wynosi $wynik4<br>");
?>
