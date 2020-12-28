<!doctype html>
<html lang="en">
  <head>
  <?php
        session_start();
        include"koneksi.php";
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>LOGIN</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="index.html">Universitas Ahmad Dahlan</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </header>
    </div>
    <main>
    <div class="jumbotron">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
        <h1 class="display-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Selamat Datang</h1>
        <p class="lead">Sistem Informasi Manajemen Ruang
        </p>
        <p class="text-monospace">
        Sistem Informasi Manajemen Ruang (SIMERU)  merupakan sebuah sistem yang berfungsi sebagai pusat 
        informasi ruang, jadwal dosen, dan perkuliahan di Universitas Ahmad Dahlan
        </p>
        </div>
        <div class="col-md-6">
          <form method="post">
            <h1>LOGIN</h1>
        <div class="form-group">
            <label class="usr">USERNAME</label>
            <input class="form-control" name="username" type="username">
            <small class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" type="pass">
        </div>
        <button class="btn btn-primary btn-lg" type="submit" name="masuk" id="masuk">Submit</button>
        </form>
        <?php  
        if (isset($_POST['masuk'])){
            $username= $_POST['username'];
            $pass= $_POST['pass'];
            $query = "SELECT * FROM id WHERE username = '{$username}' ";
            $select_user_query = mysqli_query($konek, $query);            
            $username_db = "";
            $password_db = "";
            while ($row = mysqli_fetch_assoc($select_user_query)) {
                $username_db = $row['username'];
                $password_db = $row['pass'];
                $sesi=$username_db;
              }
              if ($username == $username_db && $pass == $password_db) {
                $_SESSION['username']=$sesi;
                header("Location: dashboard.php");
              }else{
                echo "
                <script>
                alert('Maaf Username atau Password Anda Salah');
                </script>
                ";
            }
        }
        ?>
        </div>
      </div>  
      </div>
    </div>
  </main>
    <footer>
    <div class="card text-center" style="width: 100%; height: 50px;">
      <div class="card-footer text-muted" style="width: 100%; height: 50px;">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, swan</p>
      </div>
    </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>