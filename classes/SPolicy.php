<?php

require_once(__DIR__ . '/AbstractPolicy.php');

class SPolicy extends AbstractPolicy {
    protected $amount = 0;
    protected $name = 'S';
    protected $hasSpecialCalculation = true;

    public function calculatePolicyAmount($d, $e, $f) {
        if($this->hasSpecialCalculation()) {
            $this->amount = $this->calculateSpecialAmount($d, $e, $f);
        } else {
            $this->amount = $d + (($d * $e) / 100);
        }
    }

    public function calculateSpecialAmount($d, $e, $f) {
        return ($f + $d + (($d * $e) / 100));
    }
}