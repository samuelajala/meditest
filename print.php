<?php include("get_session_variable.php");?>
<?php include('header.php');
$get_id=$_GET['id'];
?>

<?php include('admin/connect.php');?>

    <style type="text/css">
 
      .form-signin {
        max-width: 600px;
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
	  
	  
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

<script>

function goBack()
  {
  window.history.back()
  }
</script>

 <script> function printContent(el){ var restorepage = document.body.innerHTML; var printcontent = document.getElementById(el).innerHTML; document.body.innerHTML = printcontent; window.print(); document.body.innerHTML = restorepage; } </script>
  </head>
  
  <?php 
  
   $member_table = mysql_query("select * FROM invoice_tb WHERE user_id='$session_id' AND invoice_id='$get_id' AND status='paid'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($member_table);
                                    while ($member_row = mysql_fetch_array($member_table)) {
                                       	$invoice_id = $member_row['invoice_id'];
										if($member_row){
                                        ?>
              
  <body><div class="container">
    
    	<div class="row-fluid">
        
        	<div class="span12">
    
    			<div class="form-signin">
                

                
                <div class="btn-group">
  <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Back</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  		</div>

        <h4>Print: EEDC Slip</h4>
        
			<hr>
            
            <table width="603" id="TableGen">
            <tr>
              <td colspan="6"><img name="eedc" src="admin/img/eedc.gif" width="595" height="107" id="eedc" alt="" /></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Date: <?php echo $member_row['invoice_date'];?></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
					<td width="135"><strong>Account No:</strong></td>
                    <td width="134"><div align="right"><?php echo $member_row['account_no'];?></div></td>
                    <td width="14">&nbsp;</td>
                    <td width="161"><strong>Account No =</strong></td>
                    <td width="126"><div align="right"><?php echo $member_row['account_no'];?></div></td>
                    <td width="5">&nbsp;</td>
 				</tr>
                <tr>
                	<td><strong>Name:</strong></td>
                	<td><div align="right"> <?php echo $member_row['names'];?></div></td>
                	<td>&nbsp;</td>
                	<td><strong>Name =</strong></td>
                	<td><div align="right"><?php echo $member_row['names'];?></div></td>
                	<td>&nbsp;</td>                
                </tr>
                <tr>
					<td><strong>Service Address:</strong></td>
                    <td width="134"><div align="right"><?php echo $member_row['service_address'];?></div></td>
                    <td width="14">&nbsp;</td>
                    <td width="161"><strong>Service Address =</strong></td>
                    <td width="126"><div align="right"><?php echo $member_row['service_address'];?></div></td>
                    <td width="5">&nbsp;</td>
 				</tr>
                <tr>
                  <td><strong>Tariff Code:</strong></td>
                  <td><div align="right"><?php echo $member_row['tariff_code'];?></div></td>
                  <td>&nbsp;</td>
                  <td><strong>Phone No =</strong></td>
                  <td><div align="right"><?php echo $member_row['phone'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><strong>Due Date:</strong></td>
                  <td><div align="right"><?php echo $member_row['invoice_date'];?></div></td>
                  <td>&nbsp;</td>
                  <th colspan="2"><strong>CURRENT CHARGES</strong></th>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><strong>Phone:</strong></td>
                  <td><div align="right"><?php echo $member_row['phone'];?></div></td>
                  <td>&nbsp;</td>
                  <td><strong>Energy Charge =</strong></td>
                  <td><div align="right"><?php echo $member_row['energy'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Fixed Charge =</strong></td>
                  <td><div align="right"><?php echo $member_row['fixed_charge'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Metre Maintenance =</strong></td>
                  <td><div align="right"><?php echo $member_row['metre'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" rowspan="4"><img name="eedc2" src="admin/img/eedc2.gif" width="273" height="86" id="eedc2" alt="" /></td>
                  <td>&nbsp;</td>
                  <td><strong>Minimum Charge =</strong></td>
                  <td><div align="right"><?php echo $member_row['minimum_charge'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>Consumption Charge =</strong></td>
                  <td><div align="right"><?php echo $member_row['consumption_charge'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>Vat (%) =</strong></td>
                  <td><div align="right"><?php echo $member_row['vat'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><strong>Request Energy =</strong></td>
                  <td><div align="right"><?php echo $member_row['demand_level'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Amount Due =</strong></td>
                  <td><div align="right"><?php echo $member_row['total_due'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Amoun Paid =</strong></td>
                  <td><div align="right"><?php echo $member_row['total_due'];?></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5"><em><strong>PLEASE PAY TOTAL DUE ONLINE OR AT YOUR LOCAL BUSINESS UNIT OFFICE </strong></em><strong><em>RECONNECTION FEE =N= 1,000, =N= 2,000, =N= 5,000, =N= 10,000</em></strong>                    <p>&nbsp;</p></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td></p>
          <form id="form1" name="form1" method="post" action="">
 

           <button onclick="printContent('TableGen')">Print</button>
          </form>
          <p>&nbsp;</p></td>
                </tr>
                
            </table>
            
    			</div>
                
           	</div>
            
               
        
        </div>

    </div> <!-- /container -->

    <?php }
	else{
		 echo '<p class="alert alert-danger">You cannot Print Slip because No Payment Yet</p>';
              
		}
	}
	
	
	?>

  </body>
</html>