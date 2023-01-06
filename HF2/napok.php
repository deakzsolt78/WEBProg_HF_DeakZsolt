<?php
//3)
$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach ($napok as $adat1=>$adat2){
    echo $adat1." : ";
    foreach($adat2 as $napok){
        echo " ". $napok .", ";
    }
    echo "<br>";
}

?>