<?php
  require_once('../main/header.php');
?>
<div class="container" style="padding-top:30px;">
  <!-- form -->
  <form action="#" method="POST">
  <table class="table table-hover table-bordered">
    <h4 style="padding-right: :275px;">List Permintaan Disetujui</h4>
    <tr>
      <th>No</th>
      <th>Nama Peminta</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Jumlah</th>
      <th>Bukti</th>
    </tr>
    <?php
    $list = permintaanORM::where('status', 'Disetujui')->find_many();
    $i=1;
    foreach($list as $permintaan):
      $user=$permintaan->login()->find_one();
    ?> 
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $user->username;?></td>
      <td><?= $permintaan->tanggal;?></td>
      <td><?= $permintaan->keterangan;?></td>
      <td><?= $permintaan->jumlah;?></td>
      <td>  <a href="../bukti/bukti.php?id=<?=$permintaan->id;?>"> <button> <img src="upload.png" style="width: 40px">Upload</a> </button> </td>
  </tr>
<?php endforeach;?>
</table>
</form>
</div>
<?php require_once('../main/footer.php'); ?>
