<?php

session_start();

if(false === isset($_POST["name"], $_POST["surname"], $_POST["birth"])) {
    header('Location: /');
    exit();
}
$_SESSION["name"] = $_POST["name"];
$_SESSION["name"] = $_POST["name"];

if (isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["birth"]))  {
    $name = $_SESSION["name"];
    $surname = $_SESSION["surname"];
    $birth = $_SESSION["birth"];
    echo "Name: $name <br> Surname: $surname <br> Age: $birth ";
}
