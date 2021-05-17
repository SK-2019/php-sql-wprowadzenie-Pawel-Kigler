<?php
$q = mysqli_connect('mysql-pawelk.alwaysdata.net','pawelk','haslo123','pawelk_1') or die('Padl serwer');
$wynik = mysqli_query($q,'select * from pracownicy');
while ($txt = mysqli_fetch_assoc($wynik)){
print_r($txt);
}
?>
