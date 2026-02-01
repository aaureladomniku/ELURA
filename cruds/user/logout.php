<?php
session_start();
session_destroy();
if (isset($_COOKIE['PHPSESSID'])) {
setcookie('PHPSESSID', '', time() - 3600, '/');
}
header("Location: ../../html/log-in.php");
exit();
?>