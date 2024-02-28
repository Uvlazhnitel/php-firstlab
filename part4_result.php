<?php
    // Retrieve start and end years from POST request.
    $start = $_POST['start'];
    $end = $_POST['end']; 

    // Function to check if the day after November 18 is a holiday.
    // This is based on the condition that if November 18 falls on a weekend,
    // the following Monday is observed as a holiday.
    function isIndependenceDayHoliday($start) {
        // Convert November 18 of the given year into a timestamp.
        $independenceDay = strtotime("$start-11-18");
        
        // Check if November 18 falls on a Saturday (6) or Sunday (7).
        // The `date` function 'N' parameter returns the day of the week (1 for Monday, 7 for Sunday).
        // If true, the next Monday is observed as a holiday.
        if (date('N', $independenceDay) >= 6) {
            return true; // Indicate it's a holiday.
        }
        return false; // Otherwise, it's not a holiday.
    }

    // Check if the 'start' variable is empty to ensure the user has entered a start year.
    if(trim($start) == "" || trim($end) == "" || !is_numeric($start) || !is_numeric($end) || $start > $end || $start < 0 || $end < 0) {
            echo "Error: Please enter valid start and end years (positive integers) with the start year less than or equal to the end year.";
            exit;  
        }else{
        // Loop from the start year to the end year to check and print if the day after November 18 is a holiday.
        for ($year = $start; $year <= $end; $year++) {
            // Adjust the message based on whether the year is past or future relative to 2024.
            if ($year >= 2024) {
                // For years from 2024 onwards, use future tense.
                if (isIndependenceDayHoliday($year)) {
                    echo "The next Monday after November 18, $year will be a holiday.<br>";
                } else {
                    echo "The next Monday after November 18, $year will not be a holiday.<br>";
                }
            } else {
                // For years before 2024, use past tense.
                if (isIndependenceDayHoliday($year)) {
                    echo "The next Monday after November 18, $year was a holiday.<br>";
                } else {
                    echo "The next Monday after November 18, $year was not a holiday.<br>";
                }
            }
        }
    }
?>
