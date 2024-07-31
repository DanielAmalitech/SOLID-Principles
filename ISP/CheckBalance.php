<?php
require_once '../ISP/ProcessBalance.php';

class CheckBalance implements ProcessBalance {

    public function check(int $PIN, string $accountNumber): float
    {
      echo 101.0;
      return 0.0;
    }
    
}   

