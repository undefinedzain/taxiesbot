<?php 

	$botToken = '220170582:AAHQsnFK7cGL_iFKTb9MlbOr2fSpgvftr7k';
	$site = "https://api.telegram.org/bot".$botToken;

	// $update = file_get_contents($site."/getUpdates?limit=1");
	$update = file_get_contents($site."/getUpdates");
	// $update = file_get_contents("php://input");

	// print_r($update);

	$update_array = json_decode($update, true);

	// print_r($update_array);
	$message_count = count($update_array['result']);
	// $results = $update_array['result'][0]['message']['text'];
	$last_message = $update_array['result'][$message_count - 1]['message']['text'];


	echo $last_message;

?>