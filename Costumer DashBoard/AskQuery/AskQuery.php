<?php
// Database connection
$connect = mysqli_connect("localhost", "root", "", "loan_processing");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['submit'])) {
    // Get and sanitize input
    $name = mysqli_real_escape_string($connect, $_POST['fullname']);
    $mail = mysqli_real_escape_string($connect, $_POST['email']);
    $date = mysqli_real_escape_string($connect, $_POST['date']); // Use the correct column name
    $msg = mysqli_real_escape_string($connect, $_POST['query']); // Ensure this matches the form field name

    // Prepare SQL statement
    $Query = "INSERT INTO `query` (email_id, name, dt, query) VALUES (?, ?, ?, ?)";

    // Initialize prepared statement
    $stmt = mysqli_prepare($connect, $Query);

    if ($stmt) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ssss", $mail, $name, $date, $msg);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Your query has been submitted successfully!'); window.location.href='askquery.html';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_stmt_error($stmt) . "'); window.location.href='askquery.html';</script>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error preparing statement: " . mysqli_error($connect) . "'); window.location.href='askquery.html';</script>";
    }

    // Close connection
    mysqli_close($connect);
}
?>
