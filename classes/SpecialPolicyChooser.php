<?php

require_once(__DIR__ . '/BestPolicyChooser.php');

require_once(__DIR__ . '/SPolicy.php');
require_once(__DIR__ . '/RPolicy.php');
require_once(__DIR__ . '/TPolicy.php');

class SpecialPolicyChooser extends BestPolicyChooser {
    public function chooseRightPolicies($a, $b, $c) {
        parent::chooseRightPolicies($a, $b, $c);
        $this->bestPolicies = parent::getRightPolicies();
        if($a && $b && !$c) {
            $policy = new TPolicy();
            $this->bestPolicies[$policy->getPolicyName()] = $policy;
        } else if($a && !$b && $c) {
            $policy = new SPolicy();
            $this->bestPolicies[$policy->getPolicyName()] = $policy;
        }
    }

    public function getRightPolicies() {
        return $this->bestPolicies;
    }
}