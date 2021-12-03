<?php

$input = file('AoC_inputs/aoc_day2_input.txt', FILE_IGNORE_NEW_LINES);

$horizontal = 0;
$vertical = 0;
foreach ($input as $direction) {
    $split = explode(' ', $direction);
    if ($split[0] === 'forward') {
        $horizontal += intval($split[1]);
    }
    if ($split[0] === 'up') {
        $vertical -= intval($split[1]);
    }
    if ($split[0] === 'down') {
        $vertical += intval($split[1]);
    }
}
echo "PART 1 ANSWER: " . $horizontal * $vertical . "\n\n";

$horizontal = 0;
$vertical = 0;
$aim = 0;

foreach ($input as $direction) {
    $split = explode(' ', $direction);
    if ($split[0] === 'forward') {
        $horizontal += intval($split[1]);
        $vertical += intval($split[1]) * $aim;
    }
    if ($split[0] === 'up') {
        $aim -= intval($split[1]);
    }
    if ($split[0] === 'down') {
        $aim += intval($split[1]);
    }
}
echo "PART 2 ANSWER: " . $vertical * $horizontal . "\n";
