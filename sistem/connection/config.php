<?php

/*$servername = "localhost";
$user = "codeviab_maker"; //server: codeviab_thesis
$pass = "Unimaker1234!"; //server: Thesis1234
$dbname = "codeviab_unimaker"; //server: codeviab_thesis
$port = 8889;*/

$servername = "localhost";
$user = "root"; //server: codeviab_thesis
$pass = ""; //server: Thesis1234
$dbname = "health"; //server: codeviab_thesis
$port = 21;


$db = mysqli_connect($servername,$user,$pass,$dbname);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
