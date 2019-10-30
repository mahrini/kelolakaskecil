<?php
require_once('../main/header.php');

$id  = $_GET['id'];
$get=(object)$_GET;
$trx = transaksiORM::find_one($get->id); 
?>
<div class="container">
	<br>
	<form action="edit.php" method="POST">
	<h4 style="padding-left:275px;">Form Transaksi</h4>
	<div class="form" style="width:50%;margin:0px auto;">
	

	<input type="hidden" name="id" value="<?=$trx->id;?>"> 
	<!-- ?= sama dengan echo -->

		<div class="form-group">
			<label>No Bukti</label>
			<input type="text" name="noBuk" class="form-control" placeholder="No Bukti" value="<?=$trx->id;?>">
		</div>
		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tgl" class="form-control" value="<?= $trx->tanggal?>">
		</div>
		<div class="form-group">
			<label>Jenis Transaksi</label>
			<select class="form-control" name="jenis" value="<?=$trx->jenis?>">
				<option value="pengeluaran">pengeluaran</option>
				<option value="penerimaan">penerimaan</option>
			</select>
		</div>
     <div class="form-group">
     <label>Jumlah</label>
     <input type="text" class="form-control" name="jumlah" id="rupiah" value="<?=$trx->jumlah?>">
     </div>
    <div class="form-group">
      <label>Keterangan</label>
      <textarea type="text" name="ket" class="form-control" placeholder="Keterangan" value="<?=$trx->keterangan?>"> </textarea>
    </div>
    <div class="form-group">
      <label>User</label>
      <select class="form-control" name="user" value="<?=$trx->login_id?>">
      <?php
        $list = loginORM::find_many();
        foreach($list as $adm) :
      ?>
        <option value="<?= $adm->id;?>"><?= $adm->username;?></option>
      <?php endforeach;?>
      </select>
    </div>
		<div class="form-group">
			<button style="float:right;" type="submit"><img src="save.png" style="width: 40px">Simpan</button>
		</div>
	</form>
 	</div>
</div>
<?php require_once('../main/footer.php');?>