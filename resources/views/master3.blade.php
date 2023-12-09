
<title>@yield('title')</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">5026221195 - Rafief Chalvani</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Database
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/lampu">Lampu</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
    </ul>
  </nav>
<header>

    <h2>Blog MalasNgoding</h2>
    <nav>
        <a href="/blog">HOME</a>
        |
        <a href="/blog/tentang">TENTANG</a>
        |
        <a href="/blog/kontak">KONTAK</a>
    </nav>
</header>
<hr/>
<br/>
<br/>

<!-- bagian judul halaman blog -->
<h3> @yield('judul_halaman') </h3>


<!-- bagian konten blog -->
@yield('konten')


<br />
<br />
<hr />
<footer>
<p>&copy; <a href="https://www.malasngoding.com">Rafief Chalvani</a>. 2018 - 2019</p>
</footer>
</div>
