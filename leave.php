<?php 
   session_start();
   $id = isset($_SESSION['sess_userid']);
   $name = isset($_SESSION['sess_username']);
   if(!isset($_SESSION['sess_username'])){
     header('Location: index.php?err=2');
   }
   ?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(../img/leave.jpg)" style="height:100px;width:100;">
	<form method="post" action="">

<div align="center">
<font color="magenta"><h1><i><b>LEAVE FORM</b></i></h1></font>
</div>
<font color="red">
<div align="center">

<label><i><b>EMPLOYEE_NAME</b></i><br><input type="text" name="EMPLOYEE_NAME" pattern='[A-Za-z\\s]*' required></label><br><br>
<label><i><b>REQUEST_FOR_LEAVE </b></i><br><input type="text" name="REQUEST_FOR_LEAVE" pattern='[A-Za-z\\s]*' required></label><br><br>
<label><i><b>DESCRIPTION </b></i></label><br>
<input type="text"  name="DESCRIPTION" pattern='[A-Za-z\\s]*' required><br>
<label><i><b>FROM_DATE</b> </i><br><input type="date" name="FROM_DATE"></label><br><br>
<label><i><b>TO_DATE</b> </i><br><input type="date" name="TO_DATE"></label><br><br>
 <i><input type="submit" name="submit" class="btn btn-success"></i>
<i> <input type="reset" class="btn btn-success"></i>
</body>
</div>
</font>
</html>
<?php
   include('../admin/sc_config.php');
   if(isset($_POST['submit']))
   {
   
   $EMPLOYEE_NAME=$_POST['EMPLOYEE_NAME'];
   $REQUEST_FOR_LEAVE=$_POST['REQUEST_FOR_LEAVE'];
   $DESCRIPTION=$_POST['DESCRIPTION'];
   $FROM_DATE=$_POST['FROM_DATE'];
   $TO_DATE=$_POST['TO_DATE'];
    
$query=mysqli_query($con,"INSERT INTO
   `leaveform`(`id`,`EMPLOYEE_NAME`,
        `REQUEST_FOR_LEAVE`,
        `DESCRIPTION`,
        `FROM_DATE`,
        `TO_DATE`)
   VALUES ('".$_SESSION['sess_userid']."','".$EMPLOYEE_NAME."','".$REQUEST_FOR_LEAVE."','".$DESCRIPTION."','".$FROM_DATE."','".$TO_DATE."')");
/* $query=mysqli_query($con,"INSERT INTO
   `leaveform`(`EMPLOYEE_ID`,`EMPLOYEE_NAME`,
        `REQUEST_FOR_LEAVE`,
        `DESCRIPTION`,
        `FROM_DATE`,
        `TO_DATE`)
   VALUES ('".mysqli_real_escape_string($connect,$_SESSION['sess_userid'])."','".mysqli_real_escape_string($connect,$EMPLOYEE_NAME)."','".mysqli_real_escape_string($connect,$REQUEST_FOR_LEAVE)."','".mysqli_real_escape_string($connect,$DESCRIPTION)."','".mysqli_real_escape_string($connect,$FROM_DATE)."','".mysqli_real_escape_string($connect,$TO_DATE)."')");

*/
   if($query)
   {
   echo '<script>window.location="employeedetails.php";</script>';
   }
   else
   {
   die("Connection error:".mysqli_connect_error());
   }
   }
   ?>

