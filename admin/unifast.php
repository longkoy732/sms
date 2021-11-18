<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["sustudent_id"]))
{
  $object->query = "
     INSERT INTO tbl_unifast
     (sustudent_id, suslname, susfname, susmname, susnext, susgender, susdbirth, suscontact, susaddress, susspattended, suscp, susyl, 
     suspemail, susflname, susffname, susfmname, susfnext, susmlname, susmfname, susmmname, susmnext, susdswd, sushci, susdid, susdfilled, sudrpicstat, 
     sudrpsastat, sudrobrstat, sustype, susaemail, susapass, susgrantstat, susschstat, susdapply) 
     VALUES (:sustudent_id, :suslname, :susfname, :susmname, :susnext, :susgender, :susdbirth, :suscontact, :susaddress, :susspattended	, 
     :suscp, :susyl, :suspemail, :susflname, :susffname, :susfmname, :susfnext, :susmlname, :susmfname, :susmmname, :susmnext, :susdswd, 
     :sushci, :susdid, :susdfilled, 'Not-Received', 'Not-Received', 'Not-Received', 'Unifast', :susaemail, :susapass, 'New', 'Pending', '$object->now')
     ";
     
     $password_hash = password_hash($_POST["susapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':sustudent_id'					  =>	$_POST["sustudent_id"],
                    ':suslname'					      =>	$_POST["suslname"],
                    ':susfname'					      =>	$_POST["susfname"],
                    ':susmname'					      =>	$_POST["susmname"],
                    ':susnext'					      =>	$_POST["susnext"],
					          ':susgender'				        =>	$_POST["susgender"],
                    ':susdbirth'					    =>	$_POST["susdbirth"],
                    ':suscontact'					    =>	$_POST["suscontact"],
                    ':susaddress'					    =>	$_POST["susaddress"],
                    ':susspattended'					    =>	$_POST["susspattended"],
                    ':suscp'					          =>	$_POST["suscp"],
                     ':susyl'					        =>	$_POST["susyl"],
					          ':suspemail'				      =>	$_POST["suspemail"],
					          ':susflname'				      =>	$_POST["susflname"],
					          ':susffname'			        =>	$_POST["susffname"],
                    ':susfmname'					    =>	$_POST["susfmname"],
                    ':susfnext'					        =>	$_POST["susfnext"],
                    ':susmlname'					    =>	$_POST["susmlname"],
                    ':susmfname'					    =>	$_POST["susmfname"],
                    ':susmmname'					    =>	$_POST["susmmname"],
					          ':susmnext'				        =>	$_POST["susmnext"],
                    ':susdswd'					        =>	$_POST["susdswd"],
                    ':sushci'					        =>	$_POST["sushci"],
                    ':susdid'					        =>	$_POST["susdid"],
                    ':susdfilled'					        =>	$_POST["susdfilled"],
                    ':susaemail'					    =>	$_POST["susaemail"],
					          ':susapass'				      =>  $password_hash
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
                    <input  type="text" name="sustudent_id" id="sustudent_id" class="form-control" />
                    <span id="error_sustudent_id" class="text-danger"></span>
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
                    <input type="text" name="suslname" id="suslname" class="form-control" />
                    <span id="error_suslname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="susfname" id="susfname" class="form-control" />
                    <span id="error_susfname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="susmname" id="susmname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_susmname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="susnext" id="susnext" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_susnext" class="text-danger"></span>
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
                    <select name="susgender" id="susgender" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="Male.">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_susgender" class="text-danger"></span>
                  </div>
                
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Date of Birth<span class="text-danger">*</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="susdbirth" id="susdbirth" class="form-control">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_susdbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact No.<span class="text-danger">*</span></label>
                    <input type="text" name="suscontact" id="suscontact" class="form-control" />
                    <span id="error_suscontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Permanent Home Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="susaddress" id="susaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_susaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Previous School Attended<span class="text-danger">*</span></label>
                    <textarea type="text" name="susspattended" id="susspattended" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_susspattended" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Course/Program<span class="text-danger">*</span></label>
                    <input type="text" name="suscp" id="suscp" class="form-control" />
                    <span id="error_suscp" class="text-danger"></span>
                    
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Year Level<span class="text-danger">*</span></label>
                    <input type="text" name="susyl" id="susyl" class="form-control" />
                    <span id="error_susyl" class="text-danger"></span>
                    
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Email Address<span class="text-danger">*</span></label>
                <input type="text" name="suspemail" id="suspemail" class="form-control" />
                    <span id="error_suspemail" class="text-danger"></span>
                    
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
                    <input type="text" name="susflname" id="susflname" class="form-control" />
                    <span id="error_susflname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="susffname" id="susffname" class="form-control" />
                    <span id="error_susffname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="susfmname" id="susfmname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_susfmname" class="text-danger"></span>
                  </div>
               
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="susfnext" id="susfnext" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_susfnext" class="text-danger"></span>
                  </div>


               </div>

               <h4 class="sub-title">Mother's Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="susmlname" id="susmlname" class="form-control" />
                    <span id="error_susmlname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="susmfname" id="susmfname" class="form-control" />
                    <span id="error_susmfname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="susmmname" id="susmmname" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_susmmname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix<span class="text-danger">*</label>
                    <select name="susmnext" id="susmnext" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_susmnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>DSWD Household / 4ps No.<span class="text-danger">*</label>
                    <input type="text" name="susdswd" id="susdswd" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_susdswd" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Household Capital Income<span class="text-danger">*</label>
                    <input type="text" name="sushci" id="sushci" class="form-control" />
                    <span id="error_sushci" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Specify Disability / Attached PWD Id<span class="text-danger">*</label>
                    <input type="text" name="susdid" id="susdid" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_susdid" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                  <label>Date Filed<span class="text-danger">*</label>
                  <div class='input-group date' id='datetimepicker2'>
                        <input type='text' name="susdfilled" id="susdfilled" class="form-control">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                       
                    </div>
                    <span id="error_susdfilled" class="text-danger"></span>
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
                  <input type="text" name="susaemail" id="susaemail" class="form-control" />
                  <span id="error_susaemail" class="text-danger"></span>
                  </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="susapass" id="susapass" class="form-control" />
                  <span id="error_susapass" class="text-danger"></span>
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

        var error_sustudent_id = '';

        if($.trim($('#sustudent_id').val()).length == 0)
  {
   error_sustudent_id = 'Student ID No. is required';
   $('#error_sustudent_id').text(error_sustudent_id);
   $('#sustudent_id').addClass('has-error');
  }
  else
  {
   error_sustudent_id = '';
   $('#error_sustudent_id').text(error_sustudent_id);
   $('#sustudent_id').removeClass('has-error');
  }


  if(error_sustudent_id != '' )
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
  var error_suslname = '';
  var error_susfname = '';
  var error_susmname = '';
  var error_susnext = '';
  var error_susgender = '';
  var error_susdbirth = '';
  var error_suscontact = '';
  var error_susaddress = '';
  var error_susspattended	= '';
  var error_suscp = '';
  var error_susyl = '';
  var error_suspemail = '';
  
  if($.trim($('#suslname').val()).length == 0)
  {
   error_suslname = 'Last Name is required';
   $('#error_suslname').text(error_suslname);
   $('#suslname').addClass('has-error');
  }
  else
  {
   error_suslname = '';
   $('#error_suslname').text(error_suslname);
   $('#suslname').removeClass('has-error');
  }

  if($.trim($('#susfname').val()).length == 0)
  {
   error_susfname = 'First Name is required';
   $('#error_susfname').text(error_susfname);
   $('#susfname').addClass('has-error');
  }
  else
  {
   error_susfname = '';
   $('#error_susfname').text(error_susfname);
   $('#susfname').removeClass('has-error');
  }
  
  if($.trim($('#susmname').val()).length == 0)
  {
   error_susmname = 'Middle Name is required';
   $('#error_susmname').text(error_susmname);
   $('#susmname').addClass('has-error');
  }
  else
  {
   error_susmname = '';
   $('#error_susmname').text(error_susmname);
   $('#susmname').removeClass('has-error');
  }

  if($.trim($('#susdbirth').val()).length == 0)
  {
   error_susdbirth = 'Date of Birth is required';
   $('#error_susdbirth').text(error_susdbirth);
   $('#susdbirth').addClass('has-error');
  }
  else
  {
   error_susdbirth = '';
   $('#error_susdbirth').text(error_susdbirth);
   $('#susdbirth').removeClass('has-error');
  }

  if($.trim($('#suscontact').val()).length == 0)
  {
   error_suscontact = 'Contact No. is required';
   $('#error_suscontact').text(error_suscontact);
   $('#suscontact').addClass('has-error');
  }
  else
  {
   error_suscontact = '';
   $('#error_suscontact').text(error_suscontact);
   $('#suscontact').removeClass('has-error');
  }

  if($.trim($('#susaddress').val()).length == 0)
  {
   error_susaddress = 'Permanent Home Address is required';
   $('#error_susaddress').text(error_susaddress);
   $('#susaddress').addClass('has-error');
  }
  else
  {
   error_susaddress = '';
   $('#error_susaddress').text(error_susaddress);
   $('#susaddress').removeClass('has-error');
  }

  if($.trim($('#susspattended').val()).length == 0)
  {
   error_susspattended = 'Previous School Attended is required';
   $('#error_susspattended').text(error_susspattended);
   $('#susspattended').addClass('has-error');
  }
  else
  {
   error_susspattended = '';
   $('#error_susspattended').text(error_susspattended);
   $('#susspattended').removeClass('has-error');
  }

  if($.trim($('#suspemail').val()).length == 0)
  {
   error_suspemail = 'Email is required';
   $('#error_suspemail').text(error_suspemail);
   $('#suspemail').addClass('has-error');
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
   error_suspemail = '';
   $('#error_suspemail').text(error_suspemail);
   $('#suspemail').removeClass('has-error');
   }
//   }

  if($.trim($('#suscp').val()).length == 0)
  {
   error_suscp = 'Course/Program is Required';
   $('#error_suscp').text(error_suscp);
   $('#suscp').addClass('has-error');
  }
  else
  {
//    if (!pcnumval.test($('#suscontact').val()))
//    {
//     error_suscontact = 'Invalid Contact Number';
//     $('#error_suscontact').text(error_suscontact);
//     $('#suscontact').addClass('has-error');
//    }
//    else
//    {
    error_suscp = '';
    $('#error_suscp').text(error_suscp);
    $('#suscp').removeClass('has-error');
//    }
  }

  if($.trim($('#susyl').val()).length == 0)
  {
   error_susyl = 'Year Level is required';
   $('#error_susyl').text(error_susyl);
   $('#susyl').addClass('has-error');
  }
  else
  {
   error_susyl = '';
   $('#error_susyl').text(error_susyl);
   $('#susyl').removeClass('has-error');
  }

  if($.trim($('#susgender').val()).length == 0)
  {
   error_susgender = 'susgender is required';
   $('#error_susgender').text(error_susgender);
   $('#susgender').addClass('has-error');
  }
  else
  {
   error_susgender = '';
   $('#error_susgender').text(error_susgender);
   $('#susgender').removeClass('has-error');
  }


  if($.trim($('#susnext').val()).length == 0)
  {
   error_susnext = 'Select N/A if none';
   $('#error_susnext').text(error_susnext);
   $('#susnext').addClass('has-error');
  }
  else
  {
   error_susnext = '';
   $('#error_susnext').text(error_susnext);
   $('#susnext').removeClass('has-error');
  }


  if(error_suslname != '' || error_susfname != ''
  || error_susmname != '' || error_susnext != ''
  || error_susgender != '' || error_susdbirth != ''
  || error_suscontact != '' || error_susaddress != ''
  || error_susspattended != '' || error_suscp != ''
  || error_susyl != '' || error_suspemail != '' 
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
  var error_susflname = '';
  var error_susffname = '';
  var error_susfmname = '';
  var error_susfnext = '';
  var error_susmlname = '';
  var error_susmfname = '';
  var error_susmmname	 = '';
  var error_susmnext = '';
  var error_susdswd = '';
  var error_sushci = '';
  var error_susdid = '';
  var error_susdfilled = '';
 
// Father Last Name
  if($.trim($('#susflname').val()).length == 0)
  {
   error_susflname = 'Last Name is Required';
   $('#error_susflname').text(error_susflname);
   $('#susflname').addClass('has-error');
  }
  else
  {
   error_susflname= '';
   $('#error_susflname').text(error_susflname);
   $('#susflname').removeClass('has-error');
  }
//Father First Name
  if($.trim($('#susffname').val()).length == 0)
  {
   error_susffname = 'First Name is required';
   $('#error_susffname').text(error_susffname);
   $('#susffname').addClass('has-error');
  }
  else
  {
   error_susffname = '';
   $('#error_susffname').text(error_susffname);
   $('#susffname').removeClass('has-error');
  }
  //Father Middle Name

  if($.trim($('#susfmname').val()).length == 0)
  {
   error_susfmname = 'Put N/A if none';
   $('#error_susfmname').text(error_susfmname);
   $('#susfmname').addClass('has-error');
  }
  else
  {
   error_susfmname = '';
   $('#error_susfmname').text(error_susfmname);
   $('#susfmname').removeClass('has-error');
  }
  //Father Suffix

  if($.trim($('#susfnext').val()).length == 0)
  {
   error_susfnext = 'Select N/A if none';
   $('#error_susfnext').text(error_susfnext);
   $('#susfnext').addClass('has-error');
  }
  else
  {
   error_susfnext = '';
   $('#error_susfnext').text(error_susfnext);
   $('#susfnext').removeClass('has-error');
  }

  //Mother Last Name
  if($.trim($('#susmlname').val()).length == 0)
  {
   error_susmlname = 'Last Name is required';
   $('#error_susmlname').text(error_susmlname);
   $('#susmlname').addClass('has-error');
  }
  else
  {
   error_susmlname = '';
   $('#error_susmlname').text(error_susmlname);
   $('#susmlname').removeClass('has-error');
  }
  //Mother First Name

  if($.trim($('#susmfname').val()).length == 0)
  {
   error_susmfname = 'First Name is required';
   $('#error_susmfname').text(error_susmfname);
   $('#susmfname').addClass('has-error');
  }
  else
  {
   error_susmfname = '';
   $('#error_susmfname').text(error_susmfname);
   $('#susmfname').removeClass('has-error');
  }
  //Mother Middle Name

  if($.trim($('#susmmname').val()).length == 0)
  {
   error_susmmname = 'Put N/A if none';
   $('#error_susmmname').text(error_susmmname);
   $('#susmmname').addClass('has-error');
  }
  else
  {
   error_susmmname = '';
   $('#error_susmmname').text(error_susmmname);
   $('#susmmname').removeClass('has-error');
  }
  //Mother Suffix
  if($.trim($('#susmnext').val()).length == 0)
  {
   error_susmnext = 'Select N/A if none';
   $('#error_susmnext').text(error_susmnext);
   $('#susmnext').addClass('has-error');
  }
  else
  {
   error_susmnext = '';
   $('#error_susmnext').text(error_susmnext);
   $('#susmnext').removeClass('has-error');
  }

  //DSWD Household
  if($.trim($('#susdswd').val()).length == 0)
  {
   error_susdswd = 'Put N/A if none';
   $('#error_susdswd').text(error_susdswd);
   $('#susdswd').addClass('has-error');
  }
  else
  {
   error_susdswd = '';
   $('#error_susdswd').text(error_susdswd);
   $('#susdswd').removeClass('has-error');
  }
// Household Capital Income
  if($.trim($('#sushci').val()).length == 0)
  {
   error_sushci = 'Capital Income is required';
   $('#error_sushci').text(error_sushci);
   $('#sushci').addClass('has-error');
  }
  else
  {
   error_sushci = '';
   $('#error_sushci').text(error_sushci);
   $('#sushci').removeClass('has-error');
  }

  // Specify Disability
  if($.trim($('#susdid').val()).length == 0)
  {
   error_susdid = 'Put N/A if none';
   $('#error_susdid').text(error_susdid);
   $('#susdid').addClass('has-error');
  }
  else
  {
   error_susdid = '';
   $('#error_susdid').text(error_susdid);
   $('#susdid').removeClass('has-error');
  }

  // Date Filed
  if($.trim($('#susdfilled').val()).length == 0)
  {
   error_susdfilled = 'Date Filed is required';
   $('#error_susdfilled').text(error_susdfilled);
   $('#susdfilled').addClass('has-error');
  }
  else
  {
   error_susdfilled = '';
   $('#error_susdfilled').text(error_susdfilled);
   $('#susdfilled').removeClass('has-error');
  }
  

  if( error_susflname != '' ||
  error_susffname != '' ||
  error_susfmname != '' ||
  error_susfnext != '' ||
  error_susmlname != '' ||
  error_susmfname != '' ||
  error_susmmname	 != '' ||
  error_susmnext != '' ||
  error_susdswd != '' ||
  error_susdid != '' ||
  error_sushci != '' ||
  error_susdfilled != '' 
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
  
  var error_susaemail = '';
  var error_susapass = '';
  
  if($.trim($('#susaemail').val()).length == 0)
  {
   error_susaemail = 'Account email is required';
   $('#error_susaemail').text(error_susaemail);
   $('#susaemail').addClass('has-error');
  }
  else
  {
   error_susaemail = '';
   $('#error_susaemail').text(error_susaemail);
   $('#susaemail').removeClass('has-error');
  }
  
  if($.trim($('#susapass').val()).length == 0)
  {
   error_susapass = 'Account password is required';
   $('#error_susapass').text(error_susapass);
   $('#susapass').addClass('has-error');
  }
  else
  {
   error_susapass = '';
   $('#error_susapass').text(error_susapass);
   $('#susapass').removeClass('has-error');
  }

  if(error_susapass != '' || 
     error_susapass != '')
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