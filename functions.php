<?php
require 'vendor/autoload.php'; // Importez l'autoloader Composer

use Predis\Client;

function setMessage(string $message){
     // Créez une instance du client Predis pour se connecter à Redis
     $client = new Client([
        'scheme' => 'tcp',
        'host' => '127.0.0.1',
        'port' => 6379,
    ]);

    //S'il y a plus de 10 message, on supprime le premier sur la pile
    if ($client->llen('messages') > 9) {
        $client->lpop('messages');
    }

    return $client->rpush($message);
}

function getMessages()
{
    // Créez une instance du client Predis pour se connecter à Redis
    $client = new Client([
        'scheme' => 'tcp',
        'host' => '127.0.0.1',
        'port' => 6379,
    ]);

    //Retourne tous les messages
    return $client->lrange('messages',0, -1);
}

function displayMessages() {
    $messages = getMessages();
    foreach ($messages as $message){
        include('views/components/messages/message-right.php');
    }
    
}