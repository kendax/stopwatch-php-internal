<?php
session_start();

// Check if the primary unit of the stopwatch exists in the session,
//  initialize it if not
if (!isset($_SESSION['centiseconds'])) {
    $_SESSION['minutes'] = 0;
    $_SESSION['seconds'] = 0;
    $_SESSION['centiseconds'] = 0;
}

// Stop the stopwatch when it reaches 60 minutes
if ($_SESSION['minutes'] >= 60) {
    $_SESSION['minutes'] = 0;
    $_SESSION['seconds'] = 0;
    $_SESSION['centiseconds'] = 0;
    return;
}

$_SESSION['centiseconds']++;

// Set the limit for units past which they should reset to
// zero and increment the larger adjacent unit

if ($_SESSION['centiseconds'] === 100) {
    $_SESSION['centiseconds'] = 0;
    $_SESSION['seconds'] ++;

    if ($_SESSION['seconds'] === 60) {
        $_SESSION['seconds'] = 0;
        $_SESSION['minutes']++;
    }
}

// Format the stopwatch display to show leading zeros
$_SESSION['displayMinutes'] = ($_SESSION['minutes'] < 10) ? '0' . $_SESSION['minutes'] : $_SESSION['minutes'];
$_SESSION['displaySeconds'] = ($_SESSION['seconds'] < 10) ? '0' . $_SESSION['seconds'] : $_SESSION['seconds'];
$_SESSION['displayCentiseconds'] = ($_SESSION['centiseconds'] < 10) ? '0' . $_SESSION['centiseconds'] : $_SESSION['centiseconds'];

// Return the incremented values of the stopwatch
echo $_SESSION['displayMinutes'] . ":" . $_SESSION['displaySeconds'] . ":" . $_SESSION['displayCentiseconds'];
?>
