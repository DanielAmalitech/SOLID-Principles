<?php

require_once 'ValidatorRuleInterface.php';

class ColorValidator implements ValidatorRuleInterface
{
    /**
     * @inheritDoc
     */
    public function validate($data): mixed
    {
        try {
            //validate antelope color
            $message = [];
            //validate antelope type
            if ($data['color'] && !isset($data['color']) ) {
                $message["message"] = "Antelope Color is required";
            }

            if (strlen($data['color']) < 2) {
                $message["message"] = "Antelope Color can not be less than 2";
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
