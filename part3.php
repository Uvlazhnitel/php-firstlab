<?php

// Define a function to check if Independence Day (November 18) is followed by a holiday.
function isIndependenceDayHoliday($year) {
    // Convert the date November 18 of the given year into a timestamp.
    $independenceDay = strtotime("$year-11-18");
    
    // Check if November 18 falls on a Saturday (6) or Sunday (7).
    // If so, it implies the next Monday is observed as a holiday.
    if (date('N', $independenceDay) >= 6) {
        return true; // Return true if it's a holiday.
    }
    return false; // Return false otherwise.
}
$end=2026;
// Loop from the year $year to 2024 to check and print if the next Monday after November 18 is a holiday.
for ($year = 2015; $year <= $end; $year++) {

    if ($year <= 2024) {
        // Adjust the message for the year 2024 to reflect a future event.
        if (isIndependenceDayHoliday($year)) {
            echo "The next Monday after November 18, $year will be a holiday.<br>";
        } else {
            echo "The next Monday after November 18, $year will not be a holiday.<br>";
        }
    } else {
        // For years before 2024, keep the past tense message.
        if (isIndependenceDayHoliday($year)) {
            echo "The next Monday after November 18, $year was a holiday.<br>";
        } else {
            echo "The next Monday after November 18, $year was not a holiday.<br>";
        }
    }
}

?>
