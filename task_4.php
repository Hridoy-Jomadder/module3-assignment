<?php

$studentGrades = [
    'student1' => ['Math' => 88, 'English' => 78, 'Science' => 91],

    'student2' => ['Math' => 82, 'English' => 87, 'Science' => 67],

    'student3' => ['Math' => 68, 'English' => 57, 'Science' => 95]
];

function calculateAverage($avg)
{
    foreach ($avg as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        echo "Average number for $student: $average ";
        if ($average >= 80) {
            echo 'Grade : A+';
        } else if ($average >= 70 && $average < 80) {
            echo "Grade : A-";
        } else if ($average >= 60 && $average < 70) {
            echo "Grade : B";
        } else if ($average >= 50 && $average < 60) {
            echo "Grade : C";
        } else if ($average >= 40 && $average < 50) {
            echo "Grade : D";
        } else {
            echo 'fail';
        }

        echo "\n";
    }
}

calculateAverage($studentGrades);
