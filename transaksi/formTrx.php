<?php
  require_once('../main/header.php');
?>

<div class="container">
	<br>
	<form action="prosesTrx.php" method="POST">
	<h4 style="padding-left:275px;">Form Transaksi</h4>
	<div class="form" style="width:50%;margin:0px auto;">
		<div class="form-group">
			<label>No Bukti</label>
			<input type="text" name="noBuk" id="noBuk" class="form-control" placeholder="No Bukti" readonly value="<?= nobukti_pengeluaran();?>">
		</div>
		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tgl" class="form-control">
		</div>
		<div class="form-group">
			<label>Jenis Transaksi</label>
			<select class="form-control jenis" name="jenis" id="jenis">
				<option value="pengeluaran">pengeluaran</option>
				<option value="penerimaan">penerimaan</option>
			</select>
		</div>
     <div class="form-group">
     <label>jumlah</label>
     <input type="text" class="form-control" name="jumlah" id="rupiah">
     </div>
    <div class="form-group">
      <label>Keterangan</label>
      <textarea type="text" name="ket" class="form-control" placeholder="Keterangan"></textarea>
    </div>
    <div class="form-group">
      <label>User</label>
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
			<button style="float:right;" type="submit"><img src="save.png" style="width: 40px">Simpan</button>
		</div>
	</form>
 	</div>
</div>
<?php require_once('../main/footer.php');?>