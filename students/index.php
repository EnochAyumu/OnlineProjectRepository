<?php 
  session_start();
  include('../db_connection/connection.php'); 
  if(!isset($_SESSION['student_Session']))
 {
   header("Location: login.php");
  }

  $query = $con->query("SELECT * FROM students_tb WHERE student_id=".$_SESSION['student_Session']);
  //$row=$query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
	<?php include"../includes/userheader.php" ?>
	<body>
    <div class="container">
    <div class="container">
      <h2>Student</h2>
    <div>
       <a href="index.php"><input type="button" class="col-sm-2 btn btn-info" value="CANCEL"/></a><br />
    <div> <div class="col-md-8"></div>
      <a  class="btn btn-danger" href="logout.php?logout" role="button"><span class="glyphicon glyphicon-log-out col-md-2"></span>&nbsp; Logout</a> 
       
         <div class="row">
          <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Submit a Work</figcaption>
            <a class="btn btn-success" href="chapter.php" role="button">Click to Go</a>
          </div>
     
          <div class="col-md-3"><img src="../images/feedback.png" width="100px" height="100px" >
            <figcaption>View Feedback</figcaption>
            <a class="btn btn-success" href="view_feedback.php" role="button">Click to Go</a>
          </div>
        
        <div class="col-md-3"><img src="../images/report.jpg" width="100px" height="100px" >
          <figcaption>View Report</figcaption>
            <a class="btn btn-success" href="view_report.php" role="button">Click to Go</a>
          </div>

      
    </div>

		</div>

  </div>

	</body>

</html>