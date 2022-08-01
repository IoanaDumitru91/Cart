<?php
function readCsv ($filename) {
    $data= [];
    if(!file_exists($filename)) {
        return $data;
    }

    $handle =fopen($filename, 'r');
    $header = fgetcsv($handle,1000,',');
    while(($line = fgetcsv($handle, 1000, ',')) !==FALSE) {
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
                  <td> <?php echo $value ?></td>
                  <?php endforeach;?>
               </tr>
               <?php endforeach;?>
         </table>
<!--    <table>-->
<!--        <tr>-->
<!--          <th> Nr Crt</th>-->
<!--            --><?php //for($col=0; $col< $colCount; $col++):  ?>
<!--                <th> --><?php //echo $data[0][$col] ?><!--</th>-->
<!--            --><?php //endfor;?>
<!--        </tr>-->
<!--        --><?php // for($row=1; $row <$productCount; $row++): ?>
<!--            <tr>-->
<!--              <td> -->--><?php ////echo $row ?><!--</td>-->
<!--                --><?php // for($col=0; $col< $colCount; $col++):?>
<!--                    <td> --><?php // echo $data[$row][$col];?><!--</td>-->
<!--                --><?php //endfor;?>
<!--            </tr>-->
<!--        --><?php //endfor;?>
<!--    </table>-->
<?php
}
 function filterData($data,$filterColumn, $filterValue) {
  //  var_dump($data);
    var_dump($filterColumn);
//
   //var_dump($filterValue);
    $filteredData =[];
    foreach ($data as $line ) {
        if(strtolower($line[$filterColumn]) == $filterValue) {
            $filteredData[] = $line;
        }
    }
//     $filteredData[] = $data[0];
//     var_dump($filteredPosition);
//     for($index=1; $index<count($data); $index++){
//         // index  = 1
//         if(strtolower($data[$index][$filteredPosition]) == $filterValue) {
//             $filteredData[] = $data[$index];
//         }
//     }
     return $filteredData;
 }
