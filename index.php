<?php 

	$botToken = '220170582:AAHQsnFK7cGL_iFKTb9MlbOr2fSpgvftr7k';
	$site = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents($site."/getupdates");

	print_r($update);

?>