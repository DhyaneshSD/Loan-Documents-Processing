<?php
$conn = mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($conn));
$pol_nm=$_POST['policy_name'];
$pol_type=$_POST['policy_type'];
$period=$_POST['period'];
$premium=$_POST['premium'];
$qi ="INSERT INTO apply_for_policies (policy_name,policy_type,tenure,premium) VALUES ('$pol_nm','$pol_type','$period','$premium')";
mysqli_query($conn,$qi) or die(mysqli_error($conn));
echo "<script>alert('New Policy created successfully!!!')</script>";
echo "<script>window.location.href='CreatePolicy.php';</script>";
                     
?>