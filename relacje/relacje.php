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
require($_SERVER['DOCUMENT_ROOT'] . '/connect3.php');
$sql = "SELECT * FROM autor";
echo("<h3>Autorzy</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id_autor</th>");
echo("<th>nazwisko</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id_autor']."</td><td>".$row['nazwisko']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM tytul";
echo("<h3>Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id_tytul</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id_tytul']."</td><td>".$row['tytul']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = 'SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul Order by id asc';
echo("<h3>Autorzy i Tytuły</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>autor_id</th>");
echo("<th>autor</th>");
echo("<th>tytul_id</th>");
echo("<th>tytul</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['autor_id']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul_id']."</td><td>".$row['tytul']."</td>");
    echo("</tr>");
}
echo("</table>");

?>

</body>
</html>