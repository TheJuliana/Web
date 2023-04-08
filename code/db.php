<?php
$mysql = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf('Cannot connect to mysql server. Error code: %s', mysqli_connect_error());
    exit;
}

$mysql->query('INSERT INTO ad (email) VALUES ("email@google.com")');

if ($result = $mysql->query('SELECT * from ad')) {
    print("Emails\n");


    while ($row = $result->fetch_assoc()) {
        printf("%s \n", $row['email']);
    }

    $result->close();
}

$mysql->close();