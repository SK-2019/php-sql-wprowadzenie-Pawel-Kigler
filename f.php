<?php
echo("<a href='index.php'> Powrót do strony głównej</a><li>");
$imie='Adam';
$osoba = array(
        'imie'=>'Pawel',
        'pracuje'=>'gamer',
        'zarabia'=>10000
);
print_r($osoba);
echo($osoba['imie'].' ktory pracuje jako '.$osoba['pracuje'].' zarabia '.$osoba['zarabia'].'zl');
?>
