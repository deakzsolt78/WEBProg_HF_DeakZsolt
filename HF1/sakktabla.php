<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1 style="text-align: center">Sakk tabla</h1>
<hr>
<table>
    <?php for($sor=1; $sor<=8; $sor++){
        echo "<tr>";
        for($oszlop=1; $oszlop<=8; $oszlop++){
            $teljes=$sor+$oszlop;
            if ($teljes%2 ==0){
                echo '<td style="width: 40px; height: 40px; background: black"></td> ';
            }else{
                echo '<td style="width: 40px; height: 40px; background: white"></td> ';
            }
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>

