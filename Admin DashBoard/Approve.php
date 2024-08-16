<?php 
                        $ID=$_GET['id'];
                        $con=mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($con));
                           $q="UPDATE applied_policies SET status='Approved' WHERE Sr_no = '$ID' ";
                           mysqli_query($con,$q)or die (mysqli_error($con));
                           echo "<script> alert('Policy approved!!!'); </script>";
                           echo "<script> window.location.href='ApprovePolicy.php'; </script>";
                           
?>