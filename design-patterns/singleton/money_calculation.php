<?php 

class MoneyCalculator{
    private static $instance = null;

    private $amount;

    private function __construct(){
        $this->amount = 0;
    }

    private function __colne(){
        //
    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new MoneyCalculator();
        }

        return self::$instance;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function addAmount($amount){
        $this->amount += $amount;
    }

    public function convertToCurrency($conversionRate) {
        return $this->amount * $conversionRate;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function subtract($amount) {
        $this->amount -= $amount;
    }
}

$calculator1 = MoneyCalculator::getInstance();
$calculator1->setAmount(100); 
$calculator1->addAmount(50); 
$calculator1->subtract(20); 
echo "Amount after calculations: " . $calculator1->getAmount() . "\n"; 

$calculator2 = MoneyCalculator::getInstance(); 
echo "Amount from second instance: " . $calculator2->getAmount() . "\n";

$convertedAmount = $calculator1->convertToCurrency(0.85);
echo "Converted Amount (USD to EUR): " . $convertedAmount . "\n";