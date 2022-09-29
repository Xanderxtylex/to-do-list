<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "todo-list";

$connect = mysqli_connect($host, $username, $password, $dbName);
if (!$connect) {
    echo "database error";
}
