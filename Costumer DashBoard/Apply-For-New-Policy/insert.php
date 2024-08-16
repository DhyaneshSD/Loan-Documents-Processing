<?php
$connect = mysqli_connect("localhost","root","","insurance_management") or die ("db error" . mysqli_error($connect));
echo "success";
//if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$mail=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$mob=$_POST['mobile'];
$nation=$_POST['nationality'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$guardian=$_POST['fullname1'];
$adhaar=$_POST['adhaar'];
$pan=$_POST['pan'];
$nominee_name=$_POST['fullname2'];
$nominee_age=$_POST['age2'];
$nominee_email=$_POST['email1'];
$nominee_add=$_POST['address1'];
$pol_nm=$_POST['policy-name'];
$pol_type=$_POST['policy-type'];
$period=$_POST['period'];
$premium_pd=$_POST['premium'];
$tenure=$_POST['tenure'];
$maturity=$_POST['maturity'];
$status='Under scrutiny';
$query ="INSERT INTO  applied_policies (email_id, Fullname, cust_address, city, state, country, contact_no, nationality, cust_age, dob, gender, guardian_name, adhaar_no, pan_no, nominee_nm, nominee_age, nominee_email, nominee_address, policy_name, policy_type, policy_period, premium_paid, tenure, maturity,status) VALUES ('$mail','$name','$address','$city','$state','$country','$mob','$nation','$age','$dob','$gender','$guardian','$adhaar','$pan','$nominee_name','$nominee_age','$nominee_email','$nominee_add','$pol_nm','$pol_type','$period','$premium_pd','$tenure','$maturity','$status');";
mysqli_query($connect,$query) or die(mysqli_error($connect));
echo "<script>alert('Requested for application!!!')</script>";
echo "<script>window.location.href='Apply-for-new.php?id=$pol_nm';</script>";
}    

?>