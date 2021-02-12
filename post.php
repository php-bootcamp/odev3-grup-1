<?php
require __DIR__ . '/functions.php';

if (!isset($_GET['id'])) {
	header("Location: posts.php");
}
$key = $_GET['id'];
if ( !isset($yazilar[$key]) ) {
	header("Location: posts.php");
}
set_cookie('key' . $key, 'okundu');

$yazi = $yazilar[$key];
?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $yazi['title']; ?></title>
	<link rel="stylesheet" href="style.css">
<body class="yazilar-sayfa">

	<h2 style="text-align: center">
		Hoş geldin, <?php echo $_SESSION['kullanici']; ?>
	</h2>
	
	<div class="menu">
		<h3 class="baslik"><?php echo $yazi['title']; ?></h3>
		<div style="display: flex">
			<a href="posts.php" class="okunanlar" style="margin: 0 5px;">Tüm Yazılar</a>
			<form action="seen-delete.php" method="post" style="margin: 0 5px;">
				<input type="hidden" name="yazi_key" value="<?=$key?>">
				<input type="hidden" name="location" value="posts.php">
				<button type="submit" class="okunanlar">Okunanlardan Kaldır</button>
			</form>
		</div>
	</div>

	<div class="yazilar">

		<div class="yazi">
			<img src="<?php echo $yazi['image']; ?>" class="resim">
			<div class="icerik">
				<p><?php echo $yazi['brief']; ?></p>
			</div>
		</div>
		<div class="uzun-icerik">
			<p><?php echo $yazi['content']; ?></p>
		</div>

	</div>
</body>
</html>
