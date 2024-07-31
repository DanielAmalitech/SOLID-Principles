<?php


require_once '../ISP/CheckBalance.php';
require_once '../ISP/Withdrawal.php';
require_once '../ISP/Deposit.php';
require_once '../ISP/UserEnums.php';
require_once '../ISP/ProcessTransaction.php';
require_once '../ISP/Validation/Validatator.php';
require_once '../ISP/Validation/ValidateAmount.php';
require_once '../ISP/Validation/ValidateAccountNumber.php';
require_once '../ISP/Validation/ValidateAccountPIN.php';


class InitializeTransaction
{

    public function initialize()
    {

        $type = 'withdrawal';
        $amount = 200;
        $PIN =  1234;
        $tell = '1234';
        $accountNumber = "1234567890";


        $validator = new Validatator();

        switch ($type) {

            case 'deposit':

                $validator->addRule(new ValidateAmount());
                $validator->addRule(new ValidateAccountNumber());
                $respeonse = $validator->validate($amount);


                if (is_bool($respeonse) && $respeonse) {

                    (new Deposit())->process($amount, $accountNumber);
                } else {
                    echo "Transaction failled \n";
                    foreach ($respeonse as $message) {

                        echo $message;
                    }
                    echo "\n";
                    return;
                }
                break;

            case 'withdrawal':
                $this->withdrawal($amount, $PIN, $accountNumber, $validator);
                break;

            case 'checkBalance':
                (new CheckBalance())->check($PIN, $accountNumber);
                break;

            default:
                echo 'wrong type , please try again';
                break;
        }
        return;
        
    }

    private function withdrawal( $amount , $PIN , $accountNumber , $validator){

        $validator->addRule(new ValidateAmount());
        $validateAmount = $validator->validate($amount);

        $validator->addRule(new ValidateAccountNumber());
        $validateAccountNumber  = $validator->validate($accountNumber);

        $validator->addRule(new ValidateAccountPIN());
        $validatePIN = $validator->validate($PIN);

        if (
            is_bool($validateAccountNumber)
            && is_bool($validateAmount)
            && is_bool($validatePIN)
            && $validateAmount
            && $validateAccountNumber
            && $validatePIN
        ) {
            (new Withdrawal())->process($amount, $accountNumber);
        } else {
            echo "Withdrawal Transaction failled \n";
            $respeonse = array_merge(
                is_array($validateAccountNumber) ? $validateAccountNumber : [],
                is_array($validateAmount) ? $validateAmount : [],
                array_merge(is_array($validatePIN) ? $validatePIN : [])
            );

            foreach ($respeonse as $message) {
                echo $message;
            }
            echo "\n";
            return;
        }
    }
}

$initialize = new InitializeTransaction();
$initialize->initialize();
