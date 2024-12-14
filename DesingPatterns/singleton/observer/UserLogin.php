<?php 

interface Observer {
    public function update(string $message): void;
}

class Logger implements Observer {
    public function update(string $message): void {
        echo "Logger received: " . $message . PHP_EOL;
    }
}

class EmailNotifier implements Observer {
    public function update(string $message): void {
        echo "EmailNotifier received: " . $message . PHP_EOL;
    }
}

class User {
    private array $observers = [];

    public function addObserver(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function notify(string $message): void {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    public function changeStatus(string $status): void {
        $this->notify("Status changed to: $status");
    }
}

$logger = new Logger();
$emailNotifier = new EmailNotifier();

$user = new User();

$user->addObserver($logger);
$user->addObserver($emailNotifier);

$user->changeStatus("Online");
$user->changeStatus("Offline");