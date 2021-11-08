<?php
    function hitung($x, $y, $z){
        switch($z){
            case "+":
                echo "PENJUMLAHAN<br>";
                echo "Operator : $z<br>";
                echo "Hasil : ", $x + $y, "<br>";
                break;
            case "-":
                echo "PENGURANGAN<br>";
                echo "Operator : $z<br>";
                echo "Hasil : ", $x - $y, "<br>";
                break;
            case "*":
                echo "PERKALIAN<br>";
                echo "Operator : $z<br>";
                echo "Hasil : ", $x * $y, "<br>";
                break;
            case "/":
                echo "PEMBAGIAN<br>";
                echo "Operator : $z<br>";
                echo "Hasil : ", $x / $y, "<br>";
                break;
            case "%":
                echo "MODULUS<br>";
                echo "Operator : $z<br>";
                echo "Hasil : ", $x % $y, "<br>";
                break;
            default:
                break;
        }
    }

    $x = 10;
    $y = 5;
    $z = "";

    echo "Bilangan 1 = $x <br>";
    echo "Bilangan 2 = $y <br><br>";
    echo "Berikut merupakan hasil dari setiap operasi<br><br>";

    hitung($x, $y, "+");
    echo "<br>";
    hitung($x, $y, "-");
    echo "<br>";
    hitung($x, $y, "*");
    echo "<br>";
    hitung($x, $y, "/");
    echo "<br>";
    hitung($x, $y, "%");
?>