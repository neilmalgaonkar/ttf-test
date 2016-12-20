<?php

interface IPolicy {
    public function getPolicyName();
    public function calculatePolicyAmount($d, $e, $f);
    public function hasSpecialCalculation();
    public function calculateSpecialAmount($d, $e, $f);
    public function getPolicyAmount();
}