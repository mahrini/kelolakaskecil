<?php
require_once('../model.php');

	$post              		= (object)$_POST; //mengambil data di form
	$bukti 					= buktiORM::create();

	$bukti->permintaan_id	= $post->user;
	$bukti->tanggal			= $post->tgl;

	$trx->save(); { header('location:list.php'); }

?>