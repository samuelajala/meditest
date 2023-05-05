<?php
include('connect.php');

$get_id=$_GET['id'];

mysql_query("update visa_process SET status='approved' where user_id='$get_id'")or die(mysql_error());
header('location:admin.php');
?>
