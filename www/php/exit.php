<?php
session_start();

unset($_SESSION['k_login']);
unset($_SESSION['k_id']);

header("Location: /");
exit();
?>