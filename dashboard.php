<!doctype html>
<html lang="en">
  <head>
  <?php
        session_start();
        if(!isset($_SESSION['username'])){
          echo'
          <script>
          var OK = confirm("Harap login terlebih dahulu");
          if (OK) {
              window.location = "index.php";
          } else {
            window.location = "index.php";
          }
          </script>';
        }
        include"koneksi.php";
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>DASHBOARD</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="dashboard.php">Universitas Ahmad Dahlan</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <main>
    <div class="jumbotron">
      <div class="container">
      <div class="row" style="width: 500px;">
        <div class="col-md-6">
        <p class="lead">Menu
        </p>
        <p class="text-monospace">
        <a href="jkb.php" style="text-decoration: none;color:black">Jadwal Kuliah Baru</a>
        </p>
        </div>
        <div class="col-md-6" >
            <table>
                <tr>
                    <td>
                    <a href="jkb.php"><img src="people.gif" alt="people"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="jkb.php" style="text-decoration: none;color:black">Jadwal Kuliah Baru</a>
                    </td>
                </tr>
            </table>
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