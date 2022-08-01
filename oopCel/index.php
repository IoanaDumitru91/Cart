
<!DOCTYPE html>
<html>

<?php
include 'parts/head.php';
?>

<body class="page">

<?php
include 'parts/searchBar.php';
?>

<?php
include 'parts/header.php';
?>

<p>Producator</p>
<hr>

<?php
include 'parts/leftList.php';
?>

<?php

include "functions.php";
$products = Product::findAll('pret','DESC');

?>

<div class="container-fluid limited-width">
   <?php
   foreach ($products as $myProduct){
       include "product.php";
   }
   ?>
</div>

<hr>

<?php
include 'parts/banner.php';
?>
<?php
include 'parts/footer.php';
?>

</body>

</html>

