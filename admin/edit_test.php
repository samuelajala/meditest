<?php include('session.php'); 
$get_id=$_GET['id'];
?>
<?php include('connect.php');?>
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
	
	

<title>Medical Test System | Admin</title>
</head>
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
<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
       
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2015" data-placement="bottom" data-content="British Visa Processing System" data-toggle="popover" href="#">Health Informtion System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <script language="javascript">
function sum() {
            var txtOpen_bal = document.getElementById('open_bal').value;
            var txtDeposit = document.getElementById('deposit').value;
            var result = parseInt(txtOpen_bal) + parseInt(txtDeposit); 
			document.getElementById('new_bal').value = result;
			
        }
</script>
        <form class="navbar-form pull-right" action="" method="POST">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="logout.php" data-toggle="modal"><i class="icon-off"></i> Log-out</a>                    
 	<button class="btn dropdown-toggle" data-toggle="dropdown"> Health Menu <span class="caret"></span></button>
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
  <div class="container">
    <h1>Medical Test System</h1>
    <p class="lead"><?php //include('session.php'); ?></p>
  </div>
  
            
</header>
  <body>
    <div class="container">
    
    	<div class="row-fluid">
        
        	<div class="span6">
    EDITING TEST TYPE
     <?PHP
                require_once ('connect.php');
							$result = mysqli_query($conn,"SELECT * FROM  cat_tb WHERE id='$get_id'") or die (mysql_error()); 
    while ($user_row = mysqli_fetch_assoc($result)) {
		?>
     <form id="formID" class="formular" method="post" action="">
    			    <table width="503">
                  <tr>
                   
                  <td>Name:                     
                   <input name="name" type="text"  value="<?PHP echo $user_row['name'];?>" placeholder="Enter Type" id="name"/></td>
                   <td>Symptoms:
                    <textarea name="sym" id="sym"><?PHP echo $user_row['symptoms'];?></textarea>
                  </td>
               
                 </tr>
                 </tr>
                 <td>Drug Prescription:     
                 <textarea name="drug" placeholder="Enter Drug" id="drug"><?PHP echo $user_row['drugs'];?></textarea> 
                <td>Description:
                  <input name="desc" type="text" value="<?PHP echo $user_row['description'];?>" placeholder="Description" id="desc"/></td>
                  
               
                 </tr>
                  
                  
                
                     <tr>   
           <?PHP } ?>
            <br>
           <td>
               <button class="btn btn-large btn-primary" name="create" type="submit"><i class="icon-check"></i> Update</button>
              <!-- dropdown menu links -->
              </ul>
            </td></tr>
             </table>
             <?php
                            if (isset($_POST['create'])) {
                                $tariff_code = $_POST['name'];
                                $energy = $_POST['desc'];
                                $drug = $_POST['drug'];
                                $sym = $_POST['sym'];
								
                               $query="UPDATE cat_tb  SET name='$tariff_code',description='$energy',symptoms='$sym',drugs='$drug' WHERE id='$get_id'";
								$result = mysqli_query($conn,$query);

              if($result) 
              {
                $URL="test_details.php";
              echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
              echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
				        //header('location:tariff_details.php');
                //echo '<p class="alert fade in alert-success">New Account created successfully.</p>';
                      }else{
                echo '<p class="alert alert-danger">Error Occurred while trying to Update Test Type. Please Try Again</p>';
				//echo die(mysql_error());
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
