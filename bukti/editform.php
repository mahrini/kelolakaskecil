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
  	<form action="proses.php" method="POST">
  	<h4 style="padding-left:275px;">Form Pembuktian</h4>
  	<div class="form" style="width:50%;margin:0px auto;">
  		<div class="form-group">
  			<label>Id Permintaan</label>

  			<select class="form-control" name="user" readonly>
              <?php
              $request = permintaanORM::find_many();
              foreach($request as $req):
             ?>
           <option value="<?= $req->id;?>"><?= $req->id;?></option>
             <?php endforeach;?>
          </select> 
          <!-- belum dicek phpnya -->
        </select>
  		</div>
  		<div class="form-group">
  			<label>Tanggal</label>
  			<input type="date" name="tgl" class="form-control" value="">
  		</div>
      <div class="form-group">
        <label>Bukti</label>
        <input type="file" name="bukti" class="form-control" placeholder="Masukkan file" value="">
      </div>
  		<div class="form-group">
  			<button class="btn btn-default" type="submit" style="float:right;"><a href="list.php">Simpan</a></button>
  		</div>
  	</form>
   	</div>
  </div>
  <?php require_once('../main/footer.php'); ?>