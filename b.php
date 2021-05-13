<html><body>
    <form method='post' action="">
    Imie: <input type="text" name="Imie">
    <input type="submit" value="zweryfikuj">
    </form>
    <?php
    if ($_POST['Imie']=='Pawel') {
        echo('Witaj Pawle!');
    } else {
        echo('Nie wiem kim jestes.');
    }
    ?>
    </body></html>