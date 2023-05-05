<?php include('admin/connect.php');?>
 <?php
		 
		  $names =trim($_POST['names']);
		  $address =trim($_POST['address']);
		  $cnumber =trim($_POST['cnumber']);
		  $email =trim($_POST['email']);
		  $pass =trim($_POST['password']);
		  $pass2 =trim($_POST['password2']);
		
		 if($pass==$pass2){
		  $query="INSERT INTO customer_tb (account_no,names,service_address,tariff_code,phone,email,username,password) Values('$acct_no','$names','$address','$tc','$cnumber','$email','$email','$pass')";
		 if (mysqli_query($conn,$query)) {
   		 echo '	<script type="text/javascript">
              	alert("Registration was successful. You Can Login Now");
				window.history.back();
              	</script>';	
                            } else {
    		echo "Error: " . $query . "<br>" . mysql_error();
			}
			
			}
			else{"password miss matched";
				}
		 
		 	
		
      ?>
    