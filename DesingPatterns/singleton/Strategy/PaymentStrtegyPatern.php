<?php 

interface PaymentStrtegy{
    public function pay(float $amount) :void;
}

class CreditCardPayment implements PaymentStrtegy{
    public function pay(float $amount) : void{
        echo "Paid $amount using Creadit Card <br>";
    }
}

class PaypalPayment implements PaymentStrtegy{
    public function pay(float $amount) : void{
        echo "Paid $amount Using Paypal <br>";
    }
}

class ShoppingCart{
    private ? PaymentStrtegy $paymentStrategy = null;

    public function setPaymentStrategy(PaymentStrtegy $paymentStrategy){
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout(float $amount) : void{
        if($this->paymentStrategy == null){
            echo "Payment Strategy not set !" . PHP_EOL;
            return;
        }

        $this->paymentStrategy->pay($amount);
    }
}

$cart = new ShoppingCart();

$creditCardPayment = new CreditCardPayment();
$cart->setPaymentStrategy($creditCardPayment);
$cart->checkout(100.50); 


$payPalPayment = new PayPalPayment();
$cart->setPaymentStrategy($payPalPayment);
$cart->checkout(200.75); 