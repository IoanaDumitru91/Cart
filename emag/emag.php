<?php
$products = [];
$handle = fopen('products.csv', 'r');
while (($row = fgetcsv($handle, 0, ';')) !== FALSE) {
    $products[] = $row;
}
fclose($handle);
$rowCount = count($products);
$colCount = count($products[0]);
?>
<?php
$header = [];
$file = fopen('header.csv', 'r');
while (($col = fgetcsv($file, 0, ';')) !== FALSE) {
    $header[] = $col;
}
fclose($file);
$rowsCount = count($header);
$columnsCount = count($header[0]);
?>


<html>
<head>
    <title>Emag Php</title>
    <script src="https://kit.fontawesome.com/ea2a595fc0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<body class="page" style="width: 90%;max-width: 80%;margin-left: auto;margin-right: auto;">
<div class="container p-5">
    <div class="row header">
        <div class="col-2">
            <img src="logo.svg">
        </div>
        <div class="col-6">
            <div class="search"></div>
            <input class="searchBar" type="text" placeholder="Incepe o noua cautare..." style="width: 70%;height: 90%;">
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-4 d-flex">
                    <i class="fa-solid fa-heart linii"></i>
                    <p>Contul meu</p>
                </div>
                <div class="col-4 d-flex">
                    <i class="fa-solid fa-heart d-flex linii"></i>
                    <p>Favorite</p>
                </div>
                <div class="col-4 d-flex">
                    <i class="fa-solid fa-cart-plus d-flex linii"></i>
                    <p>Cosul meu</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex bd-highlight mb-3" style="background-color: #588adf;width: 100%;">
    <div class="me-auto p-2 bd-highlight"><i class="fa-solid fa-grip-lines linii"></i>

        <?php
        foreach ($header as $item):
            foreach ($item as $value):
                echo $value;
            endforeach;
        endforeach;
        ?>

    </div>
</div>
<hr>
<p><i class="fa-solid fa-angle-left linii"></i><a href="#" class="link"> Laptop, Tablete & Telefoane/ Laptopuri si
        accesorii</a></p>
<hr>


<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">


                <?php
                foreach ($products as $product):

                    ?>
                    <tr>
                        <td><img src="laptop%20apple.jpg"></td>
                        <?php foreach ($product as $value): ?>

                            <td>
                                <?php echo $value ?></td>
                        <?php endforeach; ?>

                    </tr>
                <?php endforeach; ?>


            </table>
        </div>
    </div>
</div>

</body>
</html>
