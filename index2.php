<?php 
session_start();

if(isset($_SESSION["LOGIN"])){
  header("Location: login.php");
  exit;
}

 ?>
 <!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login </title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Siswa . Aplikasi pembayaran SPP</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="body">
        <div class="container">
            <form action="proses-login-petugas.php" method="post">

                <h2>LOGIN ADMIN / PETUGAS</h2>
                <label>Username </label>
                <br>
                  <input type="text" name="username" class="form-control" placeholder="Masukan username Anda..." required>              
              <br>
               <label>Password</label>
               <br>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda..." required>
                <br>
                <button type="submit" class="btn btn-primary">login</button>                

                 <a href="index.php">Login Sisiwa</a>
                </p>
            </form>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>