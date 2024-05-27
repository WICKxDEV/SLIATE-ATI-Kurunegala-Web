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
    <section class="header">
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

      <div class="text-box">
        <h1>ATI KURUNEGALA</h1>
        <p>Welcome to the Advanced Technological Institute Kurunegala</p>
        <a href="course.php" class="hero-btn"
          >The Best Choice for Pursuing Higher Education.</a
        >
      </div>
    </section>

    <!-------- Courses------->
    <section class="courses">
      <h1>Courses We Offer</h1>
      <p>
        We conduct Higher National Diploma and National Diploma courses in
        Technological and Business Studies and any other courses as may be
        determined by the Ministry of Higher Education. To plan and co-ordinate
        the technical education in Sri Lanka. To conduct the
        examination,evaluate students and to issue Higher National Diploma and
        National Diploma.
      </p>

      <div class="row">
        <div class="course-col">
          <a href="hndit.php">
            <h3>HNDIT</h3>
            <p>
              Higher National Diploma in Information Technology-Candidates are
              selected through the order of merit in their GCE (A/L) examination
              and through an aptitude/ IQ test.
            </p>
          </a>
        </div>

        <div class="course-col">
          <a href="hnda.php">
            <h3>HNDA</h3>
            <p>
              Higher National Diploma in Accoutancy-Candidates are selected
              through on Z-Score
            </p>
          </a>
        </div>
        <div class="course-col">
          <a href="hnde.php">
            <h3>HNDE</h3>
            <p>
              Higher National Diploma in English-Candidates are selected through
              the Selection Test.
            </p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="course-col">
          <a href="hndthm.php">
            <h3>HNDTM</h3>
            <p>
              Higher National Diploma in Tourism and Hospitality
              Management-Candidates are selected through the Selection Test.
            </p>
          </a>
        </div>
        <div class="course-col">
          <a href="hndm.php">
            <h3>HNDM</h3>
            <p>
              Higher National Diploma in Management-Candidates are selected
              through the Selection Test.
            </p>
          </a>
        </div>
      </div>
    </section>
    <!-----------Campus---------->
    <section class="campus">
      <h1>Our Campus</h1>
      <p>Other ATI's of SLIATE</p>
      <div class="row">
        <div class="campus-col">
          <img src="images/colombo.png" />
          <div class="layer">
            <h3>COLOMBO</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="images/gampaha.png" />
          <div class="layer">
            <h3>GAMPAHA</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="images/kandy.png" />
          <div class="layer">
            <h3>KANDY</h3>
          </div>
        </div>
      </div>
    </section>
    <!-----------Services---------->
    <section class="services">
      <h1>Our Services</h1>
      <p>
        Government Institute which provides free education for students who have
        passed the Advancecd Level Examination.
      </p>
      <div class="row">
        <div class="services-col">
          <img src="images/lab.png" />
          <h3>Facilities</h3>
          <p>
            Mahapola Schorlaship.<br />
            Computer Lab Facility.<br />
            Library Facility.
          </p>
        </div>
        <div class="services-col">
          <img src="images/staff.png" />
          <h3>Education</h3>
          <p>
            Conducting Theory Lectures and Laboratory Practical Sessions by
            Qualifide Lecturers.
          </p>
        </div>
        <div class="services-col">
          <img src="images/office.png" />
          <h3>Office Works</h3>
          <p>
            <b><u>Monday and wednesday</u></b> - Training Letters,Results
            Sheets,Studentship Letters and Student Cancellation
          </p>
          <p>
            <b><u>Monday and Tuesday</u></b> - All kinds of Payments
          </p>
        </div>
      </div>
    </section>
    <!-----------testimonials---------->
    <section class="testimonials">
      <h1>What Our Student Says</h1>
      <p>
        Government Institute which provides free education for students who have
        passed the Advancecd Level Examination.
      </p>
      <div class="row">
        <div class="testimonials-col">
          <img src="images/kavisha.jpg" />
          <div>
            <p>
              The academic experience and the overall student experience have
              benefited my personal development hugely. If your ambition is to
              be a software engineer, network engineer, or any other IT-related
              career, I really recommend HNDIT
            </p>
            <h3>Kavisha</h3>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
          </div>
        </div>
        <div class="testimonials-col">
          <img src="images/malith.jpg" />
          <div>
            <p>
              This is the best place which you can get your higher education
              qualifications after A/L. There are 7 HND available for the
              students who has meet or exceed the minimum qualifications to
              enter.
            </p>
            <h3>Malith</h3>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
            <i class="fas fa-star" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </section>

    <!-----------Call to Action-------->
    <section class="cta">
      <h1>
        Enroll For Our various online Courses<br />
        Anywhere From The World
      </h1>
      <a href="contact.html" class="hero-btn">COTACT US</a>
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
