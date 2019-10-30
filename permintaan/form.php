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
  	<h4 style="padding-left:275px;">Form Permintaan Pengeluaran Kas Kecil</h4>
  	<div class="form" style="width:50%;margin:0px auto;">
  		<div class="form-group">
  			<label>Meminta Sebagai</label>
  			<select class="form-control" name="user" readonly>
              <?php
              $adm = loginORM::where('id', $id)->find_one();
             ?>
           <option value="<?= $adm->id;?>"><?= $adm->level;?></option>
          </select>

  		</div>
  		<div class="form-group">
  			<label>Tanggal</label>
  			<input type="date" name="tgl" class="form-control">
  		</div>
      <div>
      <label>Jenis</label>
        <select class="form-control" name="jeniskas">
        	<?php if($level == "admin") :?>
          <option value="penerimaan">Kas Kecil</option>
          <?php else :?>
          <option value="penerimaan">Kas Kecil</option>
          <option value="penerimaan">Kas Besar</option>
          <?php endif;?>

        </select>
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea type="text" name="ket" class="form-control" placeholder="Keterangan"></textarea>
      </div>
      <div class="form-group">
        <label>Jumlah</label>
        <input type="text" class="form-control" name="jumlah" id="rupiah">
      </div>
      
  		<div class="form-group">
  			<button class="btn btn-default" type="submit" style="float:right;">Simpan</button>
  		</div>
  	</form>

   	</div>
  </div>
  <?php require_once('../main/footer.php'); ?>