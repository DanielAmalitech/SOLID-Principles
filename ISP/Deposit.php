<?php 

require_once '../ISP/ProcessTransaction.php';
class Deposit implements ProcessTransaction{

    public function process(float $amount , string $accountNumber): float
    {

        try{
        $accountBalance = (new UserEnums())->getBalance();

        $accountBalance += $amount;

        echo "Deposit successful \n";
        echo 'New balance is '.$accountBalance;
        
        return 0.0;
        }
        catch(Exception $e){
            echo $e->getMessage();
            echo 'Deposit failed , please try again';
            return 0.0;
        }
    }
}