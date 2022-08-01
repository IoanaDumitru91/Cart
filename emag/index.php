<?php
$products=[];
$handle=fopen('products.csv','r');
while(($line = fgetcsv($handle,0,';')) !== FALSE) {
    $products[]=$line;
}
fclose($handle);
$rowCount = count($products);
$colCount = count($products[0]);


?>
    <html>
    <head>
        <title>Emag Php</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <?php  for($row=0; $row <$rowCount; $row++): ?>
                    <tr>
                        <?php for ($col=0; $col<$colCount;$col++):?>
                            <td>
                         <?php  echo  $products[$row][$col]?>
                            </td>
                        <?php endfor;?>
                    </tr>
                    <?php endfor;?>
                </table>
            </div>
        </div>
    </div>

    </body>
    </html>