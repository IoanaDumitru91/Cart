<?php
$file = fopen('csvs/users.csv', "r");
while(($row = fgetcsv($file, 0, ";"))!== FALSE) {
    // prima data verifica conditia , daca conditia este adevarata => executa codul din body-ul instrucituntiunii
    $users[] = $row; //  daca nu => nu executa codul din body-ul instructiunii ;
}   // sfarsit instructiune
//$row = fgetcsv($fp, 0, ";");
// do {                                       // prima si prima data executa blocul de cod
//
//     $users[] = $row;
// }while($row!== FALSE);   // verifica conditia , daca conditia este adevarata = > executa codul din body ;  daca nu este adevarata  =>  se opreste din executie

fclose($file);

//

//var_dump($users[0]);

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
            <table class="table">
               <?php
                  $rowCount = count($users);
                   $colCount = count($users[0]);
                 ?>
                <tr>
                    <th> Nr Crt</th>
                    <?php

//                        foreach($users[0] as $user) {
//                            echo "<th>".$user."</th>";
//                        }
                    for($col =0; $col<$colCount; $col ++): ?>
                    <th><?php echo $users[0][$col]  ?> </th>

                   <?php endfor; ?>
                </tr>
                <?php for($row=1; $row<$rowCount; $row++):?>
                    <tr>
                        <td> <?php echo $row ?></td>
                        <?php for($col=0; $col<$colCount; $col++) :?>
                        <td>
                            <?php echo $users[$row][$col]?>
                        </td>
                        <?php endfor?>

                    </tr>
                <?php endfor ;?>
            </table>

        </div>
    </div>
</div>
</body>
</html>
