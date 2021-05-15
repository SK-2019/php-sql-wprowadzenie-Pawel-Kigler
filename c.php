<html><body>
    <form method='post' action="">
    Zgadnij jaka liczbe wymyslilem (0-1000)
    </form>
    Liczba: <input type="text" name="liczba">
    <input type="submit" value="zweryfikuj">
    </form>
    Poprawna liczba: 100
    </form>
    <?php
    $liczba_komputera = 100;

    if ($_POST['liczba']>$liczba_komputera){
        echo('Za duzo!');
    } else if ($_POST['liczba']<$liczba_komputera){
        echo('Za malo!');
    } else {
        echo('ZGADLES!');
    }

    ?>
    </body></html>
