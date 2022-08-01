<div class="col-lg-2 col-md-4 col-sm-10">
    <div class="card">
        <div class="procent">-30%</div>
        <div class="favhov"><i class="fa fa-heart-o"></i>
            <p class="tooltiptext">Adauga la favorite</p></div>
        <br>
        <a href="#"> <img class="pic" src="images/recom.JPG"></a>
        <br>
        <span class="descript"><b><?php echo $name ; ?></b></span>
        <div>
            <del><?php  echo $price ; ?></del>
            <span style="color: grey;font-size: small"></span>(<?php echo $discount.'%' ; ?>)
        </div>
      <?php
         $newPrice = $price - ($price * $discount / 100);

      ?>

        <div style="color:red;font-size: x-large"><?php  echo round($newPrice, 2) ; ?> Lei</div>
    </div>
</div>