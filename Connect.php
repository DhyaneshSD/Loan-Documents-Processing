<!-- <?php
// $conn=mysqli_connect("localhost","root","","loan_processing") or die(mysqli_error($conn));
 ?>	 -->

<?php
// Path to the Cloud SQL Proxy Unix socket
$socket_path = "/home/college_yk/cloudsql/solid-range-430210-c5:us-central1:ldp-6";

// Database credentials
$username = "root";  // Replace with your actual MySQL username
$password = "yashk@123";  // Replace with your actual MySQL password
$database = "ldp";  // Replace with your database name

// Create a connection to the MySQL database
$conn = mysqli_connect(null, $username, $password, $database, null, $socket_path);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
