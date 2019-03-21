<!doctype html>
<html>
<head>
<body background="skills-1030x643.jpg">
<title>Login</title>
    <style> 
	
        body {
    
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	color:red;
    font-family: timesnewroman;
    font-size: 200%
		}
 
            h1 {
    color: ;
    font-family: Sans-serif;
    font-size: 150%;
}
        h3 {
    color: indigo;
    font-family: timesnewroman;
    font-size: 200%;s
}
		}   
        
    </style>
</head>

    <center><h1>Employee Management System</h1></center>

<!--<center><p><a href="registeraishu.php">Register</a> | <a href="login.php">login</a></p></center>
<center>-->
<form action="" method="POST">
Username:<br>
<input type="text" placeholder="username" name="username" /><br>
Password:<br>
<input type="password" placeholder="password" name="password" minlength="8" required /><br>	
<p>
<input type="submit" value="Login" name="submit" /></p>
<button class="button">
  <a href="">
  <font color="black"size="2px"face ="arial">forget password?</font>
  </a>
  </button>
  
 

</form>
</center>
<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "school";
$con = new mysqli($hostname,$username,$password,$database);
//mysql_select_db($database ,$con);
   
         if(! $con) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
		 
		 if(isset($_POST['submit'])){
// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password'];
         $sql = "SELECT username,password FROM newregister WHERE username='".$username."' AND password='".$password."' ";
         $result = mysqli_query($con, $sql);
		 
   //print_r($sql);exit;
         if (mysqli_num_rows($result) > 0) { 
		 echo "Login successfyl";
           header('Location: form1.html');
         } else {
            echo "Invalid username and Password";
         }
		 }
         //mysqli_close($conn);
	 /* 
include 'config.php';

if(isset($_POST['submit'])){
// Define $username and $password 
$Firstnmae=$_POST['username']; 
$Password=$_POST['password'];


$query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$username."' AND Password='".$password."' ");
$numrows=mysqli_num_rows($query);
print_r($numrows); exit;
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) 
{
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}
} */

?>

</body>
</html>