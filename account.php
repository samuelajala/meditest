<?PHP include('head.php');?>

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
        
        <form class="navbar-form pull-right">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" data-toggle="modal"><i class="icon-off"></i> Log-out</a>                    
 	<button class="btn dropdown-toggle" data-toggle="dropdown"> E-Wallet Menu <span class="caret"></span></button>
    		<ul class="dropdown-menu">
    				<li><a href="account.php" ><i class="icon-plus-sign"></i>Update Account</a></li>
                    <li><a href="fund_account.php" ><i class="icon-plus-sign"></i>Fund Account</a></li>
                     <li><a href="available_payment.php" ><i class="icon-plus-sign"></i>Make Payment</a></li>
                      <li><a href="account_details.php" ><i class="icon-plus-sign"></i>Transaction Report</a></li>
                    
                    
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
    E-WALLET SYSTEM UPDATE ACCOUNT FORM
    			  <form id="formID" class="formular" method="post" action="">
    			    <table width="503">
                    <?PHP
                require_once ('admin/connect.php');
							$result = mysql_query("SELECT * FROM  tb_user WHERE user_id='$session_id'") or die (mysql_error()); 
    while ($row = mysql_fetch_assoc($result)) {
		?>
                 <tr>
                   <td>Account Name:
                   <input name="acct_name" type="text"  value="<?PHP echo $user_row['firstname'].' '.$user_row['lastname'] ;?>" class="validate[required] text-input" id="acct_name"/></td>
                   
                   <td>Account Number:
                   <input name="acct_no" type="text" class="validate[required] text-input" id="acct_no"/></td>
                   
                 </tr>
                <tr>
       <td>Account Email:
         <input name="email" type="email" class="validate[required] text-input"  value="<?PHP echo $user_row['email'];?>"  id="email"/></td>
               
              <td width="221">Bank:                
                <select name="bank" class="validate[required]" id="bank">
                  <option value="Default">Select Bank</option>
                  <option value="FirstBank">FirstBank</option>
                  <option value="EcoBank">EcoBank</option>
                  <option value="Zennith Bank">Zennith Bank</option>
                  <option value="UBA">UBA</option>
                  <option value="Fidelity Bank">Fidelity Bank</option>
                  <option value="Access Bank">Access Bank</option>
                  <option value="Union Bank">Union Bank</option>
                  <option value="Sky Bank">Sky Bank</option>
                </select></td>
             
		 
                </tr>
                 <tr>
                
                	<td width="270">Phone No:
                	  <input class="validate[required] text-input" name="phone" type="tel" id="req2" placeholder=""></td>
		
                    <td>Account Type:                      
                      <select name="acct_type" class="validate[required]" id="acct_type">
                        <option value="Default">Select Account Type</option>
                        <option value="Savings Account">Savings Account</option>
                        <option value="Current Account">Current Account</option>
                    </select></td>
                
                
                </tr>
               
                
                 <tr>
       <td>Opening Balance:
         <input name="open_bal" type="number" class="validate[required] text-input" placeholder="0.00" id="open_bal" readonly="readonly"/></td>
               
                <td>Pin:
                  <input name="pin" type="password" class="validate[required] text-input" id="pin" maxlength="6" min="6"/></td>
                
                </tr>
                            
                   <?PHP } ?>
               
                </tr>   
              
                     <tr>   
           
            <br>
           <td> <div class="btn-group">
              <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Back</button>
             </td><td>
               <button class="btn btn-large btn-primary" name="create" type="submit"><i class="icon-check"></i> Submit</button>
              <!-- dropdown menu links -->
              </ul>
            </td></tr>
             </table>
             <?php
                            if (isset($_POST['create'])) {
                                $acct_name = $_POST['acct_name'];
                                $acct_no = $_POST['acct_no'];
                                $email = $_POST['email'];
                                $bank = $_POST['bank'];
								$phone = $_POST['phone'];
								$acct_type = $_POST['acct_type'];
								$open_bal = $_POST['open_bal'];
								$pin = $_POST['pin'];
								
								
                                mysql_query("insert into account_tb (user_id,bank,account_name,account_no,account_type,open_bal,email,pin)
values ('$session_id','$bank','$acct_name','$acct_no','$acct_type','$open_bal','$email','$pin')                                    
") or die(mysql_error());
                                header('location:account_details.php');
								
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
