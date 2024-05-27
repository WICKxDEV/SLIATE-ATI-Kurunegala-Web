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
      <h1>Our Certificate and Online Programs</h1>
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

    <!-------- NEWS------->
    <section class="news">
      <h2>NEWS & EVENTS</h2>
      <div class="row">
        <div class="news-col">
          <h3>18th Convocation 2023 - Issuing Cloaks and Garlands</h3>
          <p>
            Cloaks and Garlands will be issued from 10 th October 2023 to 17th
            October 2023 from 8.30 am to 3.45 pm at the ATI. Issuing dates are
            as follows;<br /><br />
            10 th October 2023 –Tourism and Hospitality Management 11 th October
            2023- Management 12 th October 2023 – IT (FT/PT) 13 th October 2023
            - English (FT/PT) 14 th October 2023 – Accountancy (FT/PT)<br /><br />
            You should submit the employability survey form on or before you get
            the cloak and garland. URL has published in SLIATE Web site.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="news-col">
          <h3>Extension - Online Exam Application</h3>
          <p>
            The last Date of submit online application is extended to 22
            December 2022
          </p>
        </div>
      </div>
      <div class="row">
        <div class="news-col">
          <h3>Blood Donation Program</h3>
          <p>
            🩸 Join Us in Saving Lives: Blood Donation Drive 🩸<br /><br />

            Date : ON 16th NOVEMBER 2023<br />
            Time : 9.00AM TO 3.00PM<br />
            Location : ATI KURUNEGALA<br /><br />

            🌟 About the Event:<br /><br />

            We invite you to be a hero and make a difference by participating in
            our Blood Donation Drive. This event is a crucial initiative aimed
            at replenishing blood supplies and ensuring that hospitals have an
            ample and ready stock to save lives.<br /><br />

            🚑 Why Donate Blood?<br /><br />

            Every drop counts, and your contribution can be a lifeline for
            someone in need. Whether for emergency surgeries, medical
            treatments, or accident victims, donated blood is an essential
            resource that can't be manufactured – it can only come from generous
            donors like you.<br /><br />

            🩸 What to Expect:<br /><br />

            Health Screening: Our team of medical professionals will conduct a
            brief health screening to ensure you are eligible to donate.<br /><br />

            Safe Environment: We follow strict safety and hygiene protocols to
            provide a secure environment for donors.<br /><br />

            Refreshments: Enjoy complimentary refreshments after your donation
            to replenish your energy. <br /><br />

            Community Support: Join hands with fellow community members and be
            part of a collective effort to make a positive impact.<br /><br />
          </p>
        </div>
        <div class="news-col">
          <img src="images/blood.png" />
        </div>
      </div>
      <div class="row">
        <div class="news-col">
          <p>
            💪 Your Contribution Matters:<br /><br />

            Every donor is a hero, and your willingness to donate is a powerful
            act of kindness that can save lives. Let's come together as a
            community to make a meaningful impact and spread the message that
            giving blood is giving life.<br /><br />

            📌 How to Participate:<br /><br />

            Register online at <a href="">SLIATE WEB</a>.<br />
            Walk-ins are also welcome on the day of the event.<br />
            📞 Contact Information : <b>Phone:</b> +94372229583<br /><br />

            For any inquiries or assistance, please contact [Organizer's Contact
            Information].<br /><br />

            Let's save lives together! Be a Blood Donor, Be a Hero! 🌟
          </p>
        </div>
      </div>
    </section>

    <!-----------blog content---------->
    <section class="blog-content">
      <h2>BLOG</h2>
      <p>About blog of the convercations & the cetificate programs</p>
      <div class="row">
        <div class="blog-left">
          <img src="images/certificate.jpg" />
          <h2>Graduation</h2>
          "Our blogger Gayani has just graduated from SLIATE! She shares her
          graduation day experience, and her final thoughts as she moves on from
          SLIATE and university life.<br /><br />

          I remember in the first year, hearing all about graduation from
          finalists. At the time, I didn’t know why graduates were getting so
          excited for the day; I thought graduation was a formality. Four years
          later, I can agree that graduation truly was a day I won’t forget. I
          wanted to share my graduation experiences with you, hopefully, you can
          start looking forward to the fantastic celebration which awaits you
          when you finish your diploma."<br /><br />

          SLIATE is a fantastic institute, and I am confident that it was
          perfect for me.<br /><br />

          In the morning, Gayani and her flatmates went to collect their robes
          in the Arts Centre. Getting her robes fitted was one of the most
          exciting moments. She rented her robes for the day, sending over her
          head size and height in advance to make sure they fitted perfectly.
          Countless fitters got all the graduands ready; finally graduation felt
          real. It’s great to show your family around the campus at graduation.
          Image credit: Sri Lanka Institute of Advanced Technological Education.
          Afterwards, Gayani attended the statistics celebration event held in
          the Mathematical Sciences Building. It was so nice to thank lecturers
          for their support throughout her diploma and to let them know about
          her next plans. It was also the perfect time to show her family the
          department, calm down before her graduation, and start taking a
          serious number of photos to commemorate the day.<br /><br />
          At 2.30pm they arrived at the Butterworth Hall for the ceremony to
          start. Chamber Choir, the Institute’s Brass Band, and organist set the
          scene as families and graduates got to their seats. Although there was
          the usual pomp and ceremonial procession to the front of the stage, it
          still felt like a big celebration. After the Chancellor stood and had
          said a few words, the graduations began. A host was on stage, tasked
          with reading out around 300 names over the course of the ceremony,
          with diploma, masters, and undergraduate students all graduating. I
          think everyone at graduation fears falling over, or their robes or hat
          falling down. Luckily for Gayani, there were no steps, and her name
          came and went so quickly that she hardly even thought about her fears
          as she walked across the stage. Due to the ongoing Covid pandemic,
          there wasn’t an opportunity for her to shake hands with the
          chancellor, but there was a chance to exchange a few words and
          acknowledge her with a nod of the head. Afterwards, she received her
          diploma and returned to her seat for the rest of the ceremony. Halfway
          through the graduations, Baroness Warwick of Undercliffe received an
          honorary doctorate, and a member of the SLIATE alumni community gave
          an inspirational talk on life after graduation. Gayani throws her
          mortarboard in the air next to the iconic Koan. Image credit: Gayani
          Alger.<br /><br />
          When every name had been read out and every person had walked across
          the Butterworth stage, the SLIATE Fanfare played out as graduates
          joined the ceremonial procession, ready for photos on the Piazza
          steps. After they had thrown their hats in the air as a cohort, Gayani
          spent time with her family. She showed her family around SLIATE
          proudly, giving her own tour of the campus. After four years at
          SLIATE, you truly get attached; it’s the environment that grew her up
          from a naïve, young 18-year-old to a confident woman ready to start
          her career. My last thoughts for you as I leave SLIATE University
          flies by so fast, so make a point of enjoying your time and
          remembering all the success you have achieved along the way.<br /><br />

          SLIATE is a fantastic institute, and I am confident that it was
          perfect for me. At the same time, no matter what or where you study,
          an institute can have challenges. Keep looking forward and do your
          best no matter the challenge. There will always be bumps in the road,
          but when you look back in the rear-view mirror, you will realize how
          far you’ve come. Celebrate your successes. During your time at the
          institute, there will be so many small successes and big successes
          that you should celebrate. University flies by so fast, so make a
          point of enjoying your time and remembering all the success you have
          achieved along the way.<br /><br />

          Take every opportunity you can at SLIATE in every sense – say yes to
          as many social invites, career events, and departmental jobs as you
          can. Your institute experience is personal to you; make it your own
          and enjoy the ride."

          <div class="comment-box">
            <h3>Leave a comment</h3>

            <form class="comment-form">
              <input type="text" placeholder="Enter Name" />
              <input type="email" placeholder="Enter Email" />
              <textarea rows="5" placeholder="Your comment"></textarea>
              <button type="submit" class="hero-btn red-btn">
                POST COMMENT
              </button>
            </form>
          </div>
        </div>
        <div class="blog-right">
          <h3>Post Categories</h3>
          <div>
            <span>Information Technology</span>
            <span>31</span>
          </div>
          <div>
            <span>English</span>
            <span>11</span>
          </div>
          <div>
            <span>Accountancy</span>
            <span>04</span>
          </div>
          <div>
            <span>Management</span>
            <span>16</span>
          </div>
          <div>
            <span>Tourism & Hospitality Management</span>
            <span>25</span>
          </div>
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
