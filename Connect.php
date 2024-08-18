<!-- <?php
// $conn=mysqli_connect("localhost","root","","loan_processing") or die(mysqli_error($conn));
 ?>	 -->

<?php
// MongoDB Connection

require 'vendor/autoload.php'; // If you're using Composer

$mongoHost = 'mongodb+srv://your-username:your-password@cluster0.d2wo8.mongodb.net/?retryWrites=true&w=majority';
$mongoClient = new MongoDB\Client($mongoHost);
$mongoDb = $mongoClient->selectDatabase('your-database-name');

// MySQL Connection

$mysqlHost = 'localhost'; // Use the Cloud SQL connection name if you're connecting from App Engine
$mysqlUser = 'your-username';
$mysqlPassword = 'your-password';
$mysqlDb = 'your-database-name';

// Create MySQL connection
$mysqli = new mysqli($mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDb);

// Check MySQL connection
if ($mysqli->connect_error) {
    die("MySQL connection failed: " . $mysqli->connect_error);
}

// Optional: Check MongoDB connection
try {
    $mongoDb->listCollections(); // This will throw an exception if the connection fails
    echo "MongoDB connection successful.";
} catch (Exception $e) {
    die("MongoDB connection failed: " . $e->getMessage());
}

// If you need to perform actions with the databases, you can use $mongoDb and $mysqli

?>

