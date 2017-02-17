<?php require('process.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DWA 15 :: Assignment 2 - PHP</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://maxcdn.bootswatchcdn.com/bootstrap/3.3.7/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/a2.css" />
</head>
<body>
    <header><h1>Are we alone?</h1></header>
    <div class="container-fluid">

        <!-- INTRO SECTION -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 intro">
                <p class="lead">Humanity has often wondered if there is evidence
                of life in the universe beyond our own. Dr. Frank Drake, an
                American astronomer and astrophysicist, was one of the pioneers
                in the search for extraterrestrial intelligence.  He helped to
                found <a href="http://www.seti.org/">SETI</a>, perform many of
                the earliest observational attempts to detect extraterrestrial
                communication and he developed the Drake Equation.</p>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- RESULT SECTION -->
        <?php if($displayResult): ?>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 formula">
                    <h2>The Result. We are not alone.<br />
                    <small>
                    Based on the calculations you entered there are
                    <span class="result"><?=$n?></span>
                    communicating civilizations in our Milky Way Galaxy alone.
                    If intelligent life exists within our home galaxy then
                    it surely would exist in others.  Estimates vary
                    but among scientists an acceptable range is between 100
                    billion and 200 billion galaxies in the Universe.
                    </small>
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
        <?php else: ?>
        <!-- EQUATION SECTION -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 formula">
                <h2>Drake equation<br />
                <small>
                N = R* • f<sub>p</sub> • n<sub>e</sub> • f<sub>l</sub> •
                f<sub>i</sub> • f<sub>c</sub> • L
                </small>
                </h2>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br />

        <!-- USER INPUT SECTION -->
        <div class="row">
            <div class="col-md-2"></div>

            <!-- FORM :: BEGIN -->
            <div class="col-md-8">
                <form method="GET" action="">

                <!-- 1. SELECT R VALUE -->
                <div class="form-group">
                    <label for="formulaR">Step 1: Enter the Average Rate of Star
                    Formation in our Galaxy</label>

                    <p class="hint">In 1961, Dr. Drake and his collegues
                    originally provided a conservative estimate of this value at
                    one star per year. Current calculations from NASA and the
                    European Space Agency provide estimates of star formation
                    between 1.5 - 3 stars per year.
                    </p>
                    <select class="form-control" name="formulaR"
                        id="formulaR" required>
                        <option value="">
                            STEP 1 - SELECTION NEEDED
                        </option>
                        <option value="1.0">
                            1 star.  Original estimate
                        </option>
                        <option value="1.5">
                            1.5 stars. Current NASA/ESA minimum estimate
                        </option>
                        <option value="2.0">
                            2 stars.
                        </option>
                        <option value="2.5">
                            2.5 stars.
                        </option>
                        <option value="3.0">
                            3 stars.  Current NASA/ESA maximum
                        estimate</option>
                    </select>
                </div>
                <br />

                <!-- 2. RADIO fp VALUE -->
                <div class="form-group">
                    <label for="formulaFP">Step 2: What fraction of stars in the
                    galaxy have planets</label>

                    <p class="hint">Early estimates believed this figure was
                    between one fifth to half of all stars had planets. Recent
                    discoveries suggest this number is closer to 100%.
                    Exoplanets are being found around every star.</p>

                    <div class="row">
                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.1">10%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.2">20%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.3">30%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.4">40%
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.5">50%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.6">60%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.7">70%
                        </div>

                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.8">80%
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <input type="radio" name="formulaFP" value="0.9">90%
                        </div>

                        <div class="col-md-9">
                            <input type="radio" name="formulaFP" value="1.0"
                            checked>100%. (Current research states that this is
                            likely the rule)<br>
                        </div>
                    </div>
                </div>
                <br />

                <!-- 3. INPUT ne VALUE -->
                <div class="form-group">
                    <label for="formulaNE">Step 3: Average number of planets per
                    star that can potentially support life</label>

                    <p class="hint">The original estimates forecast between 1 to
                    5 planets. Data from the Kepler space observatory and other
                    scientific discoveries have challenged scientists to revise
                    calculations and to weigh other considerations in their
                    evaluations of the number planets that may exist within
                    'habitable' zones.  Kepler space mission data would suggest
                    this number is roughly 0.4.
                    </p>
                    <input type="text" name="formulaNE" id="formulaNE"
                        placeholder="0.4" required/>
                </div>
                <br />

                <!-- 4. INPUT fl VALUE -->
                <div class="form-group">
                    <label for="formulaFL">Step 4: Fraction of those planets
                    that actually develop life</label>
                    <p class="hint">Drake's initial calculation estimated that
                    100 percent of all planets that could develop life would
                    develop life.
                    </p>
                    <input type="text" name="formulaFL" id="formulaFL"
                        placeholder="1.0" min="0" required/>
                </div>
                <br />

                <!-- 5. INPUT fi VALUE -->
                <div class="form-group">
                    <label for="formulaFI">Step 5: Fraction of planets bearing
                    life on which intelligent, civilized life, has developed
                    </label>

                    <p class="hint">Drake, also optimistically, assumed that 100
                    percent of these planets would eventually develop
                    intelligent life.</p>
                    <input type="text" name="formulaFI" id="formulaFI"
                        placeholder="1.0" min="0" max="1" required/>
                </div>
                <br />

                <!-- 5. INPUT fc VALUE -->
                <div class="form-group">
                    <label for="formulaFC">Step 6: Fraction of those
                    civilizations that have developed communications</label>
                    <p class="hint">Drake's calculation projected that between
                    10-20% of intelligent life would communicate.</p>
                    <input type="text" name="formulaFC" id="formulaFC"
                        placeholder="0.2" min="0" max="1" required/>
                </div>
                <br />

                <!-- 6. INPUT L VALUE -->
                <div class="form-group">
                    <label for="formulaL">Step 7: Length of time over which such
                    civilizations release detectable signals into space</label>
                    <p class="hint">The original estimates forecasted between
                    1000-100,000,000 years.  Figures can be wildly different.
                    </p>
                    <input type="text" name="formulaL" id="formulaL"
                        placeholder="320.0" min="0" required/>
                </div>
                <input type="submit" class="btn btn-primary btn-small">
                <br />
                <br />
                <br />
            </form>
            </div>
            <!-- FORM :: END -->
            <div class="col-md-2"></div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
