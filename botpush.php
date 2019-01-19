<?php



require "vendor/autoload.php";

$access_token = '1wjA69VcE+MLCMnzO/RxGcqWoWDvreQB85YEoNi5jR6Z7dKd5Q1Psh+bjwwRzhTdGwpG74jh5tw8bMnwF1qeMOH9O9q8FnZsLbeQw4iaxrbzWBcqpoBXmLbh5EXYYB4QpUQVMelBWYLjgPpg8NXPhQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0956db5b8e7ac8b7ef58aed1089e0684';

$pushID = 'U6e499cad228260a50f3ad6b7d753f238';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







