<?php
include "Classes/BaseClass.php";
include "Classes/Maker.php";
include "Classes/Product.php";
include "Classes/ProductImage.php";


$conn = mysqli_connect('45.15.23.59','root','Sco@l@it123','national-03-ioana');


function runQuery($queryProduct) {
    global $conn;
    $query = mysqli_query($conn, $queryProduct);
    if(!$query) {
        die("MySql error on query: $queryProduct -".mysqli_error($conn));
    }
    if(is_bool($query)){
        return mysqli_insert_id($conn);
    } else {
        return $query->fetch_all(MYSQLI_ASSOC);
    }

}

function readTable ($className)
{
    $tableName= $className::TABLE_NAME;
    $sql = "SELECT * FROM $tableName;";
    return runQuery($sql);
}
function DisplayData($data)
{
    $columns = array_keys($data[0]);
    ?>
    <div class = "cards">
    <div class="card">
        <tr>
            <?php
            foreach ($columns as $column):?>
                <div>
                    <?php echo $column; ?>
                </div>
            <?php endforeach; ?>
        </tr>
        <?php
        foreach ($data as $line):
            ?>
            <div>
                <?php foreach ($line as $value): ?>
                    <div> <?php echo $value ?></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
    <?php

}


