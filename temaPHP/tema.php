<?php
//Tema  - la tema facuta de voi data trecuta folositi $_GET   si sa compuneti url-ul.
//
// La fisieurl cu cnp - va rog sa afisati data nasterii , varsta corecta ( tineti cont de luna nasterii).
// //
//You need to write a PHP program to calculate electricity bill using if-else conditions.
//
//Conditions:
//
//For first 50 units – Rs. 3.50/unit
//For next 100 units – Rs. 4.00/unit
//For next 100 units – Rs. 5.20/unit
//For units above 250 – Rs. 6.50/unit
//You can use conditional statements.

?>


    <div id="page-wrap">
        <h1>Calculator factura </h1>

        <form action="" method="GET" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Introduceti index"/>
            <input type="submit" name="unit" id="unit-submit" value="Submit"/>
        </form>

        <div>
            <?php echo '<br />' . $result_str = ''; ?>
        </div>
    </div>

<?php
$units = $_GET['units'];
$price = 0.202;
$pcs = 10.803;
$e = $_GET['units'] * $pcs;
$total = $e * $price;

switch ($units) {
    case '$units > 50':
        $price = 3.550;
        break;
    case '$units > 100':
        $price = 4.00;
        break;
    case '$units < 100':
        $price = 5.20;
        break;
    case '$units > 250':
        $price = 6.50;
        break;
}
$result_str = round(($total * 0.19) + $total, 2);
echo "<h3> Aveti de platit suma de : " . $result_str . " lei </h3>";
?>

    <style>
        table, th, td {
            border: 1px solid black;
        }


    </style>
    <table style="width: 80%;">
        <?php
        $capitals = ['Viena', 'Atena', 'Paris', 'Budapesta', 'Berlin', 'Ankara', 'Lisabona', 'Bucuresti', 'Amsterdam', 'Dublin'];
        $capitals = array(
            array('Viena'),
            array('Atena'),
            array('Paris'),
            array( 'Budapesta'),
            array( 'Berlin'),
            array( 'Ankara'),
            array( 'Lisabona'),
            array( 'Bucuresti'),
            array( 'Amsterdam'),
            array( 'Dublin')
        ); ?>
        <tr>
            <th> Capitala</th>
        </tr>
        <tr>
            <td><?php echo $capitals[0][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[1][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[2][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[3][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[4][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[5][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[6][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[7][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[8][0];?></td>
        </tr>
        <tr>
            <td><?php echo $capitals[9][0];?></td>
        </tr>
    </table>



<?php
// tema : 09.05.2022

//
//#1: Simple Arrray
//Create an array of weather phenomena, then use it in a sentence.
//
//
//#2: Multi-Dimensional Array
//Starting with an array of the capitals in Europe (maximum 10) , write a two dimensional  array .Create a tablee in html  with the information in the array
//#3 Probpema de mai sus folosind swirch

$weather = ['rain', 'wind', 'sun'];
//var_dump($weather);
$rain = $weather[0];
$wind = $weather[1];
$sun = $weather[2];

echo '<h3>Tomorrow it will ' . $weather[0] . ' and it will be a lot of ' . $weather[1] . ' but the day after tomorrow the ' . $weather[2] . ' will shine.</h3>';


?>