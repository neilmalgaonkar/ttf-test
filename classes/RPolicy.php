<?php

require_once(__DIR__ . '/AbstractPolicy.php');

class RPolicy extends AbstractPolicy {
    protected $amount = 0;
    protected $name = 'R';
    protected $hasSpecialCalculation = true;

    public function calculatePolicyAmount($d, $e, $f) {
        if($this->hasSpecialCalculation()) {
            $this->amount = $this->calculateSpecialAmount($d, $e, $f);
        } else {
            $this->amount = $d + (($d * ($e - $f)) / 100);
        }
    }

    public function calculateSpecialAmount($d, $e, $f) {
        return (2 * $d) + (($d * $e) / 100);
    }
}