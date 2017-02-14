<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DWA 15 :: Assignment 2 - PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootswatchcdn.com/bootstrap/3.3.7/flatly/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/a2.css" />
    </head>
    <body>
        <h1>Assignment 2 - PHP</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
        <form method="GET" action="">
            <div class="form-group">
                <label for="formulaR">Average Rate of Star Formation in our galaxy</label>
                <select class="form-control" id="formulaR">
                    <option value="1.0">1 star/year (Drake's 1961 estimate)</option>
                    <option value="1.5">1.5 stars/year (Current NASA/ESA minimum estimate)</option>
                    <option value="2.0">2 stars/year</option>
                    <option value="2.5">2.5 stars/year</option>
                    <option value="3.0">3 stars/year (Current NASA/ESA maximum estimate)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formulaFP">Fraction of those stars that have planets</label>
                <select class="form-control" id="formulaFP">
                    <option value=".2">1/5 (Drake's 1961 minimum estimate)</option>
                    <option value=".5">Half (Drake's 1961 maximum estimate)</option>
                    <option value="1.0">1 (Current estimates believe this is the rule)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Average number of planets per star that can potentially support life</label>
                <select class="form-control" id="formulaFP">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="0.4">0.4 (Current estimate based on Kepler space mission data)</option>                                   
                </select>
            </div>

            <div class="form-group">
                <label for="">Fraction of those planets that actually develop life</label>
            </div>

            <div class="form-group">
                <label for="">Fraction of planets bearing life on which intelligent, civilized life, has developed</label>
            </div>

            <div class="form-group">
                <label for="">Fraction of those civilizations that have developed communications</label>
            </div>

            <div class="form-group">
                <label for="">Length of time over which such civilizations release detectable signals into space</label>
            </div>
            <input type="submit" class="btn btn-primary btn-small">

        </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>
</html>
