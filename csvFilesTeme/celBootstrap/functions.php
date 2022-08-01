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
