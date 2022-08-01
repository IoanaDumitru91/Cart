<?php

function readCsv($filename){
    $products = [];
    if (!file_exists($filename)) {
        return $products;
    }

    $handle = fopen($filename, 'r');
    while (($line = fgetcsv($handle, 0)) !== FALSE) {
        $products[] = $line;
    }
    fclose($handle);

    return $products;
}

function displayData($data) {
    $productCount = count($data);
    $colCount = count($data[0]);
    ?>

    <table class="table">
        <tr>
            <th> Nr Crt</th>
            <?php for($col=0; $col< $colCount; $col++):  ?>
                <th> <?php echo $data[0][$col] ?></th>
            <?php endfor;?>
        </tr>
        <?php  for($row=1; $row <$productCount; $row++): ?>
            <tr>
                <td> <?php echo $row ?></td>
                <?php  for($col=0; $col< $colCount; $col++):?>
                    <td> <?php  echo $data[$row][$col];?></td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
    <?php
}
?>

<?php
    function filterData($data,$filterValue, $filteredPosition){
        $filteredData = [];
        $filteredData[] = $data[0];
        for ($index=1; $index<count($data); $index++){
            if($data[$index][$filteredPosition] == $filterValue){
                $filteredData[] = $data[$index];
            }
        }
    return $filteredData;
    }
