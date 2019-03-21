<!doctype html>
<html>
   <head>
   <body background="../img/skills.jpg">
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
      <center>
         <h1>Employee Management System</h1>
      </center>
      <center>
         <p><a href="registeraishu.php">Register</a> | <a href="admin.php">login</a></p>
      </center>
      <center>
         <form action="" method="POST">
            Username:<br>
            <input type="text" placeholder="username" name="username" /><br>
            Password:<br>
            <input type="password" placeholder="password" name="password" minlength="8" required /><br> 
            
            <p>
               <input type="submit" value="Login" name="submit" />
            </p>
            
            <button class="button">
            <a href="">
            <font color="black"size="2px"face ="arial">forget password?</font>
            </a>
            </button>
            </div>
            </div>
            </div>
            </div>
         </form>
      </center>
      </form>
      </center>
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
         session_regenerate_id();
           
          $_SESSION['sess_userid']=$check_id;
          $_SESSION['sess_username']=$check_username;
         
         if (mysqli_num_rows($result) > 0) { 
         echo "Login successful";
         //echo "<script>alert('".$_SESSION['sess_userid']."');</script>";
         
         header('Location: form1.php');
         } else {
         echo "Invalid username and Password";
         }
         }
         
         
         ?>
   </body>
</html>