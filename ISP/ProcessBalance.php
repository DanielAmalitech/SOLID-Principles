<?php

interface ProcessBalance {

    public function check( int $PIN , string $accountNumber): float;
}