<?php
include('sc_config.php');
{
$query=mysqli_query($con,"select * from edu where status=0");
//print_r($query);exit;
echo '<div class="scollit">
<center>
<h1>selecter</h1></center>
<table border="1px" solid black width="500px">
<thead>
<tr>

<th>SECONDARY_INSTITUTION</th>
<th>YEAR_OF_PASSING_TENTH</th>
<th>TENTH_PERCENTAGE</th>
<th>HIGHER_SECONDARY_INSTITUTION</th>
<th>YEAR_OF_PASSING_TWELTH</th>
<th>TWELTH_PERCENTAGE</th>
<th>NAME_OF_INSTITUTION</th>
<th>AREA_OF_DEGREE</th>
<th>PERCENTAGE</th>
<th>SKILLS</th>
<th>YEAR_OF_PASSING</th>
<th>STATE</th>
<th>DISTRICT</th>
</tr>
</thead>';
if (mysqli_num_rows($query) > 0) {
           // while($row = mysqli_fetch_assoc($query)) {
while ($row=mysqli_fetch_assoc($query))
{
echo '<tbody><tr>

<td>'.$row['SECONDARY_INSTITUTION'].'</td>
<td>'.$row['YEAR_OF_PASSING_TENTH'].'</td>
<td>'.$row['TENTH_PERCENTAGE'].'</td>
<td>'.$row['HIGHER_SECONDARY_INSTITUTION'].'</td>
<td>'.$row['YEAR_OF_PASSING_TWELTH'].'</td>
<td>'.$row['TWELTH_PERCENTAGE'].'</td>
<td>'.$row['NAME_OF_INSTITUTION'].'</td>
<td>'.$row['AREA_OF_DEGREE'].'</td>
<td>'.$row['PERCENTAGE'].'</td>
<td>'.$row['SKILLS'].'</td>
<td>'.$row['YEAR_OF_PASSING'].'</td>
<td>'.$row['STATE'].'</td>
<td>'.$row['DISTRICT'].'</td>';?>
<td><a href="edu_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="edu_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
}
		   }
echo '</table></div></center>';
}
?>
