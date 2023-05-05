<?PHP include('head.php');
//$get_id=$_GET['id'];
?>

<title>Medical Test System</title>
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
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2016" data-placement="bottom" data-content="Medical Test System" data-toggle="popover" href="#">Medical Test System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <script language="javascript">
function sum() {
            var txtEnergy = document.getElementById('energy').value;
            var txtMetre = document.getElementById('metre').value;
			var txtFixed = document.getElementById('fixed').value;
            var txtMm = document.getElementById('mm').value;
			var txtCm = document.getElementById('cm').value;
            var txtVat = document.getElementById('vat').value;
			var txtKva = document.getElementById('kva').value;
            var total = document.getElementById('total').value;
			
            var result = ((parseFloat(txtEnergy)+ parseFloat(txtMetre)+ parseFloat(txtMm)+ parseFloat(txtCm)) * parseInt(txtKva))/parseFloat(txtVat); 
			document.getElementById('total').value = result.toFixed(2);
			
        }
</script>
        <form class="navbar-form pull-right" action="" method="POST">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" ><i class="icon-off"></i> Log-out</a>                    
 	 <button class="btn dropdown-toggle" data-toggle="dropdown"> Health Menu <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="view_details.php" ><i class="icon-plus-sign"></i>Diagnose Malaria</a></li>
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
    <h1>MEDICAL TEST SYSTEM</h1>
    <p class="lead"><?php include('applicant_name.php'); ?></p>
  </div>
  
            
</header>
  <body>
    <div class="container">
    
    	<div class="row-fluid">
        
        	<div class="span6">
     DIAGNOSIS INFORMATION SYSTEM
            <div class="active item"> <!--item 1 -->

<div style="margin-top:15px;" class="container thumbnail">

            <pre><h4><strong><i class="icon-user"></i> Diagnosis Type Details</strong></h4></pre>
 
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Drugs Prescription</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                  
                    <?php
    $query = mysqli_query($conn,"select * from cat_tb") or die(mysql_error());
                                    $cart_count = mysqli_num_rows($query);
                                    while ($row = mysqli_fetch_array($query)) {
                                        $cat_id = $row['id'];
                                        ?>
                                        
                  
                <tbody>
                            <tr>               
                                            
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['symptoms'];?></td>
                                            <td><?php echo $row['drugs'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            
                                            <td><a href="user_login.php?" class="btn btn-default" role="button" data-toggle=""><i class="icon-check"></i> Back</a>
                                                </form>
                                            
                                            
                                            
                                            
                                            
                      
                                        </tr>
               </tbody>
               
               <?php }?>
                
        </table>        
      

</div><!--container -->

  </div><!--item end -->
                
       	  </div><!--span 6 --> 
            
                   
        
        </div><!--row fluid -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-footer">    </div>
</div>

  </body>
</html>
