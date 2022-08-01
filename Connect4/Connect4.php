<?php
//TEMA: Creati jocul connect 4, $nrColoane = 7;, $nrLinii = 6;
// be placed 4-in-a-row vertically, horizontally or diagonally in order for a player to claim a win.
?>

<html>
<head>
    <title>Connect 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<?php

$table = [
    ['⚪', '⚪', '⚪', '⚪', '⚫', '⚪', '⚫'],
    ['⚫', '⚪', '⚫', '⚪', '⚫', '⚫', '⚪'],
    ['⚫', '⚫', '⚫', '⚪', '⚪', '⚪', '⚫'],
    ['⚪', '⚪', '⚪', '⚫', '⚪', '⚪', '⚪'],
    ['⚫', '⚫', '⚫', '⚪', '⚪', '⚪', '⚫'],
    ['⚫', '⚪', '⚫', '⚪', '⚫', '⚫', '⚪']
];

$winner = false;

// verificarea pe linii
for ($i = 0; $i < 6; $i++) {
    if ($table[$i][0] == $table[$i][1] && $table[$i][1] == $table[$i][2] && $table[$i][2] == $table[$i][3] || $table[$i][1] == $table[$i][2] && $table[$i][2] == $table[$i][3] && $table[$i][3] == $table[$i][4] ||
        $table[$i][2] == $table[$i][3] && $table[$i][3] == $table[$i][4] && $table[$i][4] == $table[$i][5] || $table[$i][3] == $table[$i][4] && $table[$i][4] == $table[$i][5] && $table[$i][5] == $table[$i][6]){
        $winner = $table[$i][0];
        $place = 'linia';
        $position = $i+1 ;
    }
}


// coloana
for ($i = 0; $i < 5; $i++) {
    if ($table[0][$i] == $table[1][$i] && $table[1][$i] == $table[2][$i] && $table[2][$i] == $table[3][$i] || $table[1][$i] == $table[2][$i] && $table[2][$i] == $table[3][$i] && $table[3][$i] == $table[4][$i]||
        $table[2][$i] == $table[3][$i] && $table[3][$i] == $table[4][$i] && $table[4][$i] == $table[5][$i]){
        $winner = $table[0][$i];
        $place = 'coloana';
        $position = $i+1;
    }
}

//prima diagonala
if ($table[2][0] == $table[3][1] && $table[3][1] == $table[4][2] && $table[4][2] == $table[5][3] || $table[1][0] == $table[2][1] && $table[2][1] == $table[3][2] && $table[3][2] == $table[4][3] ||
    $table[2][1] == $table[3][2] && $table[3][2] == $table[4][3] && $table[4][3] == $table[5][4] || $table[0][0] == $table[1][1] && $table[1][1] == $table[2][2] && $table[2][2] == $table[3][3] ||
    $table[1][1] == $table[2][2] && $table[2][2] == $table[3][3] && $table[3][3] == $table[4][4] || $table[2][2] == $table[3][3] && $table[3][3] == $table[4][4] && $table[4][4] == $table[5][5] ||
    $table[0][1] == $table[1][2] && $table[1][2] == $table[2][3] && $table[2][3] == $table[3][4] || $table[1][2] == $table[2][3] && $table[2][3] == $table[3][4] && $table[3][4] == $table[4][5] ||
    $table[2][3] == $table[3][4] && $table[3][4] == $table[4][5] && $table[4][5] == $table[5][6] || $table[0][2] == $table[1][3] && $table[1][3] == $table[2][4] && $table[2][4] == $table[3][5] ||
    $table[1][3] == $table[2][4] && $table[2][4] == $table[3][5] && $table[3][5] == $table[4][6] || $table[0][3] == $table[1][4] && $table[1][4] == $table[2][5] && $table[2][5] == $table[3][6]
) {
    $winner = $table[0][0];
    $place = "diagonala";
    $position = "prima";
}

//diagonala a doua
if ($table[0][3] == $table[1][2] && $table[1][2] == $table[2][1] && $table[2][1] == $table[3][0] || $table[0][4] == $table[1][3] && $table[1][3] == $table[2][2] && $table[2][2] == $table[3][1] ||
    $table[1][3] == $table[2][2] && $table[2][2] == $table[3][1] && $table[3][1] == $table[4][0] || $table[0][5] == $table[1][4] && $table[1][4] == $table[2][3] && $table[2][3] == $table[3][2] ||
    $table[1][4] == $table[2][3] && $table[2][3] == $table[3][2] && $table[3][2] == $table[4][1] || $table[2][3] == $table[3][2] && $table[3][2] == $table[4][1] && $table[4][1] == $table[5][0] ||
    $table[0][6] == $table[1][5] && $table[1][5] == $table[2][4] && $table[2][4] == $table[3][3] || $table[1][5] == $table[2][4] && $table[2][4] == $table[3][3] && $table[3][3] == $table[4][2] ||
    $table[2][4] == $table[3][3] && $table[3][3] == $table[4][2] && $table[4][2] == $table[5][1] || $table[1][6] == $table[2][5] && $table[2][5] == $table[3][4] && $table[3][4] == $table[4][3] ||
    $table[2][5] == $table[3][4] && $table[3][4] == $table[4][3] && $table[4][3] == $table[5][2] || $table[2][6] == $table[3][5] && $table[3][5] == $table[4][4] && $table[4][4] == $table[5][3]
) {
    $winner = $table[0][5];
    $place = "diagonala";
    $position = "a doua";
}

?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <table class="table table-bordered;" style="font-size: 50px; text-align: center; margin-top:30%">
                <?php for ($i = 0; $i < count($table); $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 7; $j++): ?>
                            <td
                                <?php if ($winner && $place == 'linia' && $i == $position - 1): ?>
                                    style="background-color: #a9fc03;"
                                <?php endif; ?>
                                <?php if ($winner && $place == 'coloana' && $i == $position - 1): ?>
                                    style="background-color: #03f4fc;"
                                <?php endif; ?>
                                <?php if ($winner && $place == 'diagonala' && $position== 'prima' ): ?>
                                    style="background-color: #a9fc03;"
                                <?php endif; ?>
                                <?php if ($winner && $place == 'diagonala' && $position== 'a doua' && $j == 7-($i-1)): ?>
                                    style="background-color: #03f4fc;"
                                <?php endif; ?>
                            >
                                <?php echo $table[$i][$j] ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <?php if ($winner): ?>
                <div class="alert alert-success" role="alert" style= "width: 145%;">
                    <h4> A castigat <?php echo $winner ?> pe <?php echo $place ?> <?php echo $position ?>!</h4>
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert" style= "width: 145%;">
                    <h4>Nu a castigat nimeni!</h4>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>

</body>
</html>








