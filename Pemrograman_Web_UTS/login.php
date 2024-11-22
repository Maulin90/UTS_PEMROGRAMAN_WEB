<?php
require 'koneksi/koneksi.php'; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if (empty($email) || empty($password)) {
        echo "<script>alert('Email dan password wajib diisi!'); window.location.href='index.html';</script>";
        exit;
    }

    $query_sql = "SELECT * FROM tabel_users WHERE email = ?";
    $stmt = $conn->prepare($query_sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) { 
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            header("Location: menu.html"); 
            exit;
        } else {
            echo "<script>alert('Password salah!'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan!'); window.location.href='login.html';</script>";
    }
} else {
    echo "<center><h1>Akses ditolak. Harap login melalui form.</h1></center>";
}
?>
