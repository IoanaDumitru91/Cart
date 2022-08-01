<div class="row p-3">
    <div class="breadcrumbs">

        <a href="#">Laptop,Tablete&Telefoane/</a>
        <a href="#">Laptopuri si accesorii/</a>
        <a href="#">Laptopuri Lenovo/</a>

    </div>

    <?php

       $name =  $_GET['name'];
       $price = $_GET['price'];
       $discount = $_GET['discount'];
       $newPrice = $price - ($price * $discount)/100;
       $roundedPrice = ceil($newPrice)- 0.01;
       $rata = round($roundedPrice /12,2);
       $image = $_GET['image'];
       $review = $_GET['review'];

       // '12' +12 = 1212

    ?>

    <div class="row p-3">
        <div class="description col-10"><h2 class="text-xl-left"><?php echo $name?></h2></div>
    </div>
    <div class="row sociamedia">
        <span class="codprod">Cod produs:81VS006SMH</span>
        <div class="socialmedia">
            <span><a href="#" class="fa fa-facebook"></a></span>
            <span><a href="#" class="share">Share</a></span>
        </div>
        <div class="compara">
            <input type="checkbox" title="compara"> Compara
        </div>
    </div>

</div>
<hr>

<div class="redboxrow row justify-content-around">
    <div class="redgroup col-12 col-lg-6">
        <div class="redbox1">Boxing Day</div>
        <div class="redbox2">-45%</div>
        <div class="imglaptop"><img width="100%" src="images/<?php echo $image ?>"></div>
        <div class="minilaptops">
            <a class="hov" href="#"> <img src="images/l1.jpg"></a>
            <a href="#"><img src="images/l2.JPG"></a>
            <a href="#"><img src="images/l3.JPG"></a>
            <a href="#"> <img src="images/l4.JPG"></a>
            <a href="#"><img src="images/l5.JPG"></a>
            <a href="#"><img src="images/l6.JPG"></a>
            <a href="#"><img src="images/l3.JPG"></a>
            <a href="#"> <img src="images/l3.JPG"></a>
            <a href="#"><img src="images/l3.JPG"></a>
            <a href="#"><img src="images/l4.JPG"></a>
            <a href="#"><img src="images/l2.JPG"></a>
            <a href="#"><img src="images/l3.JPG"></a>
        </div>
    </div>
    <div class="opiniagroup col-6 col-lg-3">
        <div class="opinia"><small>Opinia Clientilor</small></div>
        <div><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span></div>
        <div><?php echo $review ?> reviewuri | 8 intrebari</div>
        <div>vandut de eMag</div>
        <div class="doublebox row">
            <div class="gbox col-2"><b style="color: white;text-align: center">G</b></div>
            <div class="graybox col-10">
                <b>li vrei mâine?</b><br>
                Alege Genius și ți-l livrăm mâine<br>
                fără taxă transport,<br>
                în easybox sau prin curier!<br>
                <br>
                <a href="#"> <small>Încearcă gratuit eMAG Genius</small></a></div>
        </div>
        <div><i class="fa fa-gift" style="font-size:24px"></i>Beneficii:<br>16 puncte prin cardul eMAG-Raiffeisen
            detalii
        </div>
        <div><i class="fa fa-arrow-circle-o-down" style="font-size:24px"></i> Garantie inclusa:<a href="#"> <small>detalii</small></a>
        </div>
        <div> Persoane fizice: 36 luni<a href="#"> <small>extinde</small></a></div>
        <div> Persoane juridice: 36 luni</div>
        <div><i class="fa fa-thumbs-o-up" style="font-size:24px"></i> Extra beneficii cu eMAG Genius <a href="#">
                <small>vezi detalii</small></a></div>
    </div>
    <div class="pretgroup col-6 col-lg-3 ">
        <div class="row rowprice">
            <div class="pret1 col-8">
                <div>
                    <del><?php echo $price ?> Lei</del>
                    (- <?php echo  $discount ?>% )
                </div>
                <div style="color:red;font-weight: bold;font-size:x-large"><?php echo $roundedPrice ?>Lei</div>
                <div>
                    <br>
                    <button type="button" class="btn btn-success">in stoc</button>
                    <button type="button" class="btn btn-danger"><b>genius</b></button>
                </div>
            </div>

            <div class="rategroup col-4">
                <div>Rate lunare</div>
                <div>de la<h2><?php echo  $rata ?></h2></div>
                <div><a href="#"> vezi detalii</a></div>
            </div>
        </div>
        <hr>
        <div>Inca 3 oferte pentru acest produs</div>
        <div style="color: red"><small>de la 1.799,00 Lei</small></div>
        <div><a href="#"> <small>vezi detalii</small></a></div>
        <hr>
        <div style="color:red"><b>Grabeste-te! Inca 6 persoane se uita acum<br> la acest produs</b></div>
        <br>
        <div class="pretbuton">
            <button type="button" class="btn btn-primary btn-lg btn-block">Adauga in cos</button>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block">Adauga la favorite</button>
        </div>
        <br>
        <div class="whitebox">
            <div>Produs fara urme de utilizare, ambalaj<br> in stare buna, accesorii desigilate,<br> intacte.</div>
            <div>
                <del>1.64999 Lei</del>
            </div>
            <div style="color:greenyellow">Economisesti 80,00 Lei</div>
            <div style="color: #63ff4b"><h3>1.569,99 Lei</h3></div>
            <div><small>Vândut și livrat de eMAG<br>
                    Garantie 36 de luni<br>
                    Retur gratuit in 30 de zile</small></div>
            <br>
            <button type="button" class="btn btn-success">Cumpara resigilat</button>

        </div>
    </div>
    <hr>
</div>