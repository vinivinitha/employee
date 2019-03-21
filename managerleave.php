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
	<title>leave</title>
</head>
<center><h1>LEAVE DETAILS</h1></center>
<body bgcolor="00FFFF">
  <!--<body style="background-image:url(../img/leave.jpg)" style="height:100px;width:100;">-->
 <?php
               require "../admin/sc_config.php";
               
               $id = $_SESSION['sess_userid'];
               echo "<script>alert('".$_SESSION['sess_username']."');</script>";
               echo $id;
               
                 $sql = 'SELECT * FROM leaveform';
               
                $result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
               
                   print "<table border = 1 cellspacing = 5px cellpadding = 5% ; align = center>
                   <tr> <th> id </th> <th> EMPLOYEE_NAME </th> <th> REQUEST_FOR_LEAVE </th> <th> DESCRIPTION</th>  <th> FROM_DATE </th> <th>TO_DATE</th>  </tr>";
               
                   
                   while($row = $result->fetch_assoc()) {
                       print "<tr>";
                       print "<td> ". $row["id"] ."</td>";
                       print "<td> ". $row["EMPLOYEE_NAME"] . "</td>";
                       print "<td> ". $row["REQUEST_FOR_LEAVE"]. "</td>";
                       print "<td> ". $row["DESCRIPTION"]. "</td>";
                       print "<td> ". $row["FROM_DATE"]. "</td>";
                       print "<td> ". $row["TO_DATE"]. "</td>";
                       
                       
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