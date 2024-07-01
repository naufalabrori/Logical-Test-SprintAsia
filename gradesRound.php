<?php
function roundGrade($grade) {
    // Calculate the nearest multiple of 5
    $nearestMultiple = ceil($grade / 5) * 5;

    // Check the difference between the grade and the nearest multiple
    $difference = $nearestMultiple - $grade;

    // Round up if the difference is less than 3 and grade is greater than or equal to 38
    return $difference < 3 && $grade >= 38 ? $nearestMultiple : $grade;
}

// Example usage
// The first index is number of student
$input = [4, -1, 67, 38, 33];
$numberStudent = array_shift($input);
$roundedGrades = [];

if ($numberStudent < 1 || $numberStudent > 60) {
    echo "Number of Students must be between 1 and 60";
} elseif ($numberStudent != count($input)) {
    echo "Number of Students and total input grades not the same";
} else {
    $isError = false;
    for ($i = 0; $i < $numberStudent; $i++) {
        if ($input[$i] >= 0 && $input[$i] <= 100) {
            $rounded = roundGrade($input[$i]);
            $roundedGrades[] = $rounded;
        } else {
            echo "Student " . ($i + 1) . " has a grade less than 0 or more than 100";
            $isError = true;
            break;
        }
    }
    if (!$isError) {
        print_r($roundedGrades); // Output: [75, 67, 40, 33]
    }
}
?>
