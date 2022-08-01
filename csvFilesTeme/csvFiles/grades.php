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
<div class="container">
    <div class="row">
        <?php
           $grades = readCsv('csvs/grades.csv');
       //    die($grades);
           $users = readCsv('csvs/users.csv');
         //  var_dump($users);
           $userId = $_GET['userId'];
           var_dump($grades[$userId]);
        ?>
        <h1> Notele elevului <?php echo $grades ?> </h1>

        <?php
           $filteredGrades = filterData($grades,$userId,2);
           displayData($filteredGrades);

        ?>

    </div>

</div>
</body>
</html>