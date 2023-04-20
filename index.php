<?php

$presentTime = new DateTime('2023-04-20 09:59:00');
$destinationTime = new DateTime('2024-07-17 15:27:14');

$presentTimeFormatted = $presentTime->format('m/d/Y A h:i');
$destinationTimeFormatted = $destinationTime->format('m/d/Y A h:i');

$dateInterval = $presentTime->diff($destinationTime);

$dateIntervalFormatted = $dateInterval->format('%y années, %m mois, %d jours, %h heures et %i minutes');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back to the future</title>
</head>
<body>
    <h1>Present time</h1>

    <div class="PT">
    <?= $presentTimeFormatted ?>
    </div>

    <h1>Destination Time</h1>

    <div class="DT">
    <?= $destinationTimeFormatted ?>
    </div>

    <h1>Interval</h1>
    <div class="IT">
        <?= $dateIntervalFormatted ?>
    </div>
</body>
</html>

