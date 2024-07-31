<?php

require_once 'ValidatorRuleInterface.php';

class TypeValidator implements ValidatorRuleInterface
{
    /**
     * @inheritDoc
     */
    public function validate($data): mixed
    {
        try {
            $type = ["Shi", "Sho"];
            $message = [];
            //validate antelope type
            if ($data['type'] && !isset($data['type'])) {
                $message["message"] = "Antelope is required";
            }

            if (!in_array($data['type'], $type)) {
                $message["message"] = "Invalid Antelope Type";
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
