<?php

class DrakeEquation {

    /**
	  * Properties
	  * Drake equation: N = R* • fp • ne • fl • fi • fc • L
	  */

    private $r;  # Equates to R* in the equation
    private $fp; # Equates to fp in the equation
    private $ne; # Equates to ne in the equation
    private $fl; # Equates to fl in the equation
    private $fi; # Equates to fi in the equation
    private $fc; # Equates to fc in the equation
    private $l;  # Equates to L in the equation

	  public function calculate(Float $r, Float $fp, Float $ne, Float $fl,
    Float $fi, Float $fc, Float $l) {
		    return $this->process($r, $fp, $ne, $fl, $fi, $fc, $l);
	  }

    private function process(Float $r, Float $fp, Float $ne, Float $fl,
    Float $fi, Float $fc, Float $l) {
		    $n = $r * $fp * $ne * $fl * $fi * $fc * $l;

        return $n;
	  }

} # eoc
