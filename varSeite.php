<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>seite</title>
        <link rel="stylesheet" href="stylistic.css">
    </head>
    <body>
        <center>
            <?php
                $author="Andreaz";
                $version= 1.2;
                echo "<h1 id='hd'>Herzlich willkommen auf der Seite von ". $author ."!</h1>";
                echo "Dies ist Seitenversion " . $version . ".<br>";
                echo "<p id='bg'>Sie haben dieses Homepage ". date("d.m.Y") . " um " . date("h:i") . " Uhr aufgerufen.</p>";
            ?>
        </center>
    </body>
</html>
