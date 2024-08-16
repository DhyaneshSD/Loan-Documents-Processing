<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define the directory where files will be uploaded
    $uploadDir = 'uploads/';
    // Create the directory if it does not exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $uploadSuccess = true;
    $uploadErrors = [];

    // Loop through each uploaded file
    foreach ($_FILES['loan-documents']['tmp_name'] as $key => $tmp_name) {
        $fileName = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', basename($_FILES['loan-documents']['name'][$key]));
        $targetFile = $uploadDir . $fileName;

        // Attempt to move the uploaded file
        if (!move_uploaded_file($tmp_name, $targetFile)) {
            $uploadSuccess = false;
            $uploadErrors[] = "Failed to upload " . $fileName;
            error_log("Failed to upload " . $fileName . " to " . $targetFile);
        }
    }

    // Check if upload was successful
    if ($uploadSuccess) {
        // Redirect with success message
        header('Location: Insurance.html?uploadSuccess=true');
    } else {
        // Redirect with error messages
        $errorMessage = urlencode(implode(', ', $uploadErrors));
        header('Location: Insurance.html?uploadSuccess=false&errors=' . $errorMessage);
    }
    exit();
}
?>
