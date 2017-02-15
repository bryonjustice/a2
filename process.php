    <?php
    // formula variables from submitted form
    // Drake equation: N = R* • fp • ne • fl • fi • fc • L
    if(isset($_GET["formulaR"])) {
        $r = $_GET["formulaR"];
    }
    else {
        $r = 0;
    }

    if(isset($_GET["formulaFP"])) {
        $fp = $_GET["formulaFP"];
    }
    else {
        $fp = 0;
    }

    if(isset($_GET["formulaNE"])) {
        $ne = $_GET["formulaNE"];
    }
    else {
        $ne = 0;
    }

    if(isset($_GET["formulaFL"])) {
        $fl = $_GET["formulaFL"];
    }
    else {
        $fl = 0;
    }

    if(isset($_GET["formulaFI"])) {
        $fi = $_GET["formulaFI"];
    }
    else {
        $fi = 0;
    }

    if(isset($_GET["formulaFC"])) {
        $fc = $_GET["formulaFC"];
    }
    else {
        $fc = 0;
    }

    if(isset($_GET["formulaL"])) {
        $l = $_GET["formulaL"];
    }
    else {
        $l = 0;
    }

    // calculate the result of N
    // Drake equation: N = R* • fp • ne • fl • fi • fc • L
    $n = $r * $fp * $ne * $fl * $fi * $fc * $l;

    /*
    echo "formulaR is $r <br />";
    echo "formulafp is $fp <br />";
    echo "formulaNE is $ne <br />";
    echo "formulaFL is $fl <br />";
    echo "formulaFI is $fi <br />";
    echo "formulaFC is $fc <br />";
    echo "formulaL is $l <br />";
    */
    echo "Result is $n";
