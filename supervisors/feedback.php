<?php
session_start();
 include('../db_connection/connection.php');
if(!isset($_SESSION['supSession']))
{
  header("Location: index.php");
}

if(isset($_POST['btn-sumbit']))
{
  $student_id = $con->real_escape_string(trim($_POST['student_id']));
  $details = $con->real_escape_string(trim($_POST['details']));
  
 
    $query = "INSERT INTO feedback(student_id,details,res_date) VALUES('$student_id','$details',now())";

    if($con->query($query))
    {
      $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Feedback sent  !
          </div>";
    }
    else
    {
      $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; feedback not sent  !
          </div>";
    }
  

}
?>

<!DOCTYPE html>
<html>
<?php include"../includes/userheader.php" ?>
<body>


<div class="container" style="margin-top:90px;" >
  <div class = "col-md-4">
  <form class="form-signin" method="post" id="register-form">
     <h2 class="form-signin-heading">FeedBack Form</h2><hr />
               <?php
                 if(isset($msg)){ 
                  echo $msg;
                      }
                      else{
                ?>
        <div class='alert alert-info'>
            <span class='glyphicon glyphicon-asterisk'></span> &nbsp; Send Feedback
        </div>
               <?php
                    }
               ?>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Student ID" name="student_id" required  />
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="10" cols="50"type="text" name="details" required > </textarea>
        </div><hr />
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-sumbit">
              <span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
            </button> 
          </div> 
  </form>
        </div>
      </div>
  </body>
</html>