<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 	<!-- Le styles -->
    <link href="admin/css/bootstrap.css" rel="stylesheet">
    <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="admin/css/docs.css" rel="stylesheet">
    <link href="admin/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link rel="shortcut icon" href="admin/ico/icon.png">
    	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>

      
    <![endif]-->
	
	
<?php include('get_session_variable.php'); ?>
<?php include('admin/connect.php');?>
<title>E-Wallet System</title>
</head>

<body>



 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2013" data-placement="bottom" data-content="Dana Airline Scheduling System" data-toggle="popover" href="#">E-Wallet System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <form class="navbar-form pull-right">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" ><i class="icon-off"></i> Log-out</a>                    
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
       
	
<div style="margin-left:300px; width:600px; border:solid 1px; background-color:#f4f4f4;">
<div class="span12">

                        <div class="hero-unit-3">
                            <br><br>
                                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Transaction Details</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Account Name</th>
                                        <th>Account NO</th>
                                        <th>Transaction Type</th>
                                        <th>Beneficiary</th>
                                        <th>Old Balance</th>
                                        <th>Transaction Amount</th>
                                        <th>New Balance</th>
                                        <th>Transaction Date</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from account_tb WHERE user_id='$session_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
										$acct_name = $row['account_name'];
                                        $acct_no = $row['account_no'];
										$user_id=$row['user_id'];
										$query2 = mysql_query("select * from transaction_tb where user_id='$user_id'") or die(mysql_error());
                                while ( $transact_row = mysql_fetch_array($query2)) {
								$trans_id = $transact_row['transaction_id'];
							
                                        ?>


                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $trans_id; ?>').tooltip('show')
                                            $('#e<?php echo $trans_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $trans_id; ?>').tooltip('show')
                                            $('#d<?php echo $trans_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->


                                    <tr class="odd gradeX">
                                        
                                        <td><?php echo $row['account_name']; ?></td> 
                           				<td><?php echo $row['account_no']; ?></td>
                                         <td><?php echo $transact_row['transaction_type']; ?></td> 
                                         <td><?php echo $transact_row['beneficiary']; ?></td> 
                                         <td><?php echo $transact_row['old_bal']; ?></td>
                                         <td><?php echo $transact_row['transaction_amt']; ?></td>
                                         <td><?php echo $transact_row['new_bal']; ?></td>
                                         <td><?php echo $transact_row['transaction_date']; ?></td>
                                                            
                                       

                                        <td width="150">
                                            
                                             <a rel="tooltip"  title="Edit Performance" id="e<?php echo $trans_id; ?>" href="edit_student_performance.php<?php echo '?ids='.$trans_id; ?>" class="btn btn-success"><i class="icon-check icon-large"></i></a>
                                        </td>
                                       

                                    </tr>
                                <?php }} ?>
                                </tbody>
                            </table>

                        </div>

                    </div>
 
</div>
	
        
</body>
</html>
