<?php
$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 90, 'Science' => 78),
    'Student 2' => array('Math' => 92, 'English' => 88, 'Science' => 95),
    'Student 3' => array('Math' => 78, 'English' => 86, 'Science' => 80)
);
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "$student's Average Grade: $average\n";
    }
}
calculateAverageGrades($studentGrades);
?>
