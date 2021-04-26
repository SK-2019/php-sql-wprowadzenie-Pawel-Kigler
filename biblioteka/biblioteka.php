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

$sql1 = ("SELECT * FROM bibliotekaAutor"); 
echo("<h2>Wypożyczanie</h2>");
echo("<h3>".$sql1."</h4>");
$result=$conn->query($sql1);
echo("<form action='wypożycz.php' method='POST'>");
echo("<label for='Autor'><h4>Wybierz autora:</h4></label>");
echo("<select name='Autor' id='id_tytuł'>");
while($row=$result->fetch_assoc()) 
{
    echo("<option value=".$row['id_autor'].">".$row['Autor']."</option>");
}
echo("</select>");
echo("<input type='submit' value='Submit'>");
echo("</form>");






$sql = ('SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` WHERE id_autor = bibliotekaAutor_ID AND id_tytuł = bibliotekaTytul_ID');
echo("<h2>Dane w Bibliotece</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");
    

    }

    echo("</table>");


    




    

    


?>
</div>
</body>
</html>
