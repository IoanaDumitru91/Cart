<?php
  $prods = [
                 ['name' => 'Lenovo',
                   'price' => 12.5, 'stoc' => 125,
                   'disponibil' => true,
                     'id' => 1 ],
                    ['name' =>'Acer',
                   'price' => 120.5,
                    'stoc' => 125,
                    'disponibil' => false,
                    'id' => 2 ],

            ];


            foreach($prods as $prod) {
               echo 'Cheia este '. $prod['name'].' si valoarea este '.$prod['price']."<br>";
            }

// Sa afisam valoarea lui price in cazul in care avem 2 produse ( si mai generic n produse)


//2) Sa descoperim eroarea din csvForeach folder din functions si index ( extra points - primiti cadou)
//3 ) Sa modificam functions.php cu foreach pentru grades si users ( directorul csvFiles)
//4) Fiserele produse ( cel sau emag  - ce ati ales voi ) de modificat for cu foreach
