<?php
require_once('../main/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<body>
	<body>
<div class="container">
	<br>
	<form action="prosesUser.php" method="POST">
	<h4 style="padding-left:275px;">Form User</h4>
	<div class="form" style="width:50%;margin:0px auto;">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Level</label>
			<select class="form-control" name="level">
				<option value="Admin">Admin</option>
				<option value="Kas Kecil">Kas Kecil</option>
				<option value="Keuangan">Keuangan</option>
				<option value="Pemilik">Pemilik</option>
			</select>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit" style="float:right;">Simpan</button>
		</div>
	</form>
 	</div>
</div>
<?php require_once('../main/footer.php'); ?>