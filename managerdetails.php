<?php 
   session_start();
   $role = $_SESSION['sess_userrole'];
   if(!isset($_SESSION['sess_username'])){
     header('Location: index.php?err=2');
   }
   
   ?>
<!DOCTYPE html>
<html>
<head>
  
	<title>personal details</title>
</head>
<center><h1>PERSONAL DETAILS</h1></center>
<body bgcolor="FFE4C4">
 <?php
               require "../admin/sc_config.php";
               
               $id = $_SESSION['sess_userid'];
               echo "<script>alert('".$_SESSION['sess_username']."');</script>";
               echo $id;
               
                 $sql = 'SELECT * FROM employee';
               
                $result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
               
                   print "<table border = 1 cellspacing = 5px cellpadding = 5% ; align = center>
                   <tr> <th> ID<th> FIRST_NAME </th> <th> MIDDLE_NAME </th> <th> DATE_OF_BIRTH</th>  <th> IDENTIFICATION_MARK </th> <th>FATHER_NAME</th> <th> MOTHER_NAME</th> <th>CASTE</th> <th>RELIGION</th> <th>E_MAIL </th> <th>PH_NUMBER </th> <th> GENDER</th> <th> HOME_STATE</th> <th> HOME_DISTRICT</th> <th> NATIONALITY</th>  <th> BLOOD_GROUP</th> </tr>";
               
                   
                   while($row = $result->fetch_assoc()) {
                       print "<tr>";
                        print "<td> ". $row["id"] ."</td>";
                       print "<td> ". $row["FIRST_NAME"] . "</td>";
                       print "<td> ". $row["MIDDLE_NAME"]. "</td>";
                       print "<td> ". $row["DATE_OF_BIRTH"]. "</td>";
                       print "<td> ". $row["IDENTIFICATION_MARK"]. "</td>";
                       print "<td> ". $row["FATHER_NAME"]. "</td>";
                       print "<td> ". $row["MOTHER_NAME"]. "</td>";
                       print "<td> ". $row["CASTE"]. "</td>";
                       print "<td> ". $row["RELIGION"]. "</td>";
                       print "<td> ". $row["E_MAIL"]. "</td>";
                       print "<td> ". $row["PH_NUMBER"]. "</td>";
                       print "<td> ". $row["GENDER"]. "</td>";
                       print "<td> ". $row["HOME_STATE"]. "</td>"; 
                       print "<td> ". $row["HOME_DISTRICT"]. "</td>";
                       print "<td> ". $row["NATIONALITY"]. "</td>";
                    
                       print "<td> ". $row["BLOOD_GROUP"]. "</td>";
                      // print "<td> <form action='' method='POST'><input type='hidden' name='tempId' value='".$row["AppliedOn"]."'/>
                                   //<input type='submit' name='btn-approve' value='Approve' />
                                   //<input type='submit' name='btn-reject' value='Reject' />
                                   //<form></td>";        
                       print "</tr>";
                     }
                     print "</table>";
               
                   }else{
                       print "No Record Found..!!!! ";
                 }
               
                  ?>
</body>
</html>