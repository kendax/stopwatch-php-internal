<?php
session_start();

// reset the primary values of the stopwatch to zero
if (isset($_SESSION['centiseconds'])) {
    $_SESSION['minutes'] = 0;
    $_SESSION['seconds'] = 0;
    $_SESSION['centiseconds'] = 0;
} else {
    echo "Counter not initialized.";
}
?>
