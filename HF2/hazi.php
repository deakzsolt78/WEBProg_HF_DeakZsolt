<?php
//1)
$adatok = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

foreach ($adatok as $adat) {
    if (is_numeric($adat)) {
        echo $adat . "  " . gettype($adat) . " " . "Igen" . "<br>";
    } else {
        echo $adat . "  " . gettype($adat) . " " . "Nem" . "<br>";
    }
}
echo "<br>","<br>";

//2)
$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
    "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach ($orszagok as $adat1=>$adat2){

    echo $adat1 . " fővárosa " . $adat2 .".". "<br>";
}
echo "<br>","<br>";

?>
