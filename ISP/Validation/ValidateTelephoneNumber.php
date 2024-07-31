<?php

require_once "ValidationRule.php";
class ValidateAccountNumber implements ValidationRule
{
    public function validate($data): mixed
    {
        if (empty($data)) {
            return false;
        }
        if (!is_string($data) || !is_numeric($data)) {
            return false;
        }

        if (strlen($data) !== 10) {
            return false;
        }

        return true;
    }
}