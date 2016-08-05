<?php

$offset = $_GET['offset'];

$messages = json_decode(file_get_contents('./messages.json'));

echo json_encode([
    'messages' => array_slice($messages->messages, $offset),
]);