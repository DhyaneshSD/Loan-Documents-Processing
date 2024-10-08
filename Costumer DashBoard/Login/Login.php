<html>
<head>
<style>
#grad1 {
  height:740px;
  background-image: linear-gradient(to bottom,#05f7d3,#f7fafa);
}
</style>
</head>

<title>User-Login (Consumer Bank)</title>
 <link rel =" shortcut icon" href="img/assets/log.png" type="image">
 
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<link rel="stylesheet" href="Login.css">
 <body>
<div id="grad1">
 <!-- Start login Form Section -->
   <section id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">LOGIN</h3>
               <p class="subheading wow fadeInUp"> Let's Grow Together. </p>
            </div>
            <div class="col-md-12 wow fadeInUp text-center">
               <div id="message"></div>
               <form method="POST" action="Login.php">
                  <fieldset>
                     <input type="email" name="email" id="email" placeholder="Enter Your Email Address"/>
					 <input type="password" name="password" id="password" placeholder="Enter Your Password"/>
                  </fieldset>
                  <input type="submit" class="submit" id="submit" name="submit" value="LOGIN"/>
               </form>
            </div>
            </div>
      </div>
   </section>
   <!-- End login Form Section -->
   
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
 <?php
if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "loan_processing");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT email_id, password FROM user_login WHERE email_id = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $stmt->store_result();
    
    // Check if a user with the given email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($temail, $tpass);
        $stmt->fetch();

        // Verify the password
        if ($pass == $tpass) {  // Ideally, use password hashing here
            echo "<script>alert('Login successful!')</script>";
            echo "<script>window.location.href='Insurance.php?id=$mail';</script>";
        } else {
            echo "<script>alert('You have entered an incorrect password! Try again!')</script>";
        }
    } else {
        echo "<script>alert('You have entered an incorrect username! Try again!')</script>";
    }

    $stmt->close();
    mysqli_close($conn);
}
?>

 </body>
 </html>
  