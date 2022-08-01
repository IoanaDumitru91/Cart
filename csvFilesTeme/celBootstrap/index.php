<!DOCTYPE html>
<html>

<?php
include 'head.php';
?>

<body class="page">

<?php
include 'searchBar.php';
?>

<?php
include 'header.php';
?>

<p>Producator</p>
<hr>

<?php
include 'leftList.php';
?>

<?php
include 'functions.php';
$products = readCsv('products.csv');
?>

<div class="cards">
    <?php
    foreach ($products as $product):
        ?>
        <div class="card">
            <div class="image" style="text-align: center;">
                <img src="laptopAsus.webp">
            </div>
            <?php foreach ($product as $value): ?>
                <div class="value" style="text-align: center; font-weight: 700 ;">
                    <?php echo $value ?>
                </div>
            <?php endforeach; ?>
            <div class="btn">
            <a href="#" class="btn btn-primary mx-auto btn-lg" style="background-color:#FF681D">Adauga in
                cos</a>
            </div>
            <ul class="listStyle p-4">
                <li class="text-center" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Produsul se afla in stocul partenerului">
                    In stoc partener
                </li>
            </ul>
            <hr>
            <div class="text">
                Vandut de <span class="textColor">MANDINACRIS GADGET ONLINE</span>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<hr>

<?php
include 'banner.php';
?>
<?php
include 'footer.php';
?>

</body>

</html>

