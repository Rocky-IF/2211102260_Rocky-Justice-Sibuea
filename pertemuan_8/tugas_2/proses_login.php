<?php
session_start();

// Kredensial user (dalam praktik nyata, seharusnya disimpan di database)
$user = "rocky";
$pass = "cukurukuk69";

// Cek apakah username dan password cocok
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
        // Login berhasil
        $_SESSION['username'] = $_POST['username'];
        
        // Jika remember me dicentang, buat cookie
        if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
            // Set cookie untuk 30 hari
            setcookie('remember_me', $_POST['username'], time() + (86400 * 30), "/");
        }
        
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Jika form tidak lengkap
    header("Location: login.php");
    exit();
}
?>