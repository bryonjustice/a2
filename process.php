<?php
# Require the Form and DrakeEquation classes
require('Form.php');
require('DrakeEquation.php');

# Instantiate 1) a Form object for validation and 2) an equation result object
$form = new DWA\Form($_GET);
$formResult = new DrakeEquation();

# Reference: Drake equation: N = R* • fp • ne • fl • fi • fc • L
# Establish a base set of forumla values

$r = floatval($form->get('step1',0));
$fp = floatval($form->get('step2',0));
$ne = floatval($form->get('step3',0));
$fl = floatval($form->get('step4',0));
$fi = floatval($form->get('step5',0));
$fc = floatval($form->get('step6',0));
$l = floatval($form->get('step7',0));

# Check for any individual field errors and alert the user
if($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'step1' => 'required|float',
            'step2' => 'required|float',
            'step3' => 'required|min:0|float',
            'step4' => 'required|min:0|max:1.0|float',
            'step5' => 'required|min:0|max:1.0|float',
            'step6' => 'required|min:0|max:1.0|float',
            'step7' => 'required|numeric|min:0',
        ]
    );
}

# calculate the result of N
$n = ($formResult->calculate($r,$fp,$ne,$fl,$fi,$fc,$l));

# if the result ($n) is greater than zero the calculation is ready to display
if($n>0) {
    $displayResult = 'DISPLAY';
}
else {
    $displayResult = '';
}
