<?php

if(false === isset($_POST["email"], $_POST["category"],  $_POST["header"], $_POST["text"])) {
    header('Location: /');
    exit();
}
$email=$_POST["email"];
$category=$_POST["category"];
$category = str_replace( "\'", "",$category);

$header=$_POST["header"];
$text=$_POST["text"];


$filepath="Categories/{$category}/{$header}.txt";

if (false === file_put_contents($filepath, $text)) {
    throw new Exception("Cannot upload file");
}
chmod($filepath, 0777);
function redirect_to_Home() : void {
    header('Location: /third_task.php?');
    exit();
}

redirect_to_Home();
