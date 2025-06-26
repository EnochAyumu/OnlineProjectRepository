<?php 
  session_start();
  include_once('../db_connection/connection.php'); 

  if(isset($_SESSION['student_Session'])!="")
    {
      header("Location: index.php");
      exit;
    }

    if(isset($_POST['btn-login']))
        {
        $student_id = $con->real_escape_string(trim($_POST['student_id']));
        $password = $con->real_escape_string(trim($_POST['password']));

        $query = $con->query("SELECT student_id,password FROM students_tb WHERE student_id='$student_id'");
        $row=$query->fetch_array();
        
      if(password_verify($password, $row['password']))
      {
        $_SESSION['student_Session'] = $row['student_id'];
        header("Location: index.php");
      }
      else{
    $msg = "<div class='alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Student ID or Password does not exists !
        </div>";
  }
  
  $con->close();
  
}




?>
<!DOCTYPE html>
<html>
  <?php include"../includes/userheader.php" ?>
  <body>

    <div class="container">
      <h2>Student Login</h2>

             <?php
      if(isset($msg))
        {
          echo $msg;
        }
        else{
          ?>
                <div class='alert alert-info'>
            <h2> Enter Details to Login </h2>
          </div>
                <?php
        }
        ?>
    <form method="post" >


  <div class="input-group">
    <span class="input-group-addon">Student ID </span>
    <input id="username" type="text" class="form-control" name="student_id" required >
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  </div>
  <div class="input-group">
    <span class="input-group-addon"> Password</span>
    <input id="password" type="password" class="form-control" name="password" required>
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  </div>
    <div class="row">
    <button type="submit" class="col-sm-2 btn btn-default" name="btn-login" id="btn-login">
                <span class="glyphicon glyphicon-log-in"></span> &nbsp; LOGIN
        </button><div class="col-sm-2"></div>
        <div class="col-sm-3">Or NEW! (Set Your Password to LOGIN)</div>
  
     <a href="set_password.php"><input type="button" class="col-sm-2 btn btn-default" value="Set"/></a><br />
  </div>
 </form>
    </div>

  </body>

</html>