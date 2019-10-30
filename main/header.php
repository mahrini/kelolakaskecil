<?php
  require_once('../model.php');
  require_once('../func/function.php');
?>
<html>
<head>
	<title>Kas Kecil </title>
</head>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Kas Kecil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../Home/home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../user/formUser.php">Tambah User</a>
      </li>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="../transaksi/listTrx.php">Lihat Rekap</a> 
      </li>
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Input
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../transaksi/formTrx.php">Transaksi</a>
          <a class="dropdown-item" href="../permintaan/form.php">Permintaan Pengeluaran</a>
          <a class="dropdown-item" href="../permintaan/kasbon.php">Permintaan Kasbon</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          List
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../transaksi/listTrx.php">Transaksi</a>
          <a class="dropdown-item" href="../permintaan/list.php">Permintaan Pengeluaran</a>
          <a class="dropdown-item" href="../permintaan/listdisetujui.php">Permintaan Disetujui</a>
          <a class="dropdown-item" href="../bukti/list.php">Pembuktian</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
      <a style="float:right;" href="../admin/prosesLogout.php">Logout</a>
  </div>
</nav>