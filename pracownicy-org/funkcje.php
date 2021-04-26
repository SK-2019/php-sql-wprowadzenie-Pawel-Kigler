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
$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy');
echo("<h2>Suma zarobków wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE imie like "%a"');
echo("<h2>Suma zarobków wszystkich kobiet</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE (dzial=2 or dzial=3) AND imie not like "%a"');
echo("<h2>Suma zarobków mężczyzn pracujących w dziale 2 i 3</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy where imie not like "%a"');
echo("<h2>Średnia zarobków wszystkich mężczyzn</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=4)');
echo("<h2>Średnia zarobków pracowników z działu 4</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=1 or dzial=2) AND imie not like "%a"');
echo("<h2>Średnia zarobków mężczyzn z działu 1 i 2</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy ');
echo("<h2>Ilu jest wszystkich pracowników</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


$sql = ('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy WHERE (dzial=1 or dzial=3) and imie like "%a"');
echo("<h2>Ile kobiet pracuje łącznie w działach 1 i 3</h2>");
echo("<h3>".$sql."</h3>");
$result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");













?>
</div>
</body>
</html>