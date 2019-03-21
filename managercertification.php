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
	<title>certification</title>
</head>
<center><h1>CERTIFICATIONS</h1></center>
<body bgcolor="#90EE90">
 <?php
               require "../admin/sc_config.php";
               
               $id = $_SESSION['sess_userid'];
               echo "<script>alert('".$_SESSION['sess_username']."');</script>";
               echo $id;
               
                 $sql = 'SELECT * FROM certification';
                 
                $result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
               
                   print "<table border = 1 cellspacing = 5px cellpadding = 5% ; align = center>
                   <tr> <th> id </th> <th> ANY_CERTIFICATION_COMPLETED </th> <th> IF_OTHERS_SPECIFY </th> <th> NUMBER_OF_COURSES_COMPLETED</th>  <th> CURRENTLY_PURSUING_CERTIFICATION </th> <th>COURSE_DURATION</th> <th> FROM_DATE</th> <th>TO_DATE</th>  </tr>";
               
                   
                   while($row = $result->fetch_assoc()) {
                       print "<tr>";
                       print "<td> ". $row["ID"] ."</td>";
                       print "<td> ". $row["ANY_CERTIFICATION_COMPLETED"] . "</td>";
                       print "<td> ". $row["IF_OTHERS_SPECIFY"]. "</td>";
                       print "<td> ". $row["NUMBER_OF_COURSES_COMPLETED"]. "</td>";
                       print "<td> ". $row["CURRENTLY_PURSUING_CERTIFICATION"]. "</td>";
                       print "<td> ". $row["COURSE_DURATION"]. "</td>";
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