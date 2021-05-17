<?php
$q = mysqli_connect('mysql-pawelk.alwaysdata.net','pawelk','haslo123','pawelk_1') or die('Padl serwer');
$wynik = mysqli_query($q,'select * from pracownicy') or die('Blad bazy danych');
while ($txt = mysqli_fetch_assoc($wynik)){
echo($txt['imie'].' '.$txt['nazwisko'].'<br>');
} 
?>
