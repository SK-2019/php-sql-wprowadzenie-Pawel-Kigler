<?php
require("connect.php");

$sql = "SELECT * FROM Piłkarze";
echo("<h3>Piłkarze</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Pil/th>");
echo("<th>Piłkarz</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Pil']."</td><td>".$row['Piłkarz']."</td>");
    echo("</tr>");
}
echo("</table>");

$sql = "SELECT * FROM Kluby";
echo("<h3>Klub</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ID_Klub/th>");
echo("<th>Klub</th>");

while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row['ID_Klub']."</td><td>".$row['Klub']."</td>");
    echo("</tr>");
}
echo("</table>");
?>
