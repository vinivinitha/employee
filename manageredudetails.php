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
	<title>educattional details</title>
</head>
<center><h1>EDUCATIONAL DETAILS</h1></center>
<body bgcolor="E0FFFF">
 <?php
               require "../admin/sc_config.php";
               
               $id = $_SESSION['sess_userid'];
               echo "<script>alert('".$_SESSION['sess_username']."');</script>";
               echo $id;
               
                 $sql = 'SELECT * FROM edu';
               
                $result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
               
                   print "<table border = 1 cellspacing = 5px cellpadding = 5% ; align = center>
                   <tr> <th>ID</th> <th> SECONDARY_INSTITUTION </th> <th> YEAR_OF_PASSING_TENTH </th> <th> TENTH_PERCENTAGE</th>  <th> HIGHER_SECONDARY_INSTITUTION </th> <th>YEAR_OF_PASSING_TWELTH</th> <th> TWELTH_PERCENTAGE</th> <th>NAME_OF_INSTITUTION</th> <th>AREA_OF_DEGREE</th> <th>PERCENTAGE </th> <th>SKILLS </th> <th> YEAR_OF_PASSING</th> <th> STATE</th> <th> DISTRICT</th> </tr>";
               
                   
                   while($row = $result->fetch_assoc()) {
                       print "<tr>";
                        print "<td> ". $row["id"] ."</td>";
                       print "<td> ". $row["SECONDARY_INSTITUTION"] . "</td>";
                       print "<td> ". $row["YEAR_OF_PASSING_TENTH"]. "</td>";
                       print "<td> ". $row["TENTH_PERCENTAGE"]. "</td>";
                       print "<td> ". $row["HIGHER_SECONDARY_INSTITUTION"]. "</td>";
                       print "<td> ". $row["YEAR_OF_PASSING_TWELTH"]. "</td>";
                       print "<td> ". $row["TWELTH_PERCENTAGE"]. "</td>";
                       print "<td> ". $row["NAME_OF_INSTITUTION"]. "</td>";
                       print "<td> ". $row["AREA_OF_DEGREE"]. "</td>";
                       print "<td> ". $row["PERCENTAGE"]. "</td>";
                       print "<td> ". $row["SKILLS"]. "</td>";
                       print "<td> ". $row["YEAR_OF_PASSING"]. "</td>";
                       print "<td> ". $row["STATE"]. "</td>";
                       print "<td> ". $row["DISTRICT"]. "</td>";
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