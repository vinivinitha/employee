
<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>posts</title>
</head>
<center><h1>POSTING A NOTIFICATION</h1>
<img src="../img/Indian-employees-switch-jobs-2016.jpg" height="300px" width="400px"><br><br>
</center>
<body bgcolor="#FF00FF">
<?php
if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$q1 = "insert into posts (title) values ('$title')";
		$q2 = "insert into notifications (title,read_n) values ('$title','1')";
	$pdo->query($q1);
	$pdo->query($q2);

echo "posted";
header('Location: managerview.php');

}
?>

	<form action="" method="post" style="text-align: center;">
		<textarea name="title"></textarea><br>
		<input type="submit" name="submit" value="post">

	</form>

</body>
</html>