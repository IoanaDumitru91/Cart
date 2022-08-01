<?php
$cnp = "1900406281888";
$name ="ioana";

// 1900406281888

// var_dump($cnp);
$sexValue = $cnp[0]; //1
$year= $cnp[1].$cnp[2];// 90
$month =$cnp[3].$cnp[4]; // 04
$day = $cnp[5].$cnp[6]; //06
$countyValue = $cnp[7].$cnp[8];//28





$countyList =['Alba','Arad','Argeș','Bacău','Bihor','Bistrița-Năsăud','Botoșani','Brașov','Brăila','Buzău','Caraș-Severin','Cluj','Constanța','Covasna','Dâmbovița','Dolj','Galați','Gorj','Harghita','Hunedoara','Ialomița','Iași','Ilfov','Maramureș','Mehedinți','Mureș','Neamț','Olt','Prahova','Satu Mare','Sălaj','Sibiu','Suceava','Teleorman','Timiș','Tulcea','Vaslui','Vâlcea','Vrancea','București','București S.','București S.','București S.','București S.','București S.','București S.','Călărași','Giurgiu'];
$sexList = ['1'=>'masculin', '2'=>'feminin', '0'=>'invalid', '9'=>'invalid'];
$century = [ '1' => '1900', '2'=>'1900', '5'=> '2000', '6'=>'2000', '3'=>'1800', '4' => '1800'];

if(isset($sexValue)) {
    $fullYear = intval($year) + intval( $century[$sexValue]);

}

//switch ($sexValue) {
//    case '1':
//    case '5':
//        echo "masculin";
//        break;
//    case '2':
//    case '6':
//        echo "feminin";
//        break;
//    default:
//         echo'invalid';
//         break;
//
//}

$currentYear = date('Y');

$age = $currentYear -  $fullYear;


// print_r($countyValue-1);


numbers();


//var_dump($numbers);



//echo $suma;


 $a =  [
         'a' => ["b"=>0 , "c"=>1],
         'b' => ['e' => 2,
             'f'=> array('b'=>3), 'd'=>true]

     ];

var_dump($a['b']);

echo '<br>';

echo $a['b']['d'];

echo '<br>';

echo $a['b']['f']['b'];

?>
<h1>Numele: <?php echo $name; ?></h1>
<h1>Data nasterii: <?php echo $day;?>-<?php echo $month;?>-<?php echo $fullYear;?> </h1>
<h2>Varsta: <?php echo $age;?></h2>
<h2>Sex: <?php echo $sexList[$sexValue];?></h2>
<h2>Judet: <?php echo $countyList[$countyValue-1];?></h2>


<?php
    function numbers()
    {
        $numbers= [20,30,40,50,60,70];
        $suma = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] +$numbers[4] + $numbers[5];
        echo $suma."</br>" ;
    }
?>