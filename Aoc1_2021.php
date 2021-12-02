<?php

$input = file('AoC_inputs/aoc_day1_input.txt', FILE_IGNORE_NEW_LINES);

$first_count = 0;
$prev = null;
foreach ($input as $line) {
	if (!$prev) {
		$prev = intval($line);
	} else {
		if (intval($line) > $prev) {
			$first_count++;
		}
		$prev = intval($line);
	}
}
echo "Part1 Solution: " . $first_count . "\n";

$index = 0;
$count = 0;
$times_ran = 0;
$array_count = count($input);
while ($index < $array_count - 2) {
	$curr = array_sum(array($input[$index], $input[$index + 1], $input[$index + 2]));
	if ($index === 0) {
		$prev = $curr;
	} else {
		if ($prev < $curr) {
			++$count;
		}
	}
	$prev = $curr;
	++$index;
}
echo "Part2 Solution: " . $count . "\n";
