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

$sql = "SELECT * FROM Piłkarze";
echo("<h3>Piłkarze</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Pil</th>");
echo("<th>Piłkarz</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Pil']."</td><td>".$row['Piłkarz']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Pil' value='".$row['ID_Pil']."' hidden></br>
    <input type='text' name='Tabela' value='Piłkarze' hidden></br>
    <input type='text' name='Kolumna' value='ID_Pil' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Kluby";
echo("<h3>Klub</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Klub</th>");
echo("<th>Klub</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Klub']."</td><td>".$row['Klub']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Klub' value='".$row['ID_Klub']."' hidden></br>
    <input type='text' name='Tabela' value='Kluby' hidden></br>
    <input type='text' name='Kolumna' value='ID_Klub' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Piłkarze_Kluby, Kluby, Piłkarze where ID_Klub = Klub_ID and Pil_ID = ID_Pil Order by id asc';
echo("<h3>Piłkarz-Klub</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Pil</th>");
echo("<th>Piłkarz</th>");
echo("<th>ID_Klub</th>");
echo("<th>Klub</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Pil']."</td><td>".$row['Piłkarz']."</td><td>".$row['ID_Klub']."</td><td>".$row['Klub']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID' value='".$row['ID']."' hidden></br>
    <input type='text' name='Tabela' value='Piłkarze_Kluby' hidden></br>
    <input type='text' name='Kolumna' value='ID' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

?>

</div>
</body>
</html>