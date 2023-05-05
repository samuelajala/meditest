<?PHP include('head.php');
$get_id=$_GET['id'];
?>

<body>



 <!-- Navbar
    ================================================== -->
    <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="admin/js/jquery.js"></script>
    <script src="admin/js/bootstrap-transition.js"></script>
    <script src="admin/js/bootstrap-alert.js"></script>
    <script src="admin/js/bootstrap-modal.js"></script>
    <script src="admin/js/bootstrap-dropdown.js"></script>
    <script src="admin/js/bootstrap-scrollspy.js"></script>
    <script src="admin/js/bootstrap-tab.js"></script>
    <script src="admin/js/bootstrap-tooltip.js"></script>
    <script src="admin/js/bootstrap-popover.js"></script>
    <script src="admin/js/bootstrap-button.js"></script>
    <script src="admin/js/bootstrap-collapse.js"></script>
    <script src="admin/js/bootstrap-carousel.js"></script>
    <script src="admin/js/bootstrap-typeahead.js"></script>
    <script src="admin/js/bootstrap-affix.js"></script>
    
    
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/DT_bootstrap.js"></script>
	

    <script src="admin/js/holder/holder.js"></script>
    <script src="admin/js/google-code-prettify/prettify.js"></script>

    <script src="admin/js/application.js"></script>
<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
       
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2015" data-placement="bottom" data-content="British Visa Processing System" data-toggle="popover" href="#">E-Wallet System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <script language="javascript">
function sum() {
            var txtOpen_bal = document.getElementById('open_bal').value;
            var txtDeposit = document.getElementById('deposit').value;
            var result = parseInt(txtOpen_bal) - parseInt(txtDeposit); 
			document.getElementById('new_bal').value = result;
			
        }
</script>
        <form class="navbar-form pull-right" action="" method="POST">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" data-toggle="modal"><i class="icon-off"></i> Log-out</a>                    
 	<button class="btn dropdown-toggle" data-toggle="dropdown"> E-Wallet Menu <span class="caret"></span></button>
    		<ul class="dropdown-menu">
    				
                   <li><a href="invoice.php" ><i class="icon-plus-sign"></i>Generate Invoice</a></li>
                    <li><a href="invoice_details.php" ><i class="icon-plus-sign"></i>View Invoice</a></li>
                    
                    
    		</ul>
  	</div>
  			<input class="span2" id="prependedDropdownButton" type="text">
</div>
             

		</form>
          
          
        </div><!--container 1 -->
        
      </div><!--navbar-inner -->
      
    </div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview" name="overview">
  <div class="container">
    <h1>E-WALLET SYSTEM</h1>
    <p class="lead"><?php include('applicant_name.php'); ?></p>
  </div>
  
            
</header>
  <body>
    <div class="container">
    
    	<div class="row-fluid">
        
        	<div class="span6">
    Transaction Form
 <?php
							
    $query = mysql_query("select * from invoice_tb WHERE invoice_id='$get_id'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($query);
                                    while ($row = mysql_fetch_array($query)) {
                                       	$invoice_id = $row['invoice_id'];
                                        ?>
    			  <form id="formID" class="formular" method="post" action="">
    			    <table width="503">
                  <tr>
                   <td>Name:
                    <input name="names" type="text" value="<?php echo $row['names'];?>" class="validate[required] text-input" id="names"/></td>
                  </td>
                   
                   <td>Account No:
                    <input name="acct_no" type="text" value="<?php echo $row['account_no'];?>" class="validate[required] text-input" id="acct_no"/></td>
                  
                 </tr>
                 <tr>
                   <td>Tariff Code:
                    <input name="tariff_code" type="text" value="<?php echo $row['tariff_code'];?>" class="validate[required] text-input" id="tariff_code"/></td>
                  </td>
                   
                   <td>Amount Due:
                   <input name="amt_due" type="number" value="<?php echo $row['total_due'];?>" class="validate[required] text-input" id="amt_due"/></td>
                   <?PHP } ?>
                 </tr>
                 <tr>
                   <td>Bank:
                   <select name="bank" class="validate[required]" id="bank">
                  <option value="Default">Select Bank</option>
                  <option value="Eco Bank">Eco Bank</option>
                  <option value="First Bank">First Bank</option>
                  <option value="Uba Bank">Uba Bank</option>
                  <option value="Zenith Bank">Zenith Bank</option>
                 
                </select></td>
                   
                   <td>Teller_no:
                   <input name="teller_no" type="text" value="" class="validate[required] text-input" id="teller_no"/></td>
                   
                 </tr>
                <tr>
       <td>Amount Paid:
         <input name="amt_paid" type="text" class="validate[required] text-input"  value=""  id="amt_paid"/></td>
               
              <td width="221">Date Paid: 
               <input name="date_paid" type="date" class="validate[required] text-input"  value=""  id="date_paid"/>               
                </td>
             
		 
                </tr>
 
              
                     <tr>   
           
            <br>
           <td> <div class="btn-group">
              <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Back</button>
             </td><td>
               <button class="btn btn-large btn-primary" name="create" type="submit"><i class="icon-check"></i> Pay</button>
              <!-- dropdown menu links -->
              </ul>
            </td></tr>
             </table>
             <?php
                            if (isset($_POST['create'])) {
                                $bank = $_POST['bank'];
                                $teller = $_POST['teller_no'];
                                $amt = $_POST['amt_paid'];
                                $dat = $_POST['date_paid'];
								$amt_due = $_POST['amt_due'];
								$query = @mysql_query("Select * from payment_tb where invoice_id='$get_id' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Payment Arleady Made');
</script>
<?php
}else{
									if($amt_due>$amt){
										 echo '<p class="alert alert-danger">Amount Due is greater than amount Paid</p>';
										 exit();
              
										}
									
	                                $query="INSERT INTO payment_tb (invoice_id,user_id,bank,teller_no,amount_paid,date_paid) VALUES ('$get_id','$session_id','$bank ','$teller','$amt','$dat')" or die(mysql_error());
$result = mysql_query($query);

              if($result) 
              {  
  mysql_query("UPDATE   invoice_tb SET status='paid' WHERE invoice_id='$get_id'") or die(mysql_error());


				  header('location:invoice_details.php');
                //echo '<p class="alert fade in alert-success">New Account created successfully.</p>';
                      }else{
                echo '<p class="alert alert-danger">Error Occurred while trying to Payment Details. Please visit your Bank</p>';
              }	
}
}
                            ?>


    			  </form>
    			
                
           	</div><!--span 6 --> 
            
                   
        
        </div><!--row fluid -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-footer">    </div>
</div>

  </body>
</html>
