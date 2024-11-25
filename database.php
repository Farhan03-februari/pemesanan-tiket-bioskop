<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "online_shop";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db-> connect_eror) {
    echo "Koneksi database rusak";
    die("eror");
}


?>