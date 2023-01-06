<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//1)
    echo "A Mai nap: " . date("Y/m/d");
    if (date("w")==1)
        echo " hetfo van";
    elseif (date("w")==2)
        echo " kedd van";
    elseif (date("w")==3)
        echo " szerda van";
    elseif (date("w")==4)
        echo " csutortok van";
    elseif (date("w")==5)
        echo " pentek van";
    elseif (date("w")==6)
        echo " szombat van";
    elseif (date("w")==0)
        echo " vasarnap van";
    echo "<br>";




?>
/2
<form>
    <input type="text" name="num1" placeholder="Number1">
    <input type="text" name="num2" placeholder="Number2">
    <select name="muvelet">
        <option>semmi</option>
        <option>osszeadas</option>
        <option>kivonas</option>
        <option>szorzas</option>
        <option>osztas</option>
    </select>
    <br>
    <br>
    <button type="submit" name="submit" value="submit">kiszamitas</button>
</form>
<br>
<p>Az eredmeny=  </p>
<?php
if (isset($_GET['submit'])) {
    $reult1= $_GET['num1'];
    $reult2= $_GET['num2'];
    $muvelet = $_GET['muvelet'];
    switch ($muvelet) {
        case "semmmi":
            echo "valasz egy muveletet.";
            break;
        case "osszeadas":
            echo $reult1+$reult2;
            break;
        case "kivonas":
            echo $reult1-$reult2;
            break;
        case "szorzas":
            echo $reult1*$reult2;
            break;
        case "osztas":
            echo $reult1/$reult2;
            break;

    }
}
//osztotablak
echo "<br>";
echo "osztotablak:" ."<br>";

$data = array(1,2,3,4,5,6,7,8,9,10);
foreach ($data as $szam){
    $n = 1;
    while ($n < 11) {
        print $n . " / " . $szam . " = " . ($n / $szam) . "<br>";
        ++$n;

    }
    echo "<br>";
}


?>

</body>
</html>