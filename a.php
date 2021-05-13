<?php

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