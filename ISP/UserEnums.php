<?php

class UserEnums {
    public const CURRENT_BALANCE = 1000.00;
    public const ACTUAL_BALANCE = 1000.00;

    public const ACCOUNT_NUMBER = "1234567890";

    public const ACCOUNT_TYPE = "Savings";

    public const ACCOUNT_NAME = "John Doe";

    public const ACCOUNT_STATUS = "Active";

    public const ACCOUNT_PIN = 1234;

    public const TELEPHONE = "1234567890";



    public static function getAccountStatus() : string {
        return self::ACCOUNT_STATUS;
    }

    public static function getAccountName() : string {
        return self::ACCOUNT_NAME;
    }

    public static function getAccountPin() : int {
        return self::ACCOUNT_PIN;
    }

    public static function getAccountType() : string {
        return self::ACCOUNT_TYPE;
    }

    public static function getBalance() : float {
        return self::CURRENT_BALANCE;
    }

    public static function getActualBalance() : float {
        return self::ACTUAL_BALANCE;
    }

    public static function getAccountNumber() : string {
        return self::ACCOUNT_NUMBER;
    }

    public static function getTelephone() : string {
        return self::TELEPHONE;
    }
}