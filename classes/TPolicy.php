<?php

require_once(__DIR__ . '/AbstractPolicy.php');

class TPolicy extends AbstractPolicy {
    protected $amount = 0;
    protected $name = 'T';
    protected $hasSpecialCalculation = false;

    public function calculatePolicyAmount($d, $e, $f) {
        if($this->hasSpecialCalculation()) {
            $this->amount = $this->calculateSpecialAmount($d, $e, $f);
        } else {
            $this->amount = $d - (($d * $f) / 100);
        }
    }
}