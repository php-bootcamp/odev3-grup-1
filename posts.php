<?php
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Yazılar</title>
	<link rel="stylesheet" href="style.css">
<body class="yazilar-sayfa">

	<h2 style="text-align: center">
		Hoş geldin, <?php echo $_SESSION['kullanici']; ?>
	</h2>

	<div class="menu">
		<h3 class="baslik">Yazılar</h3>
		<div style="display: flex">
			<a href="seen.php" style="margin: 0 5px" class="okunanlar">Okunanlar</a>
			<a href="logout.php" style="margin: 0 5px" class="okunanlar">Çıkış Yap</a>
		</div>
	</div>

	<div class="yazilar">
		<?php foreach ($yazilar as $key => $yazi): ?>
			<div class="yazi">
				<img src="<?php echo $yazi['image']; ?>" class="resim">
				<div class="icerik">
					<h3><?php echo $yazi['title']; ?></h3>
					<p><?php echo $yazi['brief']; ?></p>
					<div class="islem">
						<?php if ( get_cookie('key' . $key) != false): ?>
						<p>okundu</p>
						<?php endif; ?>
						<a href="post.php?id=<?php echo $key; ?>" class="detay">Detay</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>
