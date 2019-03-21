<?php
include('sc_config.php');
if(isset($_POST['submit']))
{


$FIRST_NAME=$_POST['FIRST_NAME'];
$MIDDLE_NAME=$_POST['MIDDLE_NAME'];
$DATE_OF_BIRTH=$_POST['DATE_OF_BIRTH'];
$IDENTIFICATION_MARK=$_POST['IDENTIFICATION_MARK'];
$FATHER_NAME=$_POST['FATHER_NAME'];
$MOTHER_NAME=$_POST['MOTHER_NAME'];
$CASTE=$_POST['CASTE'];
$RELIGION=$_POST['RELIGION'];
$E_MAIL=$_POST['E_MAIL'];
$PH_NUMBER=$_POST['PH_NUMBER'];
$GENDER=$_POST['GENDER'];
$HOME_STATE=$_POST['HOME_STATE'];
$HOME_DISTRICT=$_POST['HOME_DISTRICT'];
$NATIONALITY=$_POST['NATIONALITY'];
$LANGUAGES_KNOWN=$_POST['LANGUAGES_KNOWN'];
$BLOOD_GROUP=$_POST['BLOOD_GROUP'];
$query=mysqli_query($con,"UPDATE `employee`(`id`,`FIRST_NAME`,`MIDDLE_NAME`,`DATE_OF_BIRTH`,`IDENTIFICATION_MARK`,`FATHER_NAME`,`MOTHER_NAME`,`CASTE`,
`RELIGION`,`E_MAIL`,`PH_NUMBER`,`GENDER`,`HOME_STATE`,`HOME_DISTRICT`,`NATIONALITY`,`LANGUAGES_KNOWN`,`BLOOD_GROUP`)
VALUES ('".$FIRST_NAME."','".$MIDDLE_NAME."','".$DATE_OF_BIRTH."','".$IDENTIFICATION_MARK."','".$FATHER_NAME."','".$MOTHER_NAME."','".$CASTE."'
,'".$RELIGION."','".$E_MAIL."','".$PH_NUMBER."','".$GENDER."','".$HOME_STATE."','".$HOME_DISTRICT."','".$NATIONALITY."','".$LANGUAGES_KNOWN."','".$BLOOD_GROUP."')");
if($query)
{
echo '<script>window.location="school.php";</script>';
}

}
$query=mysqli_query($con,"select * from employee where name='$name'");
while ($row=mysqli_fetch_array($query));
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
background: transparent url(‘Keyboard-7.jpg’) no-repeat center scroll; 
color: #fff; 
} 


</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background="2018_Teacher_training_Banner.jpg">
<form method="post" action="">
<font color="red"><center><h1> DETAILS</h1><center></font>

<form method="post" action="">

<table style="color:#993333">
 <div class="col-sm-4"><font color="red"><b>
FIRST_NAME<br><br><input type="text" name="FIRST_NAME"><br><br>

MIDDLE_NAME<br><br><input type="text" name="MIDDLE_NAME"><br><br>

DATE_OF_BIRTH<br><br>
<input type="text" name="DATE_OF_BIRTH"><br><br>

<?php
  $query=mysqli_query($con,"select * from employee.php");

  ?>

IDENTIFICATION_MARK<br><br>
<input type="text" name="IDENTIFICATION_MARK"><br><br>

FATHER_NAME<br><br><input type="text" name="FATHER_NAME"><br><br>
MOTHER_NAME<br><br><input type="text" name="MOTHER_NAME"><br><br></div>
<div class="col-sm-4">

CASTE<br><br><input type="text" name="CASTE"><br><br>

 RELIGION<br><br><input type="text" name="RELIGION"><br><br>
 E_MAIL<br><br><input type="text" name="E_MAIL"><br><br>
PH_NUMBER<br><br><input type="text" name="PH_NUMBER"><br><br>
GENDER<br><br><input type="text" name="GENDER"><br><br>
HOME_STATE<br><br>
<input type="text" name="HOME_STATE"><br><br></div>
<div class="col-sm-4">
HOME_DISTRICT<br><br><input type="text" name="HOME_DISTRICT"><br><br>
NATIONALITY<br><br><input type="text" name="NATIONALITY"><br><br>
LANGUAGES_KNOWN<br><br>
<input type="text" name="LANGUAGES_KNOWN"><br><br>
BLOOD_GROUP<br><br>
<input type="text" name="BLOOD_GROUP"><br><br>

<input type="submit" id="button" name="submit" style="height:30px;width:100px;">
</div></b></font>

</form>
</body>
</html>