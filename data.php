<?php
include_once './includes/check-login.php';

function registrarDatos()
{
    if (isset($_POST['ci'])) {
        if (!isset($_SESSION['data'])) {
            $_SESSION['data'] = [];
        }
        $persona = array($_POST['ci'], $_POST['name'], $_POST['lastname'], $_POST['address'], $_POST['phone'], $_POST['studies'], $_POST['experience']);
        array_push($_SESSION['data'], $persona);
        if ($_SESSION['email'] == "Admin") {
            header('Location: ./admin.php');
        } else if ($_SESSION['email'] == "Operador") {
            header('Location: ./oper.php');
        }
    }
}
registrarDatos();

function mostrarDatos()
{
    if (isset($_SESSION['data'])) {
        echo "<div class='table-responsive mt-2'>";
        echo "<table class='table table-hover table-bordered border-dark'>";
        echo "<thead class='bg-white'>";
        echo "<tr>";
        echo "<th>Cédula de Identidad</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Dirección</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Formación académica</th>";
        echo "<th>Experiencia laboral</th>";
        echo "</tr>";
        echo "</thead>";

        foreach ($_SESSION['data'] as $value) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $value[0] . "</td>";
            echo "<td>" . $value[1] . "</td>";
            echo "<td>" . $value[2] . "</td>";
            echo "<td>" . $value[3] . "</td>";
            echo "<td>" . $value[4] . "</td>";
            echo "<td>" . $value[5] . "</td>";
            echo "<td>" . $value[6] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "<h5 class='text-center text-secondary'>Aún no hay datos para mostrar</h5>";
    }
}
