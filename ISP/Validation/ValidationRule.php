<?php

interface ValidationRule
{
    public function validate($data) : mixed;
}