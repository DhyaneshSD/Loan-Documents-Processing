<?php
// Assuming this is the logout script
session_start();
session_unset();
session_destroy();

// Redirect to home page
header("Location: /index.html"); // or your home page URL
exit();
?>
