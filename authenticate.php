<?php 
   include('admin/sc_config.php');
   
   session_start();
   
   $username = "";
   $password = "";
   
   if(isset($_POST['username'])){
   	$username = $_POST['username'];
   }
   if (isset($_POST['password'])) {
   	$password = $_POST['password'];
   
   }
   
   echo $username ." : ".$password;
   $sql = "SELECT * FROM newregister WHERE username='".$username."' AND password='".$password."' ";
         $result = mysqli_query($con, $sql);


   //$query=mysql_query("SELECT * FROM newregister WHERE username='".$username."' AND password='".$password."'");  
    //$numrows=mysql_num_rows($query);  
    if($result!=0)  
    {  
    while($row=mysql_fetch_assoc($sql))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];
    $dbid=$row['id'];
    }  
  
    if($username == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_userid']=$dbid;
     $_SESSION['sess_username']=$dbusername;

  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
     else {  
    echo "Invalid username or password!";  
    }  
   
   /*$q = 'SELECT * FROM newregister WHERE username=:username AND password=:password';
   
   $query = $con->prepare($q);
   
   $query->execute(array(':username' => $username, ':password' => $password));
   
   if($query->rowCount() == 0){
      echo "<script>alert('Username does not Match');</script>";
   	header('Location: ../index.php');
   }else{
   
   	$row = $query->fetch(PDO::FETCH_ASSOC);
   
   	session_regenerate_id();
   	$_SESSION['sess_user_id'] = $row['id'];
   	$_SESSION['sess_username'] = $row['username'];
      //$_SESSION['sess_userrole'] = $row['Role'];
   
      echo $_SESSION['sess_userrole'];
   	session_write_close();
*/
         header('Location: employeedetails.php');
   
   	 
   	}
   	
   	
   
   
   
   ?>