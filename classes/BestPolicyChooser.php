<?php
require_once(__DIR__ . '/../interface/PolicyChooserInterface.php');
require_once(__DIR__ . '/SPolicy.php');
require_once(__DIR__ . '/RPolicy.php');
require_once(__DIR__ . '/TPolicy.php');

class BestPolicyChooser implements PolicyChooser {
    private $bestPolicies = [];
    public function chooseRightPolicies($a, $b, $c) {
        if($a && $b && !$c) {
            $policy = new SPolicy();
            $this->bestPolicies[$policy->getPolicyName()] = $policy;
        } else if($a && $b && $c) {
            $policy = new RPolicy();
            $this->bestPolicies[$policy->getPolicyName()] = $policy;
        } else if(!$a && $b && $c) {
            $policy = new TPolicy();
            $this->bestPolicies[$policy->getPolicyName()] = $policy;
        } else {
            throw new Exception("No Valid Policies Available");
        }
    }

    public function getRightPolicies() {
        return $this->bestPolicies;
    }
}