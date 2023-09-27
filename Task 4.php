<?php
$studentGrades = array(
    array("Math" => 90, "English" => 85, "Science" => 78),
    array("Math" => 88, "English" => 92, "Science" => 87),
    array("Math" => 75, "English" => 80, "Science" => 82)
);

function calculateAverageGrades($grades) {
    $averages = array();

    foreach ($grades as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averages[] = $average;
    }

    return $averages;
}

$averageGrades = calculateAverageGrades($studentGrades);

foreach ($averageGrades as $index => $average) {
    echo "Student " . ($index + 1) . " Average Grade: " . $average . "\n";
}
?>
