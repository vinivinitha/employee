<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border-radius: 70%;
}
</style>
</head>
<center>
         <img src="../img/end.jpg" height="200px" width="300px"><br><br>
       </center>
<font color="yellow"><center><h1><i>EMPLOYEE LOGIN</i></h1><center></font>
<body bgcolor="#F08080">
  <div align="center">

  
	<form method="post" action="">
	<label><i><b><font size="6" color="#00008B">Username</font></b></i></label><br>
	<input type="text" name="username" style="height:20px; width:200px;"><br><br>
	<label><i><b><font size="6" color="#00008B">Password</font></b></i></label><br>
	<input type="password" name="password" style="height:20px; width:200px;"><br><br>
	<!--<input type="submit" name="submit">-->
  <i><input type="submit" name="submit" style="height:30px; width:100px;"></i>
</form>
</div>
</body>
<?php
   $hostname = "localhost";
   $usernam = "root";
   $password = "";
   $database = "school";
   $con = new mysqli($hostname,$usernam,$password,$database);
   //mysql_select_db($database ,$con);
   if(! $con) {
   die('Could not connect: ' . mysqli_error());
   }
   //echo 'Connected successfully<br>';
   if(isset($_POST['submit'])){
   // Define $username and $password 
     session_start(); 
    
   $name=$_POST['username']; 
   $pass=$_POST['password'];
   $sql = "SELECT username,password,id FROM newregister WHERE username='".$name."' AND password='".$pass."' ";
   $result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {


        $check_username = $row['username'];
        $check_password = $row['password'];
        $check_id = $row['id'];
    }
    /*********************/
   session_regenerate_id();
     
    $_SESSION['sess_userid']=$check_id;
    $_SESSION['sess_username']=$check_username;
/*********/
   if (mysqli_num_rows($result) > 0) { 
   echo "Login successful";
   //echo "<script>alert('".$_SESSION['sess_userid']."');</script>";
   //print_r($sql);exit;
   header('Location: employeedetails.php');
   } else {
   echo "Invalid username and Password";
   }
   }
   
   
   ?>
</html>

 