<!--<!--Mėnesio dienų skaičius - 31;-->-->
<!--<!--Random iškritusi mėnesio diena (1, 31);-->-->
<!--<!--kwh kaina - 0.07 Eur;-->-->
<!--<!--Per dieną sunaudota random kwh (2, 5);-->-->
<!--<!--For ciklo pagalba apskaičiuoti kiek reikės sumokėti už elektrą iki iškritusios random dienos.-->-->
<!--<!---->-->
<!--<!--Hint - Ciklui sukti naudojama 31 diena, bet ciklas stabdomas po iškritusios dienos.-->-->
<!---->
<!---->
<?php
//$monthDays = 31;
//$price = 0.07;
//$total_kwH = 0;
//$toPay = 0;
//$randDay = rand(1,31);
//
//for ($i = 1; $i <=$monthDays; $i++) {
//    $randKwH = rand(2,5);
//
//    if ($i <= $randDay) {
//        $total_kwH += $randKwH;
//    } else {
//        break;
//    }
//}
//$toPay = $price * $total_kwH;
//print $toPay . '<br>';
//
////--------------------------------------------------------------------------------------------------------
//
////For ciklo pagalba atvaizduoti 15 atspalvių;
////Kiekvienas atspalvis atvaizduojamas į div (w: 300px, h: 25px)
////Spalvos apskaičiavimas =
////    255 * (ciklo numeris / bendras ciklų skaičius)
//
//?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--    <style>-->
<!--        div {-->
<!--            height: 25px;-->
<!--            width: 300px;-->
<!--            margin: 0 auto;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<?php //for($i = 0; $i <15; $i++): ?>
<!--    <div style="background-color: rgb(--><?php //print 255 * ($i/15); ?>/*,0,0)"></div>*/
<?php //endfor; ?>
<!---->
<!--</body>-->
<!--</html>-->
<!---->
<!--<!-------------------------------------------------------------------------------->-->
<!---->
<!--<!--EGLUTE-->-->
<!---->
<!--<!--CSS - body{ text-align: center };-->-->
<!--<!--Visas PHP rašomas viršuje.-->-->
<!--<!--Eglutės aukštis rand(10, 30);-->-->
<!--<!--Dekoracijos rand (1, 30);-->-->
<!---->
<!--<!--Jeigu dekoracijos iškris 1, 2 ar 3 tik tuomet dedamas simbolis;-->-->
<!--<!--Mano simboliai naudoti iš coolsymbol.com-->-->
<!---->
<?php
//$tree_height = rand(10,30);
//$arrOfStrings = ['⭐', '✨', '🧡'];
//
////auksciui
//for ($i = 1; $i <= $tree_height; $i++) {
//    //plociui
//    for ($y = 1; $y <= $i; $y++) {
//        $decor = rand(1, 30);
//        $random = $arrOfStrings[array_rand($arrOfStrings)];
//
//        if ($decor == 1 || $decor == 2 || $decor == 3) {
//            print $random;
//        } else {
//            print '︽';
//        }
//    }
////kad eitu i kita eilute - iskart po for'o
//    print "<br>";
//}
//
//?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--    <style>-->
<!--        body {-->
<!--            text-align: center;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!--</body>-->
<!--</html>-->


<!------------------------------------------------------------------------------->

<!--MASYVAI-->

<?php
$array = [7, 2, 8, 267, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 5, 7, 5];
$newArray = [];
$answer = 0;

//1.Padauginti esamo masyvo narius iš 2;
//
//for ($i= 0; $i < count($array); $i++) {
//    $answer = $array[$i] * 2;
//    var_dump($answer);
//}
//
////2. Pakelti masyvo narius kvadratu;
//for ($i= 0; $i<count($array); $i++) {
//    $answer = $array[$i] **2;
//    var_dump($answer);
//}
//
////3. Padauginti masyvo narius iš jų index'o (vietos masyve);
//for ($i= 0; $i<count($array); $i++) {
//    $answer = $array[$i] * $i;
//    var_dump($answer);
//}
//
////4. Atrinkti tik tai teigiamų elementų masyvą;
//for ($i= 0; $i<count($array); $i++) {
//    if ($array[$i] > 0) {
//        $answer = $array[$i];
//        var_dump($answer);
//    }
//}
//
////5. Atrinkti tiktai neigiamų elementų masyvą;
//for ($i= 0; $i<count($array); $i++) {
//    if ($array[$i] < 0) {
//        $answer = $array[$i];
//        var_dump($answer);
//    }
//}

//6. Atrinkti tiktai lyginių skaičių masyvą;
//for ($i= 0; $i<count($array); $i++) {
//    if ($array[$i]%2 === 0) {
//        $answer = $array[$i];
//        var_dump($answer);
//    }
//}
//
////7. Atrinkti tiktai nelyginių skaičių masyvą;
//for ($i= 0; $i<count($array); $i++) {
//    if ($array[$i]%2 === 1) {
//        $answer = $array[$i];
//        var_dump($answer);
//    }
//}
//
////8. Visas neigiamas vertes masyve padaryti teigiamomis;
//
//for ($i = 0; $i <= count($array) - 1; $i++) {
//    $answer = abs($array[$i]);
//    var_dump($answer);
//}
//
////9. Pakelti visas masyvo reikšmes laipsniu 'index';
//for ($i = 0; $i < count($array); $i++) {
//    $answer = $array[$i] ** $i;
//    var_dump($answer);
//}
//
////10. Atrinkti tik natūralių skaičių masyvą;
//natsort($array);
//for ($i = 0; $i < count($array); $i++) {
//    var_dump($array[$i]);
//}
//
////11. Suapvalinti visas masyvo reikšmes iki sveikų skaičių;
//for ($i = 0; $i < count($array); $i++) {
//    $answer = round($array[$i]);
//    var_dump($answer);
//}

////12. Atrinkti kas antrą elementą;
//for ($i = 1; $i < count($array); $i+=2) {
//    $newArray[] = $array[$i];
//}
//var_dump($newArray);

//13. Atrinkti kas penktą elementą;
//$arrayX = [];
//for ($i = 4; $i <count($array); $i+=5) {
//    $arrayX[] = $array[$i];
//}
//var_dump($arrayX);

////14. Apskaičiuoti visų masyvo elementų sumą;
//$total = 0;
//for ($i = 0; $i < count($array); $i++) {
//    $total += $array[$i];
//}
//var_dump($total);
//
////15. Apskaičiuoti visų masyvo elemento vidurkį;
//$average = 0;
//for ($i = 0; $i < count($array); $i++) {
//    $average = $total/count($array);
//}
//var_dump($average);
//
////16. Atrasti didžiausią skaičių masyve;
//$largest = 0;
//for ($i = 0; $i < count($array); $i++) {
//    $largest = max($array);
//}
//var_dump($largest);
//
////17. Atrasti mažiausią skaičių masyve;
//$lowest = 0;
//for ($i = 0; $i < count($array); $i++) {
//    $lowest = min($array);
//}
//var_dump($lowest);
//
////18. Išrikiuoti masyvo elementus nuo mažiausio iki didžiausio;
//sort($array);
//for ($i = 0; $i < count($array); $i++) {
//    var_dump($array[$i]);
//}



//-------------------------------------------------------------------------------------------------

//1.Susikuriame masyvą - kurį sudarys 3 eilutes, po 3 vertes - jūsų pasirinkimu įhardcodinti 0 ir 1.
//2.Foreach ciklų pagalbą sugeneruojame naują masyvą, kur bus atvirkštinės reikšmės.
//3.Rezultatai atspausdinami html, kaip pavyzdyje.

$matrix = [
    [0, 1, 0],
    [0, 1, 1],
    [1, 1, 0]
];
$reversed = [];
$newValue = 0;

foreach ($matrix as $row) {
    foreach ($row as $integer) {
        if ($integer === 0) {
            $newValue = 1;
        } elseif ($integer === 1) {
            $newValue = 0;
        }
        $reversed[] = $newValue;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .cont {
            display: flex;
            justify-content: center;
            width: 1000px;
            height: auto;
            margin: auto;
        }
        .container {
            height: 160px;
            width: 160px;
            display: flex;
            flex-wrap: wrap;
            border: 1px solid black;
            margin: 20px;
        }
        .square {
            height: 50px;
            width: 50px;
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="cont">
    <div class="container">
        <?php foreach ($matrix as $value) : ?>
            <?php foreach ($value as $sth) : ?>
                <div class="square"><?php print $sth?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div class="container">
        <?php foreach ($reversed as $value) : ?>
            <div class="square"><?php print $value?></div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<!------------------------------------------------------------------>

<!--1. Programiškai sugeneruoti (for ciklo pagalba) kortų kaladę (masyvą).-->

<!--Kortos turi būti sugeneruotos iš:-->
<!--4 rūšių - Čirvų, Zvonkų, Vynų ir Kryžių - (masyvas);-->
<!--Kortų - 'A', 'K', 'Q', 'J', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10' - (masyvas).-->
<!--Iš viso kortų kaladėje turėtų būti išvardumpintos 56 kortos.-->
<!--Pastaba - tikroje kaladėje būtų 52, todėl, kad nebūtų kortos - ‘1’ .-->

<?php
$arrSymbols = [];
for ($i = 0; $i<14; $i++) {
    $arrSymbols[] = "Assets/clubs2.png";
    $arrSymbols[] = "Assets/heart.png";
    $arrSymbols[] = "Assets/spade.png";
    $arrSymbols[] = "Assets/diamond.png";
}
//išsortint, kad nesidubliuotų
sort($arrSymbols);

$arrValues = [];
for ($x = 0; $x<4; $x++) {
    $arrValues[] = "A";
    $arrValues[] = "K";
    $arrValues[] = "Q";
    $arrValues[] = "J";
    $arrValues[] = "1";
    $arrValues[] = "2";
    $arrValues[] = "3";
    $arrValues[] = "4";
    $arrValues[] = "5";
    $arrValues[] = "6";
    $arrValues[] = "7";
    $arrValues[] = "8";
    $arrValues[] = "9";
    $arrValues[] = "10";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .containerX {
            display: flex;
            flex-wrap: wrap;
        }
        .card {
            height: 150px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            margin: 10px;
        }
        img {
            height: 70px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="containerX">
    <?php for ($i = 0; $i < 56; $i++) : ?>
        <div class="card">
            <div> <?php print $arrValues[$i] ?></div>
            <img src="<?php print $arrSymbols[$i]; ?>" alt="">
        </div>
    <?php endfor; ?>
</div>

</body>
</html>
---------------------------------------------------------------------------------------------------------------------
<!--1. Iš sugeneruotos kortų kaladės turi iškristi 5 rand kortos ant stalo.-->
<!--2. Korta, kuri iškrito ant stalo nebegali iškristi antrą kartą, t.y. turi būti išimta iš kortų kaladės.-->
<!--3. Atvaizduoti iškritusias kortas ekrane.-->
<?php
$deletedSymbols = [];
$deletedValues = [];
$keySymbol = array_rand($arrSymbols, 56); //grazina integer
shuffle($keySymbol);

//UNSETINIMAS IS PIRMINIU MASYVU
foreach ($keySymbol as $key => $value) {

    $deletedSymbols[] = $arrSymbols[$value];
    $deletedValues[] = $arrValues[$value];

    unset($arrSymbols[$value]);
    unset($arrValues[$value]);

    if ($key === 4) {
        break;
    }
}
//
//var_dump($arrSymbols);
//var_dump($arrValues);
//-----------------------------------------------------------------------------------------------------------------------

//<!--    Tikslas - patikrinti, ar visos iškritusios kortos yra vienodos rūšies, pvz. kryžiai?-->
//<!--    Ekrane, po kortomis atspausdinti rezultatą - taip / ne.-->

$true = '';
foreach ($deletedSymbols as $key => $symbol) {
    if ($deletedSymbols[0] === $deletedSymbols[1] && $deletedSymbols[0] === $deletedSymbols[2] && $deletedSymbols[0] === $deletedSymbols[3] &&
        $deletedSymbols[0] === $deletedSymbols[4] &&
        $deletedSymbols[1] === $deletedSymbols[2] && $deletedSymbols[1] === $deletedSymbols[3] && $deletedSymbols[1] === $deletedSymbols[4] &&
        $deletedSymbols[2] === $deletedSymbols[3] && $deletedSymbols[2] === $deletedSymbols[4] &&
        $deletedSymbols[3] === $deletedSymbols[4]
    ) {
        $true = "Kortos yra vienodos rusies";
    } else {
        $true = "Kortos nevienodos rusies";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container2 {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .card {
            height: 150px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            margin: 10px;
        }
        img {
            height: 70px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container2">
    <?php for ($i = 0; $i < 5; $i++) : ?>

        <div class="card">
            <div> <?php print $deletedValues[$i] ?></div>
            <img src="<?php print $deletedSymbols[$i]; ?>" alt="">
        </div>

    <?php endfor; ?>
    <div><?php print $true ;?></div>
</div>

    -----------------------------------------------------------------------------------------------------------------








</body>
</html>

