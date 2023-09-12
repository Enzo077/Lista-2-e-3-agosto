<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
            $startDate = new DateTime($_POST['start_date']);
            $endDate = new DateTime($_POST['end_date']);

            if ($startDate >= $endDate) {
                echo '<h2>Error: End date must be greater than the start date.</h2>';
            } else {
                $interval = $startDate->diff($endDate);
                echo '<h2>Result:</h2>';
                echo '<p>' . $interval->format('%a days, %h hours, %i minutes, %s seconds') . '</p>';
            }
        } else {
            echo '<h2>Error: Please provide both start and end dates.</h2>';
        }
        ?>
    </div>
</body>
</html>
