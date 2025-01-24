<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP gyakorlás</title>
</head>
<body> 
    <?php
        //kiiratás 
        echo "<p>Ezt a PHP írta.</p>";
        print '<p>Kiírás printtel</p>';
        //összes eddigi változó részletes megjelenítése
        var_dump($GLOBALS); 
        echo "<br>";  //következő sorba kerül
        //konstans
        define("GREETING","Hello you! How are you today?");
        echo constant("GREETING");
        //változó létrehozása
        $szoveg1 = 'szoveg1'; 
        $szoveg2 = "szoveg2";
        echo "<br>A két szöveg együtt1: ".$szoveg1."+".$szoveg2;
        echo "<br>A két szöveg együtt2: $szoveg1 + $szoveg2<br>";
        
        $szoveg8 = "Szép";
        $szoveg8 .=" napot!<br>"; // -  jelentése += Javaban
        echo $szoveg8;
        //határ keresés
        echo pow(2.0, 1024);  //1024 az már INFINITE, arra nem ad eredményt.
        //Ttörtek
        echo "<br>";
        $tort1 = 3.56;
        $tort2 = 3.44;
        $osszeg=$tort1+$tort2;
        echo "<br>";
        echo gettype($osszeg);
        echo "<br>A két szám összege: $osszeg";
        var_dump($GLOBALS); 
        //logikai típus
        echo "<br>";
        $logikai1 = true;
        $logikai2 = false;
        echo "<br>A két logikai érték: ".$logikai1." ".$logikai2; //csak a true jelenik meg. (1)
        echo "<br>";
        //lista
        $a = array("red", "green", "blue");
        print_r($a);

        $tomb0 = array(1,2,3,4,5); //def lista
        $tomb1 = array();
        $tomb2[0] = "Ady Endre"; //direktbe hoztuk létre az elemeket 
        $tomb2[1] = "József Attila";
        $tomb3 = ["Milan Kundera", "Hermann Hesse"];
        echo "<br>Tömb2: ";
        print_r($tomb2);


    ?>
    <p>Ezta a HTML írta</p>
</body>
</html>