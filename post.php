<?php
require __DIR__ . '/functions.php';
include('data.php');
session_start();
if (!isset($_GET['id'])) {
	header("Location: posts.php");
}



if(!$_SESSION['isLogin']){
    header('Location:login.php');
}

$id = $_GET['id'];
$_SESSION["isRead"][$id] = 1;

?>
<!DOCTYPE html>
<html lang="tr">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $posts[$id]['title']; ?></title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body class="yazilar-sayfa">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top: 25px;">
        <h2 style="text-align: center">
            Hoş geldin, <?php echo $_SESSION['username']; ?>
        </h2>
        
        <div class="menu">
                <div style="display: flex;">
                    <h3 class="baslik" style=" width: 100%;"><?php echo $posts[$id]['title']; ?></h3>
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
        
        <div class="yazilar">

            <div class="yazi">
                <img src="<?php echo $posts[$id]['image']; ?>" class="resim">
                <div class="icerik" style="margin-top: 10px;">
                    <p><?php echo $posts[$id]['brief']; ?></p>
                </div>
            </div>
            <div class="uzun-icerik">
                <p><?php echo $posts[$id]['content']; ?></p>
            </div>

        </div>
    </div>
</body>
</html>
