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
      <h1>Higher National Diploma in Tourism & Hospitality Management</h1>
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

    <!-------- HND------->
    <section class="hnd">
      <h2>HNDTHM</h2>
      <div class="row">
        <div class="hnd-col">
          <h3>Course Duration: 3 years</h3>
          <h4>Mode of Conducting Programme</h4>
          <p>
            Full-Time Course ( During the weekdays)<br />
            Medium of instruction: - English
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>The Selection Criteria:</h3>
          <p>Based on Selection Test</p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>Entry Qualification</h3>
          <p>
            <u>Full Time</u><br />

            Passed the G.C.E. (A/L) examination in one sitting in any stream And
            Ordinary pass for English and Mathematics at the G.C.E. (O/L)
            examination
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>Course fees</h3>
          <p>No course fees for full time course.</p>
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
