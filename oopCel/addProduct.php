<?php
include 'functions.php';
?>

<html>
<?php include 'parts/head.php'; ?>
<body>
<div class="container">
    <?php include 'parts/searchBar.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h2>Adauga produs</h2>
            <form action="processAddProduct.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width:8%;">Nume </span>
                    <input name="nume" type="text" class="form-control" placeholder="Nume" aria-label="Nume" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width:8%;">Pret</span>
                    <input name="pret" type="text" class="form-control" placeholder="Pret" aria-label="Pret" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width:8%;">Rezolutie</span>
                    <input name="rezolutie" type="text" class="form-control" placeholder="Rezolutie" aria-label="Rezolutie" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width:8%;">Tip display</span>
                    <select name="display" class="form-control">
                        <option> HD </option>
                        <option> Ultra HD  </option>
                    </select>

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="width:8%;">Diagonala</span>
                    <input name="diagonala" type="text" class="form-control" placeholder="Diagonala" aria-label="Diagonala" aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-primary">Salveaza</button>
                <button type="submit" class="btn btn-secondary">Anuleaza</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
