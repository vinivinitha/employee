<?php
include('sc_config.php');
{
$query=mysqli_query($con,"select * from employee where status=0");
//print_r($query);exit;
echo '<div class="scollit">
<center>
<h1>selecter</h1></center>
<table border="1px" solid black width="500px">
<thead>
<tr>

<th>FIRST_NAME</th>
<th>MIDDLE_NAME</th>
<th>DATE_OF_BIRTH</th>
<th>IDENTIFICATION_MARK</th>
<th>FATHER_NAME</th>
<th>MOTHER_NAME</th>
<th>CASTE</th>
<th>RELIGION</th>
<th>E_MAIL</th>
<th>PH_NUMBER</th>
<th>GENDER</th>
<th>HOME_STATE</th>
<th>HOME_DISTRICT</th>
<th>NATIONALITY</th>
<th>LANGUAGES_KNOWN</th>
<th>BLOOD_GROUP</th>


</tr>
</thead>';
if (mysqli_num_rows($query) > 0) {
           // while($row = mysqli_fetch_assoc($query)) {
while ($row=mysqli_fetch_assoc($query))
{
echo '<tbody><tr>
<td>'.$row['FIRST_NAME'].'</td>
<td>'.$row['MIDDLE_NAME'].'</td>
<td>'.$row['DATE_OF_BIRTH'].'</td>
<td>'.$row['IDENTIFICATION_MARK'].'</td>
<td>'.$row['FATHER_NAME'].'</td>
<td>'.$row['MOTHER_NAME'].'</td>
<td>'.$row['CASTE'].'</td>
<td>'.$row['RELIGION'].'</td>
<td>'.$row['E_MAIL'].'</td>
<td>'.$row['PH_NUMBER'].'</td>
<td>'.$row['GENDER'].'</td>
<td>'.$row['HOME_STATE'].'</td>
<td>'.$row['HOME_DISTRICT'].'</td>
<td>'.$row['NATIONALITY'].'</td>
<td>'.$row['LANGUAGES_KNOWN'].'</td>
<td>'.$row['BLOOD_GROUP'].'</td>';?>
<td><a href="sc_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="sc_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
}
		   }
echo '</table></div></center>';
}
?>



































<!--echo '<tbody><tr>

<td>'.$row['FIRST_NAME'].'</td>
<td>'.$row['MIDDLE_NAME'].'</td>
<td>'.$row['DATE_OF_BIRTH'].'</td>
<td>'.$row['IDENTIFICATION_MARK'].'</td>
<td>'.$row['FATHER_NAME'].'</td>
<td>'.$row['MOTHER_NAME'].'</td>
<td>'.$row['CASTE'].'</td>
<td>'.$row['RELIGION'].'</td>
<td>'.$row['E_MAIL'].'</td>
<td>'.$row['PH_NUMBER'].'</td>
<td>'.$row['GENDER'].'</td>
<td>'.$row['HOME_STATE'].'</td>
<td>'.$row['HOME_DISTRICT'].'</td>
<td>'.$row['NATIONALITY'].'</td>
<td>'.$row['LANGUAGES_KNOWN'].'</td>
<td>'.$row['BLOOD_GROUP'].'</td>';?>
<td><a href="sc_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="sc_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>-->
