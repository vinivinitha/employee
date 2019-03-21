<!DOCTYPE html>
<html>
   <head>

      <title>Register</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Basic Header</title>
      <link rel="stylesheet" href="assets/header-basic.css">
      <link href="assets/style.css" rel="stylesheet">
      <style> 
         body {
         margin-top: 0px;
         margin-bottom: 100px;
         margin-right: 50px;
         margin-left: 50px;
         color: white;
         font-family: verdana;
         font-size: 150%
         }
         h1 {
         color: yellow;
         font-family: verdana;
         font-size: 150%;
         }
         h2 {
         color: yellow;
         font-family: verdana;
         font-size: 100%;
         }
      </style>
   </head>
   <body style="background-image:url(../img/skills.jpg)" style="height:100px;width:100;">
      <header class="header-basic">
      <div id="container">
         <div class="image-container" style="padding-top:60px;">
         </div>
      </div>
      <center>
         <i>
            <h1>REGISTRATION</h1>
         </i>
      </center>
      <form  class="form-horizontal" action="" method="POST">
         <legend>
            <center>

               <label for="username"><i><b>USERNAME</b></i></label><br>
               <input type="text" placeholder="Enter username" pattern='[A-Za-z\\s]*' name="username" required><br><br>
<label for="email"><i><b>EMAIL_ID</b></i></label><br>
               <input type="email" placeholder="Enter Email" name="email" required><br><br>
      </div>
               <label for="psw"><i><b>PASSWORD</b></i></label><br>
               <input type="password" placeholder="Enter Password" name="password"    minlength="8" required><br><br>
               <label for="psw-repeat"><i><b>CONFIRM PASSWORD</b></i></label><br>
               <input type="password" id="confirmpassword"  placeholder="confirmpassword"  onchange="check()"name="confirmpassword" minlength="8" required /> <br><br>
               <label for="role"><i><b>ROLE</b></i></label><br>
               <input type="text" placeholder="Enter role" name="role" required><br><br>

               <a href="login.php"><input type="submit" value="Register" name="submit" /></a>
            </center>
         </legend>
      </form>
      <?php
         include 'sc_config.php';
         if(isset($_POST["submit"])){
         
         
             $username=$_POST['username'];
             
             $email=$_POST['email'];
             $password=$_POST['password'];
             $confirmpassword=$_POST['confirmpassword'];
             $role=$_POST['role'];
             
             
         
             $sql="INSERT INTO newregister(username,email,password,confirmpassword,role) VALUES('".$username."','".$email."','".$password."','".$confirmpassword."','".$role."')";
         
             if($result=$con->query($sql))
             {
             header('Location:admin.php');   
             }
             else
             {
                 echo "That username already exists! Please try again with another.";
             }
            }
             else {
                 echo "All fields are required!";
             }
                 
         ?>
   </body>
</html>