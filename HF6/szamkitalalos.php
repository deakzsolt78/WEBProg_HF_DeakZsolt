<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<?php
session_start();
if (isset($_POST['talalgatas'])) {
    if (isset($_SESSION['random']));


    talalgatos($_POST['talalgatas'], $_SESSION['random'] );

}
else{
    $_SESSION['random']=rand(1,10);
    talalgatos($_POST['talalgatas'], $_SESSION['random'] );
}
    function talalgatos($talalgatas,$random)
    {
    if ($talalgatas > $random) {

        echo "<h3>A szám kisebb mint </h3>"."$talalgatas";

    } else if ($talalgatas < $random) {
        echo "<h3>A szám nagyobb mint </h3>". "$talalgatas";

    } else if ($talalgatas = $random) {
        echo "<h3>eltalalta a szamot </h3>";

    }
}
?>
<form method="POST" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>
</body>
</html>