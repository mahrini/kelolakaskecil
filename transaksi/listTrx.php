<?php
  require_once('../main/header.php');
?>
<div class="container" style="padding-top:30px;">
  <table class="table table-hover table-bordered">
    <h4 style="padding-right: :275px;">List Transaksi</h4>
    <tr>
      <th>No</th>
      <th>No Bukti</th>
      <th>Tanggal</th>
      <th>Jenis Transaksi</th>
      <th>Jumlah</th>
      <th>Keterangan</th>
      <th>User</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
    <?php 
      $list = transaksiORM::find_many();
      $i = 1;
      foreach($list as $trx):
        $adm = $trx->login()->find_one();
    ?>
    <?php
    $x = new DateTime($trx->tanggal);
    $date = date_format($x, "d, F Y");
    ?>
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $trx->no_bukti;?></td>
      <td><?= $date;?></td>
      <td><?= $trx->jenis;?></td>
      <td><?= rupiah($trx->jumlah);?></td>
      <td><?= $trx->keterangan;?></td>
      <td><?= $adm->username;?></td>
      <td><a href="formedit.php?id=<?=$trx->id;?>"><img src="document.png" style="width: 40px"></a></td>
      <td><a href="delete.php?id=<?= $trx->id;?>"><img src="garbage.png" style="width: 40px"></a></td>

    </tr>
<?php endforeach;?>
  </table>
</div>
<?php require_once('../main/footer.php'); ?>