<?php
if(false === isset($_POST['text'])) {
    header('Location: /');
    exit();
}
$text = $_POST['text'];
$words = str_word_count($text);
$symbols = strlen($text);
echo "<h2>Количество символов в введенной строке = $symbols, количество слов = $words</h2>";




