<?php

include "functions.php";
?>

<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-12">
<!--            --><?php
//
//               $products = readCsv('data/produse.csv');
//               $products[0][0] = 'Nr Crt';
//               $products[0][4] = 'Categorie';
//              for($i=1; $i <count($products); $i ++) {
//                  $products[$i][4] ='<a href="categories.php?categoryId='.$products[$i][4].'">Vezi categoria </a>';
//              }
//
//               displayData($products);
//
//            ?>

<!--            --><?php
//            $prods = [
//                  'name' => 'Lenovo',
//                    'price' => 12.5,
//                    'stoc' => 125,
//                    'disponibil' => true,
//                    'id' => 1
//
//            ];
//
//         //   echo $prods[$index]['price'];
//
//            //$prods[$index] = produs
//             //displayData($prods);
//            foreach($prods as $key => $value) {
//                echo 'Cheia este '. $key.' si valoarea este '.$value."<br>";
//            }
//
//            ?>
            <?php
            $categories= readCsv('data/categories.csv');
            $products = readCsv('data/produse.csv');
            displayData($categories);
            foreach($categories as $key => $category){
              //  var_dump(filterData($products,'categoryId',$category['id']));
                $categories[$key]['Product Count'] = count(filterData($products,'categoryId',$category['id']));
            }

            displayData($categories);


            ?>


        </div>
    </div>
</div>
</body>
</html>
