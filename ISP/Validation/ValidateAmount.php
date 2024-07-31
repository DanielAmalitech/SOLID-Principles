<?php

require_once 'ValidationRule.php';
class ValidateAmount implements ValidationRule
{
    public function validate($data): mixed
    {

        try {

            $messages = [];
            if (!is_numeric($data)) {
                $messages['message'] = 'Transaction amount must be a number';
            }

            if (floatval($data) < 0 || intval($data) < 0) {
                $messages['message'] = 'Transaction amount must be can not be less than 0';
            }

            if (count($messages) > 0) {
                return $messages;
            }

            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }
}
