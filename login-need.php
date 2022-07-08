<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Debe iniciar sesión</title>
</head>

<body>
    <div class="container p-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="alert">
                    <div class="alert alert-danger" role="alert">
                        <h2>Prohibido el acceso a personas sin sesión.</h2>
                        <p>Por favor, debe iniciar sesión para poder acceder.</p>
                        <a class="btn btn-primary" href="index.php">Ir al login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include_once './includes/footer.php'; ?>

</html>