<?php
session_start();

if($_SESSION['path'] == "")
	$_SESSION['path'] = $_POST['choice'];
else
	$_SESSION['path'] = $_SESSION['path'] . "-" . $_POST['choice'];
?>