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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/login-layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login BlueBloom Delight Store</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Log In Start your Session</header>
                   <form action="product-responsive.php" method="post"> <!-- Form untuk mengirim data login ke file PHP -->
                       <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                       <div class="input-field">
                            <input type="password" class="input" id="pass" name="password" required="">
                            <label for="pass">Password</label>
                        </div> 
                       <div class="input-field">
                        <form action="product-responsive.php" method="post"><input type="submit" class="submit" name="login" value="Log In"></a>
                       </div>
                   </form>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>
