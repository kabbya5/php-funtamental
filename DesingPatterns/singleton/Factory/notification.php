<?php

include 'AllFactory/NotificationFactory.php';

interface Notification{
    public function send(string $message): void;
}

class EmailNotification implements Notification{
    public function send(string $message) : void{
        echo "Sending Email :  $message " . PHP_EOL;
    }
}

class SMSNotitifcation implements Notification{
    public function send(string $message): void{
        echo "Sending SMS . $message". PHP_EOL;
    }
}

class PushNotitifcation implements Notification{
    public function send(string $message): void{
        echo "Sending Push Notification . $message". PHP_EOL;
    }
}

try {
    $notificationType = 'email'; // This can be dynamically chosen
    $notification = NotificationFactory::create($notificationType);
    $notification->send("Hello, this is a test notification!");
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}