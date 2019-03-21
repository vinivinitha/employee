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
      <title>Employee Details</title>
      <style>
         #menu {
         float:left;
         width:600px;
         font-size:18px;
         font-color:orange;
         font-style:times new roman;
         }
         #content {
         float:left;
         width:600px;
         font-size:18px;
         font-color:orange;
         }
         button { 
         width: 150px; 
         height: 40px; 
         background: url(‘../img/banner.jpg’) no-repeat center scroll; 
         color: #fff; 
         } 
         .test{
           
            margin-left: 150px;
            margin-right: 270px;
            width:600px;
         }
      </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>

<body style="background-image:url(../img/banner.jpg)" style="background-repeat: no-repeat;">
 <form method="post" action="">
 	<table style="color:#993333">
<div align="center">
	<center>
<font color="green"><h1>Educational details</h1></font><br><br>
</center>
         </font>
      <!--form method="post" action="">-->
         <table style="color:#993333">
         <div class="col-sm-4">
            <b>
               <font color="black">
        <center>   </b>
	
	<i><b>SECONDARY_INSTITUTION</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*'  name="SECONDARY_INSTITUTION" required><br><br>
	<i><b>YEAR_OF_PASSING_TENTH</b></i><br><br><input type="date" name="YEAR_OF_PASSING_TENTH" required><br><br>
	<i><b>TENTH_PERCENTAGE</b></i><br><br><input type="number" name="TENTH_PERCENTAGE" pattern="\d{1,2}(?!\d)|100" required></b><br><br>
	                  
   <!-- <input type="number" name="TENTH_PERCENTAGE" data-bind="value:TENTH_PERCENTAGE" /><br><br>-->

	<i><b>HIGHER_SECONDARY_INSTITUTION</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="HIGHER_SECONDARY_INSTITUTION" required><br><br>
</font>


	<i><b>YEAR_OF_PASSING_TWELTH</b></i><br><br><input type="date" name="YEAR_OF_PASSING_TWELTH" required><br><br>
</div>
<div class="col-sm-4">

	<i><b>TWELTH_PERCENTAGE</b></i><br><br><input type="number" name="TWELTH_PERCENTAGE" pattern="\d{1,2}(?!\d)|100" required><br><br>
	<i><b>NAME_OF_INSTITUTION</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="NAME_OF_INSTITUTION" required><br><br>
	<i><b>AREA_OF_DEGREE</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="AREA_OF_DEGREE" required><br><br>
	<i><b>PERCENTAGE</b></i><br><br><input type="number" name="PERCENTAGE" pattern="\d{1,2}(?!\d)|100" required><br><br>

<i><b>SKILLS</b></i><br><br><input type="text" name="SKILLS" pattern='[A-Za-z\\s]*' required><br><br>
</div>

	<i><b>YEAR_OF_PASSING</b></i><br><br><input type="date" name="YEAR_OF_PASSING"  required><br><br>
	<i><b>STATE</b></i><br><br><input type="text"name="STATE" pattern='[A-Za-z\\s]*' required><br><br>
	<i><b>DISTRICT</b></i><br><br><input type="text" name="DISTRICT" pattern='[A-Za-z\\s]*' required><br><br>
</div>

<!--<input type="submit" name="submit">-->
 <i><input type="submit" name="submit" class="btn btn-success"></i>
</center>
</font>
</div>
</table>
</form>

</body>
</html>
<?php
include('sc_config.php');
if(isset($_POST['submit']))
{

$SECONDARY_INSTITUTION=$_POST['SECONDARY_INSTITUTION'];
$YEAR_OF_PASSING_TENTH=$_POST['YEAR_OF_PASSING_TENTH'];
$TENTH_PERCENTAGE=$_POST['TENTH_PERCENTAGE'];
$HIGHER_SECONDARY_INSTITUTION=$_POST['HIGHER_SECONDARY_INSTITUTION'];
$YEAR_OF_PASSING_TWELTH=$_POST['YEAR_OF_PASSING_TWELTH'];
$TWELTH_PERCENTAGE=$_POST['TWELTH_PERCENTAGE'];

$NAME_OF_INSTITUTION=$_POST['NAME_OF_INSTITUTION'];
$AREA_OF_DEGREE=$_POST['AREA_OF_DEGREE'];
$PERCENTAGE=$_POST['PERCENTAGE'];
$SKILLS=$_POST['SKILLS'];
$YEAR_OF_PASSING=$_POST['YEAR_OF_PASSING'];
$STATE=$_POST['STATE'];
$DISTRICT=$_POST['DISTRICT'];
$query=mysqli_query($con,"INSERT INTO
`edu`(`id`,`SECONDARY_INSTITUTION`,
	  `YEAR_OF_PASSING_TENTH`,
	  `TENTH_PERCENTAGE`,
	  `HIGHER_SECONDARY_INSTITUTION`,
	  `YEAR_OF_PASSING_TWELTH`,
	  `TWELTH_PERCENTAGE`,
	  `NAME_OF_INSTITUTION`,
	  `AREA_OF_DEGREE`,
	  `PERCENTAGE`,
	  `SKILLS`,
	  `YEAR_OF_PASSING`,
	  `STATE`,
	  `DISTRICT`)
VALUES ('".$_SESSION['sess_userid']."','".$SECONDARY_INSTITUTION."','".$YEAR_OF_PASSING_TENTH."','".$TENTH_PERCENTAGE."','".$HIGHER_SECONDARY_INSTITUTION."','".$YEAR_OF_PASSING_TWELTH."','".$TWELTH_PERCENTAGE."','".$NAME_OF_INSTITUTION."','".$AREA_OF_DEGREE."','".$PERCENTAGE."','".$SKILLS."','".$YEAR_OF_PASSING."','".$STATE."','".$DISTRICT."')");
if($query)
{
echo '<script>window.location="form1.php";</script>';
}
else
{
die("Connection error:".mysqli_connect_error());
}
}
?>
