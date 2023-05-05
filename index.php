<?php include('header.php')?>
<?php include('admin/connect.php'); ?>

  <body>



     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Medical Test Analysis System</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about" data-toggle="modal">About</a></li>
              <li><a href="#contact" data-toggle="modal">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#account"  data-toggle="modal">Create Acount</a></li>
                 <li><a href="#login" data-toggle="modal">Login</a></li>
                  <li><a href="admin/index.php">Login as Admin</a></li>
                  <!--<li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>-->
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<!-- Modal -->
<div id="about" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">About Medical Test Analysis System</h3>
  </div>
  <div class="modal-body">
    <p>An expert system for medical test analysis is a computer system which will be used for analyzing medical test results in other to save time and also quicken the treatment period. This system is a system with purpose. It is a desktop application that enables “user to computer interaction”.  It is made up of software, hardware, application software and database system. It is a system which will aid medical diagnosis especially in emergencies. It will also solve most problems faced in our hospitals such as time wastage, loss of medical report etc. 
        
</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal end -->


	<!-- Modal -->
<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login too Your Account</h3>
  </div>
  <div class="modal-body">
   
  </div>
  <div class="modal-header">
  <form name="form1" method="post" class"form-horizontal" action="login.php">
                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Username:</label>
                                    <div class="controls">
                                        <input type="text" name="txtUser" id="inputEmail" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Password:</label>
                                    <div class="controls">
                                        <input type="password" name="txtPass" id="inputEmail" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="control-group">
                <div class="controls">
                    <button type="submit" name="txtRegister" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                </div>


            </div> </form>
  </div>
</div><!--Modal end -->


	<!-- Modal -->
<div id="account" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Create Account to login</h3>
  </div>
  <div class="modal-body">
   
  </div>
  <div class="modal-header">
  <form id="formID" class="formular" method="post" action="add_user.php">
            <table width="503">
        
            	<tr>

                
            		<td width="221">Names:<input class="validate[required,custom[onlyLetterSp]] text-input" name="names" type="text" id="names"></td>

                <td width="270">Contact Address:<input class="validate[required,custom[onlyLetterSp]] text-input" name="address" type="text" id="address" ></td>
                    
		
        		</tr>

                  
                <tr>
                <td>Contact Number:<input class="validate[required,[maxSize[12],custom[onlyNumberSp],[minSize[12]] text-input" name="cnumber" maxlength="12" type="text" id="telephone"></td>
                
                 <td>Email Address:<input class="validate[required,custom[email]] text-input" name="email" id="email" type="email"></td>
                
                </tr>
                
                 <tr>
                
                	<td>Password:<input class="validate[required,minSize[6]] text-input" name="password" id="password" type="password"></td>
                    <td>Retype Password:<input class="validate[required,minSize[6],equals[password]] text-input" name="password2" id="password2" type="password"></td>
                
                
                </tr>
                
                
                    </tr>
                    <button class="btn btn-large btn-primary" name="create" type="submit"><i class="icon-check"></i> Submit</button>
               
                </tr>   
              
                        
            </table></form>
  </div>
</div><!--Modal end -->


<!-- Modal -->
<div id="contact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h3 id="myModalLabel">Contact Us </h3>
  </div>
  <div class="modal-body">
    <p>Email: health@yahoo.com</p>
        <p>Phone: +2348044483773, +2347044333873</p>
        <div class="hero-unit-2">

<form name="form2" action="add_contact.php" method="post" class"form-horizontal">
                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="txtName" id="inputEmail" placeholder="Email/Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email:</label>
                                    <div class="controls">
                                        <input type="email" name="txtEmail" id="inputEmail" placeholder="example@yahoo.com" required>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject:</label>
                                    <div class="controls">
                                        <input type="text" name="txtSubject" id="inputEmail" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Message:</label>
                                    <div class="controls">
                                        <textarea name="txtMessage" id="inputEmail" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                <div class="controls">
                    <button type="submit" name="txtRegister" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                </div>


            </div> </form>
            

                </div>
                </p>

   </div>

  </div>
</div><!--Modal end -->







    <!-- Carousel
    ================================================== -->
    <div class="container">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="admin/slider/IMG_5564.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
       
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
</div>

	<div class="container">
   
      <!-- Example row of columns -->
      <div class="row">
        
		
		</div><!--container end -->
        
      <hr>

      <footer>
        <p>Medical Test Analysis System copyright &copy;2019  </p>
      </footer>

    <!-- Le javascript
    ================================================== -->
   
  </body>
</html>
