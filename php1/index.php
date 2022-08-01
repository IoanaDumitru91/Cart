<!DOCTYPE html>

<html>

<?php
include 'head.php';
?>

<body>

<?php
include 'header.php';
?>

<?php
include 'alertHeading.php';
?>

<div class="container-fluid limited-width">
    <div class="row body-row">

        <?php
        include 'categories.php';
        ?>

        <div class="listing">
            <!-- Item begin -->
            <?php

            include 'firstProducts.php';
            ?>

            <!-- Item end -->
            <?php
            include 'banner.php';
            ?>
            <!-- Item begin -->
            <?php
            include 'secondsProducts.php';
            ?>
            <!-- Item end -->
            <?php
            include 'secondBanner.php';
            ?>
            <!-- Item begin -->
            <?php
            include 'thirdProduct.php';
            ?>
            <!-- Item end -->
        </div>
    </div>
</div>


<?php
include 'script.php';
?>

</body>

<?php
include 'footer.php';
?>

</html>