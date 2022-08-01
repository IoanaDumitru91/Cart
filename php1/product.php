
<div class="item">
    <div class="product-top">
        <div class="prod-img">
           <a target="_blank" href="/php/product.php/?name=<?php echo $name?>&price=<?php echo $price?>">
            <img
                    src="https://s1.cel.ro/images/Products/2021/08/05/Laptop-ASUS-X515MA-Intel-Celeron-N4020-256GB-SSD-4GB-FullHD-Transparent-Silver.jpg"></a>
        </div>
    </div>
    <div class="prod-info">
        <div class="prod-price">
            <div class="price">
                <span class="price-value"><?php echo $price; ?> </span>
                <span class="currency">lei</span>
            </div>
        </div>
        <span class="prod-title"> <?php  echo $name; ?> </span>
    </div>
    <a class="tocart">
        <i class="bi bi-cart2 cart-icon"></i>
        <span>Adauga in cos</span>
    </a>
    <div class="product-bottom">
        <div class="stock-status">
                                    <span>
                                        <i class="bi bi-check-circle stock-green"></i>
                                        <strong class="stock-green">In stoc</strong>
                                    </span>
        </div>
        <div class="soldby">
            <div class="sold">
                Vandut de
                <span class="special-seller">CEL.ro</span>
            </div>
        </div>
    </div>
</div>
