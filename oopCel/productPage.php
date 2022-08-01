<?php

$productId = $_GET['id'];
include "functions.php";

$myProduct = Product::find($productId);

?>
<html>
<?php include "parts/head.php"; ?>
<body>
<div class="container">
    <?php include "parts/header.php" ?>
</div>
<div class="container">
    <div class="row"  style="margin-top: 10px">
        <div class="col-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $myProduct->model; ?></h5>
                    <p class="card-text">
                        <b>Pret</b> <i class="fa fa-circle" aria-hidden="true"><?php echo $myProduct->pret; ?></i>
                        <b>Rezolutie</b> <i class="fa fa-circle" aria-hidden="true"><?php echo $myProduct->rezolutie; ?></i>
                        <b>Display</b> <i class="fa fa-circle" aria-hidden="true"><?php echo $myProduct->display; ?></i>
                        <b>Diagonala</b> <i class="fa fa-circle" aria-hidden="true"><?php echo $myProduct->diagonala; ?></i>

                    </p>
                    <h5>Pret: <?php echo $myProduct->pret; ?> LEI</h5>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>
