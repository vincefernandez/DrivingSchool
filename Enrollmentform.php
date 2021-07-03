<?php 
if(isset($_POST['EnrollSubmit'])){
    
    ?>
    
    <!-- <div class="alert alert-success" role="alert" style="margin-top: 100px;">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div> -->
<script>alert('We sent you an email');</script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>enroll</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/images/favicon.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/modified.css" rel="stylesheet">

</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center  header-backgroundblack ">


        <div class="container d-flex align-items-center ">

            <div class="logo mr-auto">
                <h1 class="text-light">
                    <img src="assets/images/Logo.png" alt="">
                    <a href="index.html">JYBG Driving School</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php#About">About</a></li>
                    
                    <li><a href="index.php#Services">Services</a></li>
                    <li><a href="index.php#cta">Enroll Now!</a></li>
                    <li><a href="index.php#Portfolio">Portfolio</a></li>
                    <!-- <li><a href="#pricing">Pricing</a></li> -->
                    <li><a href="index.php#team">Team</a></li>
                   
                    <li><a href="index.php#contact">Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>

    
<section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out" style="margin-top: 80px;">
                    <div class="text-center">
                    <h2>Enrollment Form</h2>
                    <p>Drive With Us!</p>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="addressress">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>09123456789</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <form action="Enrollmentform.php" method="post" role="form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="fn" class="form-control" id="fn" placeholder="Your First Name" required/>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="ln" id="ln" placeholder="Your Last Name" required>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                            <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number" required/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Complete Address" required />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <select name="courses" id="course" name="courses" class="form-control" onchange="js(event)">
                                
                              
                                <option value="TDC" id="TDC">Theoretical Driving Course</option>
                                    <option value="PDC" id="PDC">Practical Driving Course</option>
                                    <option value="MPDC" id="MPDC">Motorcycle Practical Driving Course</option>
                                    <option value="PC" id="RDC">Regular Driving Course</option>
                                    <option value="PC" id="PDC">Private Driving Course</option>
                                </select>
                            <!-- <input type="combo" class="form-control" name="address" id="address" placeholder="Address" data-rule="minlen:11" data-msg="Please enter a Valid Address" /> -->
                                <div class="validate"></div>
                            </div>
                           
                            
                            
                            <div class="text-right"><button type="submit" name="EnrollSubmit">Submit<i class="ri-arrow-right-line"></i>
                        </a></button></div>
                            
                        </form>

                    </div>

                </div>

            </div>
        </section>
       <!-- ======= Footer ======= -->
<footer id="footer">
        <div class="container">
            <h3>JYBG Driving School</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, reiciendis blanditiis facilis temporibus voluptates quae pariatur non quisquam neque sequi?</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#GroupName">Group Name</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="index.php" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js.js"></script>

</body>

</html>