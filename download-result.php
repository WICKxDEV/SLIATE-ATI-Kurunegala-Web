<?php
session_start();

require_once('includes/configpdo.php');


require"dompdf/autoload.inc.php";

use Dompdf\Dompdf; 

ob_start();
//error_reporting(0);
?>

<html>
<style>
body {
  padding: 10px;
  text-align: center;
}

table {
  width: 100%;
  margin: 20px auto;
  table-layout: auto;
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 1px;
  border: solid 1px;
  text-align: center;
}

      .campus {
            text-align: center;
        }

        .description {
            margin-top: 20px;
            text-align: center;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
</style>

    <!-- Campus Name -->
    <div class="logo">
        <h2>ATI Kurunegala</h2>
    </div>

<?php
// Function to calculate GPA
function calculateGPA($marks) {
    if ($marks >= 90) {
        return 4.0;
    } elseif ($marks >= 80) {
        return 3.0;
    } elseif ($marks >= 70) {
        return 2.0;
    } elseif ($marks >= 60) {
        return 1.0;
    } else {
        return 0.0;
    }
}

$totlcount = 0;
$rollid = $_SESSION['rollid'];
$classid = $_SESSION['classid'];

// Fetch student details
$query_student = "SELECT tblstudents.StudentName, tblstudents.RollId, tblstudents.RegDate, tblstudents.StudentId, tblstudents.Status, tblclasses.ClassName, tblclasses.Section FROM tblstudents JOIN tblclasses ON tblclasses.id = tblstudents.ClassId WHERE tblstudents.RollId = ? AND tblstudents.ClassId = ?";
$stmt_student = $mysqli->prepare($query_student);
$stmt_student->bind_param("ss", $rollid, $classid);
$stmt_student->execute();
$res_student = $stmt_student->get_result();

// Display student details
while ($result_student = $res_student->fetch_object()) { ?>
    <p><b>Student Name :</b> <?php echo htmlentities($result_student->StudentName); ?></p>
    <p><b>Student Roll Id :</b> <?php echo htmlentities($result_student->RollId); ?></p>
    <p><b>Student Class:</b> <?php echo htmlentities($result_student->ClassName); ?>(<?php echo htmlentities($result_student->Section); ?>)</p>
<?php }

// Display table header
?>
<table class="table table-inverse" border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Subject</th>    
            <th>Marks</th>
            <th>GPA</th>
        </tr>
    </thead>
    <tbody>
<?php
// Fetch and display results
$query_result = "SELECT t.StudentName, t.RollId, t.ClassId, t.marks, SubjectId, tblsubjects.SubjectName FROM (SELECT sts.StudentName, sts.RollId, sts.ClassId, tr.marks, SubjectId FROM tblstudents AS sts JOIN tblresult AS tr ON tr.StudentId = sts.StudentId) AS t JOIN tblsubjects ON tblsubjects.id = t.SubjectId WHERE (t.RollId = ? AND t.ClassId = ?)";
$stmt_result = $mysqli->prepare($query_result);
$stmt_result->bind_param("ss", $rollid, $classid);
$stmt_result->execute();
$res_result = $stmt_result->get_result();
$cnt = 1;

while ($row = $res_result->fetch_object()) {
    // Calculate GPA
    $marks = $row->marks;
    $gpa = calculateGPA($marks);
    
    // Display row
    ?>
    <tr>
        <td><?php echo htmlentities($cnt); ?></td>
        <td><?php echo htmlentities($row->SubjectName); ?></td>
        <td><?php echo htmlentities($marks); ?></td>
        <td><?php echo htmlentities($gpa); ?></td>
    </tr>
<?php 
    // Update total marks
    $totlcount += $marks;
    $cnt++;
}

// Calculate total marks and percentage
$outof = ($cnt - 1) * 100;
$percentage = ($totlcount * 100) / $outof;
?>
    <!-- <tr>
        <th scope="row" colspan="2">Total Marks</th>
        <td><b><?php echo htmlentities($totlcount); ?></b> out of <b><?php echo htmlentities($outof); ?></b></td>
    </tr>
    <tr>
        <th scope="row" colspan="2">Percentage</th>           
        <td><b><?php echo htmlentities($percentage); ?> %</b></td>
    </tr> -->
    </tbody>
</table>
</div>
<!-- Description -->
<div class="description">
        <p>This is the genarated result by ATI Kurunegala Website</p>
    </div>
</html>







<?php
$html = ob_get_clean();


$dompdf = new dompdf();

$dompdf->set_option('enable_html5_parser', TRUE);

$dompdf->loadHtml($html); 
 

$dompdf->setPaper('A4', 'landscape'); 
 

$dompdf->render(); 
 

$dompdf->stream("result");
?>