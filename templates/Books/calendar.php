<?php
// Set the timezone to your desired location
date_default_timezone_set('America/New_York');

// Get the current year and month
$year = date('Y');
$month = date('n');

// Output the calendar tables for each month until the same month next year
for ($i = 0; $i < 12; $i++) {
    // Get the number of days in the month
    $num_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // Create a DateTime object for the first day of the month
    $first_day = new DateTime("$year-$month-01");

    // Determine the day of the week the first day falls on (0 = Sunday, 1 = Monday, etc.)
    $day_of_week = $first_day->format('w');

    // Create an array of day labels
    $day_labels = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

    // Output the calendar table
    echo '<h2>' . date('F Y', strtotime("$year-$month-01")) . '</h2>';
    echo '<table class="table">';
    echo '<tr>';

    foreach ($day_labels as $label) {
        echo '<th>' . $label . '</th>';
    }

    echo '</tr>';

    // Output the days of the month
    echo '<tr>';
    for ($j = 0; $j < $num_days + $day_of_week; $j++) {
        if ($j < $day_of_week) {
            echo '<td></td>';
        } else {
            $day = $j - $day_of_week + 1;
            echo '<td>' . $day . '</td>';
        }
        if ($j % 7 == 6) {
            echo '</tr><tr>';
        }
    }
    echo '</tr>';

    echo '</table>';

    // Move to the next month
    $month++;
    if ($month >= 12) {
        $month = 1;
        $year++;
    }
}
