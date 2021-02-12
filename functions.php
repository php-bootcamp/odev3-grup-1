<?php
if (!isset($_SESSION)) {
	session_start();
}
if ( !isset($_SESSION['giris']) || $_SESSION['giris'] != '1') {
	header("Location: login.php");
}
require __DIR__ . '/data.php';

function set_cookie($isim, $deger)
{
	setcookie($isim, $deger, time() + 3600);
}

function get_cookie($isim)
{
	if ( isset($_COOKIE[$isim]) ) {
		return $_COOKIE[$isim];
	} else {
		return false;
	}
}

function delete_cookie($isim)
{
	setcookie($isim, '', time() - 3600);
}
?>

