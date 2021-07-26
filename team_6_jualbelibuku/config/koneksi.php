<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_jual_beli_buku";

$kon = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
    echo "Connected". mysqli_connect_error();
}
?>