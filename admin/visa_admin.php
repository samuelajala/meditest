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
<title>British Visa Processing System</title>
</head>

<body>



 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    
      <div class="navbar-inner">
      	
      
        <div class="container">
        
   <a class="brand" data-trigger="hover" id="#ad" title="&copy; 2013" data-placement="bottom" data-content="Dana Airline Scheduling System" data-toggle="popover" href="#">British Visa Processing System</a>
        
        	<script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#ad').popover('show')

                });
            </script>
        
        <form class="navbar-form pull-right">
        
<div class="input-prepend">
  				<div class="btn-group">
    <a class="btn" href="#logout" data-toggle="modal"><i class="icon-off"></i> Log-out</a>          
 	<button class="btn dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
    		<ul class="dropdown-menu">
    				<li><a href="#adduser" data-toggle="modal"><i class="icon-plus-sign"></i> Add users</a></li>
                    <li><a href="#schedule" data-toggle="modal"><i class="icon-plus-sign"></i> Schedule Flight</a></li>
                    <li><a href="#addflight" data-toggle="modal"><i class="icon-plus-sign"></i> Add Flight</a></li>
                    
                    
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
    <h1>Dana Airline booking and Scheduling System</h1>
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

            <pre><h4><strong><i class="icon-user"></i> List of Members</strong></h4></pre>
 
 		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lasttname</th>
                        <th>Firstname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Passport No</th>
                        <th>Request</th>
                        <th>Action</th>
                    </tr>
                </thead>
                	
                    <?php
    $member_table = mysql_query("select  * from tb_passengers") or die(mysql_error());
                                    $cart_count = mysql_num_rows($member_table);
                                    while ($member_row = mysql_fetch_array($member_table)) {
                                       	$mmid = $member_row['PassengerID'];
                                        ?>
                                        
              		
                <tbody>
                						<tr>
                                            
                                            <td><?php echo $member_row['PassengerID'];?></td>
                                            <td><?php echo $member_row['Lastname'];?></td>
                                            <td><?php echo $member_row['Firstname'];?></td>
                                            <td><?php echo $member_row['Phone'];?></td>
                                       		<td><?php echo $member_row['Email'];?></td>
                                            <td><?php echo $member_row['Address'];?></td>
                                            <td><?php echo $member_row['Username'];?></td>
                                            <td><?php echo $member_row['Password'];?></td>
                                            <td><?php echo $member_row['PassportNo'];?></td>
                                            <td><?php echo $member_row['request'];?></td>
                                            <td><a href="#delete_member<?php echo $mmid; ?>" class="btn btn-danger" role="button" data-toggle="modal"><i class="icon-remove"></i> Delete</a></td>
                                            
                                             <!-- Modal delete user -->
<div id="delete_member<?php echo $mmid; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Dana Airline System</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-danger"><p>Are you sure you want to Delete? <strong><?php echo $member_row['Lastname']." ".$member_row['Firstname'];?></strong></p></div>
  </div>
  <div class="modal-footer">
  	<a class="btn btn-danger" href="delete_member.php<?php echo '?id=' . $mmid; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
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





<div class="item"> <!--item 1 -->

<div style="margin-top:15px;" class="container thumbnail">

            <pre><h4><strong><i class="icon-user"></i> List of Users</strong></h4></pre>
 
 		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Contact no.</th>
                        <th>Actions</th>      
                    </tr>
                </thead>
                	
                    <?php
    $cart_table = mysql_query("select  * from tb_user") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                       		$user_id = $cart_row['user_id'];
                                        ?>
                                        
              		
                <tbody>
                						<tr>
                                            
                                            <td><?php echo $cart_row['user_id'];?></td>
                                            <td><?php echo $cart_row['username'];?></td>
                                            <td><?php echo $cart_row['password'];?></td>
                                            <td><?php echo $cart_row['firstname'];?></td>
                                            <td><?php echo $cart_row['lastname'];?></td>
                                            <td><?php echo $cart_row['contactnumber'];?></td>
                                            <td width="230">
                                            <a href="#adduser" class="btn" role="button" data-toggle="modal"><i class="icon-plus-sign"></i> Add</a>
                                            <a href="#edit_user<?php echo $user_id; ?>" class="btn" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                            <a href="#delete_user<?php echo $user_id; ?>" class="btn btn-danger" role="button" data-toggle="modal"><i class="icon-remove"></i> Delete</a>
                                            </td>
                                            
                                            <!-- Modal delete user -->
<div id="delete_user<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Dana Airline System</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-danger"><p>Are you sure you want to Delete? <strong><?php echo $cart_row['firstname']." ".$cart_row['lastname'];?></strong></p></div>
  </div>
  <div class="modal-footer">
  	<a class="btn btn-danger" href="delete_user.php<?php echo '?id=' . $user_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div>
                                         <!--modal end --> 
                                         
                                          <!-- Modal edit user -->

<div id="edit_user<?php echo $user_id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit user</h3>
  </div>
  <div class="modal-body">
    <form action="edit_user.php<?php echo '?id=' . $user_id; ?>" id="align-center" class="form-horizontal" method="post">
    <div class="alert alert-info"><strong>Informations</strong></div>
                                <hr>
    
                                <div  class="control-group">
                                   
                                    <div align="center" class="controls">
                                        Firstname: <input type="text" name="fn" id="inputEmail" value="<?php echo $cart_row['firstname']?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    
                                    <div align="center" class="controls">
                                        Lastname: <input type="text"  name="ln" value="<?php echo $cart_row['lastname'];?>">
                                    </div>
                                </div>
                                <div class="control-group">
                           
                                    <div align="center" class="controls">
                                        Username: <input type="text" name="un" value="<?php echo $cart_row['username'];?>">
                                    </div>
                                </div>
                                <div class="control-group">
                       
                                    <div align="center" class="controls">
                                       Password: <input type="text" name="p" value="<?php echo $cart_row['password'];?>">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div align="center" class="controls">
                                       Contact no.: <input type="text" name="cn" value="<?php echo $cart_row['contactnumber'];?>">
                                    </div>
                                </div>
            
                            

                           
  </div>
  <div class="modal-footer">
  	
  	<button type="submit" name="update" class="btn btn-success"><i class="icon-check"></i> Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
   
    
 

 </form>
					
               </div>
</div><!--modal -->              
<!--edit user modal end --> 
                                                                  
                                           											
                                        </tr>
               </tbody>
               
               <?php }?>
                
        </table>        
      

</div><!--container -->

	</div><!--item end -->






<div class="item"> <!--item 1 --><!--container -->

	</div><!--item end -->


<div class="item"> <!--item 1 -->

<div style="margin-top:15px;" class="container thumbnail">

            <pre><h4><strong><i class="icon-list"></i> List of Visa Applied Clients</strong></h4></pre>
 
 		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Flight_ID</th>
                        <th>Flight_No</th>
                        <th>Category</th>
                        <th>Base</th>
                        <th>Destination</th>
                        <th>DepartTime</th>
                        <th>ArrivalTime</th>
                         <th>Date Scheduled</th>
                        <th>Total No of Seat</th>
                        <th>Price Per Seat</th>
                       <th>Action</th>
                  
                    </tr>
                </thead>
                	
                    <?php
    $cart_table = mysql_query("select  * from flight_sc") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
										$flightID = $cart_row['Flight_NO'];
										$flight_table = mysql_query ("select * from flight where Flight_NO = '$flightID'") or die (mysql_error());   
									   	$cat_row = mysql_fetch_array($flight_table);	
                                        
                                        ?>
                                        
              		
                <tbody>
                						<tr>
                                            <td><?php echo $cart_row['Flight_ID']; ?></td>
                                            <td><?php echo $cart_row['Flight_NO']; ?></td>
                                            <td><?php echo $cart_row['Category']; ?></td>
                                            <td><?php echo $cart_row['Base']; ?></td>
                                            <td><?php echo $cart_row['Destination']; ?></td>
                                            <td><?php echo $cart_row['DepartTime']; ?></td>
                                            <td><?php echo $cart_row['ArrivalTime']; ?></td>   
                                            <td><?php echo $cart_row['DateScheduled']; ?></td>
                                            <td><?php echo $cat_row['TotalSeat']; ?></td>
                                            <td><?php echo $cat_row['Price']; ?></td>
                                             <td><?php echo $cart_row['status']; ?></td>
                                           
                                           
                                           <td width="230">
                                            <a href="#schedule" class="btn" role="button" data-toggle="modal"><i class="icon-plus-sign"></i> Add</a>
                                            <a href="#edit_schedule<?php echo $flightID;?>" class="btn" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
                                            <a href="#delete_room<?php echo $flightID;?>" class="btn btn-danger" role="button" data-toggle="modal"><i class="icon-remove"></i> Delete</a>
                                            </td>
                                            
                                            
                                            <!-- Modal delete room -->
<div id="delete_room<?php echo $flightID; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Dana Airline</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-danger"><p>Are you sure you want to Delete? <strong>Flight <?php echo $cart_row['Flight_NO']." ".$cart_row['Category'];?></strong></p></div>
  </div>
  <div class="modal-footer">
  	<a class="btn btn-danger" href="delete_room.php<?php echo '?id=' . $flightID; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div>
                                         <!--modal end --> 
                                            
                                          <!-- Modal add rooms -->
<div id="edit_schedule<?php echo $flightID;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit Schedule</h3>
  </div>
  <div class="modal-body">
  
  <form action="edit_schedule.php<?php echo '?id=' . $flightID; ?>" class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <div class="alert alert-info"><strong> Fight Scheduling Informations</strong></div>
                                <hr>
                                                              
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Flight NO:</label>
                                  <div class="controls">
                                    <select type="text" name="flight_nos" id="flight_nos">
                                       <option><?php echo $cart_row['Flight_NO']; ?></option>
                                      
                                          
                                    </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="">Air Base:</label>
                                    <div class="controls">
                                      <select type="text" name="base" id="base">
                                        <option ><?php echo $cart_row['Base'];?> </option>
                                        <option value="Abuja">Abuja</option>
                                          <option value="Lagos">Lagos</option>
                                          <option value="Owerri">Owerri</option>
                                          <option value="Port Harcourt">Port Harcourt</option>
                                          <option value="Uyo">Uyo</option>
                                        
                                      </select>
                                    </div>
                                </div>
                                
                             <div class="control-group">
                                    <label class="control-label" for="">Category:</label>
                                    <div class="controls">
                                      <select type="text" name="cat" id="cat">
                                        <option ><?php echo $cart_row['Category'];?></option>
                                       
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="">Destination:</label>
                                    <div class="controls">
                                        <select type="text" name="destination" id="destination">
                                          <option ><?php echo $cart_row['Destination'];?></option>
                                          <option value="Abuja">Abuja</option>
                                          <option value="Lagos">Lagos</option>
                                          <option value="Owerri">Owerri</option>
                                          <option value="Port Harcourt">Port Harcourt</option>
                                          <option value="Uyo">Uyo</option>
                                        </select>
                                                
                   						
                                      
                                    </div>
                                    
                                </div>
                                
  									
                             

                                <div class="control-group">
                                    <label class="control-label" for="">Departure Time:</label>
                                    <div class="controls">
                                      <select type="text" name="depart" id="depart">
                                        <option><?php echo $cart_row['DepartTime'];?></option>
                                        <option value="6:00">6:00</option>
                                        <option value="7:00">7:00</option>
                                        <option value="8:00">8:00</option>
                                        <option value="9:00">9:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                        <option value="22:00">22:00</option>
                                        <option value="23:00">23:00</option>
                                        <option value="24:00">24:00</option>
                                        <option value="1:00">1:00</option>
                                        <option value="2:00">2:00</option>
                                        <option value="3:00">3:00</option>
                                        <option value="4:00">4:00</option>
                                        <option value="5:00">5:00</option>
                                      </select>
                                      <input type="hidden" name="status" value="Available" >
                                    </div>
                                </div>

                               

                                
                                    <div class="control-group">
                                      <label class="control-label" for="">Arrival Time:</label>
                                      <div class="controls">
                                        <select type="text" name="arrive" id="arrive">
                                          <option><?php echo $cart_row['ArrivalTime'];?></option>
                                          <option value="6:00">6:00</option>
                                          <option value="7:00">7:00</option>
                                          <option value="8:00">8:00</option>
                                          <option value="9:00">9:00</option>
                                          <option value="10:00">10:00</option>
                                          <option value="11:00">11:00</option>
                                          <option value="12:00">12:00</option>
                                          <option value="13:00">13:00</option>
                                          <option value="14:00">14:00</option>
                                          <option value="15:00">15:00</option>
                                          <option value="16:00">16:00</option>
                                          <option value="17:00">17:00</option>
                                          <option value="18:00">18:00</option>
                                          <option value="19:00">19:00</option>
                                          <option value="20:00">20:00</option>
                                          <option value="21:00">21:00</option>
                                          <option value="22:00">22:00</option>
                                          <option value="23:00">23:00</option>
                                          <option value="24:00">24:00</option>
                                          <option value="1:00">1:00</option>
                                          <option value="2:00">2:00</option>
                                          <option value="3:00">3:00</option>
                                          <option value="4:00">4:00</option>
                                          <option value="5:00">5:00</option>
                                        </select>
                                      </div>
                                    </div>
                                    
  
     <div class="control-group">
                                    <label class="control-label" for="">Remaining Seat:</label>
                                    <div class="controls">
                                      <select type="text" name="remain" id="remain">
                                        <option><?php echo $cat_row['TotalSeat'];?></option>
                                      
                                      </select>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Date Scheduled:</label>
                                    <div class="controls">
                                        <input type="text"  name="txtdate" placeholder="yyyy-mm-dd" value="<?php echo $cart_row['DateScheduled'];?>">
                                   
  </div>
  <div class="modal-footer">
   <button type="submit" name="scheduleupdate" class="btn btn-success"><i class="icon-check"></i> Save</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
    
  </div>
  
</div>
                        
    </form>                      
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                           											
                                        </tr>
               </tbody>
               
               <?php }?>
                
        </table>        
      

</div><!--container -->

	</div><!--item end --><!--item end -->



  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
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
