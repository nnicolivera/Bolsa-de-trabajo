<nav class="navbar navbar-expand-lg bg-gray">
    <div class="container-fluid">
        <img class="navbar-brand" src="./img/logo.png" alt="" width="100">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./admin.php"><strong>ADMINISTRADOR</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./oper.php"><strong>OPERADOR</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./visu.php"><strong>VISUALIZADOR</strong></a>
                </li>
            </ul>
            <form action="./includes/destroy.php" method="post">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Cerrar sesión</button>
            </form>
        </div>
    </div>
</nav>