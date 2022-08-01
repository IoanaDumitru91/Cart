<?php

$name =$_GET['name'];
$cnp = $_GET['cnp'];

$cnp = floor($cnp / 10000);
$county = $cnp % 100;
$day = ($cnp / 100)%100;
$year = ($cnp / 1000000) % 100;
$month = ($cnp / 10000) % 100;
$sexValue = ($cnp / 100000000) % 10;

if($sexValue == 1 || $sexValue == 2  ) {
    $year = $year+ 1900;

}

if($sexValue == 5 || $sexValue == 6 ) {
    $year = $year+2000;
}

if($sexValue == 1 || $sexValue ==3 || $sexValue==5 || $sexValue==7) {
    $gender = 'Masculin';

} else if($sexValue == 2 || $sexValue == 4 || $sexValue == 6 || $sexValue ==8) {
    $gender = 'Feminin';
} else {
    $gender = 'Invalid';
}
 if ($month<=9){
    $month = '0'.$month;
}


$currentYear = date('Y');

$age = $currentYear - $year;

echo " current year este : ".$currentYear.  "<br>";
echo "<h1>Numele  este : ". $name."</h1><br>";

echo " <h1> Varsta  calculata este ".$age. " ani </h1> <br>";


echo " <h1> Persoana este de sex:  ".$gender. "</h1>";

echo "<h1> Data nasterii: " .$day. "." .$month. ".".$year. "</h1>";







