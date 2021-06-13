<?php

echo("<a href='../index.php'>Powrót do strony głównej</a></br>");

require_once("../connect.php");
$sql = "DELETE  FROM ".$_POST['Tabela']." WHERE ".$_POST['Kolumna']."= ".$_POST['Wiersz']."";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<h2>Usunięto pomyślnie</h2>");
} 
else {
  echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
