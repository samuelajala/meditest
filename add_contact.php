<?php include('admin/connect.php');?>
<?php
                          
                                $name = $_POST['txtName'];
                                $email = $_POST['txtEmail'];
                                $sub = $_POST['txtSubject'];
                                $mess = $_POST['txtMessage'];
                               
                                mysqli_query($conn,"insert into contact (name,email,subject,message)
values ('$name','$email','$sub','$mess')                                    
") or die(mysql_error());
                            $URL="index.php";
							echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
							echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";

								//echo "Contact Has been submitted";	
                            
                            ?>