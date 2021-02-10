<?php

include __DIR__ . '/vendor/autoload.php';

echo "RUNNING";

use Discord\Discord;

$discord = new Discord([
    'token' => $_ENV["BOT_TOKEN"],
]);

$discord->on('ready', function($discord) {
    echo "Bot is ready!", PHP_EOL;

    $discord->on('message', function($message, $discord) {
        echo "MESSAGE RECEIVED: " . $message->content, PHP_EOL;
    });
});

$discord->run();

?>