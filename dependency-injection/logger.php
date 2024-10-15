<?php 

class Logger{
	public function log($message){
		echo "Login Message $message". "\n";
	}
}

class Mailer{
	public function send($email, $message){
		echo "Sending email to $email:$message". "\n";
	}
}

class UserService{
	private $logger;
	private $mailer;

	public function __construct(Logger $logger, Mailer $mailer){
		$this->logger = $logger;
		$this->mailer = $mailer;
	}

	public function createUser($email){
		$this->logger->log("create user with email:$email");

		$this->mailer->send($email, "Welcome to our platform!");

        echo "User created successfully.\n";
	}

}

// Instantiate dependencies
$logger = new Logger();
$mailer = new Mailer();

// Inject dependencies into UserService
$userService = new UserService($logger, $mailer);

// Call a method that uses the injected dependencies
$userService->createUser('test@example.com');