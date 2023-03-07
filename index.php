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
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Siswa . Aplikasi pembayaran SPP</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="body">
        <div class="container">
            <form action="proses-login-siswa.php" method="post">

                <h2>LOGIN SISWA</h2>

                <label>NISN</label>
                <br>
                <input type="number" name="nisn" class="form-control" placeholder="Masukan NISN Anda..." required>                <br>

                <br>
               <label>NIS</label>
               <br>
                  <input type="number" name="nis" class="form-control" placeholder="Masukan NIS Anda..." required>
                <br>
                
                
                <button type="submit" class="btn btn-primary">login</button>                

                 <a href="index2.php">Login Sebagai Admnistrator / Petugas</a>
                </p>
            </form>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>