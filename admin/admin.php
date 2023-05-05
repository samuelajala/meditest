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
<title>Medical Test System | Admin</title>
</head>

<body>



 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2015" data-placement="bottom" data-content="Medical Test System<" data-toggle="popover" href="#">Medical Test System
        
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
            
                     
                    <li><a href="add_test.php" ><i class="icon-plus-sign"></i> Add Diagnosis</a></li>
                   <li><a href="test_details.php" ><i class="icon-plus-sign"></i> View Diagnosis</a></li>
                    <li><a href="patients.php" ><i class="icon-plus-sign"></i> View Members</a></li>
                    
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
  <div class="container" style="background: red; padding: 20px;">
    <h1>Medical Test System</h1>
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

            <pre><h4><strong><i class="icon-user"></i> List of  Diagnosis</strong></h4></pre>
 
 		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                       <th>Diagnosis Type</th>
                        <th>Symptoms</th>
                        <th>Drugs Prescription</th>
                        <th>Descriptions</th>
                        
                     </tr>
                </thead>
                	
                    <?php
    $query = mysqli_query($conn,"select * FROM cat_tb") or die(mysql_error());
                                    $cart_count = mysqli_num_rows($query);
                                    while ($row = mysqli_fetch_array($query)) {
                                       	//$user_id = $row['invoice_tb.user_id'];
                                        ?>
                                        
              		
                <tbody>
                						<tr>
                                            
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['symptoms'];?></td>
                                            <td><?php echo $row['drugs'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                       		
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
