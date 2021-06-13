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

$sql = "SELECT * FROM Kraj";
echo("<h3>Kraj</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Kraj</th>");
echo("<th>Kraj</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Kraj']."</td><td>".$row['Kraj']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Kraj' value='".$row['ID_Kraj']."' hidden></br>
    <input type='text' name='Tabela' value='Kraj' hidden></br>
    <input type='text' name='Kolumna' value='ID_Kraj' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Miasto";
echo("<h3>Miasto</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Miasto</th>");
echo("<th>Miasto</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Miasto']."</td><td>".$row['Miasto']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID_Miasto' value='".$row['ID_Miasto']."' hidden></br>
    <input type='text' name='Tabela' value='Miasto' hidden></br>
    <input type='text' name='Kolumna' value='ID_Miasto' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Kraj_Miasto, Kraj, Miasto where ID_Kraj = Kraj_ID and Miasto_ID = ID_Miasto Order by id asc';
echo("<h3>Kraj_Miasto</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Kraj</th>");
echo("<th>Kraj</th>");
echo("<th>ID_Miasto</th>");
echo("<th>Miasto</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Kraj']."</td><td>".$row['Kraj']."</td><td>".$row['ID_Miasto']."</td><td>".$row['Miasto']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='ID' value='".$row['ID']."' hidden></br>
    <input type='text' name='Tabela' value='Kraj_Miasto' hidden></br>
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