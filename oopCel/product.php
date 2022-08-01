<div class="categories">
    <div class="card" style="width:30%;">
        <a href="productPage.php?id=<?php echo $myProduct->id; ?>">
            <img class="card-img-top p-5" src="images/laptopAsus.webp" alt="..." class="CAR1">
        </a>
        <p><b> <?php echo $myProduct->model; ?></b>
            <?php echo str_repeat("&nbsp;", 130); ?>
            <b style="color: red"><?php echo $myProduct->pret; ?>
                <small>LEI</small>
            </b>
        </p>

        <p>
            <small>Rezolutie &nbsp; <?php echo $myProduct->rezolutie; ?></small>
        </p>
        <p>
            <small> Display &nbsp; <?php echo $myProduct->display; ?>&nbsp;</small>
        </p>
        <p>
            <small> Diagonala &nbsp; <?php echo $myProduct->diagonala; ?> &nbsp;</small>
        </p>

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
</div>
</div>

