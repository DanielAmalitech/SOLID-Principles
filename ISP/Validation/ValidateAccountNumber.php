<?php
require_once 'ValidationRule.php';

class ValidateAccountNumber implements ValidationRule
{
    public function validate( $data): mixed
    {
        $messages = [];

        $userAccountNumber = (new UserEnums())->getAccountNumber();

        if(empty($data)){
            $messages['message'] = 'Account number can not be empty';
        }
        if (empty($data) || !is_string($data) || !is_numeric($data)) {
            $messages['message'] = 'Invalid account number';
        }

        if($data != $userAccountNumber){
            $messages['message'] ='Account does not exist';
        }

        if (count($messages) > 0) {
            return $messages;
        }

        return true;
    }
}