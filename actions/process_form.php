<?php
// process_form.php

// Validate and sanitize the user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    // Output the sanitized name
    echo "<h2>Hello, " . htmlspecialchars($name) . "!</h2>";
}
?>
