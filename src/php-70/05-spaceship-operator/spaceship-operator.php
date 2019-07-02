<?php
/**
 * PHP 7 Spaceship Operator
 */
declare(strict_types = 1);
$fruits = ['apple', 'blackberry', 'cherry', 'dates'];

usort($fruits, function ($a, $b) {
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
});

print_r($fruits);

$fruits = ['apple', 'blackberry', 'cherry', 'dates'];

usort($fruits, function ($a, $b) {
    return $a <=> $b;
});

print_r($fruits);

# example from https://stackoverflow.com/a/30365399/8804338
echo 1 <=> 1; //outputs 0
echo 3 <=> 4; //outputs -1
echo 4 <=> 3; //outputs 1

# Return 0 if values on either side are equal
# Return 1 if value on the left is greater
# Return -1 if the value on the right is greater