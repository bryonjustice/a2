<?php
require('Form.php');

# Drake equation: N = R* • fp • ne • fl • fi • fc • L
# Setting default values for the formula fields
# If the form has errors the formula will return 0
$r = 0;
$fp = 0;
$ne = 0;
$fl = 0;
$fi = 0;
$fc = 0;
$l = 0;

$form = new DWA\Form($_GET);

if(isset($_GET['step1'])) {
    $r = $_GET['step1'];
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
# Drake equation: N = R* • fp • ne • fl • fi • fc • L
$n = $r * $fp * $ne * $fl * $fi * $fc * $l;


# the calculation is ready to display
if($n>0) {
    $displayResult = 'DISPLAY';
}
else {
    $displayResult = '';
}
