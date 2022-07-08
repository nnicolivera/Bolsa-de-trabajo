<?php
session_start();

function checkLogin()
{
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if ($_POST['email'] == "Admin" && $_POST['password'] == "admin123") {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: ../admin.php');
        } else if ($_POST['email'] == "Operador" && $_POST['password'] == "oper123") {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: ../oper.php');
        } else if ($_POST['email'] == "Visualizador" && $_POST['password'] == "visu123") {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: ../visu.php');
        } else {
            header('Location: ../login-need.php');
        }
    }
}

checkLogin();
