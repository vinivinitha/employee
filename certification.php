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
      <title>form1</title>
   </head>
   <body style="background-image:url(../img/certification.jpg)" style="height:100px;width:200;">
 <form method="post" action="">

      <div align="center">
         <font color="magenta">
            <h1><i><b>CERTIFICATIONS</b></i></h1>
         </font>
         <br>
         <font color="red">
            <i><b><label>ANY_CERTIFICATION_COMPLETED</label></b></i><br>
            <select name="ANY_CERTIFICATION_COMPLETED">
               <br>
               <option value="C">C</option>
               <option value="Python">Python</option>
               <option value="CCNA">CCNA</option>
               <option value="AWS">AWS</option>
               <option value="Machine Learning">Machine Learning</option>
               <option value="Java">Java</option>S
               <option value="others">others</option>
            </select>
            <br><br>
            <i><b>IF_OTHERS_SPECIFY</b></i><br><input type="text" pattern='[A-Za-z\\s]*' name="IF_OTHERS_SPECIFY" required><br><br>

<!-- <form>
  Only 1 to 100 <input type="text" name="number" pattern="\d{1,2}(?!\d)|100" title="one to hundreed only">
  <input type="submit">
</form> -->




            <i><b>NUMBER_OF_COURSES_COMPLETED</b></i><br><input type="text" name="NUMBER_OF_COURSES_COMPLETED" pattern="\d{1,2}(?!\d)|100" required><br><br>
            <i><b>CURRENTLY_PURSUING_CERTIFICATION</b></i><br><input type="text" name="CURRENTLY_PURSUING_CERTIFICATION" required><br><br>
            <i><b>COURSE_DURATION</b></i><br><input type="month" name="COURSE_DURATION" required><br>
            <i><b>FROM_DATE</b> </i><br><input type="date" name="FROM_DATE"><br><br>
            <i><b>TO_DATE</b> </i><br><input type="date" name="TO_DATE"><br><br>
            <!--<input type="submit" name="submit">-->
            <i><input type="submit" name="submit" class="btn btn-success"></i>
        </font>
    </div>
</form>
</body>
</html>
      <?php
   include('../admin/sc_config.php');
   if(isset($_POST['submit']))
   {
   //$id=$_POST['id'];
   $ANY_CERTIFICATION_COMPLETED=$_POST['ANY_CERTIFICATION_COMPLETED'];
   $IF_OTHERS_SPECIFY=$_POST['IF_OTHERS_SPECIFY'];
   $NUMBER_OF_COURSES_COMPLETED=$_POST['NUMBER_OF_COURSES_COMPLETED'];
   $CURRENTLY_PURSUING_CERTIFICATION=$_POST['CURRENTLY_PURSUING_CERTIFICATION'];
   $COURSE_DURATION=$_POST['COURSE_DURATION'];
   $FROM_DATE=$_POST['FROM_DATE'];
   $TO_DATE=$_POST['TO_DATE'];

   $query=mysqli_query($con,"INSERT INTO `certification` (`id`,
         `ANY_CERTIFICATION_COMPLETED`,
        `IF_OTHERS_SPECIFY`,
        `NUMBER_OF_COURSES_COMPLETED`,
        `CURRENTLY_PURSUING_CERTIFICATION`,
        `COURSE_DURATION`,
        `FROM_DATE`,
        `TO_DATE`)  VALUES ('".$_SESSION['sess_userid']."','".$ANY_CERTIFICATION_COMPLETED."','".$IF_OTHERS_SPECIFY."','".$NUMBER_OF_COURSES_COMPLETED."','".$CURRENTLY_PURSUING_CERTIFICATION."','".$COURSE_DURATION."','".$FROM_DATE."','".$TO_DATE."')");
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
