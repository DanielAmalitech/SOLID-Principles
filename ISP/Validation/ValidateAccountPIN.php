<?php
require_once 'ValidationRule.php';

class ValidateAccountPIN implements ValidationRule
{
    public function validate($data): mixed
    {


        $messages = [];

        $accountPin = (new UserEnums())->getAccountPin();
    
        if(!isset($data)) {

            $messages['message'] = 'Account pin can not be empty';
        }

        if(!is_numeric($data) || !is_numeric($data) 
         || strlen($data) < 4) {
            $messages['message'] = 'Invalid account pin';
        }

        if($accountPin != $data){
            $messages['message'] = 'Invalid account pin';
        }

        if (count($messages) > 0) {
            return $messages;
        }

        return true;
    }
}