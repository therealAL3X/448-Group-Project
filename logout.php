<?php
/*
Modified by Alex Khadra
IS 448
*/

session_start();
$_SESSION = array();
session_destroy();
header("location: sp_main.php");
exit;
?>
