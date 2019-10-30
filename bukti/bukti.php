<?php
require_once('../main/header.php');
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../admin/index.php");
    die();
}
$id = $_SESSION['id'];
$level = $_SESSION['level'];
$idPermintaan = $_GET['id'];
?>
<div class="container">
  	<br>
  	<form action="proses.php" method="POST" enctype="multipart/form-data">
  	<h4 style="padding-left:275px;">Form Pembuktian</h4>
  	<div class="form" style="width:50%;margin:0px auto;">
  		<div class="form-group">
  			<label>Id Permintaan</label>
        <!-- cek php nya -->
  			<select class="form-control" name="user" readonly>
           <option value="<?= $idPermintaan;?>"><?= $idPermintaan;?></option>
          </select> 
          <!-- belum dicek phpnya -->
        </select>
  		</div>
  		<div class="form-group">
  			<label>Tanggal</label>
  			<input type="date" name="tgl" class="form-control">
  		</div>
      <div class="form-group">
        <label>Bukti</label>
        <input type="file" name="foto" class="form-control" placeholder="Masukkan file">
      </div>
  		<div class="form-group">
  			<button class="btn btn-default" type="submit" style="float:right;">Simpan</button>
  		</div>
  	</form>
   	</div>
  </div>
  <?php require_once('../main/footer.php'); ?>