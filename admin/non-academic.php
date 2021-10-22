<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["sfname"]))
{
  $object->query = "
     INSERT INTO tbl_nonacad
     (sfname, smname, slname, snext, sdbirth, sctship, saddress, semail, scontact, sgender, scourse, syrlvl, 
     gfname, gmname, glname, gnext, gaddress, gcontact, goccu, gcompany, ffname, fmname, flname, fnext, faddress, fcontact, 
     foccu, fcompany, mfname, mmname, mlname, mnext, maddress, mcontact, moccu, mcompany, spcyincome, srappnas, sbos, 
     ssskills, stwinterest, spschatt, spschadd, spyrlvl, snasprcstat, snapgmstat, stbytpicstat, spbrgyinstat, snacapstype, 
     snaemail, snapass, snascholarstat, snadapply) 
     VALUES (:sfname, :smname, :slname, :snext, :sdbirth, :sctship, :saddress, :semail, :scontact, :sgender, 
     :scourse, :syrlvl, :gfname, :gmname, :glname, :gnext, :gaddress, :gcontact, :goccu, :gcompany, :ffname, :fmname, 
     :flname, :fnext, :faddress, :fcontact, :foccu, :fcompany, :mfname, :mmname, :mlname, :mnext, :maddress, :mcontact, :moccu, 
     :mcompany, :spcyincome, :srappnas, :sbos, :ssskills, :stwinterest, :spschatt, :spschadd, :spyrlvl, 'Not-Received', 'Not-Received', 
     'Not-Received', 'Not-Received', 'Non-Academic', :snaemail, :snapass, 'Pending', '$object->now')
     ";
     
     $password_hash = password_hash($_POST["snapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':sfname'					      =>	$_POST["sfname"],
                    ':smname'					      =>	$_POST["smname"],
                    ':slname'					      =>	$_POST["slname"],
                    ':snext'					      =>	$_POST["snext"],
                    ':sdbirth'					    =>	$_POST["sdbirth"],
					          ':sctship'				      =>	$_POST["sctship"],
                    ':saddress'					    =>	$_POST["saddress"],
                    ':semail'					      =>	$_POST["semail"],
                    ':scontact'					    =>	$_POST["scontact"],
                    ':sgender'					    =>	$_POST["sgender"],
                    ':scourse'					    =>	$_POST["scourse"],
                    ':syrlvl'					      =>	$_POST["syrlvl"],
					          ':gfname'				        =>	$_POST["gfname"],
					          ':gmname'				        =>	$_POST["gmname"],
					          ':glname'			          =>	$_POST["glname"],
                    ':gnext'					      =>	$_POST["gnext"],
                    ':gaddress'					    =>	$_POST["gaddress"],
                    ':gcontact'					    =>	$_POST["gcontact"],
                    ':goccu'					      =>	$_POST["goccu"],
                    ':gcompany'					    =>	$_POST["gcompany"],
					          ':ffname'				        =>	$_POST["ffname"],
                    ':fmname'					      =>	$_POST["fmname"],
                    ':flname'					      =>	$_POST["flname"],
                    ':fnext'					      =>	$_POST["fnext"],
                    ':faddress'					    =>	$_POST["faddress"],
                    ':fcontact'					    =>	$_POST["fcontact"],
					          ':foccu'				        =>	$_POST["foccu"],
					          ':fcompany'				      =>	$_POST["fcompany"],
					          ':mfname'				        =>	$_POST["mfname"],
                    ':mmname'					      =>	$_POST["mmname"],
                    ':mlname'					      =>	$_POST["mlname"],
                    ':mnext'					      =>	$_POST["mnext"],
                    ':maddress'					    =>	$_POST["maddress"],
                    ':mcontact'					    =>	$_POST["mcontact"],
					          ':moccu'				        =>	$_POST["moccu"],
					          ':mcompany'			        =>	$_POST["mcompany"],
                    ':spcyincome'				    =>	$_POST["spcyincome"],
                    ':srappnas'				      =>	$_POST["srappnas"],
                    ':sbos'				          =>	$_POST["sbos"],
                    ':ssskills'				      =>	$_POST["ssskills"],
                    ':stwinterest'				  =>	$_POST["stwinterest"],
                    ':spschatt'				      =>	$_POST["spschatt"],
                    ':spschadd'				      =>	$_POST["spschadd"],
                    ':spyrlvl'				      =>	$_POST["spyrlvl"],
                    ':snaemail'			        =>	$_POST["snaemail"],
					          ':snapass'				      =>  $password_hash
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
                    <input type="text" name="sfname" id="sfname" class="form-control" />
                    <span id="error_sfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="smname" id="smname" class="form-control" />
                    <span id="error_smname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="slname" id="slname" class="form-control" />
                    <span id="error_slname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="snext" id="snext" class="form-control" required>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="sdbirth" id="sdbirth" class="form-control">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_sdbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="sgender" id="sgender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_sgender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="sctship" id="sctship" class="form-control" />
                    <span id="error_sctship" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="saddress" id="saddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_saddress" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Email Address<span class="text-danger">*</span></label>
                    <input type="text" name="semail" id="semail" class="form-control" />
                    <span id="error_semail" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="scontact" id="scontact" class="form-control" />
                    <span id="error_scontact" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Course<span class="text-danger">*</span></label>
                    <input type="text" name="scourse" id="scourse" class="form-control" />
                    <span id="error_scourse" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Grade/Year Level<span class="text-danger">*</span></label>
                    <input type="text" name="syrlvl" id="syrlvl" class="form-control" />
                    <span id="error_syrlvl" class="text-danger"></span>
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
                    <input type="text" name="gfname" id="gfname" class="form-control" />
                    <span id="error_gfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="gmname" id="gmname" class="form-control" />
                    <span id="error_gmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="glname" id="glname" class="form-control" />
                    <span id="error_glname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="gnext" id="gnext" class="form-control" required>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="gaddress" id="gaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_gaddress" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="gcontact" id="gcontact" class="form-control" />
                    <span id="error_gcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="goccu" id="goccu" class="form-control" />
                    <span id="error_goccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="gcompany" id="gcompany" class="form-control" />
                    <span id="error_gcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Father Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="ffname" id="ffname" class="form-control" />
                    <span id="error_ffname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="fmname" id="fmname" class="form-control" />
                    <span id="error_fmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="flname" id="flname" class="form-control" />
                    <span id="error_flname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="fnext" id="fnext" class="form-control" required>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="faddress" id="faddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_faddress" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="fcontact" id="fcontact" class="form-control" />
                    <span id="error_fcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="foccu" id="foccu" class="form-control" />
                    <span id="error_foccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="fcompany" id="fcompany" class="form-control" />
                    <span id="error_fcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Mother Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="mfname" id="mfname" class="form-control" />
                    <span id="error_mfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="mmname" id="mmname" class="form-control" />
                    <span id="error_mmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="mlname" id="mlname" class="form-control" />
                    <span id="error_mlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="mnext" id="mnext" class="form-control" required>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="maddress" id="maddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_maddress" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="mcontact" id="mcontact" class="form-control" />
                    <span id="error_mcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="moccu" id="moccu" class="form-control" />
                    <span id="error_moccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="mcompany" id="mcompany" class="form-control" />
                    <span id="error_mcompany" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                    <label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
                    <input type="text" name="spcyincome" id="spcyincome" class="form-control" />
                    <span id="error_spcyincome" class="text-danger"></span>
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
                    <textarea type="text" name="srappnas" id="srappnas" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_srappnas" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Basic Office Skills<span class="text-danger">*</span></label>
                    <textarea type="text" name="sbos" id="sbos" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_sbos" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Special Skills<span class="text-danger">*</span></label>
                    <textarea type="text" name="ssskills" id="ssskills" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_ssskills" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Type of Work Interested In<span class="text-danger">*</span></label>
                    <textarea type="text" name="stwinterest" id="stwinterest" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_stwinterest" class="text-danger"></span>
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
                    <textarea type="text" name="spschatt" id="spschatt" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_spschatt" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Year/Grade Level<span class="text-danger">*</span></label>
                    <input type="text" name="spyrlvl" id="spyrlvl" class="form-control" />
                    <span id="error_spyrlvl" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>School Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="spschadd" id="spschadd" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_spschadd" class="text-danger"></span>
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
  var error_sfname = '';
  var error_smname = '';
  var error_slname = '';
  var error_sdbirth = '';
  var error_sgender = '';
  var error_sctship = '';
  var error_saddress = '';
  var error_semail = '';
  var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
  var error_scontact = '';
  var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  


  if($.trim($('#sfname').val()).length == 0)
  {
   error_sfname = 'First Name is required';
   $('#error_sfname').text(error_sfname);
   $('#sfname').addClass('has-error');
  }
  else
  {
   error_sfname = '';
   $('#error_sfname').text(error_sfname);
   $('#sfname').removeClass('has-error');
  }

  if($.trim($('#smname').val()).length == 0)
  {
   error_smname = 'Middle Name is required';
   $('#error_smname').text(error_smname);
   $('#smname').addClass('has-error');
  }
  else
  {
   error_smname = '';
   $('#error_smname').text(error_smname);
   $('#smname').removeClass('has-error');
  }
  
  if($.trim($('#slname').val()).length == 0)
  {
   error_slname = 'Last Name is required';
   $('#error_slname').text(error_slname);
   $('#slname').addClass('has-error');
  }
  else
  {
   error_slname = '';
   $('#error_slname').text(error_slname);
   $('#slname').removeClass('has-error');
  }

  if($.trim($('#sdbirth').val()).length == 0)
  {
   error_sdbirth = 'Date of Birth is required';
   $('#error_sdbirth').text(error_sdbirth);
   $('#sdbirth').addClass('has-error');
  }
  else
  {
   error_sdbirth = '';
   $('#error_sdbirth').text(error_sdbirth);
   $('#sdbirth').removeClass('has-error');
  }

  if($.trim($('#sgender').val()).length == 0)
  {
   error_sgender = 'Gender is required';
   $('#error_sgender').text(error_sgender);
   $('#sgender').addClass('has-error');
  }
  else
  {
   error_sgender = '';
   $('#error_sgender').text(error_sgender);
   $('#sgender').removeClass('has-error');
  }

  if($.trim($('#sctship').val()).length == 0)
  {
   error_sctship = 'Citizenship is required';
   $('#error_sctship').text(error_sctship);
   $('#sctship').addClass('has-error');
  }
  else
  {
   error_sctship = '';
   $('#error_sctship').text(error_sctship);
   $('#sctship').removeClass('has-error');
  }

  if($.trim($('#saddress').val()).length == 0)
  {
   error_saddress = 'Address is required';
   $('#error_saddress').text(error_saddress);
   $('#saddress').addClass('has-error');
  }
  else
  {
   error_saddress = '';
   $('#error_saddress').text(error_saddress);
   $('#saddress').removeClass('has-error');
  }

  if($.trim($('#semail').val()).length == 0)
  {
   error_semail = 'Email is required';
   $('#error_semail').text(error_semail);
   $('#semail').addClass('has-error');
  }
  else
  {
//     if(emailval.test($('#semail').val()))
//    {
//     error_semail = 'Invalid Email Only(gmail, hotmail, outlook or yahoo is allowed).';
//     $('#error_semail').text(error_semail);
//     $('#semail').addClass('has-error');
//    }
//    else {
   error_semail = '';
   $('#error_semail').text(error_semail);
   $('#semail').removeClass('has-error');
   }
//   }

  if($.trim($('#scontact').val()).length == 0)
  {
   error_scontact = 'Contact Number is required';
   $('#error_scontact').text(error_scontact);
   $('#scontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#scontact').val()))
//    {
//     error_scontact = 'Invalid Contact Number';
//     $('#error_scontact').text(error_scontact);
//     $('#scontact').addClass('has-error');
//    }
//    else
//    {
    error_scontact = '';
    $('#error_scontact').text(error_scontact);
    $('#scontact').removeClass('has-error');
//    }
  }

  if($.trim($('#scourse').val()).length == 0)
  {
   error_scourse = 'Course is required';
   $('#error_scourse').text(error_scourse);
   $('#scourse').addClass('has-error');
  }
  else
  {
   error_scourse = '';
   $('#error_scourse').text(error_scourse);
   $('#scourse').removeClass('has-error');
  }

  if($.trim($('#syrlvl').val()).length == 0)
  {
   error_syrlvl = 'Grade/Year Level is required';
   $('#error_syrlvl').text(error_syrlvl);
   $('#syrlvl').addClass('has-error');
  }
  else
  {
   error_syrlvl = '';
   $('#error_syrlvl').text(error_syrlvl);
   $('#syrlvl').removeClass('has-error');
  }

  if(error_sfname != '' || error_smname != '' 
  || error_slname != '' || error_sdbirth != '' 
  || error_sctship != '' || error_saddress != '' 
  || error_semail != '' || error_scontact != ''
  || error_scourse != '' || error_syrlvl != ''
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
  var error_gfname = '';
  var error_gmname = '';
  var error_glname = '';
  var error_ffname = '';
  var error_fmname = '';
  var error_flname = '';
  var error_mfname = '';
  var error_mmname = '';
  var error_mlname = '';
  var error_gaddress = '';
  var error_faddress = '';
  var error_maddress = '';
  var error_gcontact = '';
  var error_fcontact = '';
  var error_mcontact = '';
  var error_goccu = '';
  var error_foccu = '';
  var error_moccu = '';
  var error_gcompany = '';
  var error_fcompany = '';
  var error_mcompany = '';
  var error_spcyincome = '';
// Complete Name
  if($.trim($('#gfname').val()).length == 0)
  {
   error_gfname = 'Guardian First Name is required';
   $('#error_gfname').text(error_gfname);
   $('#gfname').addClass('has-error');
  }
  else
  {
   error_gfname = '';
   $('#error_gfname').text(error_gfname);
   $('#gfname').removeClass('has-error');
  }

  if($.trim($('#gmname').val()).length == 0)
  {
   error_gmname = 'Guardian Middle Name is required';
   $('#error_gmname').text(error_gmname);
   $('#gmname').addClass('has-error');
  }
  else
  {
   error_gmname = '';
   $('#error_gmname').text(error_gmname);
   $('#gmname').removeClass('has-error');
  }

  if($.trim($('#glname').val()).length == 0)
  {
   error_glname = 'Guardian Last Name is required';
   $('#error_glname').text(error_glname);
   $('#glname').addClass('has-error');
  }
  else
  {
   error_glname = '';
   $('#error_glname').text(error_glname);
   $('#glname').removeClass('has-error');
  }

  if($.trim($('#ffname').val()).length == 0)
  {
   error_ffname = 'Father First Name is required';
   $('#error_ffname').text(error_ffname);
   $('#ffname').addClass('has-error');
  }
  else
  {
   error_ffname = '';
   $('#error_ffname').text(error_ffname);
   $('#ffname').removeClass('has-error');
  }

  if($.trim($('#fmname').val()).length == 0)
  {
   error_fmname = 'Father Middle Name is required';
   $('#error_fmname').text(error_fmname);
   $('#fmname').addClass('has-error');
  }
  else
  {
   error_fmname = '';
   $('#error_fmname').text(error_fmname);
   $('#fmname').removeClass('has-error');
  }

  if($.trim($('#flname').val()).length == 0)
  {
   error_flname = 'Father Last Name is required';
   $('#error_flname').text(error_flname);
   $('#flname').addClass('has-error');
  }
  else
  {
   error_flname = '';
   $('#error_flname').text(error_flname);
   $('#flname').removeClass('has-error');
  }

  if($.trim($('#mfname').val()).length == 0)
  {
   error_mfname = 'Mother First Name is required';
   $('#error_mfname').text(error_mfname);
   $('#mfname').addClass('has-error');
  }
  else
  {
   error_mfname = '';
   $('#error_mfname').text(error_mfname);
   $('#mfname').removeClass('has-error');
  }

  if($.trim($('#mmname').val()).length == 0)
  {
   error_mmname = 'Mother Middle Name is required';
   $('#error_mmname').text(error_mmname);
   $('#mmname').addClass('has-error');
  }
  else
  {
   error_mmname = '';
   $('#error_mmname').text(error_mmname);
   $('#mmname').removeClass('has-error');
  }

  if($.trim($('#mlname').val()).length == 0)
  {
   error_mlname = 'Mother Last Name is required';
   $('#error_mlname').text(error_mlname);
   $('#mlname').addClass('has-error');
  }
  else
  {
   error_mlname = '';
   $('#error_mlname').text(error_mlname);
   $('#mlname').removeClass('has-error');
  }
// Address
  if($.trim($('#gaddress').val()).length == 0)
  {
   error_gaddress = 'Guardian Address is required';
   $('#error_gaddress').text(error_gaddress);
   $('#gaddress').addClass('has-error');
  }
  else
  {
   error_gaddress = '';
   $('#error_gaddress').text(error_gaddress);
   $('#gaddress').removeClass('has-error');
  }
  if($.trim($('#faddress').val()).length == 0)
  {
   error_faddress = 'Father Address is required';
   $('#error_faddress').text(error_faddress);
   $('#faddress').addClass('has-error');
  }
  else
  {
   error_faddress = '';
   $('#error_faddress').text(error_faddress);
   $('#faddress').removeClass('has-error');
  }
  if($.trim($('#maddress').val()).length == 0)
  {
   error_maddress = 'Mother Address is required';
   $('#error_maddress').text(error_maddress);
   $('#maddress').addClass('has-error');
  }
  else
  {
   error_maddress = '';
   $('#error_maddress').text(error_maddress);
   $('#maddress').removeClass('has-error');
  }
// Contact Number
if($.trim($('#gcontact').val()).length == 0)
  {
   error_gcontact = 'Guardian Contact Number is required';
   $('#error_gcontact').text(error_gcontact);
   $('#gcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#gcontact').val()))
//    {
//     error_gcontact = 'Invalid Contact Number';
//     $('#error_gcontact').text(error_gcontact);
//     $('#gcontact').addClass('has-error');
//    }
//    else
//    {
    error_gcontact = '';
    $('#error_gcontact').text(error_gcontact);
    $('#gcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#fcontact').val()).length == 0)
  {
   error_fcontact = 'Father Contact Number is required';
   $('#error_fcontact').text(error_fcontact);
   $('#fcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#scontact').val()))
//    {
//     error_scontact = 'Invalid Contact Number';
//     $('#error_scontact').text(error_scontact);
//     $('#scontact').addClass('has-error');
//    }
//    else
//    {
    error_fcontact = '';
    $('#error_fcontact').text(error_fcontact);
    $('#fcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#mcontact').val()).length == 0)
  {
   error_mcontact = 'Mother Contact Number is required';
   $('#error_mcontact').text(error_mcontact);
   $('#mcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#scontact').val()))
//    {
//     error_scontact = 'Invalid Contact Number';
//     $('#error_scontact').text(error_scontact);
//     $('#scontact').addClass('has-error');
//    }
//    else
//    {
    error_mcontact = '';
    $('#error_mcontact').text(error_mcontact);
    $('#mcontact').removeClass('has-error');
//    }
  }

// Occupation
if($.trim($('#goccu').val()).length == 0)
  {
   error_goccu = 'Guardian Occupation/Position is required';
   $('#error_goccu').text(error_goccu);
   $('#goccu').addClass('has-error');
  }
  else
  {
   error_goccu = '';
   $('#error_goccu').text(error_goccu);
   $('#goccu').removeClass('has-error');
  }
  if($.trim($('#foccu').val()).length == 0)
  {
   error_foccu = 'Father Occupation/Position is required';
   $('#error_foccu').text(error_foccu);
   $('#foccu').addClass('has-error');
  }
  else
  {
   error_foccu = '';
   $('#error_foccu').text(error_foccu);
   $('#foccu').removeClass('has-error');
  }
  if($.trim($('#moccu').val()).length == 0)
  {
   error_moccu = 'Mother Occupation/Position is required';
   $('#error_moccu').text(error_moccu);
   $('#moccu').addClass('has-error');
  }
  else
  {
   error_moccu = '';
   $('#error_moccu').text(error_moccu);
   $('#moccu').removeClass('has-error');
  } 


// Company

if($.trim($('#gcompany').val()).length == 0)
  {
   error_gcompany = 'Guardian Company is required';
   $('#error_gcompany').text(error_gcompany);
   $('#gcompany').addClass('has-error');
  }
  else
  {
   error_gcompany = '';
   $('#error_gcompany').text(error_gcompany);
   $('#gcompany').removeClass('has-error');
  }
  if($.trim($('#fcompany').val()).length == 0)
  {
   error_fcompany = 'Father Company is required';
   $('#error_fcompany').text(error_fcompany);
   $('#fcompany').addClass('has-error');
  }
  else
  {
   error_fcompany = '';
   $('#error_fcompany').text(error_fcompany);
   $('#fcompany').removeClass('has-error');
  }
  if($.trim($('#mcompany').val()).length == 0)
  {
   error_mcompany = 'Mother Company is required';
   $('#error_mcompany').text(error_mcompany);
   $('#mcompany').addClass('has-error');
  }
  else
  {
   error_mcompany = '';
   $('#error_mcompany').text(error_mcompany);
   $('#mcompany').removeClass('has-error');
  } 

// ParentYearlyIncome
if($.trim($('#spcyincome').val()).length == 0)
  {
   error_spcyincome = 'Parents Yearly Income is required';
   $('#error_spcyincome').text(error_spcyincome);
   $('#spcyincome').addClass('has-error');
  }
  else
  {
   error_spcyincome = '';
   $('#error_spcyincome').text(error_spcyincome);
   $('#spcyincome').removeClass('has-error');
  } 

  if( error_gfname != '' ||
  error_gmname != '' ||
  error_glname != '' ||
  error_ffname != '' ||
  error_fmname != '' ||
  error_flname != '' ||
  error_mfname != '' ||
  error_mmname != '' ||
  error_mlname != '' ||
  error_gaddress != '' ||
  error_faddress != '' ||
  error_maddress != '' ||
  error_gcontact != '' ||
  error_fcontact != '' ||
  error_mcontact != '' ||
  error_goccu != '' ||
  error_foccu != '' ||
  error_moccu != '' ||
  error_gcompany != '' ||
  error_fcompany != '' ||
  error_mcompany != '' ||
  error_spcyincome != '')
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
  
  var error_srappnas = '';
  var error_sbos = '';
  var error_ssskills = '';
  var error_stwinterest = '';
  
  if($.trim($('#srappnas').val()).length == 0)
  {
   error_srappnas = 'Reason of Applying NAS is Required';
   $('#error_srappnas').text(error_srappnas);
   $('#srappnas').addClass('has-error');
  }
  else
  {
   error_srappnas = '';
   $('#error_srappnas').text(error_srappnas);
   $('#srappnas').removeClass('has-error');
  }
  if($.trim($('#sbos').val()).length == 0)
  {
   error_sbos = 'Basic Office Skills is Required';
   $('#error_sbos').text(error_sbos);
   $('#sbos').addClass('has-error');
  }
  else
  {
   error_sbos = '';
   $('#error_sbos').text(error_sbos);
   $('#sbos').removeClass('has-error');
  }

  if($.trim($('#ssskills').val()).length == 0)
  {
   error_ssskills = 'Special Skills is required';
   $('#error_ssskills').text(error_ssskills);
   $('#ssskills').addClass('has-error');
  }
  else
  {
   error_ssskills = '';
   $('#error_ssskills').text(error_ssskills);
   $('#ssskills').removeClass('has-error');
  }

  if($.trim($('#stwinterest').val()).length == 0)
  {
   error_stwinterest = 'Type of Work Interested In is required';
   $('#error_stwinterest').text(error_stwinterest);
   $('#stwinterest').addClass('has-error');
  }
  else
  {
   error_stwinterest = '';
   $('#error_stwinterest').text(error_stwinterest);
   $('#stwinterest').removeClass('has-error');
  } 

  if(error_srappnas != '' || 
     error_sbos != '' ||
     error_ssskills != '' ||
     error_stwinterest != '')
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
  
  var error_spschatt = '';
  var error_spyrlvl = '';
  var error_spschadd = '';
  
  if($.trim($('#spschatt').val()).length == 0)
  {
   error_spschatt = 'Previous School Attended is required';
   $('#error_spschatt').text(error_spschatt);
   $('#spschatt').addClass('has-error');
  }
  else
  {
   error_spyrlvl = '';
   $('#error_spschatt').text(error_spyrlvl);
   $('#spschatt').removeClass('has-error');
  }

  if($.trim($('#spyrlvl').val()).length == 0)
  {
   error_spyrlvl = 'Grade/Year Level is required';
   $('#error_spyrlvl').text(error_spyrlvl);
   $('#spyrlvl').addClass('has-error');
  }
  else
  {
   error_spyrlvl = '';
   $('#error_spyrlvl').text(error_spyrlvl);
   $('#spyrlvl').removeClass('has-error');
  }

  if($.trim($('#spschadd').val()).length == 0)
  {
   error_spschadd = 'School Address is required';
   $('#error_spschadd').text(error_spschadd);
   $('#spschadd').addClass('has-error');
  }
  else
  {
   error_spschadd = '';
   $('#error_spschadd').text(error_spschadd);
   $('#spschadd').removeClass('has-error');
  }

  if(error_spschatt != '' || 
     error_spyrlvl != '' ||
     error_spschadd != '')
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
   error_snaemail = 'Account email is required';
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
   error_snapass = 'Account password is required';
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