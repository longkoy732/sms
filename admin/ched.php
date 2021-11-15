<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["firstname"]))
{
  $object->query = "
     INSERT INTO tbl_ched
     (firstname, middlename, lastname, suffix, dob, gender, civilstat, pob, address, zipcode, schoolname,schooladdress,  
     stype, grade, citizenship, mobile, email, disability, flastname, ffirstname, fmiddlename, fstatus, faddress, foccupation, feduc, mlastname, 
     mfirstname, mmiddlename, mstatus, maddress, moccupation, meduc, totalgross, sibling, schoolintend, schooladd, schooltype, course, coursestat, 
     snaemail,snapass, status, dateapply) 
     VALUES (:firstname, :middlename, :lastname, :suffix, :dob, :gender, :civilstat, :pob, :address, :zipcode, 
      :schoolname, :schooladdress,:stype, :grade, :citizenship, :mobile, :email, :disability, :flastname, :ffirstname, :fmiddlename, :fstatus, 
     :faddress, :foccupation, :feduc, :mlastname, :mfirstname, :mmiddlename, :mstatus, :maddress, :moccupation, :meduc, :totalgross, :sibling, :schoolintend, 
     :schooladd, :schooltype, :course, :coursestat, :snaemail, :snapass, 'Pending', '$object->now')
     ";
     
     $password_hash = password_hash($_POST["snapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':firstname'					      =>	$_POST["firstname"],
                    ':middlename'					      =>	$_POST["middlename"],
                    ':lastname'					      =>	$_POST["lastname"],
                    ':suffix'					      =>	$_POST["suffix"],
                    ':dob'					    =>	$_POST["dob"],
					          ':gender'				      =>	$_POST["gender"],
                    ':civilstat'					    =>	$_POST["civilstat"],
                    ':pob'					      =>	$_POST["pob"],
                    ':address'					    =>	$_POST["address"],
                    ':zipcode'					    =>	$_POST["zipcode"],
                    ':schoolname'					    =>	$_POST["schoolname"],
                    ':schooladdress'					      =>	$_POST["schooladdress"],
					          ':stype'				        =>	$_POST["stype"],
					          ':grade'				        =>	$_POST["grade"],
					          ':citizenship'			          =>	$_POST["citizenship"],
                    ':mobile'					      =>	$_POST["mobile"],
                    ':email'					    =>	$_POST["email"],
                    ':disability'					    =>	$_POST["disability"],
                    ':flastname'					      =>	$_POST["flastname"],
                    ':ffirstname'					    =>	$_POST["ffirstname"],
					          ':fmiddlename'				        =>	$_POST["fmiddlename"],
                    ':fstatus'					      =>	$_POST["fstatus"],
                    ':faddress'					      =>	$_POST["faddress"],
                    ':foccupation'					      =>	$_POST["foccupation"],
                    ':feduc'					    =>	$_POST["feduc"],
                    ':mlastname'					    =>	$_POST["mlastname"],
					          ':mfirstname'				        =>	$_POST["mfirstname"],
					          ':mmiddlename'				      =>	$_POST["mmiddlename"],
					          ':mstatus'				        =>	$_POST["mstatus"],
                    ':maddress'					      =>	$_POST["maddress"],
                    ':moccupation'					      =>	$_POST["moccupation"],
                    ':meduc'					      =>	$_POST["meduc"],
                    ':totalgross'					    =>	$_POST["totalgross"],
                    ':sibling'					    =>	$_POST["sibling"],
					          ':schoolintend'				        =>	$_POST["schoolintend"],
					          ':schooladd'			        =>	$_POST["schooladd"],
                    ':schooltype'				    =>	$_POST["schooltype"],
                    ':course'				      =>	$_POST["course"],
                    ':coursestat'				          =>	$_POST["coursestat"],
                    ':snaemail'				      =>	$_POST["snaemail"],
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
  <title>SMS | CHED</title>
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
   <h2 align="center">CHED STUDENT FINANCIAL ASSISTANCE PROGRAMS(StuFAPs)<br>Application Form</h2><br />
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
                    <input type="text" name="firstname" id="firstname" class="form-control" />
                    <span id="error_firstname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_middlename" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="lastname" id="lastname" class="form-control" />
                    <span id="error_lastname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="suffix" id="suffix" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_suffix" class="text-danger"></span>
                  </div>
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="dob" id="dob" class="form-control">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_dob" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="gender" id="gender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_gender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Civil Status<span class="text-danger">*</span></label>
                    <select name="civilstat" id="civilstat" class="form-control" required>
                      <option value="">Select Status</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                    </select>
                    <span id="error_civilstat" class="text-danger"></span>
                  </div>
                
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Place of birth<span class="text-danger">*</span></label>
                    <textarea type="text" name="pob" id="pob" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="pob" class="text-danger"></span>
                    <span id="error_pob" class="text-danger"></span>
                  </div>
                 
                
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-8">
                    <label>Permanent Mailing Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="address" id="address" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_address" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Zip Code<span class="text-danger">*</span></label>
                    <textarea type="text" name="zipcode" id="zipcode" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_zipcode" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>School Name<span class="text-danger">*</span></label>
                    <textarea type="text" name="schoolname" id="schoolname" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_schoolname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>School Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="schooladdress" id="schooladdress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_schooladdress" class="text-danger"></span>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-3">
                  <label>School Type<span class="text-danger">*</span></label>
                    <select name="stype" id="stype" class="form-control" required>
                      <option value="">Select Type</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                    </select>
                    <span id="error_stype" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Highest Grade/Year<span class="text-danger">*</span></label>
                    <input type="text" name="grade" id="grade" class="form-control" />
                    <span id="error_grade" class="text-danger"></span>
                    </div>

                
                 
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="citizenship" id="citizenship" class="form-control" />
                    <span id="error_citizenship" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Mobile Number<span class="text-danger">*</span></label>
                    <input type="text" name="mobile" id="mobile" class="form-control" />
                    <span id="error_mobile" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" id="email" class="form-control" />
                    <span id="error_email" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Type of Disability(if applicable)<span class="text-danger">*</span></label>
                    <input type="text" name="disability" id="disability" class="form-control" placeholder="Put N/A if none"/>
                    <span id="error_disability" class="text-danger"></span>
                  </div>
                 
              <!--  </div>
               </div>
              <div class="form-group">
                <div class="row"> -->
                 
                 
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
					      <h4 class="sub-title">Father's Details</h4>
                <div class="row" >
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="flastname" id="flastname" class="form-control" />
                    <span id="error_flastname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="ffirstname" id="ffirstname" class="form-control" />
                    <span id="error_ffirstname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="fmiddlename" id="fmiddlename" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_fmiddlename" class="text-danger"></span>
                  </div>
               
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Status<span class="text-danger">*</label>
                    <select name="fstatus" id="fstatus" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="Living">Living</option>
                      <option value="Deceased">Deceased</option>
                    </select>
                    <span id="error_fstatus" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="faddress" id="faddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="pob" class="text-danger"></span>
                    <span id="error_faddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <textarea type="text" name="foccupation" id="foccupation" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="pob" class="text-danger"></span>
                    <span id="error_foccupation" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Educational Attainment<span class="text-danger">*</span></label>
                    <textarea type="text" name="feduc" id="feduc" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_feduc" class="text-danger"></span>
                  </div>


               </div>

               <h4 class="sub-title">Mother's Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="mlastname" id="mlastname" class="form-control" />
                    <span id="error_mlastname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Given Name<span class="text-danger">*</span></label>
                    <input type="text" name="mfirstname" id="mfirstname" class="form-control" />
                    <span id="error_mfirstname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="mmiddlename" id="mmiddlename" placeholder ="Put N/A if none" class="form-control" placeholder="Put N/A if none" />
                    <span id="error_mmiddlename" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Status<span class="text-danger">*</label>
                    <select name="mstatus" id="mstatus" class="form-control" required>
                      <option value="">-Select-</option>
                      <option value="Living">Living</option>
                      <option value="Deceased">Deceased</option>
                    </select>
                    <span id="error_mstatus" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-8">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="maddress" id="maddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                   
                    <span id="error_maddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Occupation<span class="text-danger">*</span></label>
                    <textarea type="text" name="moccupation" id="moccupation" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_moccupation" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Educational Attainment<span class="text-danger">*</span></label>
                    <input type="text" name="meduc" id="meduc" class="form-control" />
                    <span id="error_meduc" class="text-danger"></span>
                    </div>

                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Total Parent Gross Income<span class="text-danger">*</span></label>
                    <input type="text" name="totalgross" id="totalgross" class="form-control" />
                    <span id="error_totalgross" class="text-danger"></span>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>No. of Siblings in the family<span class="text-danger">*</span></label>
                    <input type="text" name="sibling" id="sibling" class="form-control" />
                    <span id="error_sibling" class="text-danger"></span>
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

      <!-- Education Details -->
      <div class="tab-pane fade" id="education_details">
        <div class="panel panel-default">
          <div class="panel-heading" style="font-weight: bold; font-size: 16px;">Fill Education Details</div>
            <div class="panel-body">
              <div class="form-group">
					      <h4 class="sub-title">Education Details</h4>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>School intended to enroll in <span class="text-danger">*</span></label>
                    <textarea type="text" name="schoolintend" id="schoolintend" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_schoolintend" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>School Address <span class="text-danger">*</span></label>
                    <textarea type="text" name="schooladd" id="schooladd" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_schooladd" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Type of School<span class="text-danger">*</span></label>
                    <select name="schooltype" id="schooltype" class="form-control" required>
                      <option value="">Select Type</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                    </select>
                    <span id="error_schooltype" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Course<span class="text-danger">*</span></label>
                    <input type="text" name="course" id="course" class="form-control" />
                    <span id="error_course" class="text-danger"></span>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Course Priority/Not Priority<span class="text-danger">*</span></label>
                    <select name="coursestat" id="coursestat" class="form-control" required>
                      <option value="">Select </option>
                      <option value="Priority">Piority</option>
                      <option value="Not Priority">Not Priority</option>
                    </select>
                    <span id="error_coursestat" class="text-danger"></span>
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
                      <li class="list-group-item">1. Photocopy of Report Card</li>
                      <li class="list-group-item">2. Photocopy of Good Moral</li>
                      <li class="list-group-item">3. Original Barangay Indigency</li>
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
    var error_firstname = '';
  var error_middlename = '';
  var error_lastname= '';
  var error_suffix = '';
  var error_dob = '';
  var error_gender = '';
  var error_civilstat = '';
  var error_pob = '';
  var error_address = '';
  var error_zipcode = '';
  var error_schoolname = '';
  var error_schooladdress = '';
  var error_stype = '';
  var error_grade = '';
  var error_citizenship = '';
  var error_mobile = '';
  var error_email = '';
  var error_disability = '';
  var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
  var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  


 //Firstname

 if($.trim($('#firstname').val()).length == 0)
  {
   error_firstname = 'First Name is required';
   $('#error_firstname').text(error_firstname);
   $('#firstname').addClass('has-error');
  }
  else
  {
   error_firstname = '';
   $('#error_firstname').text(error_firstname);
   $('#firstname').removeClass('has-error');
  }

//Middlename

if($.trim($('#middlename').val()).length == 0)
  {
   error_middlename = 'Put N/A if None';
   $('#error_middlename').text(error_middlename);
   $('#middlename').addClass('has-error');
  }
  else
  {
   error_middlename = '';
   $('#error_middlename').text(error_middlename);
   $('#middlename').removeClass('has-error');
  }

  // Lastname
  
  if($.trim($('#lastname').val()).length == 0)
  {
   error_lastname = 'Last Name is required';
   $('#error_lastname').text(error_lastname);
   $('#lastname').addClass('has-error');
  }
  else
  {
   error_lastname = '';
   $('#error_lastname').text(error_lastname);
   $('#lastname').removeClass('has-error');
  }

   //Suffix

   if($.trim($('#suffix').val()).length == 0)
  {
   error_suffix = 'Put N/A if None';
   $('#error_suffix').text(error_suffix);
   $('#suffix').addClass('has-error');
  }
  else
  {
   error_suffix = '';
   $('#error_suffix').text(error_suffix);
   $('#suffix').removeClass('has-error');
  }

   //Date of Birth
   if($.trim($('#dob').val()).length == 0)
  {
   error_dob = 'Date of Birth is required';
   $('#error_dob').text(error_dob);
   $('#dob').addClass('has-error');
  }
  else
  {
   error_dob = '';
   $('#error_dob').text(error_dob);
   $('#dob').removeClass('has-error');
  }
  
  //Gender

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

  //Civil Status
  if($.trim($('#civilstat').val()).length == 0)
  {
   error_civilstat = 'Civil status is required';
   $('#error_civilstat').text(error_civilstat);
   $('#civilstat').addClass('has-error');
  }
  else
  {
   error_civilstat = '';
   $('#error_civilstat').text(error_civilstat);
   $('#civilstat').removeClass('has-error');
  }

  //Place of Birth

  if($.trim($('#pob').val()).length == 0)
  {
   error_pob = 'Place of birth is required';
   $('#error_pob').text(error_pob);
   $('#pob').addClass('has-error');
  }
  else
  {
   error_pob = '';
   $('#error_pob').text(error_pob);
   $('#pob').removeClass('has-error');
   }

//Address

  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Mail Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {

    error_address = '';
    $('#error_address').text(error_address);
    $('#address').removeClass('has-error');

  }
  //Zipcode

  if($.trim($('#zipcode').val()).length == 0)
  {
   error_zipcode = 'Zip Code is required';
   $('#error_zipcode').text(error_zipcode);
   $('#zipcode').addClass('has-error');
  }
  else
  {
   error_zipcode = '';
   $('#error_zipcode').text(error_zipcode);
   $('#zipcode').removeClass('has-error');
  }

  //School Name
  if($.trim($('#schoolname').val()).length == 0)
  {
   error_schoolname = 'School Name is required';
   $('#error_schoolname').text(error_schoolname);
   $('#schoolname').addClass('has-error');
  }
  else
  {
   error_schoolname = '';
   $('#error_schoolname').text(error_schoolname);
   $('#schoolname').removeClass('has-error');
  }

  //School Address
  if($.trim($('#schooladdress').val()).length == 0)
  {
   error_schooladdress = 'School Address is required';
   $('#error_schooladdress').text(error_schooladdress);
   $('#schooladdress').addClass('has-error');
  }
  else
  {
   error_schooladdress = '';
   $('#error_schooladdress').text(error_schooladdress);
   $('#schooladdress').removeClass('has-error');
  }

  //School Type
 if($.trim($('#stype').val()).length == 0)
  {
   error_stype = 'School Type is required';
   $('#error_stype').text(error_stype);
   $('#stype').addClass('has-error');
  }
  else
  {
   error_stype = '';
   $('#error_stype').text(error_stype);
   $('#stype').removeClass('has-error');
  }
  //Grade or Year

  if($.trim($('#grade').val()).length == 0)
  {
   error_grade = 'Grade/Year is required';
   $('#error_grade').text(error_grade);
   $('#grade').addClass('has-error');
  }
  else
  {
   error_grade = '';
   $('#error_grade').text(error_grade);
   $('#grade').removeClass('has-error');
  }
  //Citizenship
  if($.trim($('#citizenship').val()).length == 0)
  {
   error_citizenship= 'Citizenship is required';
   $('#error_citizenship').text(error_citizenship);
   $('#citizenship').addClass('has-error');
  }
  else
  {
   error_citizenship= '';
   $('#error_citizenship').text(error_citizenship);
   $('#citizenship').removeClass('has-error');
  }
  //Mobile Number

  if($.trim($('#mobile').val()).length == 0)
  {
   error_mobile = 'Mobile Number is required';
   $('#error_mobile').text(error_mobile);
   $('#mobile').addClass('has-error');
  }
  else
  {
   error_mobile = '';
   $('#error_mobile').text(error_mobile);
   $('#mobile').removeClass('has-error');
  }
  //Email
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   error_email = '';
   $('#error_email').text(error_email);
   $('#email').removeClass('has-error');
  }
  //Specify Disability

  if($.trim($('#disability').val()).length == 0)
  {
   error_disability = 'Put N/A if None';
   $('#error_disability').text(error_disability);
   $('#disability').addClass('has-error');
  }
  else
  {
   error_disability= '';
   $('#error_disability').text(error_disability);
   $('#disability').removeClass('has-error');
  }

  if(error_firstname != '' || error_middlename != '' 
  || error_lastname != '' || error_suffix != '' 
  || error_dob != '' || error_gender != '' 
  || error_civilstat != '' || error_pob != '' 
  || error_address != '' || error_zipcode != '' 
  || error_schoolname != '' || error_schooladdress != '' 
  || error_stype != '' || error_grade != '' 
  || error_citizenship != '' || error_mobile != '' 
  || error_email != '' || error_disability != '' 
  

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
  var error_flastname = '';
  var error_ffirstname = '';
  var error_fmiddlename= '';
  var error_fstatus = '';
  var error_faddress = '';
  var error_foccupation = '';
  var error_feduc = '';
  var error_mlastname = '';
  var error_mfirstname = '';
  var error_mmiddlename = '';
  var error_mstatus = '';
  var error_maddress = '';
  var error_moccupation = '';
  var error_meduc = '';
  var error_totalgross = '';
  var error_sibling = '';
 
// Father's Last Name
  if($.trim($('#flastname ').val()).length == 0)
  {
   error_flastname = 'Last Name is required';
   $('#error_flastname').text(error_flastname);
   $('#flastname').addClass('has-error');
  }
  else
  {
   error_flastname = '';
   $('#error_flastname').text(error_flastname);
   $('#flastname').removeClass('has-error');
  }

  //Father's First Name
  if($.trim($('#ffirstname').val()).length == 0)
  {
   error_ffirstname = 'First Name is required';
   $('#error_ffirstname').text(error_ffirstname);
   $('#ffirstname').addClass('has-error');
  }
  else
  {
   error_ffirstname = '';
   $('#error_ffirstname').text(error_ffirstname);
   $('#ffirstname').removeClass('has-error');
  }

  //Father's Middle Name

  if($.trim($('#fmiddlename').val()).length == 0)
  {
   error_fmiddlename = 'Put N/A if none';
   $('#error_fmiddlename').text(error_fmiddlename);
   $('#fmiddlename').addClass('has-error');
  }
  else
  {
   error_fmiddlename= '';
   $('#error_fmiddlename').text(error_fmiddlename);
   $('#fmiddlename').removeClass('has-error');
  }

  //Father Status

  if($.trim($('#fstatus').val()).length == 0)
  {
   error_fstatus = 'Status is required';
   $('#error_fstatus').text(error_fstatus);
   $('#fstatus').addClass('has-error');
  }
  else
  {
   error_fstatus = '';
   $('#error_fstatus').text(error_fstatus);
   $('#fstatus').removeClass('has-error');
  }

  //Father Address

  if($.trim($('#faddress').val()).length == 0)
  {
   error_faddress = 'Address is required';
   $('#error_faddress').text(error_faddress);
   $('#faddress').addClass('has-error');
  }
  else
  {
   error_faddress = '';
   $('#error_faddress').text(error_faddress);
   $('#faddress').removeClass('has-error');
  }

  //Occupation

  if($.trim($('#foccupation').val()).length == 0)
  {
   error_foccupation= 'Put N/A if none';
   $('#error_foccupation').text(error_foccupation);
   $('#foccupation').addClass('has-error');
  }
  else
  {
   error_foccupation = '';
   $('#error_foccupation').text(error_foccupation);
   $('#foccupation').removeClass('has-error');
  }

//Educational Attainment

  if($.trim($('#feduc').val()).length == 0)
  {
   error_feduc = 'Educational Attainment is required';
   $('#error_feduc').text(error_feduc);
   $('#feduc').addClass('has-error');
  }
  else
  {
   error_feduc = '';
   $('#error_feduc').text(error_feduc);
   $('#feduc').removeClass('has-error');
  }



  // Mothers's Last Name
  if($.trim($('#mlastname').val()).length == 0)
  {
   error_mlastname = 'Last Name is required';
   $('#error_mlastname').text(error_mlastname);
   $('#mlastname').addClass('has-error');
  }
  else
  {
   error_mlastname = '';
   $('#error_mlastname').text(error_mlastname);
   $('#mlastname').removeClass('has-error');
  }

  //Mother's First Name
  if($.trim($('#mfirstname').val()).length == 0)
  {
   error_mfirstname = 'First Name is required';
   $('#error_mfirstname').text(error_mfirstname);
   $('#mfirstname').addClass('has-error');
  }
  else
  {
   error_mfirstname = '';
   $('#error_mfirstname').text(error_mfirstname);
   $('#mfirstname').removeClass('has-error');
  }

  //Mother's Middle Name

  if($.trim($('#mmiddlename').val()).length == 0)
  {
   error_mmiddlename = 'Put N/A if none';
   $('#error_mmiddlename').text(error_mmiddlename);
   $('#mmiddlename').addClass('has-error');
  }
  else
  {
   error_mmiddlename= '';
   $('#error_mmiddlename').text(error_mmiddlename);
   $('#mmiddlename').removeClass('has-error');
  }

  //Mother Status

  if($.trim($('#mstatus').val()).length == 0)
  {
   error_mstatus = 'Status is required';
   $('#error_mstatus').text(error_mstatus);
   $('#mstatus').addClass('has-error');
  }
  else
  {
   error_mstatus = '';
   $('#error_mstatus').text(error_mstatus);
   $('#mstatus').removeClass('has-error');
  }

  //Father Address

  if($.trim($('#maddress').val()).length == 0)
  {
   error_maddress= 'Address is required';
   $('#error_maddress').text(error_maddress);
   $('#maddress').addClass('has-error');
  }
  else
  {
   error_maddress = '';
   $('#error_maddress').text(error_maddress);
   $('#maddress').removeClass('has-error');
  }

  //Occupation

  if($.trim($('#moccupation').val()).length == 0)
  {
   error_moccupation= 'Put N/A if none';
   $('#error_moccupation').text(error_moccupation);
   $('#moccupation').addClass('has-error');
  }
  else
  {
   error_moccupation = '';
   $('#error_moccupation').text(error_moccupation);
   $('#moccupation').removeClass('has-error');
  }

//Educational Attainment

  if($.trim($('#meduc').val()).length == 0)
  {
   error_meduc = 'Educational Attainment is required';
   $('#error_meduc').text(error_meduc);
   $('#meduc').addClass('has-error');
  }
  else
  {
   error_meduc= '';
   $('#error_meduc').text(error_meduc);
   $('#meduc').removeClass('has-error');
  }


  //Total Gross Income

  if($.trim($('#totalgross').val()).length == 0)
  {
   error_totalgross = 'Total Gross income is required';
   $('#error_totalgross').text(error_totalgross);
   $('#totalgross').addClass('has-error');
  }
  else
  {
   error_totalgross = '';
   $('#error_totalgross').text(error_totalgross);
   $('#totalgross').removeClass('has-error');
  }

  //Total Siblings in the Family

  if($.trim($('#sibling').val()).length == 0)
  {
   error_sibling = 'Total Sibling is required';
   $('#error_sibling').text(error_sibling);
   $('#sibling').addClass('has-error');
  }
  else
  {
   error_sibling= '';
   $('#error_sibling').text(error_sibling);
   $('#sibling').removeClass('has-error');
  }







  if( error_flastname != '' ||
  error_ffirstname != '' ||
  error_fmiddlename != '' ||
  error_fstatus != '' ||
  error_faddress != '' ||
  error_foccupation != '' ||
  error_feduc != '' ||
  error_mlastname != '' ||
  error_mfirstname != '' ||
  error_mmiddlename != '' ||
  error_mstatus != '' ||
  error_maddress != '' ||
  error_moccupation != '' ||
  error_meduc != '' ||
  error_totalgross != '' ||
  error_sibling != '' )
  {
   return false;
  }
  else
  {
    $('#list_family_details').removeClass('active active_tab1');
    $('#list_family_details').removeAttr('href data-toggle');
    $('#family_details').removeClass('active');
    $('#list_family_details').addClass('inactive_tab1');
    $('#list_education_details').removeClass('inactive_tab1');
    $('#list_education_details').addClass('active_tab1 active');
    $('#list_education_details').attr('href', '#application_details');
    $('#list_education_details').attr('data-toggle', 'tab');
    $('#education_details').addClass('active in');   
  }
 });

 $('#previous_btn_application').click(function(){
  $('#list_education_details').removeClass('active active_tab1');
  $('#list_education_details').removeAttr('href data-toggle');
  $('#education_details').removeClass('active in');
  $('#list_education_details').addClass('inactive_tab1');
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
  $('#list_family_details').removeClass('inactive_tab1');
  $('#list_family_details').addClass('active_tab1 active');
  $('#list_family_details').attr('href', '#application_details');
  $('#list_family_details').attr('data-toggle', 'tab');
  $('#family_details').addClass('active in');
 });

 $('#btn_education').click(function(){
  
  var error_schoolintend = '';
  var error_schooladd = '' ;
  var error_schooltype = '';
  var error_course= '';
  var error_coursestat= '';

  
  if($.trim($('#schoolintend').val()).length == 0)
  {
   error_schoolintend = 'School intended to enroll is required';
   $('#error_schoolintend').text(error_schoolintend );
   $('#schoolintend').addClass('has-error');
  }
  else
  {
   error_schoolintend = '';
   $('#error_schoolintend').text(error_schoolintend);
   $('#schoolintend').removeClass('has-error');
  }

  if($.trim($('#schooladd').val()).length == 0)
  {
   error_schooladd = 'School Address is required';
   $('#error_schooladd').text(error_schooladd );
   $('#schooladd').addClass('has-error');
  }
  else
  {
   error_schooladd = '';
   $('#error_schooladd').text(error_schooladd);
   $('#schooladd').removeClass('has-error');
  }

  if($.trim($('#schooltype').val()).length == 0)
  {
   error_schooltype = 'School Type is required';
   $('#error_schooltype').text(error_schooltype);
   $('#schooltype').addClass('has-error');
  }
  else
  {
   error_schooltype = '';
   $('#error_schooltype').text(error_schooltype);
   $('#schooltype').removeClass('has-error');
  }

  if($.trim($('#course').val()).length == 0)
  {
   error_course = 'Course is required';
   $('#error_course').text(error_course);
   $('#course').addClass('has-error');
  }
  else
  {
   error_course = '';
   $('#error_course').text(error_course);
   $('#course').removeClass('has-error');
  }

  if($.trim($('#coursestat').val()).length == 0)
  {
   error_coursestat = 'Course Status required';
   $('#error_coursestat').text(error_coursestat);
   $('#coursestat').addClass('has-error');
  }
  else
  {
   error_coursestat = '';
   $('#error_coursestat').text(error_coursestat);
   $('#coursestat').removeClass('has-error');
  }

  if(error_schoolintend != '' || 
     error_schooladd != '' ||
     error_schooltype != '' ||
     error_course != '' ||
     error_coursestat != '' 
    )
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