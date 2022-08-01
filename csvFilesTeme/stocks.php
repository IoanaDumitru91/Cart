<?php
include 'functions.php';
?>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        $stocks=readCsv('csvs/stocks.csv');
        $product = readCsv('csvs/products.csv');
        $productId = $_GET['productId'];
        ?>
        <h1 style="text-align: center;"> <?php echo $product[$productId][1]. ' ' .$product[$productId][0] ?> </h1>
        <?php

        $filteredStocks = filterData($stocks,$productId,1);
        displayData($filteredStocks);

        ?>

    </div>
</div>
</body>
</html>
