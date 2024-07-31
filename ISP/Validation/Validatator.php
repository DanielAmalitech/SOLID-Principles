<?php

class Validatator
{
    private $rules;

    public function addRule(ValidationRule $rule)
    {

        $this->rules[] = $rule;
    }


    public function validate($input): mixed
    {
        $response = false;
        foreach ($this->rules as $rule) {
            $response = $rule->validate($input);
            if(!$response && !is_bool($response)){
                $errors[]= $response;
                return $errors;
            }
        }

        return $response;
    }
}
