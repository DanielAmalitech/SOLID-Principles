
<?php

require_once 'ValidatorRuleInterface.php';
/**
 * AntelopeValidator
 */
class AntelopeValidator
{

    private $rules = [];

    /**
     * addRule
     *
     * @param  mixed $rule
     * @return void
     */
    public function addRule(ValidatorRuleInterface $rule)
    {


        // if (color == " ") {
        //     echo " wrong color";
        // }

        // if(name == " "){
        //     echo " error";
        // }

        // if(size= =0 ){
        //     echo "error size"
        // }


        $this->rules[] = $rule;
    }

    /**
     * validate
     *
     * @param  mixed $data
     */
    public function validate($data)
    {

        $results = [];

        foreach ($this->rules as $rule) {
            if ($rule->validate($data)) {
                $results[] = $rule->validate($data);
            }
        }

        return $results;
    }
}
