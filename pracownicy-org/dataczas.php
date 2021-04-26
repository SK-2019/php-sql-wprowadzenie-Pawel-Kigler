<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pawel Kigler</title>
    <link rel="stylesheet" href="/stylecss/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        
      <?php include("../assety/header.php") ?>
      </div>
      <div class="item colorBlue">
        <?php include("../assety/menu.php") ?>
      </div>
      <div class="item colorGreen">
    
<?php

require($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$sql = ('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
echo("<h2>Wiek poszczególnych pracowników (w latach)</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=1');
echo("<h2>Wiek poszczególnych pracowników (w latach) z działu serwis</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
        echo("<th>Wiek<th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]);
                echo("<tr>");
                
            }
            echo("</table>");

$sql = ('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat FROM pracownicy');
echo("<h2>Suma lat wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["suma_lat"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

$sql = ("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) as sh, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=2");
echo("<h2>Suma lat pracowników z działu handel</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sh"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                            
                }
                echo("</table>");



$sql = ("SELECT SUM(year(curdate())-year(data_urodzenia)) as sl FROM pracownicy WHERE imie like '%a'");
echo("<h2>Suma lat kobiet</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sl"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT SUM(year(curdate())-year(data_urodzenia)) as sm FROM pracownicy WHERE imie not like '%a'");
echo("<h2>Suma lat mężczyzn</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sm"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ('SELECT AVG(YEAR(curdate())-YEAR(data_urodzenia)) as ava, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial group by dzial');
echo("<h2>Średnia lat pracowników w poszczególnych działach</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Średni Wiek</th>");
        echo("<th>dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["ava"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
        echo("</table>");


$sql = ("SELECT SUM(year(curdate())-year(data_urodzenia)) as sa, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial group by dzial");
echo("<h2>Suma lat w poszczególnych działach</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Suma Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sa"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT MAX(year(curdate())-year(data_urodzenia)) as sk, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial");
echo("<h2>Najstarsi pracownicy w każdym dziale</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Max Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sk"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT MIN(year(curdate())-year(data_urodzenia)) as sx, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial");
echo("<h2>Najstarsi pracownicy w każdym dziale</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Min Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sx"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT MIN(year(curdate())-year(data_urodzenia)) as sp, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial AND (dzial=1 or dzial=2) GROUP BY dzial");
echo("<h2>Najmłodsi pracownicy w dziale handel i serwis</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Min Lat</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["sp"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS dz from pracownicy");
echo("<h2>Długość życia pracowników w dniach</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Dni Życia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dz"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");


$sql = ("SELECT * FROM pracownicy WHERE imie not like '%a' ORDER BY data_urodzenia ASC LIMIT 1");
echo("<h2>Najstarszy mężczyzna</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

echo("<h1>FORMATOWANIE DAT (nieukończone)</h1>");            


$sql = ("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') FROM pracownicy");
echo("<h2></h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");









?>
</div>
</body>
</html>