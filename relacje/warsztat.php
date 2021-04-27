<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/constyle/style.css" />
    <title>Document</title>
</head>
<body>
<div class="container">
      <div class="item colorRed">
        
      <?php include("../assets/header.php") ?>
        </div>
        <div class="item colorBlue">
        <?php include("../assets/menu.php") ?>
        <?php include("../assets/relations.php") ?>
      </div>
      <div class="item colorGreen">
<?
require('../connect/connect.php');
$sql = "SELECT * FROM Mechanik";
echo("<h3>Mechanicy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Mech</th>");
echo("<th>Mechanik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Mech']."</td><td>".$row['Mechanik']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Samochody";
echo("<h3>Samochody</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Auto</th>");
echo("<th>Pojazd</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Auto']."</td><td>".$row['Pojazd']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Mechanik, Samochody, ABoth where IDM = ID_Mech and IDS = ID_Auto Order by id asc';
echo("<h3>Both</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>IDM</th>");
echo("<th>Mechanik</th>");
echo("<th>IDS</th>");
echo("<th>Pojazd</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['IDM']."</td><td>".$row['Mechanik']."</td><td>".$row['IDS']."</td><td>".$row['Pojazd']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>