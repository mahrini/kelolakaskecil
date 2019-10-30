<?php
	require_once('../model.php');

	$bukti 	= buktiORM::create();
	$post 	= (object)$_POST;

	$bukti->permintaan_id	= $post->user;
	$bukti->tanggal			= $post->tgl;

	if(!isset($_FILES['foto']['tmp_name'])){
	    echo '<span style="color:blue"><b><u><i>Pilih file gambar</i></u></b></span>';
	} else {
	    $name = $_FILES['foto']['name'];
	    $size = $_FILES['foto']['size'];
	    $type = $_FILES['foto']['type'];
	    if($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png'))
	    {
	        $image = file_get_contents($_FILES['foto']['tmp_name']);	        
	        $bukti->bukti = $image;

	    } else {
	        echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
	    }
	}

	
	$bukti->save();
		{
		header('location:list.php');
	}
?>