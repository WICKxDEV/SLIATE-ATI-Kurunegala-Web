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
    
    <!-------- Staff------->
    <section class="staff">        
        <div class="row-staff">
            <div class="staff-col">
                <section class="stafftestimonials">
                <!-- <h2>The results of Advanced Technological Institute Kurunegala </h2>
                <P>Please enter your Index number and select your Department</P><br> -->
                <!-- the form search result  -->
                <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h2 class="title" align="center">Result of the recent examination</h2>
                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="">

                                <div class="">
                              
                             

                                    <div class="">
                                        <div class="">
                                            <div class="">
                                                <div class="">
<?php

$rollid=$_POST['rollid'];
$classid=$_POST['class'];
$_SESSION['rollid']=$rollid;
$_SESSION['classid']=$classid;
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=:rollid and tblstudents.ClassId=:classid ";
$stmt = $dbh->prepare($qery);
$stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>
<p><b>Student Name :</b> <?php echo htmlentities($row->StudentName);?></p>
<p><b>Student Roll Id :</b> <?php echo htmlentities($row->RollId);?>
<p><b>Student Class:</b> <?php echo htmlentities($row->ClassName);?>(<?php echo htmlentities($row->Section);?>)
<?php }

    ?>
                                            </div>
                                            <div class="panel-body p-20">







                                                <table class="table table-hover table-bordered">
                                                <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Subject</th>    
                                                            <th>Marks</th>
                                                        </tr>
                                               </thead>
  


                                                	
                                                	<tbody>
<?php                                              
// Code for result

 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,tblsubjects.SubjectName from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)";
$query= $dbh -> prepare($query);
$query->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$query->bindParam(':classid',$classid,PDO::PARAM_STR);
$query-> execute();  
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($countrow=$query->rowCount()>0)
{ 

foreach($results as $result){

    ?>

                                                		<tr>
                                                <th scope="row"><?php echo htmlentities($cnt);?></th>
                                                			<td><?php echo htmlentities($result->SubjectName);?></td>
                                                			<td><?php echo htmlentities($totalmarks=$result->marks);?></td>
                                                		</tr>
<?php 
$totlcount+=$totalmarks;
$cnt++;}
?>
<tr>
                                                <th scope="row" colspan="2">Total Marks</th>
<td><b><?php echo htmlentities($totlcount); ?></b> out of <b><?php echo htmlentities($outof=($cnt-1)*100); ?></b></td>
                                                        </tr>
<tr>
                                                <th scope="row" colspan="2">Percntage</th>           
                                                            <td><b><?php echo  htmlentities($totlcount*(100)/$outof); ?> %</b></td>
                                                             </tr>
<tr>
                                                <th scope="row" colspan="2">Download Result</th>           
                                                            <td><b><a href="download-result.php">Download </a> </b></td>
                                                             </tr>

 <?php } else { ?>     
<div class="alert alert-warning left-icon-alert" role="alert">
                                            <strong>Notice!</strong> Your result not declare yet
 <?php }
?>
                                        </div>
 <?php 
 } else
 {?>

<div class="alert alert-danger left-icon-alert" role="alert">
strong>Oh snap!</strong>
<?php
echo htmlentities("Invalid Roll Id");
 }
?>
                                        </div>



                                                	</tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="form-group">
                                                           
                                                            
                                                        </div>

                                </div>
                                <!-- /.row -->
  
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                  
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

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
                    <li>
                        <a href="index.html">Home</a><br>
                    </li>
                    <li>
                        <a href="about.html">About</a><br>
                    </li>
                    <li>
                        <a href="course.html">Course</a><br>
                    </li>
                    <li>
                        <a href="news.html">News</a><br>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a><br>
                    </li>
                    <li>
                        <a href="staff.html">Staff</a><br>
                    </li>
                    <li>
                        <a href="contact.html">Contacts</a><br>
                    </li>
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