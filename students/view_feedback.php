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
      <th>Date</th>
      <th>Details</th>
    </tr>
</thead>
<?php
$query = "SELECT * FROM feedback WHERE student_id=".$_SESSION['student_Session'];
$result = $con->query($query);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <tbody>
    <tr>
      <td><?php echo $row["res_date"];?></td>
      <td><?php echo $row["details"];?></td>
    </tr>
  </tbody>
   <?php   
    }
      } else {
          echo "There is no feedback for you";
      }
      $con->close();
?>
</div>
</table>
<a href="index.php"><input type="button" class="col-sm-2 btn btn-default" value="Home"/></a><br />
</body>
</html>