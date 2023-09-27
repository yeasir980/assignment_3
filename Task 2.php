<?php 
$numbers = array(1, 2, 3, 4,5,6,7,8,9,10);
function odd($n) {
    return $n % 2 !== 0;
}
$evenNumbers = array_filter($numbers, 'odd');
print_r($evenNumbers);
?>
