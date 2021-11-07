<?php

$presentTime = new DateTime;
echo $presentTime->format("m-d-y H:i") .  '<br>';

$destinationTime = new DateTime;

$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(16, 29);
echo $destinationTime->format("m-d-y H:i") .  '<br>';
$interval = $presentTime->diff($destinationTime);
echo 'la difference est de ' . $interval->format("%Y-%M-%D-%H-%M-%S");