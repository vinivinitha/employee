<?php
   include '../manager/connect.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>notification</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   </head>
   <body style="background-image:url(../img/Indian-employees-switch-jobs-2016.jpg)" style="height:100px;width:100;">

   <font color="red"><center><h1>NOTIFICATIONS AVAILABLE</h1></font>
<body bgcolor="00FFFF">
</body>
   <body>
      <?php
         $data = $pdo->query("select * from notifications ");
$new_data = $pdo->query('select * from notifications where read_n=1');

$count = $data->rowCount();  
         ?>
      <div class="dropdown">
         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">notification<?php if($count > 0){echo "(".$count.")"; }?>
         <span class="caret"></span></button>
         <ul class="dropdown-menu">
            <?php
               foreach ($data as $value){
               ?>
            
<?php 
if($value['read_n']=='1'){
	?>

	            <li class="alert-danger"><?php echo $value['title'];?></li>
	<?php
}
else{



?>
            <li><?php echo $value['title'];?></li>


            <?php
        }
               }
                   ?>
         </ul>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </body>
</html>