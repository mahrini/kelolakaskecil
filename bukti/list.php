<?php
  require_once('../main/header.php');
?>
<div class="container" style="padding-top:30px;">
  <!-- form -->
  <h4 style="padding-right: :275px;">List Pembuktian</h4>
  <table class="table table-hover table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Peminta</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Jumlah</th>
      <th>Bukti</th>
      <th>Edit </th>
      <th> Hapus</th>
    </tr>
    <?php
    $list = buktiORM::find_many();
    $i=1;
    foreach($list as $bukti):
      $permintaan=$bukti->permintaan()->find_one();
      $login = $permintaan->login()->find_one();
    ?> 
    <!-- menssederhanakan koding  -->
     
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $login->username;?></td>
      <td><?= $permintaan->tanggal;?></td>
      <td><?= $permintaan->keterangan;?></xtd>
      <td><?= $permintaan->jumlah;?></td>
      <td><img src="<?= showImage($bukti->bukti);?>" style="width:200px;height: 200px;"></td>
      <td>  <a href="editform.php?id=<?=$bukti->id;?>"> <img src="document.png" style="width: 40px"></a></td>
      <td> <button> <a href=" "> <img src="garbage.png" style="width: 40px"></a></button></td>
  </tr>
<?php endforeach;?>
</table>
</div>
<?php require_once('../main/footer.php'); ?>
