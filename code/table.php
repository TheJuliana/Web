<?php
require __DIR__ . "/vendor/autoload.php";

$client = new Google_Client();
$client->setApplicationName("Google sheets");
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
//$client->setAcsessType("offline");
$client->setAuthConfig(__DIR__ . "/credentials.json");

$service = new Google_Service_Sheets($client);

$range = "A1:B1";
$options = [
    "valueInputOption"=>"RAW"
];
$data = [
    [
        "forst",
        "secons",
    ]
];

$values = new Google_Service_Sheets_ValueRange([
    "values"=>$data
]);

$spreadsheetId = "1XirsYqZEAjLtbBqaO2ATj9OGJPKQmmKka-fY1ZKKuLk";
$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

$responce = $service->spreadsheets_values->get($spreadsheetId, $range);

var_dump($responce->getValues());