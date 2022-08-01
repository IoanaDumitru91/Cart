<?php
include 'functions.php';

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
                // test
                $grades= readCsv('csvs/grades.csv');
                $users = readCsv('csvs/users.csv');
                displayData($grades);

                foreach($users as $key => $user){
                    //var_dump(filterData($grades,'userId',$user['2']));


                $filter = filterData($grades,'userId',$user['id']);
                $users[$key]['Nota'] = $filter[0]['nota'];

                }

                displayData($users);

?>

        </div>
    </div>
</div>
</body>
</html>
