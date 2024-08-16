<?php
// Start session
session_start();

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Initialize variables
$upload_message = "";

// Handle document upload if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['loan-documents']) && !empty(array_filter($_FILES['loan-documents']['name']))) {
        $upload_dir = 'Uploads/';  // Ensure this directory exists and has the correct permissions

        // Create upload directory if it does not exist
        if (!is_dir($upload_dir)) {
            if (!mkdir($upload_dir, 0755, true)) {
                $upload_message = "Failed to create upload directory.";
                echo '<div class="alert alert-danger">' . htmlspecialchars($upload_message) . '</div>';
                exit();
            }
        }

        $file_count = count($_FILES['loan-documents']['name']);
        $errors = [];
        $files_uploaded = false;

        for ($i = 0; $i < $file_count; $i++) {
            $file_name = $_FILES['loan-documents']['name'][$i];
            $file_tmp = $_FILES['loan-documents']['tmp_name'][$i];
            $file_error = $_FILES['loan-documents']['error'][$i];

            // Check for file upload errors
            if ($file_error === UPLOAD_ERR_NO_FILE) {
                // If no file was selected
                continue;
            } elseif ($file_error !== UPLOAD_ERR_OK) {
                $errors[] = "Error with file: $file_name. Error code: $file_error.";
                continue;
            }

            // Sanitize file name
            $file_name = preg_replace('/[^a-zA-Z0-9\.\-_]/', '', $file_name);
            $destination = $upload_dir . basename($file_name);

            // Move uploaded file to the "Uploads" directory
            if (move_uploaded_file($file_tmp, $destination)) {
                $files_uploaded = true;
            } else {
                $errors[] = "Failed to upload: $file_name";
            }
        }

        if ($files_uploaded && empty($errors)) {
            $upload_message = '<div class="alert alert-success">Documents uploaded successfully.</div>';
        } elseif (!empty($errors)) {
            $upload_message = '<div class="alert alert-danger">' . implode('<br>', $errors) . '</div>';
        } else {
            $upload_message = "No files were uploaded.";
        }
    } else {
        $upload_message = "Please choose documents to upload.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Dashboard</title>

    <!-- Custom styles for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="AdminDashBoard.html">
                <div class="sidebar-brand-text mx-3">Consumer Bank</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Insurance.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Customer Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Settings -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Settings:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                        <a class="collapse-item" href="404.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Ask a Query -->
            <li class="nav-item">
                <a class="nav-link" href="AskQuery/AskQuery.html" target="_blank">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ask a Query</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="FeedBack/Feedback.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Give Feedback</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="p-4">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Customer Dashboard</h1>

                    <!-- Upload Documents Section -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Upload Loan Documents</h6>
                        </div>
                        <div class="card-body">
                            <!-- Display upload message -->
                            <?php if (!empty($upload_message)) : ?>
                                <div class="alert alert-info"><?php echo $upload_message; ?></div>
                            <?php endif; ?>

                            <!-- Document Upload Form -->
                            <form action="Insurance.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="idProof">ID Proof:</label>
                                    <input type="file" class="form-control-file" id="idProof" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="addressProof">Address Proof:</label>
                                    <input type="file" class="form-control-file" id="addressProof" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="incomeProof">Income Proof:</label>
                                    <input type="file" class="form-control-file" id="incomeProof" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="bankStatement">Bank Statement:</label>
                                    <input type="file" class="form-control-file" id="bankStatement" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="propertyDocs">Property Documents:</label>
                                    <input type="file" class="form-control-file" id="propertyDocs" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="employmentCert">Employment Certificate:</label>
                                    <input type="file" class="form-control-file" id="employmentCert" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="creditScore">Credit Score Report:</label>
                                    <input type="file" class="form-control-file" id="creditScore" name="loan-documents[]">
                                </div>
                                <div class="form-group">
                                    <label for="otherDocs">Other Relevant Documents:</label>
                                    <input type="file" class="form-control-file" id="otherDocs" name="loan-documents[]">
                                </div>
                                <button type="submit" class="btn btn-danger">Upload Documents</button>
                            </form>
                        </div>
                    </div>

                    <!-- AI Results Section -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">AI-Generated Results</h6>
                        </div>
                        <div class="card-body">
                            <!-- AI results will be displayed here -->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Consumer Bank 2024</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
