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
         background: url(‘../img/Indian-employees-switch-jobs-2016.jpg’) no-repeat center scroll; 
         color: #fff; 
         } 
         .test{
           
            margin-left: 150px;
            margin-right: 400px;
         

            width:150px;
            height: 28px;
         }
      </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
  
       <body style="background-image:url(../img/2018_Teacher_training_Banner.jpg)" style="height:100px;width:100;">
      <form method="post" action="">
         <font color="red">
            <center>
            <h1>EMPLOYEE DETAILS</h1>
            <center>
         </font>
      <form method="post" action="">
         <table style="color:#993333">
         <div class="col-sm-4">
            <b>
               <font color="black">
            </b>
            
            <i><b>FIRST_NAME</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="FIRST_NAME" required><br><br>
            <i><b>MIDDLE_NAME</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="MIDDLE_NAME" required><br><br>
            <i><b>DATE_OF_BIRTH</b></i><br><br>
            <input type="date" name="DATE_OF_BIRTH" required><br><br>






            <i><b>IDENTIFICATION_MARK</b></i><br><br>
            <input type="text" name="IDENTIFICATION_MARK" required><br><br>
            <i><b>FATHER_NAME</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="FATHER_NAME" required><br><br>
            <i><b>MOTHER_NAME</b></i><br><br><input type="text" pattern='[A-Za-z\\s]*' name="MOTHER_NAME" required><br><br>
         </div>
         <div class="col-sm-4">
            <i><b>CASTE</b></i><br><br>
            <select name="CASTE" class="col-sm-4 test">            
  <option value="bc">bc</option>
  <option value="mbc">mbc</option>
  <option value="sc/st">sc/st</option>
  <option value="oc">oc</option>
</select><br><br>
         
         <!--RELIGION<br><br><input type="text" name="RELIGION" required><br><br>-->
         <i><b>RELIGION</b></i><br><br>
            <select name="RELIGION" class="col-sm-4 test">            
  <option value="hindu">hindu</option>
  <option value="muslim">muslim</option>
  <option value="christian">christian</option>
  <option value="skih">skih</option>
  <option value="others">others</option>
</select><br><br>
         <i><b>E_MAIL</b></i><br><br><input type="email" name="E_MAIL" required><br><br>
         <i><b>PH_NUMBER</b></i><br><br><input type="text" name="PH_NUMBER" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required><br><br>
         <!--GENDER<br><br><input type="text" name="GENDER" required><br><br>-->
         <i><b>GENDER</b></i><br><br>
            <select name="GENDER" class="col-sm-4 test">            
  <option value="female">female</option>
  <option value="male">male</option>
  </select><br><br>
         <i><b>HOME_STATE</b></i><br><br>
         <input type="text" name="HOME_STATE" pattern='[A-Za-z\\s]*' required><br><br></div>
         <div class="col-sm-4">
         <i><b>HOME_DISTRICT</b></i><br><br><input type="text" name="HOME_DISTRICT" pattern='[A-Za-z\\s]*' required><br><br>
         <i><b>NATIONALITY</b></i><br><br><input type="text" name="NATIONALITY" pattern='[A-Za-z\\s]*' required><br><br>
         
        <!-- BLOOD_GROUP<br><br>
         <input type="text" name="BLOOD_GROUP" required><br><br>
         <input type="submit" name="submit">-->
         <i><b>BLOOD_GROUP</b></i><br><br>
            <select name="BLOOD_GROUP" class="col-sm-4 test">            
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select><br><br><br>
    <!--<input type="submit" name="submit">-->
     <i><input type="submit" name="submit" class="btn btn-success"></i>
         </div></b></font>
      </form>
   </body>
</html>
<?php
   include('sc_config.php');
   if(isset($_POST['submit']))
   {
   $id=$_post['id'];
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
   
   $BLOOD_GROUP=$_POST['BLOOD_GROUP'];
   $query=mysqli_query($con,"INSERT INTO `employee`(`id`,`FIRST_NAME`,`MIDDLE_NAME`,`DATE_OF_BIRTH`,`IDENTIFICATION_MARK`,`FATHER_NAME`,`MOTHER_NAME`,`CASTE`,
   `RELIGION`,`E_MAIL`,`PH_NUMBER`,`GENDER`,`HOME_STATE`,`HOME_DISTRICT`,`NATIONALITY`,`BLOOD_GROUP`)
   VALUES ('".$_SESSION['sess_userid']."','".$FIRST_NAME."','".$MIDDLE_NAME."','".$DATE_OF_BIRTH."','".$IDENTIFICATION_MARK."','".$FATHER_NAME."','".$MOTHER_NAME."','".$CASTE."'
   ,'".$RELIGION."','".$E_MAIL."','".$PH_NUMBER."','".$GENDER."','".$HOME_STATE."','".$HOME_DISTRICT."','".$NATIONALITY."','".$BLOOD_GROUP."')");
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