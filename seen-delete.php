<?php
require 'data.php';
session_start();
if(!$_SESSION['isLogin']){
    header('Location:login.php');
}



$id = $_GET['id'];

$_SESSION["isRead"][$id] = 0;
header('Location:seen.php');

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * **Giriş yapmış kullanıcının** uygulama içerisinde okuduğunu belirten durumu
  * geri alabildiği (sildiği) sayfadır. `seen.php` veya `post.php`
  * (ikisinden biri veya her ikisi) sayfalarından buraya yönlendirebilirsiniz.
  * Eğer bu sayfaya birden fazla yerden gelebiliyorsa **geldiği sayfaya** yönlenmesini
  * bekliyoruz.
  */
