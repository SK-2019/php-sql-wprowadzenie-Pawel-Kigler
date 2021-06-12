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

$sql = "SELECT * FROM Budynek";
echo("<h3>Budynek</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Bud</th>");
echo("<th>Budynek</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Bud']."</td><td>".$row['Budynek']."</td>");
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
    echo("<td>".$row['ID_Miasto']."</td><td>".$row['Miasto']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Budynek_Miasto, Budynek, Miasto where ID_Bud = Budynek_ID and Miasto_ID = ID_Miasto Order by id asc';
echo("<h3>Budynek_Miasto</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Bud</th>");
echo("<th>Budynek</th>");
echo("<th>ID_Miasto</th>");
echo("<th>Miasto</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Bud']."</td><td>".$row['Budynek']."</td><td>".$row['ID_Miasto']."</td><td>".$row['Miasto']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</div>
</body>
</html>
