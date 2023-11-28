<?php
session_start();

// Read and return the current values of the stopwatch
if (isset($_SESSION['centiseconds'])) {
    echo $_SESSION['displayMinutes'] . ":" . $_SESSION['displaySeconds'] . ":" . $_SESSION['displayCentiseconds'];
} else {
    echo "Counter not initialized.";
}
?>
