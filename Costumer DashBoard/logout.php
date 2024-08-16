<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to the login page
header("Location: ../Index.html");
 // Update this path if your login page is located elsewhere
exit();
?>
