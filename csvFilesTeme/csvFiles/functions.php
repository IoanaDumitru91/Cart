<?php
function readCsv ($filename) {
    $data= [];
    if(!file_exists($filename)) {
        return $data;
    }

    $handle =fopen($filename, 'r');
    $header = fgetcsv($handle,1000,',');
   // var_dump(count($header));

    while(($line = fgetcsv($handle, 1000, ',')) !==FALSE) {
        //var_dump(count($line));
       $combined =  array_combine($header, $line);


        $data[] = $combined;
    }
    fclose($handle);
    return $data;
}

function displayData($data) {
    $linesCount = count($data);
    $columns = array_keys($data[0]);
    ?>

    <table class="table">
        <tr>
            <?php
            foreach ($columns as $column):?>
                <th>
                    <?php  echo $column ;?>
                </th>
            <?php  endforeach;?>
        </tr>
        <?php
        foreach ($data as $line):
            ?>
            <tr>
                <?php foreach($line as $value): ?>
                    <td> <?php

                        echo $value ?></td>
                <?php endforeach;?>
            </tr>
        <?php endforeach;?>
    </table>
    <?php
}
?>

<?php
function filterData($data,$filterColumn, $filterValue){
    $filteredData = [];
    foreach ($data as $line) {
        if (strtolower($line[$filterColumn]) == $filterValue) {
            $filteredData[] = $line;
           // var_dump($filteredData);
        }
    }
    return $filteredData;
}
