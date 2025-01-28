<?php 

class Notification{
    public static function create(){
        return new static();
    }

    public static function notify(){
        echo "Sending a " . static::getType() . " notification . \n";
    }

    protected static function getType(){
        return "generic";
    }
}

class EmailNotification extends Notification{
    protected static function getType(){
        return "email";
    }
}

class SMSNotification extends Notification{
    protected static function getType(){
        return "SMS";
    }
}

$email = EmailNotification::create();
$email->notify();  

$sms = SMSNotification::create();
$sms->notify();