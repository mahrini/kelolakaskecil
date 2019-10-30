<?php
	require_once('../model.php');

	$trx  = transaksiORM::create();
	$post = (object)$_POST;

	$trx->no_bukti		= $post->noBuk;
	$trx->tanggal		= $post->tgl;
	$trx->jenis			= $post->jenis;
	$trx->jumlah		= preg_replace("/[^0-9]/",'', $post->jumlah);
	$trx->keterangan	= $post->ket;
	$trx->login_id		= $post->user;


	$trx->save();
	{
		header('location:listTrx.php');
	}
?>