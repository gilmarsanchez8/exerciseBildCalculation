<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row styleRow">
            <form id="formCalculation">
                    Budget: <input type="number" name="budget" id="budget" min="1" required>
                    <input type="submit" value="Calculate">
            </form>
        </div>
        <br>
        <div class="row styleRow">
            <table id="tblInfoBildCalculation" class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Budget</th>
                        <th rowspan="2">Maximum Vehicle Amount</th>
                        <th colspan="4">Fees</th>
                    </tr>
                    <tr>
                        <th>Basic</th>
                        <th>Special</th>
                        <th>Association</th>
                        <th>Storage</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</html>