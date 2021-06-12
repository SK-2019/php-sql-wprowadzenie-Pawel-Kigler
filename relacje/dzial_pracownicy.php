<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="/stylecss/style.css"/>
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        
      <?php include("assety/header.php") ?>
      </div>
      <div class="item colorBlue">
      <?php include("assety/menu.php") ?>
      </div>
      <div class="item colorGreen">

<?php
require("../connect.php");

echo("<a href='../index.php'>Powrót do strony głównej</a>");

$sql = "SELECT * FROM Pracownik";
echo("<h3>Pracownik</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Pra/th>");
echo("<th>Pracownik/th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Pra']."</td><td>".$row['Pracownik']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Dzialy";
echo("<h3>Dzialy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Dza</th>");
echo("<th>Dzialy</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Dza']."</td><td>".$row['Dzialy']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Dzial_Pracownik, Dzialy, Pracownik where ID_Dza = Dzial_ID and Pracownik_ID = ID_Pra Order by id asc';
echo("<h3>Budynek_Kraj</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Dza</th>");
echo("<th>Dzialy</th>");
echo("<th>ID_Pra</th>");
echo("<th>Pracownicy</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Dza']."</td><td>".$row['Dzialy']."</td><td>".$row['ID_Pra']."</td><td>".$row['Pracownicy']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</div>
</body>
</html>