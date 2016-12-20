<?php

require_once ('classes/BestPolicyChooser.php');
require_once ('classes/SpecialPolicyChooser.php');
require_once('classes/Outputter.php');

$A = (bool) $_REQUEST['A'];
$B = (bool) $_REQUEST['B'];
$C = (bool) $_REQUEST['C'];
$D = intval($_REQUEST['D']);
$E = intval($_REQUEST['E']);
$F = intval($_REQUEST['F']);

try {
    $policyChooser = new SpecialPolicyChooser();
    $policyChooser->chooseRightPolicies($A, $B, $C);
    $rightPolicies = $policyChooser->getRightPolicies();
    $outputter = new Outputter();
    $outputter->setPolicies($rightPolicies);
    $outputter->prepareResponse($D, $E, $F);

    echo json_encode(array(
        'status' => 'success',
        'result' => $outputter->getResponse())
    );
} catch(Exception $e) {
    echo json_encode(array(
        'status' => 'error',
        'message' => $e->getMessage()
    ));
}