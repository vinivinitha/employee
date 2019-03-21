<!Doctype html>
<html>
<!--    <img src="business.jpg" width="200" height="80" alt="W3docs" >
    <img src="1457619934-1.jpg" width="200" height="80" alt="W3docs" >
    <img src="emp.jpeg" width="200" height="80" alt="W3docs" >
    <img src="how-to-start-a-business.jpg" width="200" height="80" alt="W3docs" >
    <img src="th3JVAZ1KF.jpg" width="200" height="80" alt="W3docs" >
    
</marquee>-->


<style>
 
.btn-group button {
  background-color: #4CAF50; 
  border: 1px solid green; 
  color: white; 
  padding: 10px 24px; 
  cursor: pointer; 
  float: left; 
}


.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; 
}

.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body style="background-image:url(../img/business.jpg)">


<center><h1>WELCOME</h1></center>

<div class="btn-group">

<form action="personaldetails.php">
  <button type="submit">Personal details </button>
</form>
<form action="educationaldetails.php">
  <button type="submit">Educational details</button>
  </form>
<form action="certificationdetails.php">
  <button type="submit">Certifications</button>
  </form>
 
<form action="leavedetails.php">
  <button type="submit">Leave form </button>
</form>

<button type="submit"><?php echo $_SESSION['sess_username'];?></button>


<form action="../logout.php">
  <button type="submit">Logout</button>
</form>
<!--<form action="registeraishu.php">
  <button type="submit">logout</button>
</form>-->
<!--<p><a href="registeraishu.php" target="self">logout</a></p>
<form align="right" name="form1" method="post" action="registeraishu.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>-->
<!--<a href="logout.php">Logout</a>-->
<?php
include '../admin/sc_config.php'; 


$sql = "SELECT * FROM certification";

$result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       /* echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";*/
       echo "<br> ".$row["ANY_CERTIFICATION_COMPLETED"]."
                  ".$row["IF_OTHERS_SPECIFY"]."
                  ".$row["NUMBER_OF_COURSES_COMPLETED"]."
                  ".$row["CURRENTLY_PURSUING_CERTIFICATION"]." ".$row["COURSE_DURATION"]." ".$row["FROM_DATE"]." ".$row["TO_DATE"]." <br>";
    }
} else {
    echo "0 results";
}

$con->close();
?> 

</div>
</div>
</body>
</html>
