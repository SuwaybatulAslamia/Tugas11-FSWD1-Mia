<?php
// Mulai sesi
session_start();

// Cek apakah tombol login telah ditekan
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Contoh validasi sederhana
    if($email == 'mia28@gmail.com' && $password == '1234567') {
        // Jika email dan password benar, arahkan pengguna ke halaman selanjutnya
        $_SESSION['email'] = $email; // Simpan informasi pengguna dalam sesi
        header(Location: 'product-responsive.php'); 
        exit(); // Hentikan eksekusi skrip
    } else {
        // Jika email atau password salah, beri tahu pengguna
        echo "Email atau password salah. Silakan coba lagi.";
    }
}
?>
