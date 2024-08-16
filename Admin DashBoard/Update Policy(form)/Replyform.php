<html>
<head>
<style>
#grad1 {
  height:740px;
  background-image: linear-gradient(to bottom,#05f7d3,#f7fafa);
}
</style>
</head>

<title>Reply</title>
 <link rel =" shortcut icon" href="img/assets/log.png" type="image">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<link rel="stylesheet" href="Reply.css">
<body>
   <?php
               $id=$_GET['id']; 
               $conn=mysqli_connect("localhost","root","","insurance_management") or die(mysqli_error($conn));
             $qs="SELECT * FROM query WHERE sr_no='$id'";
             $run_query=mysqli_query($conn,$qs)or die (mysqli_error($conn));
             while ($row = mysqli_fetch_array($run_query)) {
             $email= $row['email_id'];
             $nm= $row['name'];
             $dt= $row['dt'];
             $query= $row['query'];
             
          }
   ?>
<div id="grad1">
   <!-- Start Reply Form Section -->
   <section id="account">
<div class="container">
    <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Reply to the query</h3>
               <p class="subheading wow fadeInUp"> Let's Grow Together. </p>
			 </div>

		<div class="col-md-12 wow fadeInUp text-center">
         	<form method="post" action='Reply.php?id=<?php echo "$id";?>' name="Registration" id="Registration">
                <fieldset>
				  	<input name="mail" type="email" id="mail" value='<?php echo "$email"; ?>' />
					<input name="name" type="text" id="name" value='<?php echo "$nm"; ?>'/>
					<input name="dt" type="text" id="dt" value='<?php echo "$dt"; ?>'/>
					<input name="q" type="text" id="q" value='<?php echo "$query"; ?>'/>
          <input name="reply" type="text" id="reply" placeholder="Enter your reply" />
					<input type="submit" class="submit" id="submit" value="SUBMIT" />
				</fieldset>
			</form>
		</div>
    </div>
</div>
   </section>
   <!-- End Reply Form Section -->

     <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->

      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Consumer Bank</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2021
                  <a href="http://templatestock.co" target="_blank">Consumer Bank</a>
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