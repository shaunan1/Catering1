<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - Katering Makanan</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#"><h1>Home Catering</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars" style="color: black;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="g/gambar1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="g/gambar2.png" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <div class="mb-5"></div>
  <div class="centered text-center">
    <h2>Menu Andalan</h2>
  </div>

  <section id="packages">
        <div class="container mt-1 pt-1">
            <h2>Pilihan Menu</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="g/lb1.jpg" class="card-img-top" alt="Menu 1">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Ayam Lodeh Balado</h5>
                            <p class="card-text"></p>
                            <p class="card-text">Rp. 18.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="g/lb2.jpg" class="card-img-top" alt="Menu 2">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Ayam Goreng</h5>
                            <p class="card-text">Rp.18.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="g/lb3.jpg" class="card-img-top" alt="Menu 3">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Ayam Telur Balado</h5>
                            <p class="card-text">Rp.19.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <main>
    <div class="container mb-5">
      <div class="text-center">
        <br>
        <a href="menu.php" class="btn btn-primary">Order Sekarang</a>
      </div>
    </div>
  </main>
<div class="mb-5"></div>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.querySelector('.btn-primary').addEventListener('click', function() {
      document.getElementById('pesan-sekarang').scrollIntoView({ behavior: 'smooth' });
    });
  </script>
</body>
</html>
