<?php
session_start();
if (isset($_POST['logout_btn'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('Location: http://192.168.0.109:8080/nonereg.html');
}
else if (isset($_POST['close_logout'])) {
	header('Location: http://192.168.0.109:8080/index.html');
}
 ?>