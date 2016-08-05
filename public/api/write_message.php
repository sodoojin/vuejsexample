<?php
$message = $_POST['message'];

$messages = json_decode(file_get_contents('messages.json'));

array_push($messages->messages, [
    'content' => $message,
    'read' => false,
]);

$fp = fopen("messages.json", "w");
fwrite($fp, json_encode($messages));
fclose($fp);

echo json_encode([
    'result' => 'success',
]);