<?php

interface ProcessTransaction {

 public function process(float $amount , string $accountNumber) : float;
    
}