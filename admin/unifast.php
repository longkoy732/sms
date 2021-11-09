<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["student_id"]))
{
  $object->query = "
     INSERT INTO tbl_unifast
     (student_id, slname, sfname, smname, gnext, gender, sdbirth, scontact, saddress, spattend, cp, syl, 
     saemail, sflname, sffname, sfmname, gfs, smlname, smfname, smmname, gmnext, famh, hmc, fms, fdf, snemail, 
     snapass, status, sudateapply) 
     VALUES (:student_id, :slname, :sfname, :smname, :gnext, :gender, :sdbirth, :scontact, :saddress, :spattend, 
     :cp, :syl, :saemail, :sflname, :sffname, :sfmname, :gfs, :smlname, :smfname, :smmname, :gmnext, :famh, 
     :hmc, :fms, :fdf, :snemail, :snapass,'Pending', '$object->now')
     ";
     
     $password_hash = password_hash($_POST["snapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':student_id'					  =>	$_POST["student_id"],
                    ':slname'					      =>	$_POST["slname"],
                    ':sfname'					      =>	$_POST["sfname"],
                    ':smname'					      =>	$_POST["smname"],
                    ':gnext'					      =>	$_POST["gnext"],
					          ':gender'				        =>	$_POST["gender"],
                    ':sdbirth'					    =>	$_POST["sdbirth"],
                    ':scontact'					    =>	$_POST["scontact"],
                    ':saddress'					    =>	$_POST["saddress"],
                    ':spattend'					    =>	$_POST["spattend"],
                    ':cp'					          =>	$_POST["cp"],
                    ':syl'					        =>	$_POST["syl"],
					          ':saemail'				      =>	$_POST["saemail"],
					          ':sflname'				      =>	$_POST["sflname"],
					          ':sffname'			        =>	$_POST["sffname"],
                    ':sfmname'					    =>	$_POST["sfmname"],
                    ':gfs'					        =>	$_POST["gfs"],
                    ':smlname'					    =>	$_POST["smlname"],
                    ':smfname'					    =>	$_POST["smfname"],
                    ':smmname'					    =>	$_POST["smmname"],
					          ':gmnext'				        =>	$_POST["gmnext"],
                    ':famh'					        =>	$_POST["famh"],
                    ':hmc'					        =>	$_POST["hmc"],
                    ':fms'					        =>	$_POST["fms"],
                    ':fdf'					        =>	$_POST["fdf"],
                    ':snemail'					    =>	$_POST["snaemail"],
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
  <title>SMS | US</title>
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
   <h2 align="center">UNIFAST SCHOLARSHIP (US)<br>Application Form</h2><br />
   <?php echo $message; ?> 
   <form method="post" id="acad_form" class="row gap-3">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" id="list_studentid_details" style="border:1px solid #ccc">Student ID Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_family_details" style="border:1px solid #ccc">Personal Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_application_details" style="border:1px solid #ccc">Family Details</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_requirements_details" style="border:1px solid #ccc">Requirements Details</a>
     </li>
    
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_account_details" style="border:1px solid #ccc">Account Details</a>
     </li>
    </ul>
  <!-- Student ID Details -->
    <div  class="tab-content" style="margin-top:16px;">
      <div  class="tab-pane active" id="personal_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Student ID Details</div>
            <div  align="center" class="panel-body">
              <div class="form-group">
					      
                <div  style="padding-bottom: 25px;" class="row">
                <div style="margin-left: 280px; width: auto;"  class="col-xs-12 col-sm-12 col-md-8">
                    <label  >Student ID NO.<span class="text-danger">*</span></label>
                    <input  type="text" name="student_id" id="student_id" class="form-control" />
                    <span id="error_student_id" class="text-danger"></span>
                  </div>
              </div>
              </div>
              <div align="center">
                <a class="btn btn-primary" href="apply.php" role="button">Back</a>
                <button type="button" name="btn_studentid_details" id="btn_studentid_details" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>

<!-- Personal Details -->
     <div class="tab-pane fade" id="family_details">
      <div class="panel panel-default">
       <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Personal Details</div>
        <div class="panel-body">
          <div class="form-group">
					      <h4 class="sub-title">Personal Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="slname" id="slname" class="form-control" />
                    <span id="error_slname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="sfname" id="sfname" class="form-control" />
                    <span id="error_sfname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="smname" id="smname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_smname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="gnext" id="gnext" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_gnext" class="text-danger"></span>
                  </div>
               </div>
               </div>
              <div class="form-group">
                <div class="row">
                
               </div>
               </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Gender<span class="text-danger">*</label>
                    <select name="gender" id="gender" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="Male.">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_gender" class="text-danger"></span>
                  </div>
                
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Date of Birth<span class="text-danger">*</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="sdbirth" id="sdbirth" class="form-control">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_sdbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact No.<span class="text-danger">*</span></label>
                    <input type="text" name="scontact" id="scontact" class="form-control" />
                    <span id="error_scontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Permanent Home Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="saddress" id="saddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_saddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Previous School Attended<span class="text-danger">*</span></label>
                    <textarea type="text" name="spattend" id="spattend" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_spattend" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Course/Program<span class="text-danger">*</span></label>
                    <input type="text" name="cp" id="cp" class="form-control" />
                    <span id="error_cp" class="text-danger"></span>
                    
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Year Level<span class="text-danger">*</span></label>
                    <input type="text" name="syl" id="syl" class="form-control" />
                    <span id="error_syl" class="text-danger"></span>
                    
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Email Address<span class="text-danger">*</span></label>
                <input type="text" name="saemail" id="saemail" class="form-control" />
                    <span id="error_saemail" class="text-danger"></span>
                    
                  </div>
              </div>
            </div>
            
         
            <div align="center">
              <button type="button" name="previous_btn_family_details" id="previous_btn_family_details" class="btn btn-default btn-md">Previous</button>
              <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-md">Next</button>
            </div>
        </div>
      </div>
     </div>

     <!-- Family Details -->
     <div class="tab-pane fade" id="application_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Family Details</div>
            <div class="panel-body">

            <div class="form-group">
					      <h4 class="sub-title">Father's Details</h4>
                <div class="row" >
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="sflname" id="sflname" class="form-control" />
                    <span id="error_sflname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="sffname" id="sffname" class="form-control" />
                    <span id="error_sffname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="sfmname" id="sfmname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_sfmname" class="text-danger"></span>
                  </div>
               
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="gfs" id="gfs" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_gfs" class="text-danger"></span>
                  </div>


               </div>

               <h4 class="sub-title">Mother's Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="smlname" id="smlname" class="form-control" />
                    <span id="error_smlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="smfname" id="smfname" class="form-control" />
                    <span id="error_smfname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="smmname" id="smmname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_smmname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="gmnext" id="gmnext" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_gmnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>DSWD Household / 4ps No.<span class="text-danger">*</label>
                    <input type="text" name="famh" id="famh" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_famh" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Household Capital Income<span class="text-danger">*</label>
                    <input type="text" name="hmc" id="hmc" class="form-control" />
                    <span id="error_hmc" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Specify Disability / Attached PWD Id<span class="text-danger">*</label>
                    <input type="text" name="fms" id="fms" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_fms" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                  <label>Date Filed<span class="text-danger">*</label>
                  <div class='input-group date' id='datetimepicker2'>
                        <input type='text' name="fdf" id="fdf" class="form-control">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                       
                    </div>
                    <span id="error_fdf" class="text-danger"></span>
                  </div>
               </div>
               </div>
        
              <div align="center">
                <button type="button" name="previous_btn_application" id="previous_btn_application" class="btn btn-default btn-md">Previous</button>
                <button type="button" name="btn_family_details" id="btn_family_details" class="btn btn-info btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>


       <!-- Requirement Details -->

       <!-- <div class="panel-heading" style="font-weight: bold; font-size: 16px;">List of Requirements</div>
          <div class="panel-body">
                    <ul class="list-group d-flex justify-content-center">
                      <li class="list-group-item">1. Photocopy of PSA(1pc.)</li>
                      <li class="list-group-item">2. 2x2 ID Picture(1pc.)</li>
                      <li class="list-group-item">3. Original Barangay Residency</li>
                    </ul>
                   
                    
              
            </div> -->
       <div class="tab-pane fade" id="requirements_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Applicant Must Be:</div>
          <div class="panel panel-default">
          <div class="panel-body">
          <ul class="list-group d-flex justify-content-center">
                      <li class="list-group-item">1. Senior High Graduate</li>
                      <li class="list-group-item">2. College Level</li>
                      <li class="list-group-item">3. 4th year High School Graduate(Old Curriculum)</li>
                      <li class="list-group-item">4. ALS Passer Promoted to College</li>
                      <li class="list-group-item">5. Enrolled of the said Institution</li>
                    </ul>
            </div>
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">List of Requirements</div>
          </div>
            <div class="panel-body">
                    <ul class="list-group d-flex justify-content-center">
                      <li class="list-group-item">1. Photocopy of PSA(1pc.)</li>
                      <li class="list-group-item">2. 2x2 ID Picture(1pc.)</li>
                      <li class="list-group-item">3. Original Barangay Residency</li>
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
// Student ID Details
$(document).ready(function(){
 
    $('#btn_studentid_details').click(function(){

        var error_student_id = '';

        if($.trim($('#student_id').val()).length == 0)
  {
   error_student_id = 'Student ID No. is required';
   $('#error_student_id').text(error_student_id);
   $('#student_id').addClass('has-error');
  }
  else
  {
   error_student_id = '';
   $('#error_student_id').text(error_student_id);
   $('#student_id').removeClass('has-error');
  }


  if(error_student_id != '' )
  {
   return false;
  }
  else{
    $('#list_studentid_details').removeClass('active active_tab1');
   $('#list_studentid_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_studentid_details').addClass('inactive_tab1');
   $('#list_family_details').removeClass('inactive_tab1');
   $('#list_family_details').addClass('active_tab1 active');
   $('#list_family_details').attr('href', '#family_details');
   $('#list_family_details').attr('data-toggle', 'tab');
   $('#family_details').addClass('active in');

  }


    });


    //Personal Details

 $('#btn_personal_details').click(function(){
  var error_slname = '';
  var error_sfname = '';
  var error_smname = '';
  var error_sdbirth = '';
  var error_scontact = '';
  var error_saddress = '';
  var error_saemail = '';
  var error_syl = '';
  var error_gender = '';
  var error_spattend = '';
  var error_gnext = '';
  
  


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

  if($.trim($('#scontact').val()).length == 0)
  {
   error_scontact = 'Contact No. is required';
   $('#error_scontact').text(error_scontact);
   $('#scontact').addClass('has-error');
  }
  else
  {
   error_scontact = '';
   $('#error_scontact').text(error_scontact);
   $('#scontact').removeClass('has-error');
  }

  if($.trim($('#saddress').val()).length == 0)
  {
   error_saddress = 'Permanent Home Address is required';
   $('#error_saddress').text(error_saddress);
   $('#saddress').addClass('has-error');
  }
  else
  {
   error_saddress = '';
   $('#error_saddress').text(error_saddress);
   $('#saddress').removeClass('has-error');
  }

  if($.trim($('#spattend').val()).length == 0)
  {
   error_spattend = 'Previous School Attended is required';
   $('#error_spattend').text(error_spattend);
   $('#spattend').addClass('has-error');
  }
  else
  {
   error_spattend = '';
   $('#error_spattend').text(error_spattend);
   $('#spattend').removeClass('has-error');
  }

  if($.trim($('#saemail').val()).length == 0)
  {
   error_saemail = 'Email is required';
   $('#error_saemail').text(error_saemail);
   $('#saemail').addClass('has-error');
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
   error_saemail = '';
   $('#error_saemail').text(error_saemail);
   $('#saemail').removeClass('has-error');
   }
//   }

  if($.trim($('#cp').val()).length == 0)
  {
   error_cp = 'Course/Program is Required';
   $('#error_cp').text(error_cp);
   $('#cp').addClass('has-error');
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
    error_cp = '';
    $('#error_cp').text(error_cp);
    $('#cp').removeClass('has-error');
//    }
  }

  if($.trim($('#syl').val()).length == 0)
  {
   error_syl = 'Year Level is required';
   $('#error_syl').text(error_syl);
   $('#syl').addClass('has-error');
  }
  else
  {
   error_syl = '';
   $('#error_syl').text(error_syl);
   $('#syl').removeClass('has-error');
  }

  if($.trim($('#gender').val()).length == 0)
  {
   error_gender = 'Gender is required';
   $('#error_gender').text(error_gender);
   $('#gender').addClass('has-error');
  }
  else
  {
   error_gender = '';
   $('#error_gender').text(error_gender);
   $('#gender').removeClass('has-error');
  }


  if($.trim($('#gnext').val()).length == 0)
  {
   error_gnext = 'Select N/A if none';
   $('#error_gnext').text(error_gnext);
   $('#gnext').addClass('has-error');
  }
  else
  {
   error_gnext = '';
   $('#error_gnext').text(error_gnext);
   $('#gnext').removeClass('has-error');
  }


  if(error_slname != '' || error_sfname != '' 
  || error_smname != '' || error_sdbirth != '' 
  || error_spattend != '' || error_saddress != '' 
  || error_saemail != '' || error_scontact != ''
  || error_cp != '' || error_syl != '' || error_gender != ''
  )
  {
   return false;
  }
  else

  //ari dire
  {
    $('#list_studentid_details').removeClass('active active_tab1');
   $('#list_studentid_details').removeAttr('href data-toggle');
   $('#list_family_details').removeClass('active active_tab1');
   $('#list_family_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#family_details').removeClass('active');
   $('#list_application_details').removeClass('inactive_tab1');
   $('#list_studentid_details').addClass('inactive_tab1');
   $('#list_family_details').addClass('inactive_tab1');
   $('#list_application_details').addClass('active_tab1 active');
   $('#list_application_details').attr('href', '#application_details');
   $('#list_application_details').attr('data-toggle', 'tab');
   $('#application_details').addClass('active in');


  }
 });
 
 $('#previous_btn_family_details').click(function(){
  $('#list_family_details').removeClass('active active_tab1');
  $('#list_family_details').removeAttr('href data-toggle');
  $('#family_details').removeClass('active in');
  $('#list_family_details').addClass('inactive_tab1');
  $('#list_studentid_details').removeClass('inactive_tab1');
  $('#list_studentid_details').addClass('active_tab1 active');
  $('#list_studentid_details').attr('href', '#personal_details');
  $('#list_studentid_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 

// Family Details
 $('#btn_family_details').click(function(){
  var error_sflname = '';
  var error_sffname = '';
  var error_sfmname = '';
  var error_gfs = '';
  var error_smlname = '';
  var error_smfname = '';
  var error_smmname = '';
  var error_gmnext = '';
  var error_famh = '';
  var error_hmc = '';
  var error_fms = '';
  var error_fdf = '';
 
// Father Last Name
  if($.trim($('#sflname').val()).length == 0)
  {
   error_sflname = 'Last Name is Required';
   $('#error_sflname').text(error_sflname);
   $('#sflname').addClass('has-error');
  }
  else
  {
   error_sflname= '';
   $('#error_sflname').text(error_sflname);
   $('#sflname').removeClass('has-error');
  }
//Father First Name
  if($.trim($('#sffname').val()).length == 0)
  {
   error_sffname = 'First Name is required';
   $('#error_sffname').text(error_sffname);
   $('#sffname').addClass('has-error');
  }
  else
  {
   error_sffname = '';
   $('#error_sffname').text(error_sffname);
   $('#sffname').removeClass('has-error');
  }
  //Father Middle Name

  if($.trim($('#sfmname').val()).length == 0)
  {
   error_sfmname = 'Put N/A if none';
   $('#error_sfmname').text(error_sfmname);
   $('#sfmname').addClass('has-error');
  }
  else
  {
   error_sfmname = '';
   $('#error_sfmname').text(error_sfmname);
   $('#sfmname').removeClass('has-error');
  }
  //Father Suffix

  if($.trim($('#gfs').val()).length == 0)
  {
   error_gfs = 'Select N/A if none';
   $('#error_gfs').text(error_gfs);
   $('#gfs').addClass('has-error');
  }
  else
  {
   error_gfs = '';
   $('#error_gfs').text(error_gfs);
   $('#gfs').removeClass('has-error');
  }

  //Mother Last Name
  if($.trim($('#smlname').val()).length == 0)
  {
   error_smlname = 'Last Name is required';
   $('#error_smlname').text(error_smlname);
   $('#smlname').addClass('has-error');
  }
  else
  {
   error_smlname = '';
   $('#error_smlname').text(error_smlname);
   $('#smlname').removeClass('has-error');
  }
  //Mother First Name

  if($.trim($('#smfname').val()).length == 0)
  {
   error_smfname = 'First Name is required';
   $('#error_smfname').text(error_smfname);
   $('#smfname').addClass('has-error');
  }
  else
  {
   error_smfname = '';
   $('#error_smfname').text(error_smfname);
   $('#smfname').removeClass('has-error');
  }
  //Mother Middle Name

  if($.trim($('#smmname').val()).length == 0)
  {
   error_smmname = 'Put N/A if none';
   $('#error_smmname').text(error_smmname);
   $('#smmname').addClass('has-error');
  }
  else
  {
   error_smmname = '';
   $('#error_smmname').text(error_smmname);
   $('#smmname').removeClass('has-error');
  }
  //Mother Suffix
  if($.trim($('#gmnext').val()).length == 0)
  {
   error_gmnext = 'Select N/A if none';
   $('#error_gmnext').text(error_gmnext);
   $('#gmnext').addClass('has-error');
  }
  else
  {
   error_gmnext = '';
   $('#error_gmnext').text(error_gmnext);
   $('#gmnext').removeClass('has-error');
  }

  //DSWD Household
  if($.trim($('#famh').val()).length == 0)
  {
   error_famh = 'Put N/A if none';
   $('#error_famh').text(error_famh);
   $('#famh').addClass('has-error');
  }
  else
  {
   error_famh = '';
   $('#error_famh').text(error_famh);
   $('#famh').removeClass('has-error');
  }
// Household Capital Income
  if($.trim($('#hmc').val()).length == 0)
  {
   error_hmc = 'Capital Income is required';
   $('#error_hmc').text(error_hmc);
   $('#hmc').addClass('has-error');
  }
  else
  {
   error_hmc = '';
   $('#error_hmc').text(error_hmc);
   $('#hmc').removeClass('has-error');
  }

  // Specify Disability
  if($.trim($('#fms').val()).length == 0)
  {
   error_fms = 'Put N/A if none';
   $('#error_fms').text(error_fms);
   $('#fms').addClass('has-error');
  }
  else
  {
   error_fms = '';
   $('#error_fms').text(error_fms);
   $('#fms').removeClass('has-error');
  }

  // Date Filed
  if($.trim($('#fdf').val()).length == 0)
  {
   error_fdf = 'Date Filed is required';
   $('#error_fdf').text(error_fdf);
   $('#fdf').addClass('has-error');
  }
  else
  {
   error_fdf = '';
   $('#error_fdf').text(error_fdf);
   $('#fdf').removeClass('has-error');
  }
  

  if( error_sflname != '' ||
  error_sffname != '' ||
  error_sfmname != '' ||
  error_gfs != '' ||
  error_smlname != '' ||
  error_smfname != '' ||
  error_smmname != '' ||
  error_gmnext != '' ||
  error_famh != '' ||
  error_fms != '' ||
  error_hmc != '' ||
  error_fdf != '' 
  )
  {
   return false;
  }
  else
  {
    $('#list_studentid_details').removeClass('active active_tab1');
   $('#list_studentid_details').removeAttr('href data-toggle');
   $('#list_family_details').removeClass('active active_tab1');
   $('#list_family_details').removeAttr('href data-toggle');
   $('#list_application_details').removeClass('active active_tab1');
   $('#list_application_details').removeAttr('href data-toggle');
   $('#application_details').removeClass('active');
   $('#personal_details').removeClass('active');
   $('#family_details').removeClass('active');
   $('#list_requirements_details').removeClass('inactive_tab1');
   $('#list_studentid_details').addClass('inactive_tab1');
   $('#list_application_details').addClass('inactive_tab1');
   $('#list_family_details').addClass('inactive_tab1');
   $('#list_requirements_details').addClass('active_tab1 active');
   $('#list_requirements_details').attr('href', '#requirements_details');
   $('#list_requirements_details').attr('data-toggle', 'tab');
   $('#requirements_details').addClass('active in');

     
  }
 });

 $('#previous_btn_requirement').click(function(){

  $('#list_requirement_details').removeClass('active active_tab1');
  $('#list_requirement_details').removeAttr('href data-toggle');
  $('#requirements_details').removeClass('active in');
  $('#list_requirements_details').addClass('inactive_tab1');
  $('#list_application_details').removeClass('inactive_tab1');
  $('#list_application_details').addClass('active_tab1 active');
  $('#list_application_details').attr('href', '#education_details');
  $('#list_application_details').attr('data-toggle', 'tab');
  $('#application_details').addClass('active in');
  $('#list_requirements_details').removeClass('active active_tab1');
  $('#list_requirements_details').addClass('inactive_tab1');
 
 });

 $('#previous_btn_application').click(function(){
  $('#list_application_details').removeClass('active active_tab1');
  $('#list_application_details').removeAttr('href data-toggle');
  $('#application_details').removeClass('active in');
  $('#list_application_details').addClass('inactive_tab1');
  $('#list_requirements_details').removeClass('active active_tab1');
  $('#list_requirements_details').addClass('inactive_tab1');
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

 

// $('#previous_btn_requirement').click(function(){
//   $('#list_requirement_details').removeClass('active active_tab1');
//   $('#list_requirement_details').removeAttr('href data-toggle');
//   $('#requirement_details').removeClass('active in');
//   $('#list_requirement_details').addClass('inactive_tab1');
//   $('#list_education_details').removeClass('inactive_tab1');
//   $('#list_education_details').addClass('active_tab1 active');
//   $('#list_education_details').attr('href', '#education_details');
//   $('#list_education_details').attr('data-toggle', 'tab');
//   $('#education_details').addClass('active in');
//  });

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
    $('#list_requirements_details').removeClass('active active_tab1');
    $('#list_requirements_details').removeAttr('href data-toggle');
    $('#requirements_details').removeClass('active');
    $('#list_requirements_details').addClass('inactive_tab1');
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
  $('#list_requirements_details').removeClass('inactive_tab1');
  $('#list_requirements_details').addClass('active_tab1 active');
  $('#list_requirements_details').attr('href', '#requirements_details');
  $('#list_requirements_details').attr('data-toggle', 'tab');
  $('#requirements_details').addClass('active in');
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