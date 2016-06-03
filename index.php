<?php
	require 'vendor/autoload.php';

	use Telegram\Bot\Api;

	$telegram = new Api('220170582:AAHQsnFK7cGL_iFKTb9MlbOr2fSpgvftr7k',true);

	$botData = $telegram->getMe();
	$updates = $telegram->getUpdates();

	$botId = $botData->getId();
	$firstName = $botData->getFirstName();
	$username = $botData->getUsername();

	print_r($updates);
	// print_r($username);
	// echo $username;

?>