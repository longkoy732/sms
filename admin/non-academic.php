<?php 
// Finish
include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["snfname"]))
{
  $object->query = "
     INSERT INTO tbl_nonacad
     (snfname, snmname, snlname, snnext, sndbirth, snctship, snaddress, snpemail, sncontact, sngender, sncourse, snyrlvl, 
     sngfname, sngmname, snglname, sngnext, sngaddress, sngcontact, sngoccu, sngcompany, snffname, snfmname, snflname, snfnext, snfaddress, snfcontact, 
     snfoccu, snfcompany, snmfname, snmmname, snmlname, snmnext, snmaddress, snmcontact, snmoccu, snmcompany, snspcyincome, snrappnas, snbos, 
     snsskills, sntwinterest, snpschatt, snpschadd, snpyrlvl, snasprcstat, snapgmstat, sntbytpicstat, snpbrgyinstat, snacapstype, 
     snaemail, snapass, sngrantstat, snascholarstat, snadapply) 
     VALUES (:snfname, :snmname, :snlname, :snnext, :sndbirth, :snctship, :snaddress, :snpemail, :sncontact, :sngender, 
     :sncourse, :snyrlvl, :sngfname, :sngmname, :snglname, :sngnext, :sngaddress, :sngcontact, :sngoccu, :sngcompany, :snffname, :snfmname, 
     :snflname, :snfnext, :snfaddress, :snfcontact, :snfoccu, :snfcompany, :snmfname, :snmmname, :snmlname, :snmnext, :snmaddress, :snmcontact, :snmoccu, 
     :snmcompany, :snspcyincome, :snrappnas, :snbos, :snsskills, :sntwinterest, :snpschatt, :snpschadd, :snpyrlvl, 'Not-Received', 'Not-Received', 
     'Not-Received', 'Not-Received', 'Non-Academic', :snaemail, :snapass, 'New', 'Pending', '$object->now')";
     
     $password_hash = password_hash($_POST["snapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':snfname'					      =>	$_POST["snfname"],
                    ':snmname'					      =>	$_POST["snmname"],
                    ':snlname'					      =>	$_POST["snlname"],
                    ':snnext'					        =>	$_POST["snnext"],
                    ':sndbirth'					      =>	$_POST["sndbirth"],
					          ':snctship'				        =>	$_POST["snctship"],
                    ':snaddress'					    =>	$_POST["snaddress"],
                    ':snpemail'					      =>	$_POST["snpemail"],
                    ':sncontact'					    =>	$_POST["sncontact"],
                    ':sngender'					      =>	$_POST["sngender"],
                    ':sncourse'					      =>	$_POST["sncourse"],
                    ':snyrlvl'					      =>	$_POST["snyrlvl"],
					          ':sngfname'				        =>	$_POST["sngfname"],
					          ':sngmname'				        =>	$_POST["sngmname"],
					          ':snglname'			          =>	$_POST["snglname"],
                    ':sngnext'					      =>	$_POST["sngnext"],
                    ':sngaddress'					    =>	$_POST["sngaddress"],
                    ':sngcontact'					    =>	$_POST["sngcontact"],
                    ':sngoccu'					      =>	$_POST["sngoccu"],
                    ':sngcompany'					    =>	$_POST["sngcompany"],
					          ':snffname'				        =>	$_POST["snffname"],
                    ':snfmname'					      =>	$_POST["snfmname"],
                    ':snflname'					      =>	$_POST["snflname"],
                    ':snfnext'					      =>	$_POST["snfnext"],
                    ':snfaddress'					    =>	$_POST["snfaddress"],
                    ':snfcontact'					    =>	$_POST["snfcontact"],
					          ':snfoccu'				        =>	$_POST["snfoccu"],
					          ':snfcompany'				      =>	$_POST["snfcompany"],
					          ':snmfname'				        =>	$_POST["snmfname"],
                    ':snmmname'					      =>	$_POST["snmmname"],
                    ':snmlname'					      =>	$_POST["snmlname"],
                    ':snmnext'					      =>	$_POST["snmnext"],
                    ':snmaddress'					    =>	$_POST["snmaddress"],
                    ':snmcontact'					    =>	$_POST["snmcontact"],
					          ':snmoccu'				        =>	$_POST["snmoccu"],
					          ':snmcompany'			        =>	$_POST["snmcompany"],
                    ':snspcyincome'				    =>	$_POST["snspcyincome"],
                    ':snrappnas'				      =>	$_POST["snrappnas"],
                    ':snbos'				          =>	$_POST["snbos"],
                    ':snsskills'				      =>	$_POST["snsskills"],
                    ':sntwinterest'				    =>	$_POST["sntwinterest"],
                    ':snpschatt'				      =>	$_POST["snpschatt"],
                    ':snpschadd'				      =>	$_POST["snpschadd"],
                    ':snpyrlvl'				        =>	$_POST["snpyrlvl"],
                    ':snaemail'			          =>	$_POST["snaemail"],
					          ':snapass'				        =>  $password_hash
 );

$object->execute($data);
 
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';

}

?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SMS | NAS</title>
  <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
   <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
 </head>
 <body>
 <br />
  <div class="container box">
   <br />
   <h2 align="center">Non-Academic Scholarship (NAS)<br>Application Form</h2><br />
   <?php echo $message; ?> 
   <form method="post" id="acad_form" class="row gap-3">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_family_details" style="border:1px solid #ccc">Family Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_application_details" style="border:1px solid #ccc">Application Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_education_details" style="border:1px solid #ccc">Education Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_requirement_details" style="border:1px solid #ccc">Requirements Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_account_details" style="border:1px solid #ccc">Account Details</a>
     </li>
    </ul>
  <!-- Personal Details -->
    <div class="tab-content" style="margin-top:16px;">
      <div class="tab-pane active" id="personal_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Personal Details</div>
            <div class="panel-body">
              <div class="form-group">
					      <h4 class="sub-title">Personal Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="snfname" id="snfname" class="form-control" />
                    <span id="error_snfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="snmname" id="snmname" class="form-control" />
                    <span id="error_snmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="snlname" id="snlname" class="form-control" />
                    <span id="error_snlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="snnext" id="snnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_snnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="sndbirth" id="sndbirth" class="form-control">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_sndbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="sngender" id="sngender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_sngender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="snctship" id="snctship" class="form-control" />
                    <span id="error_snctship" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="snaddress" id="snaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Email Address<span class="text-danger">*</span></label>
                    <input type="text" name="snpemail" id="snpemail" class="form-control" />
                    <span id="error_snpemail" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="sncontact" id="sncontact" class="form-control" />
                    <span id="error_sncontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Course<span class="text-danger">*</span></label>
                    <input type="text" name="sncourse" id="sncourse" class="form-control" />
                    <span id="error_sncourse" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Grade/Year Level<span class="text-danger">*</span></label>
                    <input type="text" name="snyrlvl" id="snyrlvl" class="form-control" />
                    <span id="error_snyrlvl" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div align="center">
                <a class="btn btn-primary" href="apply.php" role="button">Back</a>
                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>
<!-- Family Details -->
     <div class="tab-pane fade" id="family_details">
      <div class="panel panel-default">
       <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Family Details</div>
        <div class="panel-body">
          <div class="form-group">
					      <h4 class="sub-title">Guardian Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="sngfname" id="sngfname" class="form-control" />
                    <span id="error_sngfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="sngmname" id="sngmname" class="form-control" />
                    <span id="error_sngmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="snglname" id="snglname" class="form-control" />
                    <span id="error_snglname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="sngnext" id="sngnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_sngnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="sngaddress" id="sngaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_sngaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="sngcontact" id="sngcontact" class="form-control" />
                    <span id="error_sngcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="sngoccu" id="sngoccu" class="form-control" />
                    <span id="error_sngoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="sngcompany" id="sngcompany" class="form-control" />
                    <span id="error_sngcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Father Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="snffname" id="snffname" class="form-control" />
                    <span id="error_snffname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="snfmname" id="snfmname" class="form-control" />
                    <span id="error_snfmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="snflname" id="snflname" class="form-control" />
                    <span id="error_snflname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="snfnext" id="snfnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_snfnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="snfaddress" id="snfaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snfaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="snfcontact" id="snfcontact" class="form-control" />
                    <span id="error_snfcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="snfoccu" id="snfoccu" class="form-control" />
                    <span id="error_snfoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="snfcompany" id="snfcompany" class="form-control" />
                    <span id="error_snfcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Mother Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="snmfname" id="snmfname" class="form-control" />
                    <span id="error_snmfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="snmmname" id="snmmname" class="form-control" />
                    <span id="error_snmmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="snmlname" id="snmlname" class="form-control" />
                    <span id="error_snmlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="snmnext" id="snmnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_snmnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="snmaddress" id="snmaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snmaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="snmcontact" id="snmcontact" class="form-control" />
                    <span id="error_snmcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="snmoccu" id="snmoccu" class="form-control" />
                    <span id="error_snmoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="snmcompany" id="snmcompany" class="form-control" />
                    <span id="error_snmcompany" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                    <label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
                    <input type="text" name="snspcyincome" id="snspcyincome" class="form-control" />
                    <span id="error_snspcyincome" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div align="center">
              <button type="button" name="previous_btn_family_details" id="previous_btn_family_details" class="btn btn-default btn-md">Previous</button>
              <button type="button" name="btn_family_details" id="btn_family_details" class="btn btn-info btn-md">Next</button>
            </div>
        </div>
      </div>
     </div>
<!-- Application Details -->
      <div class="tab-pane fade" id="application_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Application Details</div>
            <div class="panel-body">
              <div class="form-group">
					      <h4 class="sub-title">Application Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Reasons/Special Circumstances for Applying NAS<span class="text-danger">*</span></label>
                    <textarea type="text" name="snrappnas" id="snrappnas" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snrappnas" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Basic Office Skills<span class="text-danger">*</span></label>
                    <textarea type="text" name="snbos" id="snbos" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snbos" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Special Skills<span class="text-danger">*</span></label>
                    <textarea type="text" name="snsskills" id="snsskills" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snsskills" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Type of Work Interested In<span class="text-danger">*</span></label>
                    <textarea type="text" name="sntwinterest" id="sntwinterest" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_sntwinterest" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div align="center">
                <button type="button" name="previous_btn_application" id="previous_btn_application" class="btn btn-default btn-md">Previous</button>
                <button type="button" name="btn_application" id="btn_application" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>
      <!-- Education Details -->
      <div class="tab-pane fade" id="education_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Education Details</div>
            <div class="panel-body">
              <div class="form-group">
					      <h4 class="sub-title">Education Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Previous School Attended<span class="text-danger">*</span></label>
                    <textarea type="text" name="snpschatt" id="snpschatt" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snpschatt" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Year/Grade Level<span class="text-danger">*</span></label>
                    <input type="text" name="snpyrlvl" id="snpyrlvl" class="form-control" />
                    <span id="error_snpyrlvl" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>School Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="snpschadd" id="snpschadd" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_snpschadd" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div align="center">
                <button type="button" name="previous_btn_education" id="previous_btn_education" class="btn btn-default btn-md">Previous</button>
                <button type="button" name="btn_education" id="btn_education" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>
      <!-- Requirement Details -->
      <div class="tab-pane fade" id="requirement_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Applicant Must Be:</div>
            <div class="panel-body">
              <ul class="list-group d-flex justify-content-center">
                <li class="list-group-item">1. Senior High Graduate</li>
                <li class="list-group-item">2. College Level</li>
                <li class="list-group-item">3. 4th year High School Graduate(Old Curriculum)</li>
                <li class="list-group-item">4. ALS Passer Promoted to College</li>
                <li class="list-group-item">5. Enrolled of the said Institution</li>
              </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">List of Requirements</div>
            <div class="panel-body">
                    <ul class="list-group d-flex justify-content-center">
                      <li class="list-group-item">1. Photocopy of Report Card</li>
                      <li class="list-group-item">2. Photocopy of Certificate of Good Moral</li>
                      <li class="list-group-item">3. 2x2 ID Picture(1pc.)</li>
                      <li class="list-group-item">4. Barangay Indigency</li>
                      <li class="list-group-item">5. Photocopy of Student's Copy Enrollment Form</li>
                    </ul>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault" style="font-style: italic; font-weight: normal;">
                        I agree that the requirements above are legit and will submit it on time.
                      </label><br>
                      <span id="error_flexCheckDefault" class="text-danger"></span>
                      <div class="alert alert-warning" role="alert" style="font-style: italic;"><b>Note:</b> Please provide the hard copy of the following requirements, bring it to the Scholarship Office, and hand it over to Mr Gemini Daguplo or Ms Grabrielle Heruela.</div>
                    </div>
              <div align="center">
                <button type="button" name="previous_btn_requirement" id="previous_btn_requirement" class="btn btn-default btn-md">Previous</button>
                <button type="button" name="btn_requirement" id="btn_requirement" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>
      <!-- Account Details -->
      <div class="tab-pane fade" id="account_details">
        <div class="panel panel-default">
          <div class="panel-heading">Account Details</div>
            <div class="panel-body">
               <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="snaemail" id="snaemail" class="form-control" />
                  <span id="error_snaemail" class="text-danger"></span>
                  </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="snapass" id="snapass" class="form-control" />
                  <span id="error_snapass" class="text-danger"></span>
                </div>
        <div align="center">
          <button type="button" name="previous_btn_account" id="previous_btn_account" class="btn btn-default btn-md">Previous</button>
          <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-success">Submit</button>
        </div>
       </div>
      </div>
     </div>
     </div>
   </form>
  </div>
</body>
</html>

<script>
// Student Details
$(document).ready(function(){
 
 $('#btn_personal_details').click(function(){
  var error_snfname = '';
  var error_snmname = '';
  var error_snlname = '';
  var error_snnext = '';
  var error_sndbirth = '';
  var error_sngender = '';
  var error_snctship = '';
  var error_snaddress = '';
  var error_snpemail = '';
  var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
  var error_sncontact = '';
  var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  


  if($.trim($('#snfname').val()).length == 0)
  {
   error_snfname = 'First Name is required';
   $('#error_snfname').text(error_snfname);
   $('#snfname').addClass('has-error');
  }
  else
  {
   error_snfname = '';
   $('#error_snfname').text(error_snfname);
   $('#snfname').removeClass('has-error');
  }

  if($.trim($('#snmname').val()).length == 0)
  {
   error_snmname = 'Put N/A if None';
   $('#error_snmname').text(error_snmname);
   $('#snmname').addClass('has-error');
  }
  else
  {
   error_snmname = '';
   $('#error_snmname').text(error_snmname);
   $('#snmname').removeClass('has-error');
  }
  
  if($.trim($('#snlname').val()).length == 0)
  {
   error_snlname = 'Last Name is required';
   $('#error_snlname').text(error_snlname);
   $('#snlname').addClass('has-error');
  }
  else
  {
   error_snlname = '';
   $('#error_snlname').text(error_snlname);
   $('#snlname').removeClass('has-error');
  }

  //Suffix

  if($.trim($('#snnext').val()).length == 0)
  {
   error_snnext = 'Select N/A if None';
   $('#error_snnext').text(error_snnext);
   $('#snnext').addClass('has-error');
  }
  else
  {
   error_snnext = '';
   $('#error_snnext').text(error_snnext);
   $('#snnext').removeClass('has-error');
  }

  if($.trim($('#sndbirth').val()).length == 0)
  {
   error_sndbirth = 'Date of Birth is required';
   $('#error_sndbirth').text(error_sndbirth);
   $('#sndbirth').addClass('has-error');
  }
  else
  {
   error_sndbirth = '';
   $('#error_sndbirth').text(error_sndbirth);
   $('#sndbirth').removeClass('has-error');
  }

  if($.trim($('#sngender').val()).length == 0)
  {
   error_sngender = 'Gender is required';
   $('#error_sngender').text(error_sngender);
   $('#sngender').addClass('has-error');
  }
  else
  {
   error_sngender = '';
   $('#error_sngender').text(error_sngender);
   $('#sngender').removeClass('has-error');
  }

  if($.trim($('#snctship').val()).length == 0)
  {
   error_snctship = 'Citizenship is required';
   $('#error_snctship').text(error_snctship);
   $('#snctship').addClass('has-error');
  }
  else
  {
   error_snctship = '';
   $('#error_snctship').text(error_snctship);
   $('#snctship').removeClass('has-error');
  }

  if($.trim($('#snaddress').val()).length == 0)
  {
   error_snaddress = 'Address is required';
   $('#error_snaddress').text(error_snaddress);
   $('#snaddress').addClass('has-error');
  }
  else
  {
   error_snaddress = '';
   $('#error_snaddress').text(error_snaddress);
   $('#snaddress').removeClass('has-error');
  }

  if($.trim($('#snpemail').val()).length == 0)
  {
   error_snpemail = 'Email is required';
   $('#error_snpemail').text(error_snpemail);
   $('#snpemail').addClass('has-error');
  }
  else
  {
//     if(emailval.test($('#snpemail').val()))
//    {
//     error_snpemail = 'Invalid Email Only(gmail, hotmail, outlook or yahoo is allowed).';
//     $('#error_snpemail').text(error_snpemail);
//     $('#snpemail').addClass('has-error');
//    }
//    else {
   error_snpemail = '';
   $('#error_snpemail').text(error_snpemail);
   $('#snpemail').removeClass('has-error');
   }
//   }

  if($.trim($('#sncontact').val()).length == 0)
  {
   error_sncontact = 'Contact Number is required';
   $('#error_sncontact').text(error_sncontact);
   $('#sncontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#sncontact').val()))
//    {
//     error_sncontact = 'Invalid Contact Number';
//     $('#error_sncontact').text(error_sncontact);
//     $('#sncontact').addClass('has-error');
//    }
//    else
//    {
    error_sncontact = '';
    $('#error_sncontact').text(error_sncontact);
    $('#sncontact').removeClass('has-error');
//    }
  }

  if($.trim($('#sncourse').val()).length == 0)
  {
   error_sncourse = 'Course is required';
   $('#error_sncourse').text(error_sncourse);
   $('#sncourse').addClass('has-error');
  }
  else
  {
   error_sncourse = '';
   $('#error_sncourse').text(error_sncourse);
   $('#sncourse').removeClass('has-error');
  }

  if($.trim($('#snyrlvl').val()).length == 0)
  {
   error_snyrlvl = 'Grade/Year Level is required';
   $('#error_snyrlvl').text(error_snyrlvl);
   $('#snyrlvl').addClass('has-error');
  }
  else
  {
   error_snyrlvl = '';
   $('#error_snyrlvl').text(error_snyrlvl);
   $('#snyrlvl').removeClass('has-error');
  }

  if(error_snfname != '' || error_snmname != '' 
  || error_snlname != '' || error_sndbirth != '' 
  || error_snctship != '' || error_snaddress != '' 
  || error_snpemail != '' || error_sncontact != ''
  || error_sncourse != '' || error_snyrlvl != ''
  )
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_family_details').removeClass('inactive_tab1');
   $('#list_family_details').addClass('active_tab1 active');
   $('#list_family_details').attr('href', '#family_details');
   $('#list_family_details').attr('data-toggle', 'tab');
   $('#family_details').addClass('active in');
  }
 });
 
 $('#previous_btn_family_details').click(function(){
  $('#list_family_details').removeClass('active active_tab1');
  $('#list_family_details').removeAttr('href data-toggle');
  $('#family_details').removeClass('active in');
  $('#list_family_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 

// Family Details
 $('#btn_family_details').click(function(){
  var error_sngfname = '';
  var error_sngmname = '';
  var error_snglname = '';
  var error_sngnext = '';
  var error_sngaddress = '';
  var error_sngcontact = '';
  var error_sngoccu = '';
  var error_sngcompany = '';
  var error_snffname = '';
  var error_snfmname = '';
  var error_snflname = '';
  var error_snfnext = '';
  var error_snfaddress = '';
  var error_snfcontact = '';
  var error_snfoccu = '';
  var error_snfcompany = '';
  var error_snmfname = '';
  var error_snmmname = '';
  var error_snmlname = '';
  var error_snmnext = '';
  var error_snmaddress = '';
  var error_snmcontact = '';
  var error_snmoccu = '';
  var error_snmcompany = '';
  var error_snspcyincome = '';
  
// Complete Name
  if($.trim($('#sngfname').val()).length == 0)
  {
   error_sngfname = 'First Name is required';
   $('#error_sngfname').text(error_sngfname);
   $('#sngfname').addClass('has-error');
  }
  else
  {
   error_sngfname = '';
   $('#error_sngfname').text(error_sngfname);
   $('#sngfname').removeClass('has-error');
  }

  if($.trim($('#sngmname').val()).length == 0)
  {
   error_sngmname = 'Put N/A if None';
   $('#error_sngmname').text(error_sngmname);
   $('#sngmname').addClass('has-error');
  }
  else
  {
   error_sngmname = '';
   $('#error_sngmname').text(error_sngmname);
   $('#sngmname').removeClass('has-error');
  }

  if($.trim($('#snglname').val()).length == 0)
  {
   error_snglname = 'Last Name is required';
   $('#error_snglname').text(error_snglname);
   $('#snglname').addClass('has-error');
  }
  else
  {
   error_snglname = '';
   $('#error_snglname').text(error_snglname);
   $('#snglname').removeClass('has-error');
  }

  //Guardian Suffix

  if($.trim($('#sngnext').val()).length == 0)
  {
   error_sngnext = 'Select N/A if none';
   $('#error_sngnext').text(error_sngnext);
   $('#sngnext').addClass('has-error');
  }
  else
  {
   error_sngnext = '';
   $('#error_sngnext').text(error_sngnext);
   $('#sngnext').removeClass('has-error');
  }

  if($.trim($('#snffname').val()).length == 0)
  {
   error_snffname = 'First Name is required';
   $('#error_snffname').text(error_snffname);
   $('#snffname').addClass('has-error');
  }
  else
  {
   error_snffname = '';
   $('#error_snffname').text(error_snffname);
   $('#snffname').removeClass('has-error');
  }

  if($.trim($('#snfmname').val()).length == 0)
  {
   error_snfmname = 'Put N/A if None';
   $('#error_snfmname').text(error_snfmname);
   $('#snfmname').addClass('has-error');
  }
  else
  {
   error_snfmname = '';
   $('#error_snfmname').text(error_snfmname);
   $('#snfmname').removeClass('has-error');
  }

  if($.trim($('#snflname').val()).length == 0)
  {
   error_snflname = 'Last Name is required';
   $('#error_snflname').text(error_snflname);
   $('#snflname').addClass('has-error');
  }
  else
  {
   error_snflname = '';
   $('#error_snflname').text(error_snflname);
   $('#snflname').removeClass('has-error');
  }

  //Father Suffix

  if($.trim($('#snfnext').val()).length == 0)
  {
   error_snfnext = 'Select N/A if none';
   $('#error_snfnext').text(error_snfnext);
   $('#snfnext').addClass('has-error');
  }
  else
  {
   error_snfnext = '';
   $('#error_snfnext').text(error_snfnext);
   $('#snfnext').removeClass('has-error');
  }

  if($.trim($('#snmfname').val()).length == 0)
  {
   error_snmfname = 'First Name is required';
   $('#error_snmfname').text(error_snmfname);
   $('#snmfname').addClass('has-error');
  }
  else
  {
   error_snmfname = '';
   $('#error_snmfname').text(error_snmfname);
   $('#snmfname').removeClass('has-error');
  }

  if($.trim($('#snmmname').val()).length == 0)
  {
   error_snmmname = 'Put N/A if None';
   $('#error_snmmname').text(error_snmmname);
   $('#snmmname').addClass('has-error');
  }
  else
  {
   error_snmmname = '';
   $('#error_snmmname').text(error_snmmname);
   $('#snmmname').removeClass('has-error');
  }

  if($.trim($('#snmlname').val()).length == 0)
  {
   error_snmlname = 'Last Name is required';
   $('#error_snmlname').text(error_snmlname);
   $('#snmlname').addClass('has-error');
  }
  else
  {
   error_snmlname = '';
   $('#error_snmlname').text(error_snmlname);
   $('#snmlname').removeClass('has-error');
  }

  //Mother Suffix

  if($.trim($('#snmnext').val()).length == 0)
  {
   error_snmnext = 'Select N/A if none';
   $('#error_snmnext').text(error_snmnext);
   $('#snmnext').addClass('has-error');
  }
  else
  {
   error_snmnext = '';
   $('#error_snmnext').text(error_snmnext);
   $('#snmnext').removeClass('has-error');
  }

// Address
  if($.trim($('#sngaddress').val()).length == 0)
  {
   error_sngaddress = 'Address is required';
   $('#error_sngaddress').text(error_sngaddress);
   $('#sngaddress').addClass('has-error');
  }
  else
  {
   error_sngaddress = '';
   $('#error_sngaddress').text(error_sngaddress);
   $('#sngaddress').removeClass('has-error');
  }
  if($.trim($('#snfaddress').val()).length == 0)
  {
   error_snfaddress = 'Address is required';
   $('#error_snfaddress').text(error_snfaddress);
   $('#snfaddress').addClass('has-error');
  }
  else
  {
   error_snfaddress = '';
   $('#error_snfaddress').text(error_snfaddress);
   $('#snfaddress').removeClass('has-error');
  }
  if($.trim($('#snmaddress').val()).length == 0)
  {
   error_snmaddress = 'Address is required';
   $('#error_snmaddress').text(error_snmaddress);
   $('#snmaddress').addClass('has-error');
  }
  else
  {
   error_snmaddress = '';
   $('#error_snmaddress').text(error_snmaddress);
   $('#snmaddress').removeClass('has-error');
  }
// Contact Number
if($.trim($('#sngcontact').val()).length == 0)
  {
   error_sngcontact = 'Contact Number is required';
   $('#error_sngcontact').text(error_sngcontact);
   $('#sngcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#sngcontact').val()))
//    {
//     error_sngcontact = 'Invalid Contact Number';
//     $('#error_sngcontact').text(error_sngcontact);
//     $('#sngcontact').addClass('has-error');
//    }
//    else
//    {
    error_sngcontact = '';
    $('#error_sngcontact').text(error_sngcontact);
    $('#sngcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#snfcontact').val()).length == 0)
  {
   error_snfcontact = 'Contact Number is required';
   $('#error_snfcontact').text(error_snfcontact);
   $('#snfcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#snfcontact').val()))
//    {
//     error_snfcontact = 'Invalid Contact Number';
//     $('#error_snmcontact').text(error_snfcontact);
//     $('#snfcontact').addClass('has-error');
//    }
//    else
//    {
    error_snfcontact = '';
    $('#error_snfcontact').text(error_snfcontact);
    $('#snfcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#snmcontact').val()).length == 0)
  {
   error_snmcontact = 'Contact Number is required';
   $('#error_snmcontact').text(error_snmcontact);
   $('#snmcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#snmcontact').val()))
//    {
//     error_snmcontact = 'Invalid Contact Number';
//     $('#error_snmcontact').text(error_snmcontact);
//     $('#snmcontact').addClass('has-error');
//    }
//    else
//    {
    error_mcontact = '';
    $('#error_mcontact').text(error_mcontact);
    $('#mcontact').removeClass('has-error');
//    }
  }

// Occupation
if($.trim($('#sngoccu').val()).length == 0)
  {
   error_sngoccu = 'Put N/A if None';
   $('#error_sngoccu').text(error_sngoccu);
   $('#sngoccu').addClass('has-error');
  }
  else
  {
   error_sngoccu = '';
   $('#error_sngoccu').text(error_sngoccu);
   $('#sngoccu').removeClass('has-error');
  }
  if($.trim($('#snfoccu').val()).length == 0)
  {
   error_snfoccu = 'Put N/A if None';
   $('#error_snfoccu').text(error_snfoccu);
   $('#snfoccu').addClass('has-error');
  }
  else
  {
   error_snfoccu = '';
   $('#error_snfoccu').text(error_snfoccu);
   $('#snfoccu').removeClass('has-error');
  }
  if($.trim($('#snmoccu').val()).length == 0)
  {
   error_snmoccu = 'Put N/A if None';
   $('#error_snmoccu').text(error_snmoccu);
   $('#snmoccu').addClass('has-error');
  }
  else
  {
   error_snmoccu = '';
   $('#error_snmoccu').text(error_snmoccu);
   $('#snmoccu').removeClass('has-error');
  } 


// Company

if($.trim($('#sngcompany').val()).length == 0)
  {
   error_sngcompany = 'Put N/A if None';
   $('#error_sngcompany').text(error_sngcompany);
   $('#sngcompany').addClass('has-error');
  }
  else
  {
   error_sngcompany = '';
   $('#error_sngcompany').text(error_sngcompany);
   $('#sngcompany').removeClass('has-error');
  }
  if($.trim($('#snfcompany').val()).length == 0)
  {
   error_snfcompany = 'Put N/A if None';
   $('#error_snfcompany').text(error_snfcompany);
   $('#snfcompany').addClass('has-error');
  }
  else
  {
   error_snfcompany = '';
   $('#error_snfcompany').text(error_snfcompany);
   $('#snfcompany').removeClass('has-error');
  }
  if($.trim($('#snmcompany').val()).length == 0)
  {
   error_snmcompany = 'Put N/A if None';
   $('#error_snmcompany').text(error_snmcompany);
   $('#snmcompany').addClass('has-error');
  }
  else
  {
   error_snmcompany = '';
   $('#error_snmcompany').text(error_snmcompany);
   $('#snmcompany').removeClass('has-error');
  } 

// ParentYearlyIncome
if($.trim($('#snspcyincome').val()).length == 0)
  {
   error_snspcyincome = 'Parents Yearly Income is required';
   $('#error_snspcyincome').text(error_snspcyincome);
   $('#snspcyincome').addClass('has-error');
  }
  else
  {
   error_snspcyincome = '';
   $('#error_snspcyincome').text(error_snspcyincome);
   $('#snspcyincome').removeClass('has-error');
  } 

  if( error_sngfname != '' ||
  error_sngmname != '' ||
  error_snglname != '' ||
  error_sngnext != '' ||
  error_sngaddress != '' ||
  error_sngcontact != '' ||
  error_sngoccu != '' ||
  error_sngcompany != '' ||
  error_snffname != '' ||
  error_snfmname != '' ||
  error_snflname != '' ||
  error_snfnext != '' ||
  error_snfaddress != '' ||
  error_snfcontact != '' ||
  error_snfoccu != '' ||
  error_snfcompany != '' ||
  error_snmfname != '' ||
  error_snmmname != '' ||
  error_snmlname != '' ||
  error_snmnext != '' ||
  error_snmaddress != '' ||
  error_mcontact != '' ||
  error_snmoccu != '' ||
  error_snmcompany != '' ||
  error_snspcyincome != '')
  {
   return false;
  }
  else
  {
    $('#list_family_details').removeClass('active active_tab1');
    $('#list_family_details').removeAttr('href data-toggle');
    $('#family_details').removeClass('active');
    $('#list_family_details').addClass('inactive_tab1');
    $('#list_application_details').removeClass('inactive_tab1');
    $('#list_application_details').addClass('active_tab1 active');
    $('#list_application_details').attr('href', '#application_details');
    $('#list_application_details').attr('data-toggle', 'tab');
    $('#application_details').addClass('active in');   
  }
 });

 $('#previous_btn_application').click(function(){
  $('#list_application_details').removeClass('active active_tab1');
  $('#list_application_details').removeAttr('href data-toggle');
  $('#application_details').removeClass('active in');
  $('#list_application_details').addClass('inactive_tab1');
  $('#list_family_details').removeClass('inactive_tab1');
  $('#list_family_details').addClass('active_tab1 active');
  $('#list_family_details').attr('href', '#family_details');
  $('#list_family_details').attr('data-toggle', 'tab');
  $('#family_details').addClass('active in');
 });

 $('#btn_application').click(function(){
  
  var error_snrappnas = '';
  var error_snbos = '';
  var error_snsskills = '';
  var error_sntwinterest = '';
  
  if($.trim($('#snrappnas').val()).length == 0)
  {
   error_snrappnas = 'Reason of Applying NAS is Required';
   $('#error_snrappnas').text(error_snrappnas);
   $('#snrappnas').addClass('has-error');
  }
  else
  {
   error_snrappnas = '';
   $('#error_snrappnas').text(error_snrappnas);
   $('#snrappnas').removeClass('has-error');
  }
  if($.trim($('#snbos').val()).length == 0)
  {
   error_snbos = 'Basic Office Skills is Required';
   $('#error_snbos').text(error_snbos);
   $('#snbos').addClass('has-error');
  }
  else
  {
   error_snbos = '';
   $('#error_snbos').text(error_snbos);
   $('#snbos').removeClass('has-error');
  }

  if($.trim($('#snsskills').val()).length == 0)
  {
   error_snsskills = 'Special Skills is required';
   $('#error_snsskills').text(error_snsskills);
   $('#snsskills').addClass('has-error');
  }
  else
  {
   error_snsskills = '';
   $('#error_snsskills').text(error_snsskills);
   $('#snsskills').removeClass('has-error');
  }

  if($.trim($('#sntwinterest').val()).length == 0)
  {
   error_sntwinterest = 'Type of Work Interested In is required';
   $('#error_sntwinterest').text(error_sntwinterest);
   $('#sntwinterest').addClass('has-error');
  }
  else
  {
   error_sntwinterest = '';
   $('#error_sntwinterest').text(error_sntwinterest);
   $('#sntwinterest').removeClass('has-error');
  } 

  if(error_snrappnas != '' || 
     error_snbos != '' ||
     error_snsskills != '' ||
     error_sntwinterest != '')
  {
   return false;
  }
  else
  {
    $('#list_application_details').removeClass('active active_tab1');
    $('#list_application_detailss').removeAttr('href data-toggle');
    $('#application_details').removeClass('active');
    $('#list_application_details').addClass('inactive_tab1');
    $('#list_education_details').removeClass('inactive_tab1');
    $('#list_education_details').addClass('active_tab1 active');
    $('#list_education_details').attr('href', '#education_details');
    $('#list_education_details').attr('data-toggle', 'tab');
    $('#education_details').addClass('active in');  
  }
});

$('#previous_btn_education').click(function(){
  $('#list_education_details').removeClass('active active_tab1');
  $('#list_education_details').removeAttr('href data-toggle');
  $('#education_details').removeClass('active in');
  $('#list_education_details').addClass('inactive_tab1');
  $('#list_application_details').removeClass('inactive_tab1');
  $('#list_application_details').addClass('active_tab1 active');
  $('#list_application_details').attr('href', '#application_details');
  $('#list_application_details').attr('data-toggle', 'tab');
  $('#application_details').addClass('active in');
 });

 $('#btn_education').click(function(){
  
  var error_snpschatt = '';
  var error_snpyrlvl = '';
  var error_snpschadd = '';
  
  if($.trim($('#snpschatt').val()).length == 0)
  {
   error_snpschatt = 'Previous School Attended is required';
   $('#error_snpschatt').text(error_snpschatt);
   $('#snpschatt').addClass('has-error');
  }
  else
  {
   error_snpschatt = '';
   $('#error_snpschatt').text(error_snpschatt);
   $('#snpschatt').removeClass('has-error');
  }

  if($.trim($('#snpyrlvl').val()).length == 0)
  {
   error_snpyrlvl = 'Grade/Year Level is required';
   $('#error_snpyrlvl').text(error_snpyrlvl);
   $('#snpyrlvl').addClass('has-error');
  }
  else
  {
   error_snpyrlvl = '';
   $('#error_snpyrlvl').text(error_snpyrlvl);
   $('#snpyrlvl').removeClass('has-error');
  }

  if($.trim($('#snpschadd').val()).length == 0)
  {
   error_snpschadd = 'School Address is required';
   $('#error_snpschadd').text(error_snpschadd);
   $('#snpschadd').addClass('has-error');
  }
  else
  {
   error_snpschadd = '';
   $('#error_snpschadd').text(error_snpschadd);
   $('#snpschadd').removeClass('has-error');
  }

  if(error_snpschatt != '' || 
     error_snpyrlvl != '' ||
     error_snpschadd != '')
  {
   return false;
  }
  else
  {
    $('#list_education_details').removeClass('active active_tab1');
    $('#list_education_details').removeAttr('href data-toggle');
    $('#education_details').removeClass('active');
    $('#list_education_details').addClass('inactive_tab1');
    $('#list_requirement_details').removeClass('inactive_tab1');
    $('#list_requirement_details').addClass('active_tab1 active');
    $('#list_requirement_details').attr('href', '#requirement_details');
    $('#list_requirement_details').attr('data-toggle', 'tab');
    $('#requirement_details').addClass('active in');    
  }
});

$('#previous_btn_requirement').click(function(){
  $('#list_requirement_details').removeClass('active active_tab1');
  $('#list_requirement_details').removeAttr('href data-toggle');
  $('#requirement_details').removeClass('active in');
  $('#list_requirement_details').addClass('inactive_tab1');
  $('#list_education_details').removeClass('inactive_tab1');
  $('#list_education_details').addClass('active_tab1 active');
  $('#list_education_details').attr('href', '#education_details');
  $('#list_education_details').attr('data-toggle', 'tab');
  $('#education_details').addClass('active in');
 });

 $('#btn_requirement').click(function(){
  
  var error_flexCheckDefault = '';

  if($('#flexCheckDefault').not(':checked').length){
     error_flexCheckDefault = 'Checkbox is required';
     $('#error_flexCheckDefault').text(error_flexCheckDefault);
     $('#flexCheckDefault').addClass('has-error');
  } 
  else{
    error_flexCheckDefault = '';
    $('#error_flexCheckDefault').text(error_flexCheckDefault);
    $('#flexCheckDefault').removeClass('has-error');
  }

  if(error_flexCheckDefault != '')
  {
   return false;
  }
  else
  {
    $('#list_requirement_details').removeClass('active active_tab1');
    $('#list_requirement_details').removeAttr('href data-toggle');
    $('#requirement_details').removeClass('active');
    $('#list_requirement_details').addClass('inactive_tab1');
    $('#list_account_details').removeClass('inactive_tab1');
    $('#list_account_details').addClass('active_tab1 active');
    $('#list_account_details').attr('href', '#account_details');
    $('#list_account_details').attr('data-toggle', 'tab');
    $('#account_details').addClass('active in');    
  }
});

  $('#previous_btn_account').click(function(){
  $('#list_account_details').removeClass('active active_tab1');
  $('#list_account_details').removeAttr('href data-toggle');
  $('#account_details').removeClass('active in');
  $('#list_account_details').addClass('inactive_tab1');
  $('#list_requirement_details').removeClass('inactive_tab1');
  $('#list_requirement_details').addClass('active_tab1 active');
  $('#list_requirement_details').attr('href', '#requirement_details');
  $('#list_requirement_details').attr('data-toggle', 'tab');
  $('#requirement_details').addClass('active in');
 });

 $('#btn_submit').click(function(){
  
  var error_snaemail = '';
  var error_snapass = '';
  
  if($.trim($('#snaemail').val()).length == 0)
  {
   error_snaemail = 'Email is required';
   $('#error_snaemail').text(error_snaemail);
   $('#snaemail').addClass('has-error');
  }
  else
  {
   error_snaemail = '';
   $('#error_snaemail').text(error_snaemail);
   $('#snaemail').removeClass('has-error');
  }
  
  if($.trim($('#snapass').val()).length == 0)
  {
   error_snapass = 'Password is required';
   $('#error_snapass').text(error_snapass);
   $('#snapass').addClass('has-error');
  }
  else
  {
   error_snapass = '';
   $('#error_snapass').text(error_snapass);
   $('#snapass').removeClass('has-error');
  }

  if(error_snapass != '' || 
     error_snapass != '')
  {
   return false;
  }
  else
  {  
    $('#btn_submit').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#acad_form").submit();
  }
});

});           

$(document).ready(function(){
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
</script>