<?php
session_start();
include "db-todo-list.php";
if (isset($_POST["add"])) {
    $text =  $_POST["text"];

    $_SESSION["text"] =  $text;

    if (empty($text)) {
        $_SESSION["error"] = " ";
        header("location: todo-list.php");

    } else {
        $insertSQL = "insert into todolist (text)
         values ('$text')";
        $insertQuery = mysqli_query($connect, $insertSQL);
        if ($insertQuery) {
            header("location: todo-list.php");
        }
    }
}
