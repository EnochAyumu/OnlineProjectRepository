<?php
session_start();

if(!isset($_SESSION['student_Session']))
{
  header("Location: login.php");
}
else if(isset($_SESSION['student_Session'])!="")
{
  header("Location: index.php");
}

if(isset($_GET['logout']))
{
  session_destroy();
  unset($_SESSION['student_Session']);
  header("Location: login.php");
}
?>