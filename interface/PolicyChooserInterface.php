<?php

interface PolicyChooser {
    public function chooseRightPolicies($a, $b, $c);
    public function getRightPolicies();
}