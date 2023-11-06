<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ankayu.id - Selamat Datang</title>
  <!-- Tambahkan link ke CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Menyesuaikan tampilan jumbotron dan latar belakang */
    .jumbotron {
      background-color: #D2B48C; /* Warna coklat */
      color: #FFF8DC; /* Warna krem untuk teks */
    }
    /* Warna teks navbar */
    .navbar {
      background-color: #D2B48C; /* Warna coklat */
    }
    /* Logo styling */
    .logo img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <!-- Tambahkan link ke JavaScript Bootstrap (jQuery dan Popper.js) dan Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Ankayu.id</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#layanan">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Lokasi">Lokasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Jumbotron Section with Logo -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <div class="logo">
        <img src="{{ asset('gambar/logo_ankayu.jpg') }}" alt="Ankayu.id Logo" style="width: 150px; height: 150px;">
      </div>
      <h1 class="display-4">Selamat Datang di Ankayu.id</h1>
      <p class="lead">Tempat Terbaik Untuk Kebutuhan Rumah Tangga Kalian</p>
    </div>
  </div>

  <!-- Tentang Kami Section -->
  <section id="tentang" class="py-5">
    <div class="container">
      <h2 class="text-center">Tentang Kami</h2>
      <p>Ankayu.id adalah perusahaan yang mengkhususkan diri dalam merancang alat dan bahan rumah tangga dengan kayu sebagai bahan utama. Visi kami adalah menggabungkan keindahan kayu alami dengan kegunaan modern untuk menciptakan produk rumah tangga yang unik dan berkelanjutan. Perusahaan ini berdiri pada 2021. Kami peduli dengan kenyamanan dan keindahan dalam rumah tangga. Produk kami termasuk berbagai perabotan dan aksesori yang dirancang dengan penuh perhatian terhadap detail. Kami hanya menggunakan kayu berkualitas tinggi yang telah diolah dengan cara ramah lingkungan, sehingga produk-produk kami tahan lama dan baik untuk lingkungan. Kami juga sangat memperhatikan etika dan lingkungan dalam proses produksi kami. Kami bekerja sama dengan pengrajin kayu lokal untuk menciptakan peluang ekonomi dan mendukung komunitas setempat. Kami selalu mencari inovasi baru dalam produk kami dan berusaha memenuhi kebutuhan pelanggan kami. Dengan Ankayu.id, Anda dapat mempercayakan rumah Anda dengan produk kayu berkualitas tinggi yang ramah lingkungan, sederhana, dan elegan.</p>
    </div>
  </section>

  <!-- Layanan Section -->
  <section id="layanan" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">Layanan Kami</h2>
      <p>Layanan di perusahaan kami, melayani segala bentuk perabotan rumah tangga dengan menggunakan bahan dasar kayu. Kami juga melayani request an dari customer dan terdapat berbagai model yang telah tersedia di perusahaan kami. Informasi lebih lengkapnya bisa klik link berikut.
      <a href="https://shopee.co.id/ankayu.id">Klik disini.</a>
      </p>
    </div>
  </section>

  <!-- Produk Section -->
  <section id="Produk" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">Produk Kami</h2>
      <p>Produk kami membuat berbagai alat kebutuhan rumah tangga dengan bahan dasar kayu. Pada perusahaan kami membuat perlatan rumah tangga seperti telenan, sutil besar dan kecil, meja belajar lipat, gantungan baju, tempat pisau, dsb. Perusahaan kami juga menerima request an dari customer jika ingin membuat model sendiri. Beberapa produk kami dapat dinikmati pada contoh gambar produk dibawah ini :</p>
    </div>
  </section>

  <!-- Gambar produk -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_9837.jpg" alt="Telenan" style="width: 200px; height: 200px;">
        <p>Telenan</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_9907.jpg" alt="Sutil Besar dan Kecil" style="width: 200px; height: 200px;">
        <p>Sutil Besar dan Kecil</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_9997.jpg" alt="Tempat Pisau" style="width: 200px; height: 200px;">
        <p>Tempat Pisau</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_0069.jpg" alt="Gantungan" style="width: 200px; height: 200px;">
        <p>Gantungan</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_9985.jpg" alt="Meja Belajar Lipat" style="width: 200px; height: 200px;">
        <p>Meja Belajar Lipat</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\IMG_9966.jpg" alt="Kursi Kotak Kecil" style="width: 200px; height: 200px;">
        <p>Kursi Kotak Kecil</p>
      </div>
    </div>
  </div>

  <!-- Lokasi Section -->
  <section id="Lokasi" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">Lokasi Kami</h2>
      <p>Lokasi perusahaan kami terletak di Jalan Raya Blitar No.99 Kabupaten Tulungagung, Kecamatan Ngunut, Desa Kaliwungu, Jawa Timur. Di bawah ini merupakan foto perusahaan kami :</p>
    </div>
  </section>

  <!-- Gambar Lokasi -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi1.jpg" alt="Tempat Penyimpanan Kayu" style="width: 200px; height: 200px;">
        <p>Tempat Penyimpanan Kayu</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi3.jpg" alt="Tempat Penjemuran Kayu" style="width: 200px; height: 200px;">
        <p>Tempat Penjemuran Kayu</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi4.jpg" alt="Tempat Pembuatan Produk" style="width: 200px; height: 200px;">
        <p>Tempat Pembuatan Produk</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi5.jpg" alt="Tempat Pembuatan Produk" style="width: 200px; height: 200px;">
        <p>Tempat Pembuatan Produk</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi6.jpg" alt="Tempat Pembuatan Produk" style="width: 200px; height: 200px;">
        <p>Tempat Pembuatan Produk</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="d:\Pemrograman Web\ProjectETS\Lokasi7.jpg" alt="Tempat Pembuatan Produk" style="width: 200px; height: 200px;">
        <p>Tempat Pembuatan Produk</p>
      </div>
    </div>
  </div>

  <!-- Kontak Section -->
  <section id="kontak" class="py-5" style="background-color: #D2B48C; color: #FFF8DC;">
    <div class="container">
      <h2 class="text-center">Kontak Kami</h2>
      <p>Email : ankayu.id@gmail.com</p>
      <p>Telepon  : +62 812-5962-0997 <a href="https://api.whatsapp.com/send/?phone=6281259620997">Klik disini.</a> </p>
      <p>Alamat: Jalan Raya Blitar No.99 Kabupaten Tulungagung, Kecamatan Ngunut, Desa Kaliwungu, Jawa Timur.</p>
    </div>
  </section>
</body>
</html>
