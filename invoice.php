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
<title>Health Information System</title>
</head>

<body>



 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
        
      
        <div class="container">
        
    <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2017" data-placement="bottom" data-content="Health Information System" data-toggle="popover" href="#">Health System</a>
        
          <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <form class="navbar-form pull-right">
        
<div class="input-prepend">
          <div class="btn-group">
    <a class="btn" href="logout.php" ><i class="icon-off"></i> Log-out</a>                    
  <button class="btn dropdown-toggle" data-toggle="dropdown"> Health Menu <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="invoice.php" ><i class="icon-plus-sign"></i>Diagnose Malaria</a></li>
                   
                    
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
    <h1>Health Information System</h1>
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
       
  
<div style="margin-left:20px; width:600px; border:solid 1px; background-color:#f4f4f4;">
<div class="span12">

                        <div class="hero-unit-3">
                            <br><br>
                                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp; Choose Diagonis Types Details</strong>
                                </div>
                                <thead>
                    <tr>
                        <th>Malaria Types</th>
                        <th>Action</th>
                    </tr>
                </thead>
                              <?php
                                    $query2 = mysqli_query($conn,"select * from cat_tb") or die(mysql_error());
                                   
                                    while ($row = mysqli_fetch_array($query2)) {
                                        $tariff_id = $row['id'];
                                        ?>
                
                  
                <tbody>
                            <tr>               
                                            
                                            <td><a class="btn btn-success" role="button" data-toggle=""><i class="icon-user"></i> <?php echo $row['name'];?></a></td>
                                            <td><a href="view_details.php?id=<?php echo $tariff_id;?>" class="btn btn-info" role="button" data-toggle=""><i class="icon-check"></i> Check Symptoms And Drugs</a>
                                                </form>
                                            
                                            
                                            
                                            
                                            
                      
                                        </tr>
               </tbody>
                                            <?PHP } ?>
                              
                            </table>

                        </div>

                    </div>
 
</div>
  
        
</body>
</html>
