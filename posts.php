<?php
include('data.php');
require_once __DIR__ . '/functions.php';
session_start();

if(!$_SESSION['isLogin']){
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Yazılar</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body class="yazilar-sayfa">
	<div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top: 25px;"> 
		<h2 style="text-align: center">
			Hoş geldin, <?php echo $_SESSION['username']; ?>
		</h2>

		<div class="menu">
			<div style="display: flex;">
				<h3 class="baslik" style=" padding-left: 23px;  width: 100%;">Yazılar</h3>
				<div class="pull-right" style="    text-align: right;
													display: flex;
													width: 100%;
													justify-content: flex-end;
													height: 40px;
													margin-top: 20px;">
                    <a href="posts.php" class="okunanlar btn btn-info" style="margin: 0 5px;  color: purple; border-color: purple; background-color: white;">Tüm Yazılar</a>
					<a  class="btn btn-info" href="seen.php" style="margin: 0 5px; color: purple; border-color: purple; background-color: white;" class="okunanlar">Okunanlar</a>
					<a class="btn btn-info" href="logout.php" style="margin: 0 5px; color: purple;  border-color: purple; background-color: white;" class="okunanlar">Çıkış Yap</a>
				</div>
			</div>
		</div>
		<div class="yazilar col-md-12">
			<?php foreach ($posts as $key): ?>
				<div style="padding-bottom: 5px;" > 
					<div class="col-md-2">
						<img src="<?php echo $key['image']; ?>" class="resim" >
					</div>
					<div class="icerik col-md-10">
						<h3 style="margin-bottom: 15px;"><?php echo $key['title']; ?></h3>
						<p><?php echo $key['brief']; ?></p>
						<div class="islem pull-right" style="margin-right: 25px;">
							<a href="post.php?id=<?php echo $key['id']; ?>" class="detay btn btn-info" style=" color: blue; background-color: white;">Detay</a>
						</div>
					</div>
				<div><br>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>