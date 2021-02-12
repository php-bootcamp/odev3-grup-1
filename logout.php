<?php

session_start();
unset($_SESSION["isLogin"]);
unset($_SESSION["username"]);
unset($_SESSION["isRead"]);

header('Location:login.php');