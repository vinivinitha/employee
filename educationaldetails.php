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
      .btn-group button:hover {
      background-color: #3e8e41;
      }
   </style>
   <body style="background-image:url(../img/waterdrops-transparent-background_1110-1031.jpeg)">
   
      <center>
         <h1>WELCOME</h1>
      </center>
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
 
<form action="leave.php">
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
            
            
            $sql = "SELECT * FROM edu where id=".$_SESSION['sess_userid']." "; 
            
            $result = mysqli_query($con, $sql);
            //$result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   /* echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";*/
                   echo " <label>SECONDARY_INSTITUTION:</label> <b><i>".$row["SECONDARY_INSTITUTION"]."</b></i><br>
                             <label>YEAR_OF_PASSING_TENTH:</label> <b><i> ".$row["YEAR_OF_PASSING_TENTH"]."</b></i><br>
                             <label>TENTH_PERCENTAGE:</label> <b><i>".$row["TENTH_PERCENTAGE"]."</b></i><br>
                             <label>HIGHER_SECONDARY_INSTITUTION:</label> <b><i>".$row["HIGHER_SECONDARY_INSTITUTION"]." </b></i><br>
                              <label>YEAR_OF_PASSING_TWELTH:</label> <b><i>".$row["YEAR_OF_PASSING_TWELTH"]."</b></i><br>
                              <label>TWELTH_PERCENTAGE:</label> <b><i> ".$row["TWELTH_PERCENTAGE"]."</b></i> <br>
                               <label>NAME_OF_INSTITUTION:</label> <b><i>".$row["NAME_OF_INSTITUTION"]."</b></i><br>
                               <label>AREA_OF_DEGREE:</label> <b><i> ".$row["AREA_OF_DEGREE"]."</b></i><br>
                               <label>PERCENTAGE:</label>  <b><i>".$row["PERCENTAGE"]." </b></i><br>
                                <label>SKILLS:</label> <b><i> ".$row["SKILLS"]."</b></i><br>
                                <label>YEAR_OF_PASSING:</label>  <b><i>".$row["YEAR_OF_PASSING"]." </b></i><br>
                                <label>STATE:</label> <b><i> ".$row["STATE"]." </b></i><br>
                                 <label>DISTRICT:</label> <b><i>".$row["DISTRICT"]."</b></i> </div>";
                }
            } else {
                echo "0 results";
            }
            
            $con->close();
            ?> 
      </div>
   </body>
</html>