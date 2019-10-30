<?php
  require_once('../main/header.php');
?>
<div class="container" style="padding-top:30px; padding-left: 60px; ">
  <!-- form -->
  <form action="#" method="POST">
  <table class="table table-hover table-bordered">
    <h4 style="padding-right: :275px;">List Permintaan Pengeluaran</h4>
    <tr>
      <th>No</th>
      <th>Nama Peminta</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Jumlah</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
    <?php
    $list = permintaanORM::where('status', 'Menunggu Persetujuan')->find_many();
    $i=1;
    foreach($list as $permintaan):
      $user=$permintaan->login()->find_one();
    ?> 
    <?php
    $x = new DateTime($permintaan->tanggal);
    $date = date_format($x, "d, F Y");
    ?>
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $user->username;?></td>
      <td><?= $date;?></td>
      <td><?= $permintaan->keterangan;?></td>
      <td><?= rupiah($permintaan->jumlah);?></td>
      <td> <a href="prosesotorisasi.php?id=<?= $permintaan->id;?>"><img src="verified.png" style="width: 40px"></a> </td>
      <td> <button> <a href="#"> <img src="document.png" style="width: 40px"> </a></button> </td>
      <td> <button> <a href="#"><img src="garbage.png" style="width: 40px"></a> </button></td>
  </tr>
<?php endforeach;?>
</table>
</form>
</div>
<?php require_once('../main/footer.php'); ?>
