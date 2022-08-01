<?php
session_start();

if(!isset($_SESSION['currentValue']) || (isset($_GET['action']) && $_GET['action'] == 'clear')){
    $_SESSION['currentValue']=0;
}

if(isset($_GET['number'])) {
    $_SESSION['currentValue'] = $_SESSION['currentValue'] *10 + $_GET['number'];
}

if(isset($_GET['operand'])){
    $_SESSION['operand'] = $_GET['operand'];
    $_SESSION['previousValue'] = $_SESSION['currentValue'];
    $_SESSION['currentValue'] = 0;
}

if(isset($_GET['action']) && $_GET['action']=='result') {
    switch( $_SESSION['operand'] ) {
        case 'add': $_SESSION['currentValue']= $_SESSION['previousValue']+ $_SESSION['currentValue'] ; break;
        case 'diff':$_SESSION['currentValue']=  $_SESSION['previousValue'] - $_SESSION['currentValue'] ; break;
        case 'multiply':$_SESSION['currentValue']=$_SESSION['previousValue'] * $_SESSION['currentValue'] ; break;
        case 'divide': $_SESSION['currentValue']= $_SESSION['previousValue'] /$_SESSION['currentValue']; break;

    }
}


var_export($_SESSION);
$currentValue = $_SESSION['currentValue'];

?>

<html>

<?php
include "head.php";
?>

<body>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <table class="table table-bordered">
                <tr>
                    <td colspan="3" style ="text-align: right;"><?php echo $currentValue ?></td>

                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="?number=7">7</a></td>
                    <td><a class="btn btn-primary" href="?number=8">8</a></td>
                    <td><a class="btn btn-primary" href="?number=9">9</a></td>
                    <td><a class="btn btn-primary" href="?operand=multiply">x</a></td>
                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="?number=4">4</a></td>
                    <td><a class="btn btn-primary" href="?number=5">5</a></td>
                    <td><a class="btn btn-primary" href="?number=6">6</a></td>
                    <td><a class="btn btn-primary" href="?operand=diff">-</a></td>
                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="?number=1">1</a></td>
                    <td><a class="btn btn-primary" href="?number=2">2</a></td>
                    <td><a class="btn btn-primary" href="?number=3">3</a></td>
                    <td><a class="btn btn-primary" href="?operand=add">+</a></td>
                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="?action=result">=</a></td>
                    <td><a class="btn btn-primary" href="?number=0">0</a></td>
                    <td><a class="btn btn-primary" href="?action=clear">C</a></td>
                    <td><a class="btn btn-primary" href="?operand=divide">/</a></td>
                </tr>
            </table>

        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>

</html>
