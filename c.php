<html><body>
    <form method='post' action="">
    Zgadnij jaka liczbe wymyslilem (0-10)
    Liczba: <input type="text" name="liczba">
    <input type="submit" value="zweryfikuj">
    </form>
    <?php
    $liczba_komputera = 5;

    if ($_POST['liczba']>$liczba_komputera){
        echo('Za duzo!');
    } else if ($_POST['liczba']<$liczba_komputera){
        echo('Za malo!');
    } else {
        echo('ZGADLES!');
    }

    ?>
    </body></html>
