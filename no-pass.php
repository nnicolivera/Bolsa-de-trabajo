<?php

include_once './includes/check-login.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Permisos insuficientes</title>
</head>

<body>
    <div class="container p-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="alert">
                    <div class="alert alert-warning" role="alert">
                        <h2>Permisos insuficientes para acceder a esta página.</h2>
                        <br>
                        <?php

                        if ($_SESSION['email'] == 'Admin') {
                            echo '<a href="./admin.php" class="btn btn-primary">Volver al inicio</a>';
                        } else if ($_SESSION['email'] == 'Operador') {
                            echo '<a href="./oper.php" class="btn btn-primary">Volver al inicio</a>';
                        } else if ($_SESSION['email'] == 'Visualizador') {
                            echo '<a href="./visu.php" class="btn btn-primary">Volver al inicio</a>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once './includes/footer.php'; ?>

</html>