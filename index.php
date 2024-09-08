<?php
include './functions.php';

if (isset($_GET['lunghezza']) && $_GET['lunghezza'] !== 0) {
    $lunghezza = $_GET['lunghezza'];
    //var_dump($lunghezza);
    $newPassword = generateRandomPassword($lunghezza);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PassGenerator</title>
</head>

<body>
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <form action="index.php" method="get">
                        <div class="col-4 my-3">
                            <label for="">Scegli una lunghezza per la tua password</label>
                            <input type="number" name="lunghezza" id="lunghezza" min="3" max="15" class="form-control" placeholder="Inserisci un numero (min-3)">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Genera</button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <?php if ($lunghezza >= 3) { ?>
                                        <h1> <?php echo "La tua password è:  $newPassword" ?></h1>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>