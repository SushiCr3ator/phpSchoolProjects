<?php
$prime =array(2,3,5,7);
$y=0;
$result ="";
$checker="";
$no = $_POST["number"];
$i=$prime[$y];

while($y<3){
    $checker=$no/$i;
    if (ctype_digit((string)$checker) ){
        $y++;
        $result="KEINE Primzahl.";
    }else{
        $result="PRIMzahl!";
        break;
    }
}

echo "<center>";
echo "<h1>Primzahl? oder nicht?</h1>";
echo "$no<br><br><br>";
echo "$result";
echo "</center>";
