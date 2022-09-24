<?php
session_start();
session_destroy();
if (isset($_COOKIE['remeber_me'])) {
    unset($_COOKIE['remember_me']);
    setcookie('remember_me', '', time() - 3600);
}
header('Location: index.php');
?>