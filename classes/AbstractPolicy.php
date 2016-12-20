<?php

abstract class AbstractPolicy {
    protected $amount = 0;
    protected $name = '';
    protected $hasSpecialCalculation = false;

    public function getPolicyName() {
        return $this->name;
    }

    public function calculateSpecialAmount($d, $e, $f) {
        return 0;
    }

    public function getPolicyAmount() {
        return $this->amount;
    }

    public function hasSpecialCalculation() {
        return $this->hasSpecialCalculation;
    }

    public function setSpecialCalculation(boolean $flag) {
        $this->hasSpecialCalculation = $flag;
    }

    abstract public function calculatePolicyAmount($d, $e, $f);
}