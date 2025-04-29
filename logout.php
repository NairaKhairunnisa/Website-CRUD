<?php
session_start(); // Mulai session
session_destroy(); // Hapus semua data session
header("Location: login.php"); // Redirect ke halaman login
exit(); // Pastikan tidak ada kode yang dieksekusi setelah redirect
?>
