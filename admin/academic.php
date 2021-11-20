<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["safname"]))
{
  $object->query = "
     INSERT INTO tbl_acad
     (safname, samname, salname, sanext, sadbirth, sactship, saaddress, sapemail, sacontact, sacourse, sagyl, sagender, sagfname, sagmname,
     saglname, sagnext, sagaddress, sagcontact, sagoccu, sagcompany, saffname, safmname, saflname, safnext, safaddress, safcontact, safoccu,
     safcompany, samfname, sammname, samlname, samnext, samaddress, samcontact, samoccu, samcompany, saspcyincome, sagwa, saraward, 
     sadawardrceive, sadsprcstat, sadspgmstat, sadspcrstat, sacapstype, saaemail, sapass, sagrantstat, sascholarstat, sadapply) 
     VALUES (:safname, :samname, :salname, :sanext, :sadbirth, :sactship,:saaddress, :sapemail, :sacontact, 
     :sacourse, :sagyl, :sagender, :sagfname, :sagmname, :saglname, :sagnext, :sagaddress, :sagcontact, 
     :sagoccu, :sagcompany, :saffname, :safmname, :saflname, :safnext, :safaddress, :safcontact, 
     :safoccu, :safcompany, :samfname, :sammname, :samlname, :samnext, :samaddress, :samcontact, 
     :samoccu, :samcompany, :saspcyincome, :sagwa, :saraward, :sadawardrceive, 'Not-Received', 
     'Not-Received', 'Not-Received', 'Academic', :saaemail, :sapass, 'New', 'Pending', '$object->now')";
     
     $password_hash = password_hash($_POST["sapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':safname'					    =>	$_POST["safname"],
                    ':samname'					    =>	$_POST["samname"],
                    ':salname'					    =>	$_POST["salname"],
                    ':sanext'					      =>	$_POST["sanext"],
                    ':sadbirth'					    =>	$_POST["sadbirth"],
					          ':sactship'				      =>	$_POST["sactship"],
                    ':saaddress'					  =>	$_POST["saaddress"],
                    ':sapemail'					    =>	$_POST["sapemail"],
                    ':sacontact'					  =>	$_POST["sacontact"],
                    ':sacourse'					    =>	$_POST["sacourse"],
                    ':sagyl'					      =>	$_POST["sagyl"],
                    ':sagender'					    =>	$_POST["sagender"],
					          ':sagfname'				      =>	$_POST["sagfname"],
					          ':sagmname'				      =>	$_POST["sagmname"],
					          ':saglname'			        =>	$_POST["saglname"],
                    ':sagnext'					    =>	$_POST["sagnext"],
                    ':sagaddress'					  =>	$_POST["sagaddress"],
                    ':sagcontact'					  =>	$_POST["sagcontact"],
                    ':sagoccu'					    =>	$_POST["sagoccu"],
                    ':sagcompany'					  =>	$_POST["sagcompany"],
					          ':saffname'				      =>	$_POST["saffname"],
                    ':safmname'					    =>	$_POST["safmname"],
                    ':saflname'					    =>	$_POST["saflname"],
                    ':safnext'					    =>	$_POST["safnext"],
                    ':safaddress'					  =>	$_POST["safaddress"],
                    ':safcontact'					  =>	$_POST["safcontact"],
					          ':safoccu'				      =>	$_POST["safoccu"],
					          ':safcompany'				    =>	$_POST["safcompany"],
					          ':samfname'				      =>	$_POST["samfname"],
                    ':sammname'					    =>	$_POST["sammname"],
                    ':samlname'					    =>	$_POST["samlname"],
                    ':samnext'					    =>	$_POST["samnext"],
                    ':samaddress'					  =>	$_POST["samaddress"],
                    ':samcontact'					  =>	$_POST["samcontact"],
					          ':samoccu'				      =>	$_POST["samoccu"],
					          ':samcompany'				    =>	$_POST["samcompany"],
                    ':saspcyincome'				  =>	$_POST["saspcyincome"],
                    ':sagwa'				        =>	$_POST["sagwa"],
                    ':saraward'					    =>	$_POST["saraward"],
                    ':sadawardrceive'		    =>	$_POST["sadawardrceive"],
                    ':saaemail'			        =>	$_POST["saaemail"],
					          ':sapass'				        =>  $password_hash
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
  <title>SMS | AS</title>
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
   <h2 align="center">Academic Scholarship (AS)<br>Application Form</h2><br />
   <?php echo $message; ?> 
   <form method="post" id="acad_form" class="row g-3">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_family_details" style="border:1px solid #ccc">Family Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_achievements_details" style="border:1px solid #ccc">Achievements Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_require_details" style="border:1px solid #ccc">Requirements Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_account_details" style="border:1px solid #ccc">Account Details</a>
     </li>
    </ul>
    <div class="tab-content" style="margin-top:16px;">
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
                    <input type="text" name="safname" id="safname" class="form-control" />
                    <span id="error_safname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="samname" id="samname" class="form-control" />
                    <span id="error_samname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="salname" id="salname" class="form-control" />
                    <span id="error_salname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="sanext" id="sanext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_sanext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="sadbirth" id="sadbirth" class="form-control">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_sadbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="sagender" id="sagender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_sagender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="sactship" id="sactship" class="form-control" />
                    <span id="error_sactship" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="saaddress" id="saaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_saaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Email Address<span class="text-danger">*</span></label>
                    <input type="text" name="sapemail" id="sapemail" class="form-control" />
                    <span id="error_sapemail" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="sacontact" id="sacontact" class="form-control" />
                    <span id="error_sacontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <label>Course<span class="text-danger">*</span></label>
                    <input type="text" name="sacourse" id="sacourse" class="form-control" />
                    <span id="error_sacourse" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2">
                    <label>Grade/Year Level<span class="text-danger">*</span></label>
                    <input type="text" name="sagyl" id="sagyl" class="form-control" />
                    <span id="error_sagyl" class="text-danger"></span>
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
                    <input type="text" name="sagfname" id="sagfname" class="form-control" />
                    <span id="error_sagfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="sagmname" id="sagmname" class="form-control" />
                    <span id="error_sagmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="saglname" id="saglname" class="form-control" />
                    <span id="error_saglname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="sagnext" id="sagnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_sagnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="sagaddress" id="sagaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_sagaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="sagcontact" id="sagcontact" class="form-control" />
                    <span id="error_sagcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="sagoccu" id="sagoccu" class="form-control" />
                    <span id="error_sagoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="sagcompany" id="sagcompany" class="form-control" />
                    <span id="error_sagcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Father Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="saffname" id="saffname" class="form-control" />
                    <span id="error_saffname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="safmname" id="safmname" class="form-control" />
                    <span id="error_safmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="saflname" id="saflname" class="form-control" />
                    <span id="error_saflname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="safnext" id="safnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_safnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="safaddress" id="safaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_safaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="safcontact" id="safcontact" class="form-control" />
                    <span id="error_safcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="safoccu" id="safoccu" class="form-control" />
                    <span id="error_safoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="safcompany" id="safcompany" class="form-control" />
                    <span id="error_safcompany" class="text-danger"></span>
                  </div>
              </div>
            </div>
            <div class="form-group">
					      <h4 class="sub-title">Mother Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>First Name<span class="text-danger">*</span></label>
                    <input type="text" name="samfname" id="samfname" class="form-control" />
                    <span id="error_samfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="sammname" id="sammname" class="form-control" />
                    <span id="error_sammname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="samlname" id="samlname" class="form-control" />
                    <span id="error_samlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="samnext" id="samnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_samnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="samaddress" id="samaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_samaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="samcontact" id="samcontact" class="form-control" />
                    <span id="error_samcontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <input type="text" name="samoccu" id="samoccu" class="form-control" />
                    <span id="error_samoccu" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Company<span class="text-danger">*</span></label>
                    <input type="text" name="samcompany" id="samcompany" class="form-control" />
                    <span id="error_samcompany" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                    <label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
                    <input type="text" name="saspcyincome" id="saspcyincome" class="form-control" />
                    <span id="error_saspcyincome" class="text-danger"></span>
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
<!-- Achievements Details -->
     <div class="tab-pane fade" id="achievements_details">
      <div class="panel panel-default">
       <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Achievement Details</div>
       <div class="panel-body">
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-4">
              <label>Grade/GWA</label>
              <input type="text" name="sagwa" id="sagwa" class="form-control" />
              <span id="error_sagwa" class="text-danger"></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-4">
              <label>Award Received</label>
              <textarea name="saraward" id="saraward" class="form-control"></textarea>
              <span id="error_saraward" class="text-danger"></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-4">
              <label>Date Received</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="sadawardrceive" id="sadawardrceive" class="form-control">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <span id="error_sadawardrceive" class="text-danger"></span>
            </div>
          </div>
        </div>
        <div align="center">
        <button type="button" name="previous_btn_achievement" id="previous_btn_achievement" class="btn btn-default btn-md">Previous</button>
        <button type="button" name="btn_achievement" id="btn_achievement" class="btn btn-info btn-md">Next</button>
        </div>
       </div>
      </div>
     </div>
<!-- Requirement Details -->
<div class="tab-pane fade" id="require_details">
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
          <li class="list-group-item">3. Photocopy of Certificate of Recognition</li>
        </ul>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault" style="font-style: italic; font-weight: normal;">
            I agree that the requirements above are legit and will submit it on time.
          </label><br>
          <span id="error_flexCheckDefault" class="text-danger"></span>
          <div class="alert alert-warning" role="alert" style="font-style: italic;"><b>Note:</b> Please provide the hard copy of the following requirements, bring it to the Scholarship Office, and hand it over to Mr. Gemini Daguplo or Ms. Grabrielle Heruela.</div>
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
    <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Account Details</div>
      <div class="panel-body">
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="saaemail" id="saaemail" class="form-control" />
          <span id="error_saaemail" class="text-danger"></span>
        </div>
         <div class="form-group">
         <label>Password</label>
         <input type="text" name="sapass" id="sapass" class="form-control" />
         <span id="error_sapass" class="text-danger"></span>
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
  var error_safname = '';
  var error_samname = '';
  var error_salname = '';
  var error_sanext = '';
  var error_sadbirth = '';
  var error_sagender = '';
  var error_sactship = '';
  var error_saaddress = '';
  var error_sapemail = '';
  var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
  var error_sacontact = '';
  var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  
  if($.trim($('#safname').val()).length == 0)
  {
   error_safname = 'First Name is required';
   $('#error_safname').text(error_safname);
   $('#safname').addClass('has-error');
  }
  else
  {
   error_safname = '';
   $('#error_safname').text(error_safname);
   $('#safname').removeClass('has-error');
  }

  if($.trim($('#samname').val()).length == 0)
  {
   error_samname = 'Put N/A if None';
   $('#error_samname').text(error_samname);
   $('#samname').addClass('has-error');
  }
  else
  {
   error_samname = '';
   $('#error_samname').text(error_samname);
   $('#samname').removeClass('has-error');
  }
  
  if($.trim($('#salname').val()).length == 0)
  {
   error_salname = 'Last Name is required';
   $('#error_salname').text(error_salname);
   $('#salname').addClass('has-error');
  }
  else
  {
   error_salname = '';
   $('#error_salname').text(error_salname);
   $('#salname').removeClass('has-error');
  }

  //Suffix

  if($.trim($('#sanext').val()).length == 0)
  {
   error_sanext = 'Select N/A if None';
   $('#error_sanext').text(error_sanext);
   $('#sanext').addClass('has-error');
  }
  else
  {
   error_sanext = '';
   $('#error_sanext').text(error_sanext);
   $('#sanext').removeClass('has-error');
  }

  if($.trim($('#sadbirth').val()).length == 0)
  {
   error_sadbirth = 'Date of Birth is required';
   $('#error_sadbirth').text(error_sadbirth);
   $('#sadbirth').addClass('has-error');
  }
  else
  {
   error_sadbirth = '';
   $('#error_sadbirth').text(error_sadbirth);
   $('#sadbirth').removeClass('has-error');
  }

  if($.trim($('#sagender').val()).length == 0)
  {
   error_sagender = 'Gender is required';
   $('#error_sagender').text(error_sagender);
   $('#sagender').addClass('has-error');
  }
  else
  {
   error_sagender = '';
   $('#error_sagender').text(error_sagender);
   $('#sagender').removeClass('has-error');
  }

  if($.trim($('#sactship').val()).length == 0)
  {
   error_sactship = 'Citizenship is required';
   $('#error_sactship').text(error_sactship);
   $('#sactship').addClass('has-error');
  }
  else
  {
   error_sactship = '';
   $('#error_sactship').text(error_sactship);
   $('#sactship').removeClass('has-error');
  }

  if($.trim($('#saaddress').val()).length == 0)
  {
   error_saaddress = 'Address is required';
   $('#error_saaddress').text(error_saaddress);
   $('#saaddress').addClass('has-error');
  }
  else
  {
   error_saaddress = '';
   $('#error_saaddress').text(error_saaddress);
   $('#saaddress').removeClass('has-error');
  }

  if($.trim($('#sapemail').val()).length == 0)
  {
   error_sapemail = 'Email is required';
   $('#error_sapemail').text(error_sapemail);
   $('#sapemail').addClass('has-error');
  }
  else
  {
//     if(emailval.test($('#sapemail').val()))
//    {
//     error_sapemail = 'Invalid Email Only(gmail, hotmail, outlook or yahoo is allowed).';
//     $('#error_sapemail').text(error_sapemail);
//     $('#sapemail').addClass('has-error');
//    }
//    else {
   error_sapemail = '';
   $('#error_sapemail').text(error_sapemail);
   $('#sapemail').removeClass('has-error');
   }
//   }

  if($.trim($('#sacontact').val()).length == 0)
  {
   error_sacontact = 'Contact Number is required';
   $('#error_sacontact').text(error_sacontact);
   $('#sacontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#sacontact').val()))
//    {
//     error_sacontact = 'Invalid Contact Number';
//     $('#error_sacontact').text(error_sacontact);
//     $('#sacontact').addClass('has-error');
//    }
//    else
//    {
    error_sacontact = '';
    $('#error_sacontact').text(error_sacontact);
    $('#sacontact').removeClass('has-error');
//    }
  }

  if($.trim($('#sacourse').val()).length == 0)
  {
   error_sacourse = 'Course is required';
   $('#error_sacourse').text(error_sacourse);
   $('#sacourse').addClass('has-error');
  }
  else
  {
   error_sacourse = '';
   $('#error_sacourse').text(error_sacourse);
   $('#sacourse').removeClass('has-error');
  }

  if($.trim($('#sagyl').val()).length == 0)
  {
   error_sagyl = 'Grade/Year Level is required';
   $('#error_sagyl').text(error_sagyl);
   $('#sagyl').addClass('has-error');
  }
  else
  {
   error_sagyl = '';
   $('#error_sagyl').text(error_sagyl);
   $('#sagyl').removeClass('has-error');
  }

  if(error_safname != '' || error_samname != '' 
  || error_salname != '' || error_sanext != ''
  || error_sadbirth != '' || error_sactship != '' 
  || error_saaddress != '' || error_sapemail != '' 
  || error_sacontact != '' || error_sacourse != '' 
  || error_sagyl != ''
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
  var error_sagfname = '';
  var error_sagmname = '';
  var error_saglname = '';
  var error_sagnext = '';
  var error_sagaddress = '';
  var error_sagcontact = '';
  var error_sagoccu = '';
  var error_sagcompany = '';
  var error_saffname = '';
  var error_safmname = '';
  var error_saflname = '';
  var error_safnext = '';
  var error_samfname = '';
  var error_sammname = '';
  var error_samlname = '';
  var error_samnext = '';
  var error_safaddress = '';
  var error_samaddress = '';
  var error_safcontact = '';
  var error_samcontact = '';
  var error_safoccu = '';
  var error_samoccu = '';
  var error_safcompany = '';
  var error_samcompany = '';
  var error_saspcyincome = '';
// Complete Name
  if($.trim($('#sagfname').val()).length == 0)
  {
   error_sagfname = 'First Name is required';
   $('#error_sagfname').text(error_sagfname);
   $('#sagfname').addClass('has-error');
  }
  else
  {
   error_sagfname = '';
   $('#error_sagfname').text(error_sagfname);
   $('#sagfname').removeClass('has-error');
  }

  if($.trim($('#sagmname').val()).length == 0)
  {
   error_sagmname = 'Put N/A if None';
   $('#error_sagmname').text(error_sagmname);
   $('#sagmname').addClass('has-error');
  }
  else
  {
   error_sagmname = '';
   $('#error_sagmname').text(error_sagmname);
   $('#sagmname').removeClass('has-error');
  }

  if($.trim($('#saglname').val()).length == 0)
  {
   error_saglname = 'Last Name is required';
   $('#error_saglname').text(error_saglname);
   $('#saglname').addClass('has-error');
  }
  else
  {
   error_saglname = '';
   $('#error_saglname').text(error_saglname);
   $('#saglname').removeClass('has-error');
  }

  //Guardian Suffix

  if($.trim($('#sagnext').val()).length == 0)
  {
   error_sagnext = 'Select N/A if none';
   $('#error_sagnext').text(error_sagnext);
   $('#sagnext').addClass('has-error');
  }
  else
  {
   error_sagnext = '';
   $('#error_sagnext').text(error_sagnext);
   $('#sagnext').removeClass('has-error');
  }

  if($.trim($('#saffname').val()).length == 0)
  {
   error_saffname = 'First Name is required';
   $('#error_saffname').text(error_saffname);
   $('#saffname').addClass('has-error');
  }
  else
  {
   error_saffname = '';
   $('#error_saffname').text(error_saffname);
   $('#saffname').removeClass('has-error');
  }

  if($.trim($('#safmname').val()).length == 0)
  {
   error_safmname = 'Put N/A if None';
   $('#error_safmname').text(error_safmname);
   $('#safmname').addClass('has-error');
  }
  else
  {
   error_safmname = '';
   $('#error_safmname').text(error_safmname);
   $('#safmname').removeClass('has-error');
  }

  if($.trim($('#saflname').val()).length == 0)
  {
   error_saflname = 'Last Name is required';
   $('#error_saflname').text(error_saflname);
   $('#saflname').addClass('has-error');
  }
  else
  {
   error_saflname = '';
   $('#error_saflname').text(error_saflname);
   $('#saflname').removeClass('has-error');
  }

  //Father Suffix

    if($.trim($('#safnext').val()).length == 0)
  {
   error_safnext = 'Select N/A if none';
   $('#error_safnext').text(error_safnext);
   $('#safnext').addClass('has-error');
  }
  else
  {
   error_safnext = '';
   $('#error_safnext').text(error_safnext);
   $('#safnext').removeClass('has-error');
  }

  if($.trim($('#samfname').val()).length == 0)
  {
   error_samfname = 'First Name is required';
   $('#error_samfname').text(error_samfname);
   $('#samfname').addClass('has-error');
  }
  else
  {
   error_samfname = '';
   $('#error_samfname').text(error_samfname);
   $('#samfname').removeClass('has-error');
  }

  if($.trim($('#sammname').val()).length == 0)
  {
   error_sammname = 'Put N/A if None';
   $('#error_sammname').text(error_sammname);
   $('#sammname').addClass('has-error');
  }
  else
  {
   error_sammname = '';
   $('#error_sammname').text(error_sammname);
   $('#sammname').removeClass('has-error');
  }

  if($.trim($('#samlname').val()).length == 0)
  {
   error_samlname = 'Last Name is required';
   $('#error_samlname').text(error_samlname);
   $('#samlname').addClass('has-error');
  }
  else
  {
   error_samlname = '';
   $('#error_samlname').text(error_samlname);
   $('#samlname').removeClass('has-error');
  }

  //Father Suffix

  if($.trim($('#samnext').val()).length == 0)
  {
   error_samnext = 'Select N/A if none';
   $('#error_samnext').text(error_samnext);
   $('#samnext').addClass('has-error');
  }
  else
  {
   error_samnext = '';
   $('#error_samnext').text(error_samnext);
   $('#samnext').removeClass('has-error');
  }

// Address
  if($.trim($('#sagaddress').val()).length == 0)
  {
   error_sagaddress = 'Address is required';
   $('#error_sagaddress').text(error_sagaddress);
   $('#sagaddress').addClass('has-error');
  }
  else
  {
   error_sagaddress = '';
   $('#error_sagaddress').text(error_sagaddress);
   $('#sagaddress').removeClass('has-error');
  }
  if($.trim($('#safaddress').val()).length == 0)
  {
   error_safaddress = 'Address is required';
   $('#error_safaddress').text(error_safaddress);
   $('#safaddress').addClass('has-error');
  }
  else
  {
   error_safaddress = '';
   $('#error_safaddress').text(error_safaddress);
   $('#safaddress').removeClass('has-error');
  }
  if($.trim($('#samaddress').val()).length == 0)
  {
   error_samaddress = 'Address is required';
   $('#error_samaddress').text(error_samaddress);
   $('#samaddress').addClass('has-error');
  }
  else
  {
   error_samaddress = '';
   $('#error_samaddress').text(error_samaddress);
   $('#samaddress').removeClass('has-error');
  }
// Contact Number
if($.trim($('#sagcontact').val()).length == 0)
  {
   error_sagcontact = 'Contact Number is required';
   $('#error_sagcontact').text(error_sagcontact);
   $('#sagcontact').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#sagcontact').val()))
//    {
//     error_sagcontact = 'Invalid Contact Number';
//     $('#error_sagcontact').text(error_sagcontact);
//     $('#sagcontact').addClass('has-error');
//    }
//    else
//    {
    error_sagcontact = '';
    $('#error_sagcontact').text(error_sagcontact);
    $('#sagcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#safcontact').val()).length == 0)
  {
   error_safcontact = 'Contact Number is required';
   $('#error_safcontact').text(error_safcontact);
   $('#safcontact').addClass('has-error');
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
    error_safcontact = '';
    $('#error_safcontact').text(error_safcontact);
    $('#safcontact').removeClass('has-error');
//    }
  }
  if($.trim($('#samcontact').val()).length == 0)
  {
   error_samcontact = 'Contact Number is required';
   $('#error_samcontact').text(error_samcontact);
   $('#samcontact').addClass('has-error');
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
    error_samcontact = '';
    $('#error_samcontact').text(error_samcontact);
    $('#samcontact').removeClass('has-error');
//    }
  }

// Occupation
if($.trim($('#sagoccu').val()).length == 0)
  {
   error_sagoccu = 'Put N/A if None';
   $('#error_sagoccu').text(error_sagoccu);
   $('#sagoccu').addClass('has-error');
  }
  else
  {
   error_sagoccu = '';
   $('#error_sagoccu').text(error_sagoccu);
   $('#sagoccu').removeClass('has-error');
  }
  if($.trim($('#safoccu').val()).length == 0)
  {
   error_safoccu = 'Put N/A if None';
   $('#error_safoccu').text(error_safoccu);
   $('#safoccu').addClass('has-error');
  }
  else
  {
   error_safoccu = '';
   $('#error_safoccu').text(error_safoccu);
   $('#safoccu').removeClass('has-error');
  }
  if($.trim($('#samoccu').val()).length == 0)
  {
   error_samoccu = 'Put N/A if None';
   $('#error_samoccu').text(error_samoccu);
   $('#samoccu').addClass('has-error');
  }
  else
  {
   error_samoccu = '';
   $('#error_samoccu').text(error_samoccu);
   $('#samoccu').removeClass('has-error');
  } 


// Company

if($.trim($('#sagcompany').val()).length == 0)
  {
   error_sagcompany = 'Put N/A if None';
   $('#error_sagcompany').text(error_sagcompany);
   $('#sagcompany').addClass('has-error');
  }
  else
  {
   error_sagcompany = '';
   $('#error_sagcompany').text(error_sagcompany);
   $('#sagcompany').removeClass('has-error');
  }
  if($.trim($('#safcompany').val()).length == 0)
  {
   error_safcompany = 'Put N/A if None';
   $('#error_safcompany').text(error_safcompany);
   $('#safcompany').addClass('has-error');
  }
  else
  {
   error_safcompany = '';
   $('#error_safcompany').text(error_safcompany);
   $('#safcompany').removeClass('has-error');
  }
  if($.trim($('#samcompany').val()).length == 0)
  {
   error_samcompany = 'Put N/A if None';
   $('#error_samcompany').text(error_samcompany);
   $('#samcompany').addClass('has-error');
  }
  else
  {
   error_samcompany = '';
   $('#error_samcompany').text(error_samcompany);
   $('#samcompany').removeClass('has-error');
  } 

// ParentYearlyIncome
if($.trim($('#saspcyincome').val()).length == 0)
  {
   error_saspcyincome = 'Parents Yearly Income is required';
   $('#error_saspcyincome').text(error_saspcyincome);
   $('#saspcyincome').addClass('has-error');
  }
  else
  {
   error_saspcyincome = '';
   $('#error_saspcyincome').text(error_saspcyincome);
   $('#saspcyincome').removeClass('has-error');
  } 

  if( error_sagfname != '' ||
  error_sagmname != '' ||
  error_saglname != '' ||
  error_sagnext != '' ||
  error_sagaddress != '' ||
  error_sagcontact != '' ||
  error_sagoccu != '' ||
  error_sagcompany != '' ||
  error_saffname != '' ||
  error_safmname != '' ||
  error_saflname != '' ||
  error_safnext != '' ||
  error_safaddress != '' ||
  error_safcontact != '' ||
  error_safoccu != '' ||
  error_safcompany != '' ||
  error_samfname != '' ||
  error_sammname != '' ||
  error_samlname != '' ||
  error_samnext != '' ||
  error_samaddress != '' ||
  error_samcontact != '' ||
  error_samoccu != '' ||
  error_samcompany != '' ||
  error_saspcyincome != '')
  {
   return false;
  }
  else
  {
    $('#list_family_details').removeClass('active active_tab1');
    $('#list_family_details').removeAttr('href data-toggle');
    $('#family_details').removeClass('active');
    $('#list_family_details').addClass('inactive_tab1');
    $('#list_achievements_details').removeClass('inactive_tab1');
    $('#list_achievements_details').addClass('active_tab1 active');
    $('#list_achievements_details').attr('href', '#achievements_details');
    $('#list_achievements_details').attr('data-toggle', 'tab');
    $('#achievements_details').addClass('active in');   
  }
 });

 $('#previous_btn_achievement').click(function(){
  $('#list_achievements_details').removeClass('active active_tab1');
  $('#list_achievements_details').removeAttr('href data-toggle');
  $('#achievements_details').removeClass('active in');
  $('#list_achievements_details').addClass('inactive_tab1');
  $('#list_family_details').removeClass('inactive_tab1');
  $('#list_family_details').addClass('active_tab1 active');
  $('#list_family_details').attr('href', '#family_details');
  $('#list_family_details').attr('data-toggle', 'tab');
  $('#family_details').addClass('active in');
 });

 $('#btn_achievement').click(function(){
  
  var error_sagwa = '';
  var error_saraward = '';
  var error_sadawardrceive = '';
  
  if($.trim($('#sagwa').val()).length == 0)
  {
   error_sagwa = 'Student GWA is required';
   $('#error_sagwa').text(error_sagwa);
   $('#sagwa').addClass('has-error');
  }
  else
  {
   error_sagwa = '';
   $('#error_sagwa').text(error_sagwa);
   $('#sagwa').removeClass('has-error');
  }
  if($.trim($('#saraward').val()).length == 0)
  {
   error_saraward = 'Student Award is required';
   $('#error_saraward').text(error_saraward);
   $('#saraward').addClass('has-error');
  }
  else
  {
   error_saraward = '';
   $('#error_saraward').text(error_saraward);
   $('#saraward').removeClass('has-error');
  }

  if($.trim($('#sadawardrceive').val()).length == 0)
  {
   error_sadawardrceive = 'Date Received is required';
   $('#error_sadawardrceive').text(error_sadawardrceive);
   $('#sadawardrceive').addClass('has-error');
  }
  else
  {
   error_sadawardrceive = '';
   $('#error_sadawardrceive').text(error_sadawardrceive);
   $('#sadawardrceive').removeClass('has-error');
  }

  if(error_sagwa != '' || 
     error_saraward != '' ||
     error_sadawardrceive != '')
  {
   return false;
  }
  else
  {
    $('#list_achievements_details').removeClass('active active_tab1');
    $('#list_achievements_details').removeAttr('href data-toggle');
    $('#achievements_details').removeClass('active');
    $('#list_achievements_details').addClass('inactive_tab1');
    $('#list_require_details').removeClass('inactive_tab1');
    $('#list_require_details').addClass('active_tab1 active');
    $('#list_require_details').attr('href', '#require_details');
    $('#list_require_details').attr('data-toggle', 'tab');
    $('#require_details').addClass('active in');  
  }
});

$('#previous_btn_requirement').click(function(){
  $('#list_require_details').removeClass('active active_tab1');
  $('#list_require_details').removeAttr('href data-toggle');
  $('#require_details').removeClass('active in');
  $('#list_require_details').addClass('inactive_tab1');
  $('#list_achievements_details').removeClass('inactive_tab1');
  $('#list_achievements_details').addClass('active_tab1 active');
  $('#list_achievements_details').attr('href', '#achievements_details');
  $('#list_achievements_details').attr('data-toggle', 'tab');
  $('#achievements_details').addClass('active in');
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
    $('#list_require_details').removeClass('active active_tab1');
    $('#list_require_details').removeAttr('href data-toggle');
    $('#require_details').removeClass('active');
    $('#list_require_details').addClass('inactive_tab1');
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
  $('#list_require_details').removeClass('inactive_tab1');
  $('#list_require_details').addClass('active_tab1 active');
  $('#list_require_details').attr('href', '#require_details');
  $('#list_require_details').attr('data-toggle', 'tab');
  $('#require_details').addClass('active in');
 });

 $('#btn_submit').click(function(){
  
  var error_saaemail = '';
  var error_sapass = '';
  
  if($.trim($('#saaemail').val()).length == 0)
  {
   error_saaemail = 'Email is required';
   $('#error_saaemail').text(error_saaemail);
   $('#saaemail').addClass('has-error');
  }
  else
  {
   error_saaemail = '';
   $('#error_saaemail').text(error_saaemail);
   $('#saaemail').removeClass('has-error');
  }
  
  if($.trim($('#sapass').val()).length == 0)
  {
   error_sapass = 'Password is required';
   $('#error_sapass').text(error_sapass);
   $('#sapass').addClass('has-error');
  }
  else
  {
   error_sapass = '';
   $('#error_sapass').text(error_sapass);
   $('#sapass').removeClass('has-error');
  }

  if(error_saaemail != '' || 
     error_sapass != '')
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
