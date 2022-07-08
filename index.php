<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body class="login-wall">
    <div class="container p-5 text-center">
        <br>
        <div class="row">
            <div class="col-md-4 p-5 offset-md-4 card-blurry">
                <h4><strong>Por favor, inicie sesión.</strong></h4>
                <hr>
                <img src="img/person.png" alt="" width="150">
                <form action="includes/check-login.php" method="post">
                    <label class="form-label" for="email"></label>
                    <input class="form-control" type="text" name="email" placeholder="Correo electrónico:" required>
                    <br>
                    <label class="form-label" for="password"></label>
                    <input class="form-control" type="password" name="password" placeholder="Contraseña:" required>
                    <br>
                    <input class="form-control btn btn-success" type="submit" value="Iniciar sesión">
                </form>
            </div>
        </div>
    </div>

</body>

</html>