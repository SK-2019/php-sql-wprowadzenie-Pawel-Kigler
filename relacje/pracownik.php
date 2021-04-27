<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/stylecss/style.css" />
    <title>Document</title>
</head>
<body>
<div class="container">
      <div class="item colorRed">
        
      <?php include("../assety/header.php") ?>
        </div>
        <div class="item colorBlue">
        <?php include("../assety/menu.php") ?>
        <?php include("../assety/relacje.php") ?>
      </div>
      <div class="item colorGreen">
<?
require('../connect/connect.php');
$sql = "SELECT * FROM Pracownik";
echo("<h3>Pracownicy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Pra</th>");
echo("<th>Pracownik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Pra']."</td><td>".$row['Pracownik']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Dzialy";
echo("<h3>Działy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Dza</th>");
echo("<th>Dział</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Dza']."</td><td>".$row['Dzial']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM Pracownik, Dzialy, EBoth where IDPS = ID_Pra and IDDZ = ID_Dza Order by id asc';
echo("<h3>Both</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>IDDZ</th>");
echo("<th>Dział</th>");
echo("<th>IDPS</th>");
echo("<th>Pracownik</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID']."</td><td>".$row['IDDZ']."</td><td>".$row['Dzial']."</td><td>".$row['IDPS']."</td><td>".$row['Pracownik']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>