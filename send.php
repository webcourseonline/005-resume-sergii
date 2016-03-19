<?php

error_reporting(0);

if (isset($_GET['to']) && isset($_GET['to']) && isset($_GET['to'])){
    header("Content-Type: application/json");
    $result = mail($_GET['to'], $_GET['subject'], $_GET['body']);
} else {
    $result = "E: variables not set";
}

echo $_GET['callback'] . '(' . "{'result' : '{$result}'}" . ')';