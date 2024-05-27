<?php
session_start();
error_reporting(0);
include('includes/config.php');?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
    <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
    <link rel="stylesheet" href="css/main.css" media="screen" >
    <script src="js/modernizr/modernizr.min.js"></script>
    <title>SLIATE</title>
    <link rel="icon" type="image/icon" href="images/icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <meta charset="UTF-8">

    
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="find-result.php">RESULTS</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="staff.php">STAFF</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">ADMIN</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1 style="color:white !important;">Student Result Management</h1>
    </section>
    
    <!-----------JavaScript for Toggle Small Menu-------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-120px";
        }
    </script>
    
    <!-------- Staff convert to result------->
    <section class="staff">        
        <div class="row-staff">
            <div class="staff-col">
                <section class="stafftestimonials">
                <h2>The results of Advanced Technological Institute Kurunegala </h2>
                <P>Please enter your Index number and select your Department</P><br>
                <!-- the form search result  -->
                <div class="">
                            <div class="">
                                <div class="">
                                </div>
                            </div>
                            <div class="">
                                <form action="result.php" method="post">
                                	<div class="">
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Index Number" autocomplete="off" name="rollid"><br><br>
                                	    </div>
                                      <div class="">
                                        <select name="class" class="form-control" id="default" required="required">
                                        <option value="">Select Class</option><br><br>
                                        <?php $sql = "SELECT * from tblclasses";
                                        $query = $dbh->prepare($sql); $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); if($query->rowCount() > 0) {
                                        foreach($results as $result) { ?>
                                        <option value="<?php echo htmlentities($result->id); ?>">
                                          <?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section);
                                          ?>
                                        </option>
                                        <?php }} ?>
                                        </select><br><br>
                                          </div>
                                          <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <button type="submit" class="hero-btn red-btn">Search<span class="btn-label btn-label-right"></span></button>
                                            <div class="clearfix"></div><br><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel -->
                <!--  End the form search result  -->
                </section>
            </div>
        </div>
        
    </section>
  
    <!-----------Footer-------->
    <section class="footer">
        <h2>About US</h2>
        <div class="row">
            <div class="footer-col">
                <h3>SLIATE MAIN</h3>
                <ul>
                    <li>
                        <a href="https://moe.gov.lk/" target="_blank">Ministry of Higher Education</a><br>
                    </li>
                    <li>
                        <a href="https://www.ugc.ac.lk/" target="_blank">University Grant Commission</a><br>
                    </li>
                    <li>
                        <a href="https://www.gov.lk/" target="_blank">www.gov.lk</a><br>
                    </li>
                    <li>
                        <a href="http://www.sliate.ac.lk/news/past-papers" target="_blank">Model and Past Papers</a><br>
                    </li>
                    <li>
                        <a href="http://www.sliate.ac.lk/" target="_blank">SLIATE Main Web page</a><br>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Navigations</h3>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="find-result.php">RESULTS</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="staff.php">STAFF</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">ADMIN</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Us</h3>
                <p>22/1,Wilgoda rd,<br>Kurunegala<br><br>
                <b>Phone:</b> +94372229583<br><b>Email:</b> atikurunegala@sliate.ac.lk</p>
            </div>
            <div class="footer-col">
                <h3>Social Media</h3>
                <ul>
                    <li>
                        <a href="https://web.facebook.com/atiku.edu.lk" target="_blank">Facebook</a><br>
                    </li>
                    <li>
                        <a href="https://x.com/AlumniAtiku?s=20" target="_blank">Twitter</a><br>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@SLIATEOfficial" target="_blank">Youtube</a><br>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/isuru-wickramasinghe-b5b8a529b/" target="_blank">Linkedin</a><br>
                    </li>
                </ul>
            </div>
        </div>
        <p>© Copyright ATI Kurunegala. All Rights Reserved<br>
            Designed by ATI Kurunegala</p>
    </section>
</body>
</html>