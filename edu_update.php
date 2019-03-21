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
$query=mysqli_query($con,"INSERT INTO `edu`(`SECONDARY_INSTITUTION`,`YEAR_OF_PASSING_TENTH`,`TENTH_PERCENTAGE`,`HIGHER_SECONDARY_INSTITUTION`,`YEAR_OF_PASSING_TWELTH`,
`TWELTH_PERCENTAGE`,`NAME_OF_INSTITUTION`,`AREA_OF_DEGREE`,`PERCENTAGE`,`SKILLS`,`YEAR_OF_PASSING`,`STATE`,`DISTRICT`)
VALUES ('".$SECONDARY_INSTITUTION."','".$YEAR_OF_PASSING_TENTH."','".$TENTH_PERCENTAGE."','".$HIGHER_SECONDARY_INSTITUTION."','".$YEAR_OF_PASSING_TWELTH."'
,'".$TWELTH_PERCENTAGE."','".$NAME_OF_INSTITUTION."','".$AREA_OF_DEGREE."','".$PERCENTAGE."','".$SKILLS."','".$YEAR_OF_PASSING."','".$STATE."','".$DISTRICT."')");
if($query)
{
echo '<script>window.location="edu.php";</script>';
}
$query=mysqli_query($con,"select * from edu where name='$name'");
while ($row=mysqli_fetch_array($query));
?>













<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>form1</title>
</head>
<body style="background-image:url(new_banner_07.jpg)" style="height:100px;width:100;">
<div align="center">
<font color="white"><h1>Educational details</h1></font>


<font color="black">
<i><b>SECONDARY_INSTITUTION</b></i><br><input type="text"><br><br>
<i><b>YEAR_OF_PASSING_TENTH</b></i><br><input type="text"><br><br>
<i><b>TENTH_PERCENTAGE</i><br><input type="text"></b><br><br>

<i><b>HIGHER_SECONDARY_INSTITUTION</b></i><br><input type="text"><br><br>

<i><b>YEAR_OF_PASSING_TWELTH</b></i><br><input type="text"><br><br>
<i><b>TWELTH_PERCENTAGE</b></i><br><input type="text"><br><br>

<i><b>NAME_OF_INSTITUTION</b></i><br><input type="text"><br><br>
<i><b>AREA_OF_DEGREE</b></i><br><input type="text"><br><br>

<i><b>PERCENTAGE</b></i><br><input type="text"><br><br>
<i><b>SKILLS</b></i><br><input type="text"><br><br>
<i><b>YEAR_OF_PASSING</b></i><br><input type="text"><br><br>
<i><b>STATE</b></i><br><input type="text"><br><br>
<i><b>DISTRICT</b></i><br><input type="text"><br><br>
<input type="submit" id="button" name="submit" style="height:30px;width:100px;">

 <!--<button type="submit" style="height:50px";"width:800" value="Save">Save </button>
 <button type="reset"  style="height:50px";"width:800" value="Cancel">Cancel</button>
<i><button type="button" class="btn btn-success">Save</button></i>
<i> <button type="button" class="btn btn-success">Cancel</button></i>-->
</div>
</font>
</body>
</html>
