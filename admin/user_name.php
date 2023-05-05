<?php
$username_query = mysqli_query($conn,"select * from admin_tb where admin_id=$session_id") or die(mysql_error());
$user_row = mysqli_fetch_array($username_query);
?>  
<div class="pull-right-date">
    <?php
    $Today = date('y:m:d');
    $new = date('l, F d, Y', strtotime($Today));
    echo $new;
    ?>
</div>
<div class="username">Welcome:&nbsp;&nbsp;<?php echo $user_row['firstname'] . " " . $user_row['lastname']; ?></div>

