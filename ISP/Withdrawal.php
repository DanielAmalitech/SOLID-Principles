<?php

require_once '../ISP/ProcessTransaction.php';

class Withdrawal implements ProcessTransaction
{

    public function process(float $amount, string $accountNumber): float
    {
        try {

            $accountNumber = (new UserEnums())->getAccountNumber();
            $accountBalance = (new UserEnums())->getBalance();
            $actualBalance = (new UserEnums())->getActualBalance();
            
            if ($amount > $accountBalance) {
                echo "Insufficient Balance , please try again \n";
                return 0.0;
            }

            $newBalance = $accountBalance -= $amount;
            $actualBalance -= $amount;

            echo "Withdrawal Successful \n";
            echo "New balance is " . floatval($newBalance) . "\n";
            echo "Actual balance is " . floatval($actualBalance) . "\n";
            echo "Amount withdrawn is " . floatval($amount);

            return 0.0;
        } catch (Exception $e) {
            echo $e->getMessage();
            echo 'Deposit failed  , please try again';
            return 0.0;
        }
    }
}
