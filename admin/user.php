<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 	<!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
	<link rel="shortcut icon" href="ico/icon.png">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>

      
    <![endif]-->
	
	
<?php include('session.php'); ?>
<?php include('connect.php');?>
<title>Medical Test System System</title>
</head>

<body>



 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2015" data-placement="bottom" data-content="British Visa Processing System" data-toggle="popover" href="#">Health System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <form class="navbar-form pull-right">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" ><i class="icon-off"></i> Log-out</a>          
 	<button class="btn dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
    		<ul class="dropdown-menu">
            <li><a href="admin.php" ><i class="icon-plus-sign"></i> Customers Payments</a></li>
    				<li><a href="#adduser" data-toggle="modal"><i class="icon-plus-sign"></i> Add users</a></li>
                    <li><a href="add_tariff.php" ><i class="icon-plus-sign"></i> Add Tariff</a></li>
                   	<li><a href="user.php" ><i class="icon-plus-sign"></i> View users</a></li>
                    <li><a href="tariff_details.php" ><i class="icon-plus-sign"></i> View Tariff</a></li>
                    <li><a href="customers.php" ><i class="icon-plus-sign"></i> View Customers</a></li>
                    
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
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>EEDC System</h1>
    <p class="lead"><?php include('user_name.php'); ?></p>
  </div>
  
            
</header>

<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">


<div class="active item"> <!--item 1 -->

<div style="margin-top:15px;" class="container thumbnail">

            <pre><h4><strong><i class="icon-user"></i> List of Users</strong></h4></pre>
 
 		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lasttname</th>
                        <th>Firstname</th>
                        <th>Contact</th>
                        <th>Username</th>
                        <th>Password</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                	
                    <?php
    $member_table = mysql_query("select  * from admin_tb") or die(mysql_error());
                                    $cart_count = mysql_num_rows($member_table);
                                    while ($member_row = mysql_fetch_array($member_table)) {
                                       	$user_id = $member_row['admin_id'];
                                        ?>
                                        
              		
                <tbody>
                						<tr>
                                            
                                            <td><?php echo $member_row['admin_id'];?></td>
                                            <td><?php echo $member_row['lastname'];?></td>
                                            <td><?php echo $member_row['firstname'];?></td>
                                            <td><?php echo $member_row['contact'];?></td>
                                       		<td><?php echo $member_row['username'];?></td>
                                            <td><?php echo $member_row['password'];?></td>
                                           
                                            <td><a href="#delete_user<?php echo $user_id; ?>" class="btn btn-danger" role="button" data-toggle="modal"><i class="icon-check"></i> Delete</a>
                                            
                                            
                                             <!-- Modal delete user -->
<div id="delete_user<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">British Visa Processing System</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-info"><p>Are you sure you want to Delete this User? <strong><?php echo $member_row['lastname']." ".$member_row['firstname'];?></strong></p></div>
  </div>
  <div class="modal-footer">
  	<a class="btn btn-info" href="delete_user.php<?php echo '?id=' . $user_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div>
                                         <!--modal end --> 
                                            </form>
                                            
                                            
                                            
                                            
                                            
											
                                        </tr>
               </tbody>
               
               <?php }?>
                
        </table>        
      

</div><!--container -->

	</div><!--item end -->









  <!-- Carousel nav 
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
</div>




<?php include('modals.php');?>











  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    
    
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
	

    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>

    <script src="js/application.js"></script>




	
        
</body>
</html>
