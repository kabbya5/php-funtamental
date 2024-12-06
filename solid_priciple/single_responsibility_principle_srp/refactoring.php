<?php

class UserManager {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function addUser($userData) {
        echo "User {$userData['name']} added to database.\n";
    }
}

class EmailService {
    public function sendEmail($to, $subject, $message) {
        echo "Email sent to $to with subject: $subject\nMessage: $message\n";
    }
}

class UserRegistration {
    private $userManager;
    private $emailService;

    public function __construct(UserManager $userManager, EmailService $emailService) {
        $this->userManager = $userManager;
        $this->emailService = $emailService;
    }

    // Adds user and sends a welcome email
    public function registerUser($userData) {
        $this->userManager->addUser($userData);
        $this->emailService->sendEmail($userData['email'], "Welcome", "Welcome to our platform!");
    }
}

$dbConnection = null; 

$userManager = new UserManager($dbConnection);
$emailService = new EmailService();
$userRegistration = new UserRegistration($userManager, $emailService);

$userData = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com'
];

$userRegistration->registerUser($userData);
?>