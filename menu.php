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

<main style="padding-top: 100px">
  <section id="ingredients">
    <div class="container">
      <h2>Menu</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="g/lb1.jpg" class="card-img-top" alt="Nasi Ayam Lodeh Balado">
            <div class="card-body">
              <h5 class="card-title">Nasi Ayam Lodeh Balado</h5>
              <p class="card-text">
                <ul>
                  <li>Nasi</li>
                  <li>Ayam</li>
                  <li>Mie</li>
                  <li>Sambal Balado</li>
                  <li>telur</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="g/lb2.jpg" class="card-img-top" alt="Nasi Ayam Goreng">
            <div class="card-body">
              <h5 class="card-title">Nasi Ayam Goreng</h5>
              <p class="card-text">
                <ul>
                  <li>Nasi</li>
                  <li>Ayam</li>
                  <li>Mie</li>
                  <li>Acar</li>
                  <li>kerupuk</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="g/lb3.jpg" class="card-img-top" alt="Nasi Ayam Telur Balado">
            <div class="card-body">
              <h5 class="card-title">Nasi Ayam Telur Balado</h5>
              <p class="card-text">
                <ul>
                  <li>Nasi</li>
                  <li>Ayam</li>
                  <li>Mie</li>
                  <li>Kering Tempe</li>
                  <br>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/c5/fa/40/c5fa4069b6c5b835b4b6cec71722d5b1.jpg" class="card-img-top" alt="Nasi Ayam Lodeh Balado">
            <div class="card-body">
              <h5 class="card-title">Luxury Lunch 1</h5>
              <p class="card-text">
                <ul>
                  <li>onigiri</li>
                  <li>sosis</li>
                  <li>omlete</li>
                  <br>
                  <br>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/2a/30/85/2a30851080ff1e3bbfaae7a571fbe525.jpg" class="card-img-top" alt="Nasi Ayam Goreng">
            <div class="card-body">
              <h5 class="card-title">Luxury Lunch 2</h5>
              <p class="card-text">
                <ul>
                  <li>telur</li>
                  <li>nasi</li>
                  <li>sosis</li>
                  <li>sayur</li>
                  <br>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/ba/eb/27/baeb2719c10e0f60097bb5703cd7a3e4.jpg" class="card-img-top" alt="Nasi Ayam Telur Balado">
            <div class="card-body">
              <h5 class="card-title">Very Luxury 1</h5>
              <p class="card-text">
                <ul>
                  <li>Nasi</li>
                  <li>chicken stick</li>
                  <li>sosis</li>
                  <li>oseng tomat</li>
                  <li>sause</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


  <section id="order">
    <form method="post" action="proses.php" id="order-form">
      <div class="container">
        <h2 id="pesan-sekarang">Pesan Sekarang</h2>
        <div class="form-group">
          <label for="nama">Nama: </label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Pengiriman: </label>
          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat lengkap Anda" required>
        </div>
        <div class="form-group">
          <label for="paket">Pilihan Paket Menu: </label>
          <select class="form-control" id="paket" name="pilihan_menu">
            <option>Nasi Ayam Lodeh Balado</option>
            <option>Nasi Ayam Goreng</option>
            <option>Nasi Ayam Telur Balado</option>
            <option>Luxury Lunch 1</option>
            <option>Luxury Lunch 2</option>
            <option>Very Luxury 1</option>
          </select>
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah Orang: </label>
          <input type="number" name="jumlah_orang" class="form-control" id="jumlah" placeholder="Masukkan jumlah orang" required>
        </div>
        <div class="form-group">
          <label for="catatan">Catatan Khusus: </label>
          <textarea name="catatan" class="form-control" id="catatan" rows="3" placeholder="Tambahkan catatan khusus (opsional)"></textarea>
        </div>
        <div class="form-group">
          <label for="email">email: </label>
          <input type="text" name="email" class="form-control" id="email" placeholder="Email"required>
        </div>
        <div class="form-group">
          <label for="email">No Telp: </label>
          <input type="text" name="telp" class="form-control" id="telp" placeholder="telp"required>
        </div>
        <button type="submit" value="Kirim Pesanan" class="btn btn-primary">Kirim Pesanan</button>
      </div>
    </form>
  </section>
</main>
<br>

<footer class="footer">
  <div class="container">
    <ul class="contact-list">
      <li>Alamat: Jl. Contoh No. 123, Kota Contoh</li>
      <li>Telepon: 123-456-7890</li>
      <li>Email: info@homecatering.com</li>
    </ul>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
