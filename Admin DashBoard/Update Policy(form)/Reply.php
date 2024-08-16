<?php 
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($conn));


$reply=$_POST['reply'];

$qi= "UPDATE query SET reply='$reply' WHERE sr_no=$id";
mysqli_query($conn,$qi) or die(mysqli_error($conn));
echo "<script>alert(' Reply sent successfully!!!')</script>";
echo "<script>window.location.href='Replyform.php?id=$id';</script>";

            
?>