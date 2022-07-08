<?php
include_once './includes/check-login.php';
include_once './data.php';

if (isset($_SESSION['email'])) {
    if ($_SESSION['email'] == "") {
        header('Location: login-need.php');
    } else if ($_SESSION['email'] != "Admin") {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Administrador</title>
</head>

<body>
    <?php include_once './includes/navbar.php'; ?>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">
                <h1 class="text-center">Registro</h1>
                <br>
                <form action="data.php" method="post">
                    <label class="form-label">Cédula de Identidad:</label>
                    <input class="form-control" type="number" required name="ci">
                    <br>
                    <label class="form-label">Nombre:</label>
                    <input class="form-control" type="text" required name="name">
                    <br>
                    <label class="form-label">Apellido:</label>
                    <input class="form-control" type="text" required name="lastname">
                    <br>
                    <label class="form-label">Dirección</label>
                    <input class="form-control" type="text" required name="address">
                    <br>
                    <label class="form-label">Teléfono:</label>
                    <input class="form-control" type="tel" required name="phone">
                    <br>
                    <label class="form-label">Formación académica:</label>
                    <textarea class="form-control" name="studies" cols="20" rows="6" required></textarea>
                    <br>
                    <label class="form-label">Experiencia laboral:</label>
                    <textarea class="form-control" name="experience" cols="20" rows="6" required></textarea>
                    <br>
                    <input class="btn btn-outline-success form-control" type="submit" value="Registrar">
                </form>
            </div>

            <div class="col-md-8 space">
                <h1 class="text-center">Lista de aspirantes</h1>
                <br><br>
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