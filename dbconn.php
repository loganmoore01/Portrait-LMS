<?php

$sname = "localhost";
$dbUname = "root";
$dbPass = "root";
$dbName = "portraitlms";

$conn = mysqli_connect($sname, $dbUname, $dbPass, $dbName);

if (!$conn) {
    echo "Failed to connect to database";
}