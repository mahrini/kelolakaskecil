<?php
require_once('../model.php');
session_start();
if(isset($_SESSION['username'])) {
    header("Location: home.php");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$username=$_POST['username'];
$password=$_POST['password'];

$login = loginORM::where('username', $username)->where('password', md5($password))->find_one();

if ($login != null){
	$_SESSION['id']=$login->id;
	$_SESSION['username']=$login->username;
	$_SESSION['password']=$login->password;
	$_SESSION['level']=$login->level;
    if ($login) {
        header("Location: ../permintaan/form.php");
    }    
} else { 
	?>
		<script>
		alert('Username atau Password Salah !!');
		document.location.href = 'login.php';
		</script>
	<?php 
}
?>