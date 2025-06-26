<?php 
	session_start();
 include('../db_connection/connection.php');	

 if(isset($_POST['btn-upload']))
		
	    {
	    	$chapter_1=$_FILES['chapter_1']['name'];
			 $student_id = $_POST['student_id']; 
			 $location = "chapter_1/";
			 $filelocation = $location.$chapter_1; 
			 $tempchapter_1 = $_FILES["chapter_1"]["tmp_name"];

			 $result = move_uploaded_file($tempchapter_1,$filelocation);

		//If file was successfully uploaded in the destination folder
		 if($result) { 

			  $query = "UPDATE project_tb SET chapter_1 = '$chapter_1' WHERE student_id = '$student_id'"; 
			  $con->query($query); 
			  
			  $msg= "<div class='alert alert-success' >Your file <b><i>".$chapter_1."</i></b> have been successfully uploaded.</div"; 

		 }
			 else { 
			 $msg = "Sorry !!! There was an error in uploading your document"; 
			 }
		 

				$con->close();
				}
?>
	<!DOCTYPE html>
<html>
	<head>
		<?php include('../includes/userheader.php');?>
	</head>
<body>
<div class="container">
	<h2>UPLOAD YOUR DOCUMENT (Chapter One)</h2> 
	 	 <?php
		if(isset($msg))
			{
				echo $msg;
			}
			else{
		?>
	        <div class='alert alert-info'>
					Provide The Required Details 
				</div>
	         <?php
			}
		?>
	 <div class="row">
		<form role="form" method="post" enctype="multipart/form-data">
			
			<div class=" form-group col-sm-12">
		     <label class="col-sm-2 control-label" >Student ID</label>
		      <input type="text" class="form-control" name="student_id"  placeholder="Student ID" required/>
		     <br />
		</div>

	   	   <div class=" form-group col-sm-12">
		     <label class="col-sm-2 control-label" for="inputfile">Your File</label>
		      <input type="file" class="form-control" name="chapter_1" required />
		     <br />
		</div>
		</div>

        <div class="form-group">
     
            <button type="submit" class="col-sm-2 control-button btn btn-success" name="btn-upload">
    		  UPLOAD  &nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span>
			</button>			<div class="col-sm-6"></div>
		<div>
	           <a href="chapter.php"><input type="button" class="col-sm-2 btn btn-success" value="CHAPTERS"/></a><br />
		</div>
	  </div>
	</form>	
	</div><br />
	
  </div>		
 </body>
</html>