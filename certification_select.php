<?php
include('sc_config.php');
{
$query=mysqli_query($con,"select * from certification where status=0");
//print_r($query);exit;
echo '<div class="scollit">
<center>
<h1>selecter</h1></center>
<table border="1px" solid black width="500px">
<thead>
<tr>

<th>ANY_CERTIFICATION_COMPLETED</th>
<th>IF_OTHERES_SPECIFY</th>
<th>NUMBER_OF_COURSES_COMPLETED</th>
<th>CURRENTLY_PURSUING_CERTIFICATION</th>
<th>COURSE_DURATION</th>
<th>FROM_DATE</th>
<th>TO_DATE</th>

</tr>
</thead>';
if (mysqli_num_rows($query) > 0) {
           // while($row = mysqli_fetch_assoc($query)) {
while ($row=mysqli_fetch_assoc($query))
{
echo '<tbody><tr>

<td>'.$row['ANY_CERTIFICATION_COMPLETED'].'</td>
<td>'.$row['IF_OTHERES_SPECIFY'].'</td>
<td>'.$row['NUMBER_OF_COURSES_COMPLETED'].'</td>
<td>'.$row['CURRENTLY_PURSUING_CERTIFICATION'].'</td>
<td>'.$row['COURSE_DURATION'].'</td>
<td>'.$row['FROM_DATE'].'</td>
<td>'.$row['TO_DATE'].'</td>';?>
<td><a href="certification_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="certification_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
}
		   }
echo '</table></div></center>';
}
?>
