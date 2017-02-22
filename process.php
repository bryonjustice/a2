<?php
# Require the Form and DrakeEquation classes
require('Form.php');
require('DrakeEquation.php');

# Instantiate 1) a Form object for validation and 2) an equation result object
$form = new DWA\Form($_GET);
$formResult = new DrakeEquation();

# Reference: Drake equation: N = R* • fp • ne • fl • fi • fc • L
# Establish a base set of forumla values
$r = 0;
$fp = 0;
$ne = 0;
$fl = 0;
$fi = 0;
$fc = 0;
$l = 0;

# Override values if submitted
if(isset($_GET['step1'])) {
    $r = floatval($_GET['step1']);
}

if(isset($_GET['step2'])) {
    $fp = $_GET['step2'];
}

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

# If no errors then update the variables and compute the N result
if($form->isSubmitted()) {
    if (!$errors){
        # formula variables from submitted form
        # Drake equation: N = R* • fp • ne • fl • fi • fc • L
        if(isset($_GET["step1"])) {
            $r = $_GET["step1"];
        }

        if(isset($_GET["step2"])) {
            $fp = $_GET["step2"];
        }

        if(isset($_GET["step3"])) {
            $ne = $_GET["step3"];
        }

        if(isset($_GET["step4"])) {
            $fl = $_GET["step4"];
        }

        if(isset($_GET["step5"])) {
            $fi = $_GET["step5"];
        }

        if(isset($_GET["step6"])) {
            $fc = $_GET["step6"];
        }

        if(isset($_GET["step7"])) {
            $l = $_GET["step7"];
        }
    }
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
