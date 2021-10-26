<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: profil.php");
    exit;
}

require 'functions.php';

if(isset($_POST["login"]) ) {

    $nik = $_POST["nik"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users1 WHERE nik = '$nik'");

    // cek username 
    if(mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            // set session 
            $_SESSION["login"] = true;
            $_SESSION["nama"] = $row['nama'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["telepon"] = $row['telepon'];
            $_SESSION["nik"] = $row['nik'];

            header("Location: profil.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <!-- membuat card -->
    <div class="card">
        <!-- tampilan gambar -->
        <div class="gambar">
            <img src="gambar.jpg" >
        </div>

        <!-- tampilan form login -->
        <div class="login">    
                <h1>SIGN IN</h1>   
                
                <?php if( isset($error) ) : ?>
                    <p style="color: red; font-style: italic; position: absolute; margin-left: 15px; margin-top: -27px; font-size: 12px;">username / password salah</p>
                <?php endif; ?>

                <form action="" method="post">
                    <p>NIK:</p>
                    <label for="nik"></label>
                    <input type="text" class="text" name="nik" id="nik" placeholder="Enter your NIK"><br>
                    <p>PASSWORD:</p>
                    <label for="password"></label>
                    <input type="password" class="text" name="password" id="password" placeholder="Enter your password">
                    <p><input type="checkbox" >Remember Me</p>
                    <button type="submit" name="login">Log In</button>            
                </form>           
                <p class="keterangan"><a href="" style="color: rgb(177, 175, 175);">Lupa Password?</a></p>
                <p class="keterangan">Tidak punya akun?<a href="register.php" style="font-weight: bold; color: black;"> Daftar sekarang</a></p>  
            </div> 
    </div>
</body>
</html>