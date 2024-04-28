<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="assets/css/style.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SLIATE</title>
        <link rel="icon" type="image/icon" href="images/icon.png">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body class="">

    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a  href="index.html">HOME</a></li>
                    <li><a  href="about.html">ABOUT</a></li>
                    <li><a  href="course.html">COURSES</a></li>
                    <li><a  href="find-result.php">RESULTS</a></li>
                    <li><a  href="news.html">NEWS</a></li>
                    <li><a  href="gallery.html">GALLERY</a></li>
                    <li><a  href="staff.html">STAFF</a></li>
                    <li><a  href="contact.html">CONTACT</a></li>
                    <li><a href="index.php">ADMIN</a></li>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1  style="color:white !important;">Administrative and Academic Staff</h1>
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
    
 <!-------- Staff------->
 <section class="staff">        
        <div class="row-staff">
            <div class="staff-col">
                <section class="stafftestimonials">
                <!-- <h2>The results of Advanced Technological Institute Kurunegala </h2>
                <P>Please enter your Index number and select your Department</P><br> -->

    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="assets/images/user.png">
                </div>
                <div class="form-group nm_lk">
                    <h5>Student Result Management Login</h5>
                </div>
                <form class="" method="post">
                    <div class="form-group">
                    <input type="text" name="username"  id="inputEmail3" placeholder="UserName" name="email" class="form-control _ge_de_ol" type="text"  required="" aria-required="true">
                    </div>

                    <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" id="inputPassword3" placeholder="Enter Password" required="" aria-required="true">
                    </div>

                    <div class="checkbox form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                        Remember me
                        </label>
                    </div>
                    <a href="#">Forgot Password</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="_btn_04">Sign in</button>
                    </div>

                    <!-- <div class="form-group nm_lk"><p>Or Login With</p></div> -->
                </form>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="_lk_de">
                        <div class="">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="form-02-main">
      
    </section>
      
    <!--  End the form search result  -->
            </section>
          </div>
      </div>
        
  </section>
    
                   

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
