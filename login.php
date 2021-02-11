<?php
session_start();
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    $username = $_SESSION['login'];
    unset($_SESSION['login']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<p class="top">Giriş Yap</p>
<div class="form-back">
    <?php if(isset($username)) { ?>
    <div class="alert">
        <p class="alert-text">
            Kullanıcı adı veya parola hatalı
        </p>
    </div>
    <?php } ?>
    <form action="do-login.php" METHOD="post">
        <p class="label-username">
            Kullanıcı Adı
        </p>
        <input type="text" class="input-username" name="username"
            <?php if(isset($username)) {
                echo 'value="' . $username . '"';
            }
            ?>
        >
        <p class="label-password">
            Parola
        </p>
        <input type="password" class="input-password" name="password">
        <button type="submit" class="submit">Giriş Yap</button>
    </form>
</div>
    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmamış olan kullanıcı için** giriş yapma formunu gösterecek olan
     * sayfadır. Burada gösterilen forma ait değerlerin `do-login.php`
     * dosyasına gitmesini bekliyoruz.
     */


</body>
<script src="main.js"></script>
</html>
