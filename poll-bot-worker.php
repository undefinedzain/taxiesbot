<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '220170582:AAHQsnFK7cGL_iFKTb9MlbOr2fSpgvftr7k');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
