<?php

class LocationValidator implements ValidatorRuleInterface
{
    public function validate($data): mixed {

        $message = [];

        if (empty($data['location'])) {
            $message["message"] = "Antelope Color is required";
        }

        if (strlen($data['location']) < 1) {
            $message["message"] = "Antelope Location can not be less than 1";
        }

        if (count($message) > 0) {
            return $message;
        }

        return true;
    }
}