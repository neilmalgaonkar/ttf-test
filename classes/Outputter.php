<?php

class Outputter {
    private $policies = [];
    private $output = [];
    public function setPolicies(array $policies) {
        $this->policies = $policies;
    }

    public function prepareResponse($d, $e, $f) {
        foreach($this->policies AS $policy) {
            $row = array();
            $policy->calculatePolicyAmount($d, $e, $f);
            $row['X'] = $policy->getPolicyName();
            $row['Y'] = $policy->getPolicyAmount();
            $this->output[] = $row;
        }
    }

    public function getResponse() {
        return $this->output;
    }
}