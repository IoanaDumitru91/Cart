<div class="col-lg-3 col-md-4 col-sm-10">
    <div class="card">
        <div class="procent">-<?php echo $discount; ?>%</div>
        <div class="favhov"><i class="fa fa-heart-o"></i>
            <p class="tooltiptext">Adauga la favorite</p></div>
        <br>
        <a target ="_blank" href="/php03/produs.php?name=<?php echo $name?>&price=<?php echo $price?>&discount=<?php  echo $discount?>&image=<?php echo $image ?>&review=<?php echo $review ?>">
             <img class="pic" src="images/<?php echo $image ?>"/>
        </a>
        <br>
        <span class="descript"><b><?php echo $name; ?></b></span>
        <div>
            <del><?php echo $price; ?> Lei</del>
            <span style="color: grey;font-size: small"></span>(-<?php echo $discount; ?>%)
        </div>
        <?php
            $newPrice = ($price - ($price*$discount)/100);
            $roundPrice  = ceil($newPrice)-0.01;
        ?>
        <div style="color:red;font-size: x-large"><?php echo $roundPrice; ?> Lei</div>
    </div>
</div>
