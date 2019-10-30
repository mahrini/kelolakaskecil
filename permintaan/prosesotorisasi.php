<?php
	require_once('../model.php');

	$get = (object)$_GET;

	$permintaan = permintaanORM::find_one($get->id);
	$permintaan->status = "Disetujui";
	$permintaan->save();
	{
		header('location:listdisetujui.php');
	}
?>