<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

// $botman->hears('Hi', function ($bot) {
//     $bot->reply('');
// });
$botman->hears('.*(Hi|Hello).*', BotManController::class.'@startConversation');
$botman->hears('link', BotManController::class.'@linkConversation');
$botman->hears('Babe', function ($bot) {
    $bot->reply('<a target="_blank" href="/order/a@a.com/1220">Order</a>');
});
