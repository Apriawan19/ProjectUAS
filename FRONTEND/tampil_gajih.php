<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/app.css">
    <!-- <link rel="stylesheet" type="text/css" href="asset/datatables/datatables.min.css"/> -->
  <link rel="stylesheet" href="asset/datatables/DataTables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="asset/print.min.css">
  <link rel="shortcut icon" type="gif" href="favicon/favicon.gif"/>
    <!-- <script src="asset/js/jquery-3.4.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="asset/datatables/datatables.min.js"></script> -->
</head>
<body>
<div class="container">
  <img src="asset/image/header2.jpg" class="img-fluid" alt="Responsive image">
  <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PEGAWAI</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_pegawai.php">Tambah Data Pegawai</a>
          <a class="dropdown-item" href="tampil_pegawai.php">Lihat Data Pegawai</a>
          <a class="dropdown-item" href="tampil_gajih.php">Lihat Data Gajih</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jabatan.php">JABATAN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LAPORAN</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="laporan_absensi.php">LAPORAN KEHADIRAN</a>
          <a class="dropdown-item" href="laporan_gajih.php">Laporan Penggajian</a>
      </li>
    </ul>
    <ul class="navbar-nav float-right">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </nav>
</div>


</body>
</html>
