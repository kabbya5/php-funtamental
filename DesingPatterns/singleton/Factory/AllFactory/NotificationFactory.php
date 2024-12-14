<?php 

Class NotificationFactory{
    public static function create(string $type): Notification{
        return match($type){
            'email' => new EmailNotification(),
            'sms' => new SMSNotitifcation(),
            'push' => new PushNotitifcation(),
            default => throw new InvalidArgumentException('Unsupported Notification'),
        };
    }
}