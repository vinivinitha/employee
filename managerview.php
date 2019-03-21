<?php 
   session_start();
   $id = isset($_SESSION['sess_userid']);
   $name = isset($_SESSION['sess_username']);
   if(!isset($_SESSION['sess_username'])){
     header('Location: index.php?err=2');
   }
   ?>
<!Doctype html>
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
   <body style="background-image:url(../img/business.jpg)">
      <center>
         <h1>WELCOME</h1>
      </center>
      <div class="btn-group">
         <form action="managerdetails.php">
            <button type="submit">Personal details </button>
         </form>
         <form action="manageredudetails.php">
            <button type="submit">Educational details</button>
         </form>
         <form action="managercertification.php">
            <button type="submit">Certifications</button>
         </form>
         <form action="managerleave.php">
            <button type="submit">Leave form </button>
         </form>
         <form action="posts.php">
            <button type="submit">Send notification </button>
         </form> 
         <button type="submit"><?php echo $_SESSION['sess_userid'];  ?></button>
         <button type="submit"><?php echo $_SESSION['sess_username'];  ?></button>
         <form action="../logout.php">
            <button type="submit">Logout </button><br><br><br>
            </form>
      </div>
      </div>
   </body>
</html>