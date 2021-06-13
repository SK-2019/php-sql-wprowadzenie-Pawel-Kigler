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
ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

require("../connect.php");

echo("<a href='../index.php'>Powrót do strony głównej</a>");

$sql = "SELECT * FROM Mechanik";
echo("<h3>Mechanik</h3>");
echo("<li>".$sql);
$result = $conn->query($sql) or die($conn->error);
echo("<table border=1>");
echo("<th>ID_Mech</th>");
echo("<th>Mechanik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Mech']."</td><td>".$row['Mechanik']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='id' value='".$row['ID_Mech']."' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Pojazd";
echo("<h3>Pojazd</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Auto</th>");
echo("<th>Pojazd</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Auto']."</td><td>".$row['Pojazd']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='id' value='".$row['ID_Auto']."' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Mechanik_Samochod, Pojazd, Mechanik where ID_Mech = Mechanik_ID and Samochod_ID = ID_Auto Order by id asc';
echo("<h3>Mechanik_Samochod</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>ID_Mech</th>");
echo("<th>Mechanik</th>");
echo("<th>ID_Auto</th>");
echo("<th>Pojazd</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['ID_Mech']."</td><td>".$row['Mechanik']."</td><td>".$row['ID_Auto']."</td><td>".$row['Pojazd']."</td><td>
    <form action='delete.php' method='POST'>
    <input type='number' name='id' value='".$row['ID']."' hidden></br>
    <input type='submit' value='Usuń'>
    </form></td>");
    echo("</tr>");
}
echo("</table>");



?>

</div>
</body>
</html>