<?php
  session_start();
  include('../db_connection/connection.php'); 
 
  if(isset($_POST['btn-set']))
  {
    $student_id = $con->real_escape_string(trim($_POST['student_id']));
    $password = $con->real_escape_string(trim($_POST['password']));
    
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    $check_student_id = $con->query("SELECT student_id FROM students_tb WHERE student_id='$student_id'");
    $count=$check_student_id->num_rows;
    
          if($count==0){
              $msg="The Student ID ".$student_id." Does not Exist.Please Contact the Admin" ;     
                  }else{
                   
                        $query = "UPDATE students_tb SET password='$new_password' WHERE student_id='$student_id'";
                        if($con->query($query)){
                            $msg = "<div class='alert alert-success'>
                                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Password successfully Set for Student ID 
                                  ".$student_id." Click <a class='btn btn-success' href='login.php'>LOGIN</a> !
                                </div>";
                              }else{
                                $msg = "<div class='alert alert-danger'>
                                      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Could not Set Password forStudent ID 
                                  ".$student_id." Contact Admin !
                                    </div>";
                       }
               }
           }
?>

<!DOCTYPE html>
<?php include('../includes/userheader.php');?>

<body>


  <div class="container">
    <form  method="post" >
        <h2 >Set PAssword </h2><hr />
        
        <?php
    if(isset($msg)){
      echo $msg;
    }
    else{
      ?>
            <div class='alert alert-warning'>
        <span class='glyphicon glyphicon-asterisk'></span> &nbsp; Enter Your student ID and password !
      </div>
            <?php
    }
    ?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Student ID" name="student_id" required  />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
        
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-set">
        <span class="glyphicon glyphicon-log-in"></span> &nbsp; SET
      </button>
            
        </div> 
      <a href="index.php"><input type="button" class="col-sm-2 btn btn-default" value="Home"/></a><br />
      </form>

    </div>
    
</div>

</body>
</html>