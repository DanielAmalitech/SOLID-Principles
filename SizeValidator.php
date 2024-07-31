<?php

require_once 'ValidatorRuleInterface.php';

class SizeValidator implements ValidatorRuleInterface
{
    public function validate($data): mixed
    {
        try {
            $message = [];
            //validate antelope size
            if (!isset($data['size'])  ) {
                $message["message"] = "Antelope Color is required";
            }
            if ( !$data['size'] > 1) {

                $message["message"] = "Antelope size can not be zero";
            }

            if (count($message) > 0) {
                return $message;
            }

            return true;
        } catch (Exception $e) {
            return $message["message"] = $e->getMessage();
        }
    }
}
