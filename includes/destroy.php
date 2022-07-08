<?php
session_start();
$_SESSION['email'] = "";
$_SESSION['password'] = "";
header('Location: ../index.php');
