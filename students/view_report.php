<?php
    session_start();
    include('../db_connection/connection.php');

    if(!isset($_SESSION['student_Session'])){
      header("Location: index.php"); 
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../includes/userheader.php');?>
</head>
<body>

<div class="container"style="margin-top:50px;" >
  <h1 style="text-align:center; color:navy;">Feedback</h1><hr />
  <table class="table" border="1" style="margin-left:10px;">
  <thead >
    <tr class="info">
     <th>ID</th>
      <th>Project 1 </th>
      <th>project 2 </th>
     
    </tr>
</thead>
<?php
$query = "SELECT student_id,project1,project2 FROM project_tb WHERE student_id=".$_SESSION['student_Session'];
$result = $con->query($query);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <tbody>
    <tr>
      <td><?php echo $row["student_id"];?></td>
      <td><?php echo $row["project1"];?></td>
      <td><?php echo $row["project2"];?></td>
    </tr>
  </tbody>
   <?php   
    }
      } else {
          echo "Report not Uploaded contact your supervisor";
      }
      $con->close();
?>
</div>
</table>
<a href="index.php"><input type="button" class="col-sm-2 btn btn-default" value="Home"/></a><br />
</body>
</html>