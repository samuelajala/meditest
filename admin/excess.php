
<?php include('connect.php'); ?>
<?php include('session.php'); ?>
<?php include('user_name.php'); ?>

<?php

$get_id=$_GET['id'];
$excess = $_POST['excess'];
$x = $_POST['ex'];

$t = $excess + $x;		

mysql_query("update tb_reserve set excess_id='$t' where reserveID='$get_id'")or die(mysql_error());


header('location:process.php');

?>

