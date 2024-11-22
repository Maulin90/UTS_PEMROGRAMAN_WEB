<?php
require 'koneksi/koneksi.php';


$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$email    = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if ($fullname && $username && $email && $password) {
    $query_sql = "INSERT INTO tabel_users (fullname, username, email, password) 
                  VALUES ('$fullname', '$username', '$email', '$password')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: login.html"); 
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($conn);
    }
} else {
    echo "Pendaftaran Gagal: Data tidak lengkap!";
}
?>
