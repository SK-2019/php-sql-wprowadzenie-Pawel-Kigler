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
echo("<th>ID_Pra</th>");
echo("<th>Pracownik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Pra']."</td><td>".$row['Pracownik']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Pra' value='".$row['ID_Pra']."' hidden></br>
    <input type='text' name='Pracownik' value='Pracownik' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Dzialy";
echo("<h3>Dzial</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Dza</th>");
echo("<th>Dzial</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Dza']."</td><td>".$row['Dzial']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Dza' value='".$row['ID_Dza']."' hidden></br>
    <input type='text' name='Dzial' value='Dzial' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Dzial_Pracownik, Dzialy, Pracownik where ID_Dza = Dzial_ID and Pracownik_ID = ID_Pra Order by id asc';
echo("<h3>Dzial_Pracownik</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Dza</th>");
echo("<th>Dzial</th>");
echo("<th>ID_Pra</th>");
echo("<th>Pracownik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Dza']."</td><td>".$row['Dzial']."</td><td>".$row['ID_Pra']."</td><td>".$row['Pracownik']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID' value='".$row['ID']."' hidden></br>
    <input type='text' name='Dzial_Pracownicy' value='Dzial_Pracownicy' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

?>

</div>
</body>
</html>