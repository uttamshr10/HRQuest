<?php
session_start();

// Check if the admin is logged in, if not, redirect to login page
if(!isset($_SESSION['admin_username'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
  </head>
   <body>
   <div id="container">
    
   
   <div id="body">
        Human Resources Management System - Manager
        </div>
        <div id="header">
            <!-- <a href="adminDashboard.php">Home</a> -->
            <a href="jobpost.php">Post Job</a>
            <a href="employees.php">Employees</a>
            <a href="admin_attendance.php">Attendance</a>
            <a href="admin_payroll.php">Payroll</a>
            <a href="appliedJob.php">Hire</a>
            <a href="sendmail.php">Send Email</a>
            <a href="logout.php">Logout</a>
        </div>
        </div>
    </body>
   

</html>