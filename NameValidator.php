<?php
require_once 'ValidatorRuleInterface.php';

class NameValidator implements ValidatorRuleInterface
{
    /**
     * @inheritDoc
     */
    public function validate($data): mixed
    {
        try {
            $message = [];
            //validate antelope type
            if ($data["name"] && !isset($data["name"])) {
                $message["message"] = "Antelope Name is required";
            }

            if (strlen($data['name']) < 2) {
                $message["message"] = "Antelope Name can not be less than 2";
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
