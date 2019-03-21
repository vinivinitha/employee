<?php
include('sc_config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysqli_query($con,"update employee set status=1 where id='$id'");
	if($query)
	{
		 header("location:sc_select.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
}
else
{
	$query=mysqli_query($con,"update employee set status=1 where id='$id'");
	if($query)
	{
		 header("location:school.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
	
}

?>