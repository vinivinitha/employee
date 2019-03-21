<?php
include 'admin/sc_config.php';
session_start();
if($_POST)
{
  $opass = $_POST["opass"]; 
 $npass = $_POST["npass"];
   $cpass = $_POST["cpass"];
   $username = $_SESSION["username"];
   $oqr = mysql_query("select password from newregister where username = '($user)'") or die(mysql_error());
   $odata = mysql_fetch_row($oqr);
   if($odata[0]==$opass)
   {
    if($npass == $cpass)
    {
$q = mysql_query("update newregister set password='($npass)' where username='($user)'")or die(mysql_error());
if($q){
  echo "<script>alert('password changed')</script>";
}



    }else
    {
      echo "<script>alert('old password and new password not  match')</script>";
    }

   }else
   {
    echo "<script>alert('old password not  match')</script>";
   }
}


?>












<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
    <h1>Change Password</h1>
   <form method="POST">
    <table>
    <tr>
   <td>oldpassword</td>
    <td><input type="text" name="opass"></td>
    </tr>
    <tr>
 <tr>
   <td>newpassword</td>
    <td><input type="text" name="npass"></td>
    </tr>
     <tr>
   <td>confirmpassword</td>
    <td><input type="text" name="cpass"></td>
    </tr>
    <tr>
    <td><input type="submit" ></td>
  </tr>
      </table>
    </form>
   
   </body>
    </html>  

