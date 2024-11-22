<?php
$host     = "localhost"; 
$username = "root";      
$password = "";          
$dbname   = "db_users"; 

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>
