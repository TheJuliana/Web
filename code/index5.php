<?php
require __DIR__ . "/vendor/autoload.php";

if(false === isset($_POST["email"], $_POST["category"],  $_POST["header"], $_POST["text"])) {
    header('Location: /');
    exit();
}

$client = new Google_Client();
$client->setApplicationName("Google sheets");
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig(__DIR__ . "/credentials.json");

$service = new Google_Service_Sheets($client);

$email=$_POST["email"];
$category=$_POST["category"];
$category = str_replace( "\'", "",$category);
$header=$_POST["header"];
$text=$_POST["text"];

$options = [
    "valueInputOption"=>"RAW"
];

$data = [
    [
        $email,
        $category,
        $header,
        $text,
    ]
];

$values = new Google_Service_Sheets_ValueRange([
    "values"=>$data
]);

$spreadsheetId = "1XirsYqZEAjLtbBqaO2ATj9OGJPKQmmKka-fY1ZKKuLk";

$result = $service->spreadsheets_values->get($spreadsheetId, 'A:D');
$rows = $result->getValues();
$i = $rows ? count($rows) + 1 : 1;
$range="A$i:D$i";

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);


$responce = $service->spreadsheets_values->get($spreadsheetId, $range);


//-------------from LAB3------------
/*$filepath="Categories/{$category}/{$header}.txt";

if (false === file_put_contents($filepath, $text)) {
    throw new Exception("Cannot upload file");
}
chmod($filepath, 0777);*/
function redirect_to_Home() : void {
    header('Location: /third_task.php?');
    exit();
}

redirect_to_Home();
