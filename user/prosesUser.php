<?php
	require_once('model.php');

	$user = loginORM::create();
	$post = (object)$_POST;

	$user->username = $post->username;
	$user->password = md5($post->password);
	$user->level 	= $post->level;

	$user->save();
?>