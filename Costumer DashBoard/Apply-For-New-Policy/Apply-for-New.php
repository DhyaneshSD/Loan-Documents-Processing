<html>
<head>
<style>
#grad1 {
  height:1680px;
  background-image: linear-gradient(to bottom,#05f7d3,#05f7d3);
}
</style>
</head>

<title>Policy Application(Consumer Bank)</title>
 <link rel =" shortcut icon" href="img/assets/log.png" type="image">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<link rel="stylesheet" href="Apply-for-New.css">
<body>
<?php 
                        $pol_nm=$_GET['id'];
                        $conn=mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($conn));
                           $qs="SELECT * FROM apply_for_policies WHERE policy_name='$pol_nm' ";
                           $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
                           while ($row = mysqli_fetch_array($run_query)) {
                            $pol_nm= $row['policy_name'];
                             $pol_type= $row['policy_type'];
                              $period= $row['tenure'];
                               $premium= $row['premium'];
                          
                           
?>

<div id="grad1">
   <!-- Start Apply-for-New Form Section -->
   <section id="account">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Apply for a Policy</h3>
               <p class="subheading wow fadeInUp"> Let's Grow Together. </p>
			 </div>
			   <div class="col-md-12 wow fadeInUp"><h3>Personal Information</h3></div>
               
               <form method="POST" action="insert.php" name="Registration" id="Registration">
            <div class="col-md-12 wow fadeInUp text-center">
                 <fieldset>
                    <input name="fullname" type="text" id="fullname" placeholder="Enter Your Fullname"/></fieldset></div>

					 <div class="col-md-12 wow fadeInUp text-center">
                  <fieldset>
					  <input name="address" type="text" id="address" placeholder="Enter Your Address"/></fieldset></div>

				<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="city" type="text" id="city" placeholder="Enter Name of your City"/></fieldset></div>

				<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="state" type="text" id="state" placeholder="Enter Name of your State"/></fieldset></div>

				<div class="col-md-4 wow fadeInUp text-center">
                 <fieldset>
					  	<input name="country" type="text" id="country" placeholder="Enter Name of your Country"/></fieldset></div>

				<div class="col-md-5 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="mobile" type="number" id="mobile" placeholder="Enter Your Mobile-Number"/></fieldset></div>

				<div class="col-md-7 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="email" type="email" id="email" placeholder="Enter Your Email Address"/></fieldset></div>

				<div class="col-md-6 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="nationality" type="text" id="nationality" placeholder="Enter Your Nationality"/></fieldset></div>

				<div class="col-md-6 wow fadeInUp text-center">
                  <fieldset>
                    <input name="age" type="number" id="age" placeholder="Enter your Age"/>
					</fieldset></div>
			
			<div class="col-md-12 wow fadeInUp"><h3>Date Of Birth</h3></div>
		<div class="col-md-12 wow fadeInUp text-center">
                  <fieldset>
                  <input name="dob" type="date" id="dob" placeholder="Enter Your Date of Birth"/></fieldset></div>
					 

				<div class="col-md-12 wow fadeInUp"><h3>Gender</h3></div>
			 <div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  <input name="gender" type="radio" id="gender" value="male"/>
					  <label for ="gender">Male</label>
					  </fieldset></div>
				<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  <input name="gender" type="radio" id="gender" value="female"/>
					  <label for ="gender">Female</label>
					  </fieldset></div>
			<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  <input name="gender" type="radio" id="gender" value="other"/>
					  <label for ="gender">Other</label>
					  </fieldset></div><br><br>
					
						<div class="col-md-12 wow fadeInUp"><h3>Guardian's Info</h3></div>
					 <div class="col-md-12 wow fadeInUp text-center">
                  <fieldset>
                    <input name="fullname1" type="text" id="fullname1" placeholder="Enter Guardian's fullname"/></fieldset></div>

					<div class="col-md-12 wow fadeInUp"><h3>Document Info</h3></div>
				<div class="col-md-6 wow fadeInUp text-center">
                  <fieldset>
					  <input name="adhaar" type="text" id="adhaar" placeholder="Enter Your Adhaar Card Number"/></fieldset></div>
			<div class="col-md-6 wow fadeInUp text-center">
                  <fieldset>
		<input name="pan" type="text" id="pan" placeholder="Enter Your Pan Card Number"/></fieldset></div>
 
	<div class="col-md-12 wow fadeInUp"><h3>Nominee Info</h3></div>	<br>	
 <div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
               <input name="fullname2" type="text" id="fullname2" placeholder="Enter Nominee's fullname"/></fieldset></div>

			<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
                    <input name="age2" type="number" id="age2" placeholder="Enter Nominee Age">
					</fieldset></div>
					<div class="col-md-4 wow fadeInUp text-center">
                  <fieldset>
					  	<input name="email1" type="email" id="email1" placeholder="Enter Nominee Email Address"/></fieldset></div>

				 <div class="col-md-12 wow fadeInUp text-center">
                  <fieldset>
					  <input name="address1" type="text" id="address1" placeholder="Enter Nominee Address"/></fieldset></div>
            
            <div class="col-md-12 wow fadeInUp"><h3>Policy Info</h3></div>	<br>	
				<div class="col-md-4 wow fadeInUp text-center">
               <h3> Policy name</h3>
                  <fieldset>
				  	<input name="policy-name" type="text" id="policy-name" value='<?php echo "$pol_nm" ;?>'/></fieldset></div>
				
				<div class="col-md-4 wow fadeInUp text-center">
              <h3>Policy type</h3>
                  <fieldset>
				  	<input name="policy-type" type="text" id="policy-type" value='<?php echo "$pol_type" ;?>'/></fieldset></div>
						
		<div class="col-md-4 wow fadeInUp text-center">
              <h3>Policy period</h3>
                  <fieldset>
				  	<input name="period" type="text" id="period" value='<?php echo "$period" ;?>' /></fieldset></div>
				
		<div class="col-md-4 wow fadeInUp text-center">
						<h3>Enter Policy Start Date</h3>
                  <fieldset>
					  	<input name="tenure" type="Date" id="tenure" placeholder="Enter start date"/></fieldset></div>

			<div class="col-md-4 wow fadeInUp text-center">
			<h3>Enter Policy Maturity Date</h3>
                  <fieldset>
					  	<input name="maturity" type="date" id="maturity" placeholder="Enter Maturity Date"/></fieldset></div>
                  <div class="col-md-4 wow fadeInUp text-center">

         <h3> Policy Premium</h3>
                  <fieldset>
                  <input name="premium" type="number" id="premium" value='<?php echo "$premium" ;?>'/></fieldset></div>

					
				 <div class="col-md-12 wow fadeInUp text-center">
             <fieldset><input type="submit" class="submit" id="submit" value="SUBMIT" />
				</fieldset></div>

               </form>
           <?php  } ?>
            </div>
            </div>
      </div>
   </section>
   <!-- End Apply-for-New Form Section -->

     <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->

      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Consumer Bank</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2021
                  <a href="">Consumer Bank</a>
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="#">
                           <i class="icon ion-social-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-googleplus"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-pinterest"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-skype"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-dropbox"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-vimeo"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-youtube"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->

   </footer>
   <!-- End Footer 1 -->
 </div>

 </body>
 </html>