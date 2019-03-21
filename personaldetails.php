<?php 
   session_start();
   $id = isset($_SESSION['sess_userid']);
   $name = isset($_SESSION['sess_username']);
   if(!isset($_SESSION['sess_username'])){
     header('Location: index.php?err=2');
   }
   ?><!Doctype html>
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

</style>
<body style="background-image:url(../img/waterdrops-transparent-background_1110-1031.jpeg)">

<center><h1>WELCOME</h1></center>
<div class="btn-group">
  <header>
<form action="personaldetails.php">
  <button type="submit">Personal details </button>
</form>
<form action="educationaldetails.php">
  <button type="submit">Educational details</button>
  </form>
<form action="certification.php">
  <button type="submit">Certifications</button>
  </form>
 
<form action="leaveform.php">
  <button type="submit">Leave form </button>
</form>
<form action="indexx.php">
<button type="submit"> notification </button>
</form>

<button type="submit"><?php echo $_SESSION['sess_username'];?></button>


<form action="../logout.php">
  <button type="submit">Logout</button>
</form>
         </header>
      </div>
      </header>
<div class='container' style='padding:100px;font-size: 20px;'>
<?php
include '../admin/sc_config.php'; 


$sql = "SELECT * FROM employee where id=".$_SESSION['sess_userid']." ";
$result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       /* echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";*/
       echo "<label>id:</label>    <b><i>".$row["id"]."</b></i><br>
                  <label>FIRST_NAME:</label> <b><i>".$row["FIRST_NAME"]."</b></i><br>
                 <label>MIDDLE_NAME:</label>  <b><i>".$row["MIDDLE_NAME"]."</b></i><br>
                 <label>IDENTIFICATION_MARK:</label> <b><i> ".$row["IDENTIFICATION_MARK"]."</b></i> <br>
                 <label>FATHER_NAME:</label>  <b><i>".$row["FATHER_NAME"]."</b></i><br>
                  <label>MOTHER_NAME:</label> <b><i>".$row["MOTHER_NAME"]."</b></i><br>
                  <label>CASTE:</label> <b><i>".$row["CASTE"]."</b></i><br>
                   <label>RELIGION:</label>  <b><i>".$row["RELIGION"]."</b></i><br>
                    <label>E_MAIL:</label>  <b><i>".$row["E_MAIL"]."</b></i><br>
                     <label>PH_NUMBER:</label> <b><i> ".$row["PH_NUMBER"]." </b></i><br>
                       <label>GENDER:</label> <b><i>".$row["GENDER"]."</b></i><br>
                       <label>HOME_STATE:</label> <b><i>".$row["HOME_STATE"]."</b></i> <br>
                       <label>HOME_DISTRICT:</label> <b><i>".$row["HOME_DISTRICT"]."</b></i><br>
                        <label>NATIONALITY:</label> <b><i>".$row["NATIONALITY"]."</b></i><br>
                      
                        <label>BLOOD_GROUP:</label>  <b><i>".$row["BLOOD_GROUP"]."</b></i><br>";
    }
} else {
    echo "0 results";
}

$con->close();
?> 

</body>
</html>
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

</div>

</div>
</body>
</html>
