<!--Navbar-->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbar">
      <!--Links for Webpages-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pegawai.php">Daftar Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Daftar Barang</a>
        </li>
        <!--Dropdown-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manajemen
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./add-pegawai.php">Karyawan</a></li>
            <li><a class="dropdown-item" href="#">Barang</a></li>
          </ul>
        </li>
      </ul>

      <!--Links for Login & Registration-->
      <ul class="navbar-nav" id="nav-login">
        <?php
        if (isset($_SESSION['username'])) {
          echo '<li class="nav-item"><a class="nav-link" href="#">Logout</a></li>';
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../register.php">Register</a>
        </li>
      </ul>

    </div>

  </div>
</nav>