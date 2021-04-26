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
    $sql = ('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE dzial=2');
    echo("<h2>Pracownicy tylko z działu 2");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");
        }

        echo("</table>");
    
    $sql = ('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE (dzial=2 or dzial=3)');
    echo("<h2>Pracownicy z działu 2 i 3</h2>");
    echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");
        
            echo("</tr>");
        }

        echo("</table>");
    
    $sql = ('SELECT imie, zarobki, data_urodzenia, dzial FROM pracownicy WHERE (zarobki<30)');
    echo("<h2>Pracownicy z zarobkami mniejszymi niż 30</h2>");
    echo("<h2>".$sql."</h2>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");

            echo("</tr>");        
        }
        
        echo("</table>");
        








































?>
</div>
    
</body>
</html>

