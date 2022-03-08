<html>

<head>
</head>

<body>
    <?php
    //ob_start();

    $plik = "licz.txt";

    //odczytujemy aktualną wartość z pliku
    $file = fopen($plik, "r");
    flock($file, 1);
    $liczba = fgets($file, 16);
    flock($file, 3);
    fclose($file);
    $liczba++; //zwiększamy o 1

    //zapisujemy nową wartość licznika
    $file = fopen($plik, "w");
    flock($file, 2);
    fwrite($file, $liczba++);
    flock($file, 3);
    fclose($file);

    echo "koniec"
    ?>

    <?php header('Location: http://media.discordapp.net/attachments/476134977986363394/949181626905165884/video0-157.mp4'); ?>
</body>

</html>
