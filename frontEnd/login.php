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
            <form action="">
                <p>ID:</p>
                <input type="text" class="text" placeholder="Enter your ID"><br>
                <p>PASSWORD:</p>
                <input type="password" class="text" placeholder="Enter your password">
                <p><input type="checkbox" >Remember Me</p>
                <button><a href="profil.php" style="color:white">Log In</a></button>            
            </form>           
            <p class="keterangan"><a href="" style="color: rgb(177, 175, 175);">Lupa Password?</a></p>
            <p class="keterangan">Tidak punya akun?<a href="register.php" style="font-weight: bold; color: black;"> Daftar sekarang</a></p>  
        </div> 
    </div>
</body>
</html>