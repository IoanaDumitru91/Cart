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

if (isset($_GET['unit'])){
$price = 0.202;
$pcs = 10.803; //puterea calorifica superioara
$e = $_GET['units'] * $pcs;
$total = $e * $price; //e=energia
$result_str = round(($total * 0.19) + $total, 2);

if ($_GET['units'] > 50) {
    $price = 3.50;
    $total = $e * $price;
} else if ($_GET['units'] > 100) {
    $price = 4.00;
    $total = $e * $price;
} else if ($_GET['units'] < 100 ) {
    $price = 5.20;
    $total = $e * $price;
} else if ($_GET['units'] > 250) {
    $price = 6.50;
    $total = $e * $price;
}
$result_str = round(($total * 0.19) + $total, 2);
}
echo "<h3> Aveti de platit suma de : " . $result_str . " lei </h3>";

?>

