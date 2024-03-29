<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "booklist";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Database failed");
}

// Connection mg lah jim
