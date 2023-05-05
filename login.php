<?php include('admin/connect.php');?>
  <?php
                                    $username = trim($_POST['txtUser']);
                                    $password = trim($_POST['txtPass']);

                                    $query = mysqli_query($conn,"select * from customer_tb where username='$username' and password='$password'") or die(mysql_error());
                                    $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_array($query);


                                    if ($count > 0) {
                                       session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['customer_id'];
                                        $URL="view_details.php";
                                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                                        
										session_write_close();
                                    } else {
									   session_write_close();
                                       $URL="index.php";
                                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
									   }
									   
									   
                                        ?>
                                      
                                      
