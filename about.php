<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SLIATE</title>
    <link rel="icon" type="image/icon" href="images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css"
    />
    <meta charset="UTF-8" />
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="index.html"><img src="images/logo.png" /></a>
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
      <h1>About Us</h1>
    </section>

    <!-----------JavaScript for Toggle Small Menu-------->
    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-120px";
      }
    </script>

    <!-----------about us content-------->
    <section class="about-us">
      <div class="row">
        <div class="about-us-col">
          <h2>Our Mission</h2>
          <p>
            "Creating Excellent Higher National and National Diplomates with
            Modern Technology for Sustainable Development"
          </p>
          <br /><br />
          <h2>Main Objectives</h2>
          <p>
            "To conduct Higher National Diploma and National Diploma courses in
            Technological and Business Studies and any other courses as may be
            determined by the Ministry of Higher Education. To plan and
            co-ordinate the technical education in Sri Lanka. To conduct the
            examination, evaluate students and to issue Higher National Diploma
            and National Diploma."
          </p>
          <br /><br />
          <h2>Our Vision</h2>
          <p>To Become the Centre of Excellence in Technological Education</p>
        </div>
      </div>
    </section>
    <section class="about-sliate">
      <div class="row">
        <div class="about-col">
          <h2>Sri Lanka Institute of Advanced Technological Education</h2>
          <p>
            The Ministry of Higher Education has already formulated policies and
            strategies and has been implementing the same to bring the education
            system of the country equivalent to the standards of the rest of the
            world. Sri Lanka Institute of Advanced Technical Education (SLIATE)
            is one of the leading government institutions in Higher Education
            sector in Sri Lanka which was established by the parliament act no
            29 of 1995, and it comes under the purview of the Ministry of Higher
            Education. In 2001 the name of the institution was amended to read
            as Sri Lanka Institute of Advanced Technological Education. It
            functions as an autonomous Institute for the management of Higher
            National and National Diploma courses.<br /><br />

            The main purposes of establishing SLIATE were to reform and
            restructure the entire technical and vocational education system in
            relation to the changing needs of economic development, to meet
            manpower requirements of national development strategies, and the
            promotion of privatization, with special concern for meeting the
            scarcity of trained technological manpower resources at the
            technician level.<br /><br />

            SLIATE is focusing on fostering Advanced Technical Education at a
            post-secondary level. It is mandated to establish Advanced
            Technological Institute (ATI) in every province for technological
            courses. At present it manages and supervises eleven ATIs and Five
            Sections. SLIATE is headed by a Director General (DG) while each of
            its institutes is headed by a Director. All academic sections of
            SLIATE are headed by Academic Coordinators. There are 16 ATIs
            operated by SLIATE island wide conducting a broad range of
            multi-disciplinary programs targeting A/L qualified students in Sri
            Lanka. ATI-Kurunegala is one of the ATIs which comes under SLIATE.
          </p>
          <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
          <img src="images/about.jpg" />
          <img src="images/about2.jpg" />
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
              <a href="https://moe.gov.lk/" target="_blank"
                >Ministry of Higher Education</a
              ><br />
            </li>
            <li>
              <a href="https://www.ugc.ac.lk/" target="_blank"
                >University Grant Commission</a
              ><br />
            </li>
            <li>
              <a href="https://www.gov.lk/" target="_blank">www.gov.lk</a><br />
            </li>
            <li>
              <a href="http://www.sliate.ac.lk/news/past-papers" target="_blank"
                >Model and Past Papers</a
              ><br />
            </li>
            <li>
              <a href="http://www.sliate.ac.lk/" target="_blank"
                >SLIATE Main Web page</a
              ><br />
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
          <p>
            22/1,Wilgoda rd,<br />Kurunegala<br /><br />
            <b>Phone:</b> +94372229583<br /><b>Email:</b>
            atikurunegala@sliate.ac.lk
          </p>
        </div>
        <div class="footer-col">
          <h3>Social Media</h3>
          <ul>
            <li>
              <a href="https://web.facebook.com/atiku.edu.lk" target="_blank"
                >Facebook</a
              ><br />
            </li>
            <li>
              <a href="https://x.com/AlumniAtiku?s=20" target="_blank"
                >Twitter</a
              ><br />
            </li>
            <li>
              <a href="https://www.youtube.com/@SLIATEOfficial" target="_blank"
                >Youtube</a
              ><br />
            </li>
            <li>
              <a
                href="https://www.linkedin.com/in/isuru-wickramasinghe-b5b8a529b/"
                target="_blank"
                >Linkedin</a
              ><br />
            </li>
          </ul>
        </div>
      </div>
      <p>
        © Copyright ATI Kurunegala. All Rights Reserved<br />
        Designed by ATI Kurunegala
      </p>
    </section>
  </body>
</html>
