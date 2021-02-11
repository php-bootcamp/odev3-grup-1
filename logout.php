<?php

session_start();
unset($_SESSION["isLogin"]);
unset($_SESSION["formback"]);
unset($_SESSION["username"]);
unset($_SESSION["isRead"]);

header('Location:login.php');