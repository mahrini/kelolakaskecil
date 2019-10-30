<?php
  require_once('../model.php');

  $id  = $_GET['id'];
  
  $trx = transaksiORM::find_one($id);
  $trx->delete();
  {
  	header('location:listTrx.php');
  }

?>
