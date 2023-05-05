<?php include('connect.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Medical Test System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
		margin-top:150px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
     <link rel="shortcut icon" href="ico/icon.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    


  
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="username" type="text" class="input-block-level" placeholder="Email address">
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-primary" name="login" type="submit"><i class=" icon-check"></i> Sign in</button>
        <a href="../index.php" class="btn btn-danger"><i class=" icon-arrow-up"></i> Back to Home</a>
        
        
        
         <?php
                                if (isset($_POST['login'])) {
								
								     /* function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysql_real_escape_string($str);
                                    }*/
                                    $username = trim($_POST['username']);
                                    $password = trim($_POST['password']);

                                    $query = mysqli_query($conn,"select * from admin_tb where username='$username' and password='$password'") or die(mysql_error());
                                    $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_array($query);


                                    if ($count > 0) {
                                      
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['admin_id'];
                                        //header('location:admin.php');
                                          $URL="admin.php";
                                          echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                                          echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                            							session_write_close();
                                      } else {
                            							session_write_close();
                                        ?>
                                      <br>
                                      <p>&nbsp;</p>
                                      
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <div class="alert"><i class="icon-remove-sign"></i>&nbsp;Please Check Your Username And Password</div>
                                      
                                        <?php
                                    }
                                }
                                ?>

                                </div>

        
        
        
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

  </body>
</html>
