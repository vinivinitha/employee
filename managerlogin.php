<!DOCTYPE html>
<html>
<head>
  <title>Manager Login</title>

<center>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border-radius: 70%;
}
</style>
</head>
         <img src="../img/manager.jpg" height="200px" width="300px"><br><br>

<font color="red"><center><h1>MANAGER LOGIN</h1></font>
<body bgcolor="#DDA0DD">
  <div align="center">
  <form method="post" action="">
    <label><i><b><font size="6" color="#8B008B">Username</font></b></i></label><br>
  <input type="text" name="username" style="height:20px; width:200px;"><br><br>

  <label><i><b><font size="6" color="#8B008B">Password</font></b></i></label><br>
  <input type="password" name="password" style="height:20px; width:200px;"><br><br>
  <!--<input type="submit" name="submit">-->
  <i><input type="submit" name="submit" style="height:30px; width:100px;"></i>
</form>
</div>
</body>
</center>
</form>
</div>
</body>
</center>
</form>
</div>
</body>
</center>
</font>
</html>


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
   $sql = "SELECT username,password,id,role FROM newregister WHERE username='".$name."' AND password='".$pass."' ";
   $result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {


        $check_username = $row['username'];
        $check_password = $row['password'];
        $check_id = $row['id'];
               $check_role = $row['role'];

    }
    /*********************/
   session_regenerate_id();
     
    $_SESSION['sess_userid']=$check_id;
    $_SESSION['sess_username']=$check_username;
    $_SESSION['sess_userrole']=$check_role;
/*********/

if( $_SESSION['sess_userrole'] == "manager"){
      header('Location: managerview.php');
    }else if( $_SESSION['sess_userrole'] == "employee"){
      header('Location: ../employee/employeedetails.php');
    }else if( $_SESSION['sess_userrole'] == "admin"){
      header('Location: ../admin/form1.php');
    }else{
      header('Location: ../index.php');
    }
}

?>
   

 