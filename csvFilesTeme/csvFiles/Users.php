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
            <?php
        //    $users = readCsv('csvs/users.csv');
          //  $users[0][] = 'Nota';
           // for($i=1; $i <count($users); $i ++) {
          //      $users[$i][] ='<a href="grades.php?userId='.$i.'">Vezi notele </a>';
          //  }

          //  displayData($users);

            $csvUsers = readCsv('csvs/users.csv');
            displayData($csvUsers);


                ?>



        </div>
    </div>
</div>
</body>
</html>
