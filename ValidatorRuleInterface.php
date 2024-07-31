<?php 

interface ValidatorRuleInterface {
        
    /**
     * validate
     *
     * @param  mixed $data
     * @return mixed
     */
    public function validate($data) : mixed;
}