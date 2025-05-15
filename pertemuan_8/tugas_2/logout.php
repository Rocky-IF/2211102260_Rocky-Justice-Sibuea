<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Hapus cookie jika ada
if (isset($_COOKIE['remember_me'])) {
    setcookie('remember_me', '', time() - 3600, '/'); // Set waktu expired ke masa lalu
}

// Redirect ke halaman login
header("Location: login.php");
exit();
?>