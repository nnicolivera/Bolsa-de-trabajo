<?php
include_once './includes/check-login.php';
include_once './data.php';

if (isset($_SESSION['email'])) {
    if ($_SESSION['email'] == "") {
        header('Location: login-need.php');
    } else if ($_SESSION['email'] == "Visualizador" || $_SESSION['email'] == "Admin") {
    } else {
        header('Location: no-pass.php');
    }
} else {
    header('Location: login-need.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Visualizador de datos</title>
</head>

<body>
    <?php include_once './includes/navbar.php'; ?>
    <div class="container p-5">
        <h1 class="text-center mb-3">Lista de aspirantes</h1>
        <div class="row">
            <div class="col-md-12">
                <?php
                mostrarDatos();
                ?>
            </div>
        </div>
    </div>
</body>

<script src="js/bootstrap.bundle.min.js"></script>

<?php include_once './includes/footer.php'; ?>

</html>