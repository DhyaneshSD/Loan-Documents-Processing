<?php 
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($conn));

$pol_nm=$_POST['policy_name'];
$pol_type=$_POST['policy_type'];
$period=$_POST['period'];
$premium=$_POST['premium'];
$qi= "UPDATE apply_for_policies SET policy_name='$pol_nm', policy_type='$pol_type', tenure='$period', premium='$premium' WHERE ID=$id";
mysqli_query($conn,$qi) or die(mysqli_error($conn));
echo "<script>alert(' Policy updated successfully!!!')</script>";
echo "<script>window.location.href='UpdatePolicyform.php?id=$id';</script>";

         
?>