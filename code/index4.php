<?php

session_start();

if(false === isset($_POST["name"], $_POST["surname"], $_POST["age"], $_POST["money"], $_POST["phone"])) {
    header('Location: /');
    exit();
}

$_SESSION = $_POST;

echo "<ul>";
foreach ($_SESSION as& $item) {
    echo "<li>$item</li>";
}
echo "</ul>";