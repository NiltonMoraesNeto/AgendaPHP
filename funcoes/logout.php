<?php
	require_once("logica-session.php");
	userLogout();
	header("Location: ../index.php");
	die();