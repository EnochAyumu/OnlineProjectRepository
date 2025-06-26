<?php 
  session_start();
  include('../db_connection/connection.php'); 
  if(!isset($_SESSION['student_Session']))
 {
   header("Location: login.php");
  }

?>
<!DOCTYPE html>
<html>
	<?php include"../includes/userheader.php" ?>
	<body>
    <div class="container">

      <h2>Submit Project Document</h2>
      <a href="index.php"><input type="button" class="col-sm-2 btn btn-info" value="CANCEL"/></a><br />
    <div> <div class="col-md-8"></div>
      <a  class="btn btn-danger" href="logout.php?logout" role="button"><span class="glyphicon glyphicon-log-out col-md-2"></span>&nbsp; Logout</a> 
         <div class="row">
          <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Chapter 1</figcaption>
            <a class="btn btn-info" href="1.php" role="button">Click to Go</a>
          </div>
     
          <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Chapter 2</figcaption>
            <a class="btn btn-info" href="2.php" role="button">Click to Go</a>
          </div>
        
        <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
          <figcaption>Chapter 3</figcaption>
            <a class="btn btn-info" href="3.php" role="button">Click to Go</a>
          </div>

       <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Chapter 4</figcaption>
            <a class="btn btn-info" href="1.php" role="button">Click to Go</a><br />
          </div>
     <div class="col-sm-12"><hr></div>
          <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Chapter 5</figcaption>
            <a class="btn btn-info" href="2.php" role="button">Click to Go</a>
          </div>
        
        <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
          <figcaption>Chapter 6</figcaption>
            <a class="btn btn-info" href="3.php" role="button">Click to Go</a>
          </div>

      <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
            <figcaption>Chapter 7</figcaption>
            <a class="btn btn-info" href="2.php" role="button">Click to Go</a>
          </div>
        
        <div class="col-md-3"><img src="../images/work.jpg" width="100px" height="100px" >
          <figcaption>Chapter 8</figcaption>
            <a class="btn btn-info" href="3.php" role="button">Click to Go</a>
          </div>


    </div>

		</div>

  </div>

	</body>

</html>