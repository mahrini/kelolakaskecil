<?php
	require_once('../model.php');

	$permintaan = permintaanORM::create();
	$post = (object)$_POST;

	$permintaan->login_id	= $post->user;
	$permintaan->tanggal	= $post->tgl;
	$permintaan->jeniskas	= $post->jeniskas;
	$permintaan->keterangan	= $post->ket;
	$permintaan->jumlah		=  preg_replace("/[^0-9]/",'', $post->jumlah);

	$permintaan->save();
	{
		header('location:list.php');
	}
?>