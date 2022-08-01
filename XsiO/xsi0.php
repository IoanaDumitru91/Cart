<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<?php
$m= 3 ; // linii
$n = 5 ; // coloanele
$table = [
   [ '⚽','⚾','⚽'],
   ['⚽','⚽','⚽'],
    ['⚾','⚽','⚾']
   ];
$winner = false;

// verificarea pe linii

for($i=0; $i<3; $i++) {
   if($table[$i][0]== $table[$i][1] && $table[$i][1] ==$table[$i][2] ) {
       $winner = $table[$i][0];
       $place ='linia';
       $position = $i+1;
   }
}

// verificare pe coloane

for($i=0; $i<3; $i++) {
    if($table[0][$i]== $table[1][$i] && $table[1][$i] ==$table[2][$i] ) {
        $winner = $table[0][$i];
        $place ='coloana';
        $position = $i+1;
    }
}

// verificare diagonala princiapal

if($table[0][0] == $table[1][1] && $table[1][1] == $table[2][2]) {
    $winner= $table[0][0];
    $place = 'diagonala';
    $position = "principala";

}

// verificarea pe diagonala secundara

if($table[0][2] == $table[1][1] && $table[1][1] == $table[2][0]) {
    $winner= $table[0][2];
    $place = 'diagonala';
    $position = "secundara";
}

// TEMA  :   Creati jocul connect 4,  $nrColoaone =  7 , $nrLinii= 6;
// be placed 4-in-a-row vertically, horizontally, or diagonally in order for a player to claim a win.

?>
<div class="container">
    <div  class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <table class="table table-bordered " style="font-size: 42px; text-align: center;margin-top:30px;">
                <?php for($i=0; $i < count($table); $i++): ?>
                    <tr>
                     <?php for($j=0; $j < count($table); $j++): ?>
                    <td
                        <?php if($winner && $place=='linia'&& $i == $position -1): ?>
                        style="background-color:#34eba1;"
                        <?php endif;?>
                        <?php if($winner && $place=='coloana' && $j== $position-1): ?>
                        style="background-color: #eb34c0;"
                        <?php endif; ?>
                        <?php if($winner && $place=='diagonala' &&  $position =='principala' && $i==$j): ?>
                            style="background-color: #3492eb;"
                        <?php endif; ?>
                        <?php if($winner && $place=='diagonala' &&  $position =='secundara' && $j== 2-$i): ?>
                            style="background-color: #ebe534;"
                        <?php endif; ?>
                    >
                        <?php echo $table[$i][$j]?>

                        </td>
                  <?php endfor; ?>
                </tr>
               <?php endfor;?>

            </table>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <?php if($winner): ?>
            <div class="alert alert-success" role="alert">
                A castigat <?php echo $winner ?> pe <?php echo $place ?> <?php echo $position ?>
            </div>
            <?php else: ?>
            <div class="alert alert-danger" role="alert">
             Nu a castigat nimeni!
            </div>
           <?php endif;?>
        </div>
        <div class="col-4"></div>
    </div>
</div>
</body>
</html>







