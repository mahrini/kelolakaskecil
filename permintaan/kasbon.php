<?php
require_once('../main/header.php');
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../admin/index.php");
    die();
}
$id = $_SESSION['id'];
$level = $_SESSION['level'];
?>
<div class="container">
  	<br>
  	<form action="prosesPermintaan.php" method="POST">
  	<h4 style="padding-left:275px;">Form Permintaan Kasbon</h4>
  	<div class="form" style="width:50%;margin:0px auto;">
  	 <div class="form-group">
      <label>Bagian</label>
      <select class="form-control" name="user">
      <?php
        $list = loginORM::find_many();
        foreach($list as $adm) :
      ?>
        <option value="<?= $adm->id;?>"><?= $adm->username;?></option>
      <?php endforeach;?>
      </select>
    </div>
  		<div class="form-group">
  			<label>Tanggal</label>
  			<input type="date" name="tgl" class="form-control">
  		</div>
      <div>
      
      <div class="form-group">
        <label>Keterangan</label>
        <textarea type="text" name="ket" class="form-control" placeholder="Keterangan"></textarea>
      </div>
      <div class="form-group">
        <label>Jumlah</label>
        <input type="text" class="form-control" name="harga" id="rupiah">
      </div>
    
  		<div class="form-group">
  			<button class="btn btn-default" type="submit" style="float:right;">Simpan</button>
  		</div>
  	</form>
   	</div>
  </div>
  <?php require_once('../main/footer.php'); ?>