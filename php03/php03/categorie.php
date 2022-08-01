<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>
<body>
<div class="container fluid p-3">
    <?php
    include "header.php";
    ?>
    <div class="row">
        <?php

        // comentariu pe o singura linie

        /*

        comentarii pe mai multe linii

        */


        //Superglobals

        // 1)  $_GET

        //2) $_SERVER
        // 3) $_POST
        //4) $_COOKIE
        //5) $_SESSION
        //6)) $_ENV
        //7)$_FILES
        //8 $_REQUEST

        /*
          array = ['1.2', 3, true ]
          array = [ 'nume' => 'dell' ,  'numar' => 3, 'bool'=> true]


        */
        $name = "Laptop Lenovo";
        $discount = 14.5;
        $price = 2999.34;
        $image = 'recom.jpg';
        $review = 30;
        include "recomandare.php";


        $discount = 20;
        $name = "Laptop Apple";
        include "recomandare.php";

        $name = "Laptop HP";

        $discount = 23;
        $price = 1750.36;
        $image = 'recom.jpg';
        $review = 15;
        include "recomandare.php";

        $name = "Laptop IBM";
        $discount = 35;
        $price = 4578.45;
        $image = 'recom.jpg';
        $review = 60;

        include "recomandare.php";


        $discount = 10;
        $price = 3000;
        $image = 'recom.jpg';
        $review = 25;

        $name = "Laptop DELL";
        include "recomandare.php";
        $name = "Laptop DELL1";
        include "recomandare.php";
        $name = "Laptop DELL2";
        include "recomandare.php";
        $name = "Laptop DELL3";
        include "recomandare.php";
        $name = "Laptop DELL4";
        include "recomandare.php";
        $name = "Laptop DELL5";
        include "recomandare.php";
        $name = "Laptop DELL6";
        include "recomandare.php";
        $name = "Laptop DELL7";
        include "recomandare.php";
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</div>
</body>
</html>