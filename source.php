<?php
$brutto= $_POST["amount"];
if ($_POST["extraValue"]=="") {
    $mwst= $_POST["value"];
}else{
    $mwst= $_POST["extraValue"];
}
$mwst= (int)$mwst/100;
$mwstB= (int)$brutto * $mwst;
$netto= (int)$brutto - $mwstB;
if ($brutto=="" && $mwst=="") {
    echo "<h1>Fehlende Angaben!</h1>";
    echo "<form action='index.html'>"; 
    echo "<button>Zurück</button>";
    echo "</form>";

}else {
    echo "<h1>Ihre Ergebnisse</h1>";
    echo "Netto-Betrag: " . number_format((float)$netto, 2, ',', '') . "<br>";
    echo "MWST-Satz: ". $mwst*100 ."<br>";
    echo "Mehrwertsteuer-Betrag: " . number_format((float)$mwstB, 2, ',', '') . "<br>";
    echo "Brutto-Betrag: " . number_format((float)$brutto, 2, ',', '') . "<br>";

}#number_format((float)$foo, 2, '.', '');
