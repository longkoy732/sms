<?php 

include('../class/dbcon.php');
$object = new sms;

$message = '';
if(isset($_POST["scfname"]))
{
  $object->query = "
     INSERT INTO tbl_ched
     (scfname, scmname, sclname, scnext, scdbirth, scgender, sccivilstat, scpbirth, scaddress, sczcode, scschname, scsaddress,  
     scstype, schygrade, scctship, scmnum, scpemail, scdisability, scflname, scffname, scfmname, scfnext, scfstatus, scfaddress, scfoccu, 
     scfeduc, scmlname, scmfname, scmnext, scmmname, scmstatus, scmaddress, scmoccu, scmeduc, scptgross, scnsibling, scsintend, scsadd, 
     scschooltype, sccourse, sccoursestat, scdrprcstat, scdrbrgyinstat, scdrpgmstat, scschtype, scaemail, scapass, scgrantstat, 
     scschstat, scdapply) 
     VALUES (:scfname, :scmname, :sclname, :scnext, :scdbirth, :scgender, :sccivilstat, :scpbirth, :scaddress, :sczcode, 
      :scschname, :scsaddress, :scstype, :schygrade, :scctship, :scmnum, :scpemail, :scdisability, :scflname, :scffname, :scfmname, 
      :scfnext, :scfstatus, :scfaddress, :scfoccu, :scfeduc, :scmlname, :scmfname, :scmmname, :scmnext, :scmstatus, :scmaddress, :scmoccu, :scmeduc, 
      :scptgross, :scnsibling, :scsintend, :scsadd, :scschooltype, :sccourse, :sccoursestat, 'Not-Received', 'Not-Received', 
      'Not-Received', 'CHED', :scaemail, :scapass, 'New', 'Pending', '$object->now')
     ";
     
     $password_hash = password_hash($_POST["scapass"], PASSWORD_DEFAULT);
 $data = array(
                    ':scfname'					      =>	$_POST["scfname"],
                    ':scmname'					      =>	$_POST["scmname"],
                    ':sclname'					      =>	$_POST["sclname"],
                    ':scnext'					        =>	$_POST["scnext"],
                    ':scdbirth'					      =>	$_POST["scdbirth"],
					          ':scgender'				        =>	$_POST["scgender"],
                    ':sccivilstat'					  =>	$_POST["sccivilstat"],
                    ':scpbirth'					      =>	$_POST["scpbirth"],
                    ':scaddress'					    =>	$_POST["scaddress"],
                    ':sczcode'					      =>	$_POST["sczcode"],
                    ':scschname'					    =>	$_POST["scschname"],
                    ':scsaddress'					    =>	$_POST["scsaddress"],
					          ':scstype'				        =>	$_POST["scstype"],
					          ':schygrade'				      =>	$_POST["schygrade"],
					          ':scctship'			          =>	$_POST["scctship"],
                    ':scmnum'					        =>	$_POST["scmnum"],
                    ':scpemail'					      =>	$_POST["scpemail"],
                    ':scdisability'					  =>	$_POST["scdisability"],
                    ':scflname'					      =>	$_POST["scflname"],
                    ':scffname'					      =>	$_POST["scffname"],
					          ':scfmname'				        =>	$_POST["scfmname"],
                    ':scfnext'					      =>	$_POST["scfnext"],
                    ':scfstatus'					    =>	$_POST["scfstatus"],
                    ':scfaddress'					    =>	$_POST["scfaddress"],
                    ':scfoccu'					      =>	$_POST["scfoccu"],
                    ':scfeduc'					      =>	$_POST["scfeduc"],
                    ':scmlname'					      =>	$_POST["scmlname"],
					          ':scmfname'				        =>	$_POST["scmfname"],
					          ':scmmname'				        =>	$_POST["scmmname"],
                    ':scmnext'					      =>	$_POST["scmnext"],
					          ':scmstatus'				      =>	$_POST["scmstatus"],
                    ':scmaddress'					    =>	$_POST["scmaddress"],
                    ':scmoccu'					      =>	$_POST["scmoccu"],
                    ':scmeduc'					      =>	$_POST["scmeduc"],
                    ':scptgross'					    =>	$_POST["scptgross"],
                    ':scnsibling'					    =>	$_POST["scnsibling"],
					          ':scsintend'				      =>	$_POST["scsintend"],
					          ':scsadd'			            =>	$_POST["scsadd"],
                    ':scschooltype'				    =>	$_POST["scschooltype"],
                    ':sccourse'				        =>	$_POST["sccourse"],
                    ':sccoursestat'				    =>	$_POST["sccoursestat"],
                    ':scaemail'				        =>	$_POST["scaemail"],
		                ':scapass'				        =>  $password_hash
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
<!-- Nav -->
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
                    <input type="text" name="scfname" id="scfname" class="form-control" />
                    <span id="error_scfname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Middle Name<span class="text-danger">*</span></label>
                    <input type="text" name="scmname" id="scmname" class="form-control" />
                    <span id="error_scmname" class="text-danger"></span>
                    </div>
							    <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="sclname" id="sclname" class="form-control" />
                    <span id="error_sclname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Select Suffix</label>
                    <select name="scnext" id="scnext" class="form-control" required>
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_scnext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="scdbirth" id="scdbirth" class="form-control">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <span id="error_scdbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="scgender" id="scgender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_scgender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Civil Status<span class="text-danger">*</span></label>
                    <select name="sccivilstat" id="sccivilstat" class="form-control" required>
                      <option value="">Select Status</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                    </select>
                    <span id="error_sccivilstat" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Place of birth<span class="text-danger">*</span></label>
                    <textarea type="text" name="scpbirth" id="scpbirth" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scpbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-8">
                    <label>Permanent Mailing Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="scaddress" id="scaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Zip Code<span class="text-danger">*</span></label>
                    <textarea type="text" name="sczcode" id="sczcode" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_sczcode" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>School Name<span class="text-danger">*</span></label>
                    <textarea type="text" name="scschname" id="scschname" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scschname" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>School Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="scsaddress" id="scsaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scsaddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                  <label>School Type<span class="text-danger">*</span></label>
                    <select name="scstype" id="scstype" class="form-control" required>
                      <option value="">Select Type</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                    </select>
                    <span id="error_scstype" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Highest Grade/Year<span class="text-danger">*</span></label>
                    <input type="text" name="schygrade" id="schygrade" class="form-control" required/>
                    <span id="error_schygrade" class="text-danger"></span>
                    </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="scctship" id="scctship" class="form-control" required/>
                    <span id="error_scctship" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <label>Mobile Number<span class="text-danger">*</span></label>
                    <input type="text" name="scmnum" id="scmnum" class="form-control" required/>
                    <span id="error_scmnum" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Email<span class="text-danger">*</span></label>
                    <input type="text" name="scpemail" id="scpemail" class="form-control" required/>
                    <span id="error_scpemail" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <label>Type of Disability(if applicable)<span class="text-danger">*</span></label>
                    <input type="text" name="scdisability" id="scdisability" class="form-control" />
                    <span id="error_scdisability" class="text-danger"></span>
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
                  <h4 class="sub-title">Father's Details</h4>
                  <div class="row" >
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Last Name<span class="text-danger">*</span></label>
                        <input type="text" name="scflname" id="scflname" class="form-control" required/>
                        <span id="error_scflname" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>First Name<span class="text-danger">*</span></label>
                        <input type="text" name="scffname" id="scffname" class="form-control" required/>
                        <span id="error_scffname" class="text-danger"></span>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Middle Name<span class="text-danger">*</span></label>
                        <input type="text" name="scfmname" id="scfmname" class="form-control" required/>
                        <span id="error_scfmname" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Select Suffix<span class="text-danger">*</span></label>
                        <select name="scfnext" id="scfnext" class="form-control" required>
                        <option value="">-Select-</option>
                        <option value="N/A">N/A</option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        </select>
                        <span id="error_scfnext" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Status<span class="text-danger">*</label>
                        <select name="scfstatus" id="scfstatus" class="form-control" required>
                        <option value="">-Select-</option>
                        <option value="Living">Living</option>
                        <option value="Deceased">Deceased</option>
                        </select>
                        <span id="error_scfstatus" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Occupation<span class="text-danger">*</span></label>
                        <input type="text" name="scfoccu" id="scfoccu" class="form-control" required/>
                        <span id="error_scfoccu" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Educational Attainment<span class="text-danger">*</span></label>
                        <input type="text" name="scfeduc" id="scfeduc" class="form-control" required/>
                        <span id="error_scfeduc" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Address<span class="text-danger">*</span></label>
                        <textarea type="text" name="scfaddress" id="scfaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                        <span id="pob" class="text-danger"></span>
                        <span id="error_scfaddress" class="text-danger"></span>
                    </div>
                </div>
                <h4 class="sub-title">Mother's Details</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Last Name<span class="text-danger">*</span></label>
                        <input type="text" name="scmlname" id="scmlname" class="form-control" required/>
                        <span id="error_scmlname" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>First Name<span class="text-danger">*</span></label>
                        <input type="text" name="scmfname" id="scmfname" class="form-control" required/>
                        <span id="error_scmfname" class="text-danger"></span>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Middle Name<span class="text-danger">*</span></label>
                        <input type="text" name="scmmname" id="scmmname" class="form-control" required/>
                        <span id="error_scmmname" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <label>Select Suffix<span class="text-danger">*</span></label>
                        <select name="scmnext" id="scmnext" class="form-control" required>
                        <option value="">-Select-</option>
                        <option value="N/A">N/A</option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        </select>
                        <span id="error_scmnext" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Status<span class="text-danger">*</label>
                        <select name="scmstatus" id="scmstatus" class="form-control" required>
                        <option value="">-Select-</option>
                        <option value="Living">Living</option>
                        <option value="Deceased">Deceased</option>
                        </select>
                        <span id="error_scmstatus" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Occupation<span class="text-danger">*</span></label>
                        <input type="text" name="scmoccu" id="scmoccu" class="form-control" required/>
                        <span id="error_scmoccu" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Educational Attainment<span class="text-danger">*</span></label>
                        <input type="text" name="scmeduc" id="scmeduc" class="form-control" required/>
                        <span id="error_scmeduc" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Address<span class="text-danger">*</span></label>
                        <textarea type="text" name="scmaddress" id="scmaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                        <span id="error_scmaddress" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <label>Total Parent Gross Income<span class="text-danger">*</span></label>
                        <input type="text" name="scptgross" id="scptgross" class="form-control" required/>
                        <span id="error_scptgross" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                        <label>No. of Siblings in the family<span class="text-danger">*</span></label>
                        <input type="text" name="scnsibling" id="scnsibling" class="form-control" required/>
                        <span id="error_scnsibling" class="text-danger"></span>
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
                    <textarea type="text" name="scsintend" id="scsintend" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scsintend" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>School Address <span class="text-danger">*</span></label>
                    <textarea type="text" name="scsadd" id="scsadd" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_scsadd" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Type of School<span class="text-danger">*</span></label>
                    <select name="scschooltype" id="scschooltype" class="form-control" required>
                      <option value="">Select Type</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                    </select>
                    <span id="error_scschooltype" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Course<span class="text-danger">*</span></label>
                    <input type="text" name="sccourse" id="sccourse" class="form-control" />
                    <span id="error_sccourse" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                  <label>Course Priority/Not Priority<span class="text-danger">*</span></label>
                    <select name="sccoursestat" id="sccoursestat" class="form-control" required>
                      <option value="">Select </option>
                      <option value="Priority">Piority</option>
                      <option value="Not Priority">Not Priority</option>
                    </select>
                    <span id="error_sccoursestat" class="text-danger"></span>
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
                  <input type="text" name="scaemail" id="scaemail" class="form-control" />
                  <span id="error_scaemail" class="text-danger"></span>
                  </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="scapass" id="scapass" class="form-control" />
                  <span id="error_scapass" class="text-danger"></span>
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
<!-- script -->
  <script>
// Student Details
 $(document).ready(function(){
 
 $('#btn_personal_details').click(function(){
  var error_scfname = '';
  var error_scmname = '';
  var error_sclname= '';
  var error_scnext = '';
  var error_scdbirth = '';
  var error_scgender = '';
  var error_sccivilstat = '';
  var error_scpbirth = '';
  var error_scaddress = '';
  var error_sczcode = '';
  var error_scschname = '';
  var error_scsaddress = '';
  var error_scstype = '';
  var error_schygrade = '';
  var error_scctship = '';
  var error_scmnum = '';
  var error_scpemail = '';
  var error_scdisability = '';
  var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
  var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  


 //Firstname

 if($.trim($('#scfname').val()).length == 0)
  {
   error_scfname = 'First Name is required';
   $('#error_scfname').text(error_scfname);
   $('#scfname').addClass('has-error');
  }
  else
  {
   error_scfname = '';
   $('#error_scfname').text(error_scfname);
   $('#scfname').removeClass('has-error');
  }

  //Middlename

if($.trim($('#scmname').val()).length == 0)
  {
   error_scmname = 'Put N/A if None';
   $('#error_scmname').text(error_scmname);
   $('#scmname').addClass('has-error');
  }
  else
  {
   error_scmname = '';
   $('#error_scmname').text(error_scmname);
   $('#scmname').removeClass('has-error');
  }

  // Lastname
  
  if($.trim($('#sclname').val()).length == 0)
  {
   error_sclname = 'Last Name is required';
   $('#error_sclname').text(error_sclname);
   $('#sclname').addClass('has-error');
  }
  else
  {
   error_sclname = '';
   $('#error_sclname').text(error_sclname);
   $('#sclname').removeClass('has-error');
  }

   //Suffix

   if($.trim($('#scnext').val()).length == 0)
  {
   error_scnext = 'Select N/A if None';
   $('#error_scnext').text(error_scnext);
   $('#scnext').addClass('has-error');
  }
  else
  {
   error_scnext = '';
   $('#error_scnext').text(error_scnext);
   $('#scnext').removeClass('has-error');
  }

   //Date of Birth
   if($.trim($('#scdbirth').val()).length == 0)
  {
   error_scdbirth = 'Date of Birth is required';
   $('#error_scdbirth').text(error_scdbirth);
   $('#scdbirth').addClass('has-error');
  }
  else
  {
   error_scdbirth = '';
   $('#error_scdbirth').text(error_scdbirth);
   $('#scdbirth').removeClass('has-error');
  }
  
  //Gender

  if($.trim($('#scgender').val()).length == 0)
  {
   error_scgender = 'Gender is required';
   $('#error_scgender').text(error_scgender);
   $('#scgender').addClass('has-error');
  }
  else
  {
   error_scgender = '';
   $('#error_scgender').text(error_scgender);
   $('#scgender').removeClass('has-error');
  }

  //Civil Status
  if($.trim($('#sccivilstat').val()).length == 0)
  {
   error_sccivilstat = 'Civil status is required';
   $('#error_sccivilstat').text(error_sccivilstat);
   $('#sccivilstat').addClass('has-error');
  }
  else
  {
   error_sccivilstat = '';
   $('#error_sccivilstat').text(error_sccivilstat);
   $('#sccivilstat').removeClass('has-error');
  }

  //Place of Birth

  if($.trim($('#scpbirth').val()).length == 0)
  {
   error_scpbirth = 'Place of birth is required';
   $('#error_scpbirth').text(error_scpbirth);
   $('#scpbirth').addClass('has-error');
  }
  else
  {
   error_scpbirth = '';
   $('#error_scpbirth').text(error_scpbirth);
   $('#scpbirth').removeClass('has-error');
   }

//Address

  if($.trim($('#scaddress').val()).length == 0)
  {
   error_scaddress = 'Mail Address is required';
   $('#error_scaddress').text(error_scaddress);
   $('#scaddress').addClass('has-error');
  }
  else
  {

    error_scaddress = '';
    $('#error_scaddress').text(error_scaddress);
    $('#scaddress').removeClass('has-error');

  }
  //Zipcode

  if($.trim($('#sczcode').val()).length == 0)
  {
   error_sczcode = 'Zip Code is required';
   $('#error_sczcode').text(error_sczcode);
   $('#sczcode').addClass('has-error');
  }
  else
  {
   error_sczcode = '';
   $('#error_sczcode').text(error_sczcode);
   $('#sczcode').removeClass('has-error');
  }

  //School Name
  if($.trim($('#scschname').val()).length == 0)
  {
   error_scschname = 'School Name is required';
   $('#error_scschname').text(error_scschname);
   $('#scschname').addClass('has-error');
  }
  else
  {
   error_scschname = '';
   $('#error_scschname').text(error_scschname);
   $('#scschname').removeClass('has-error');
  }

  //School Address
  if($.trim($('#scsaddress').val()).length == 0)
  {
   error_scsaddress = 'School Address is required';
   $('#error_scsaddress').text(error_scsaddress);
   $('#scsaddress').addClass('has-error');
  }
  else
  {
   error_scsaddress = '';
   $('#error_scsaddress').text(error_scsaddress);
   $('#scsaddress').removeClass('has-error');
  }

  //School Type
 if($.trim($('#scstype').val()).length == 0)
  {
   error_scstype = 'School Type is required';
   $('#error_scstype').text(error_scstype);
   $('#scstype').addClass('has-error');
  }
  else
  {
   error_scstype = '';
   $('#error_scstype').text(error_scstype);
   $('#scstype').removeClass('has-error');
  }
  //Grade or Year

  if($.trim($('#schygrade').val()).length == 0)
  {
   error_schygrade = 'Grade/Year is required';
   $('#error_schygrade').text(error_schygrade);
   $('#schygrade').addClass('has-error');
  }
  else
  {
   error_schygrade = '';
   $('#error_schygrade').text(error_schygrade);
   $('#schygrade').removeClass('has-error');
  }
  //Citizenship
  if($.trim($('#scctship').val()).length == 0)
  {
   error_scctship= 'Citizenship is required';
   $('#error_scctship').text(error_scctship);
   $('#scctship').addClass('has-error');
  }
  else
  {
   error_scctship= '';
   $('#error_scctship').text(error_scctship);
   $('#scctship').removeClass('has-error');
  }
  //Mobile Number

  if($.trim($('#scmnum').val()).length == 0)
  {
   error_scmnum = 'Mobile Number is required';
   $('#error_scmnum').text(error_scmnum);
   $('#scmnum').addClass('has-error');
  }
  else
  {
   error_scmnum = '';
   $('#error_scmnum').text(error_scmnum);
   $('#scmnum').removeClass('has-error');
  }
  //Email
  if($.trim($('#scpemail').val()).length == 0)
  {
   error_scpemail = 'Email is required';
   $('#error_scpemail').text(error_scpemail);
   $('#scpemail').addClass('has-error');
  }
  else
  {
   error_scpemail = '';
   $('#error_scpemail').text(error_scpemail);
   $('#scpemail').removeClass('has-error');
  }
  //Specify Disability

  if($.trim($('#scdisability').val()).length == 0)
  {
   error_scdisability = 'Put N/A if None';
   $('#error_scdisability').text(error_scdisability);
   $('#scdisability').addClass('has-error');
  }
  else
  {
   error_scdisability= '';
   $('#error_scdisability').text(error_scdisability);
   $('#scdisability').removeClass('has-error');
  }

  if(error_scfname != '' || error_scmname != '' 
  || error_sclname != '' || error_scnext != '' 
  || error_scdbirth != '' || error_scgender != '' 
  || error_sccivilstat != '' || error_scpbirth != '' 
  || error_scaddress != '' || error_sczcode != '' 
  || error_scschname != '' || error_scsaddress != '' 
  || error_scstype != '' || error_schygrade != '' 
  || error_scctship != '' || error_scmnum != '' 
  || error_scpemail != '' || error_scdisability != '' 
  

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
  var error_scflname = '';
  var error_scffname = '';
  var error_scfmname = '';
  var error_scfnext = '';
  var error_scfstatus = '';
  var error_scfaddress = '';
  var error_scfoccu = '';
  var error_scfeduc = '';
  var error_scmlname = '';
  var error_scmfname = '';
  var error_scmmname = '';
  var error_scmnext = '';
  var error_scmstatus = '';
  var error_scmaddress = '';
  var error_scmoccu = '';
  var error_scmeduc = '';
  var error_scptgross = '';
  var error_scnsibling = '';
 
// Father's Last Name
  if($.trim($('#scflname ').val()).length == 0)
  {
   error_scflname = 'Last Name is required';
   $('#error_scflname').text(error_scflname);
   $('#scflname').addClass('has-error');
  }
  else
  {
   error_scflname = '';
   $('#error_scflname').text(error_scflname);
   $('#scflname').removeClass('has-error');
  }

  //Father's First Name
  if($.trim($('#scffname').val()).length == 0)
  {
   error_scffname = 'First Name is required';
   $('#error_scffname').text(error_scffname);
   $('#scffname').addClass('has-error');
  }
  else
  {
   error_scffname = '';
   $('#error_scffname').text(error_scffname);
   $('#scffname').removeClass('has-error');
  }

  //Father's Middle Name

  if($.trim($('#scfnext').val()).length == 0)
  {
   error_scfmname = 'Put N/A if none';
   $('#error_scfmname').text(error_scfmname);
   $('#scfmname').addClass('has-error');
  }
  else
  {
   error_scfmname= '';
   $('#error_scfmname').text(error_scfmname);
   $('#scfmname').removeClass('has-error');
  }

  // Father Suffix
  if($.trim($('#scfnext').val()).length == 0)
  {
   error_scfnext = 'Put N/A if none';
   $('#error_scfnext').text(error_scfnext);
   $('#scfnext').addClass('has-error');
  }
  else
  {
   error_scfnext = '';
   $('#error_scfnext').text(error_scfnext);
   $('#scfnext').removeClass('has-error');
  }

  //Father Status

  if($.trim($('#scfstatus').val()).length == 0)
  {
   error_scfstatus = 'Status is required';
   $('#error_scfstatus').text(error_scfstatus);
   $('#scfstatus').addClass('has-error');
  }
  else
  {
   error_scfstatus = '';
   $('#error_scfstatus').text(error_scfstatus);
   $('#scfstatus').removeClass('has-error');
  }

  //Father Address

  if($.trim($('#scfaddress').val()).length == 0)
  {
   error_scfaddress = 'Address is required';
   $('#error_scfaddress').text(error_scfaddress);
   $('#scfaddress').addClass('has-error');
  }
  else
  {
   error_scfaddress = '';
   $('#error_scfaddress').text(error_scfaddress);
   $('#scfaddress').removeClass('has-error');
  }

  //Occupation

  if($.trim($('#scfoccu').val()).length == 0)
  {
   error_scfoccu= 'Put N/A if none';
   $('#error_scfoccu').text(error_scfoccu);
   $('#scfoccu').addClass('has-error');
  }
  else
  {
   error_scfoccu = '';
   $('#error_scfoccu').text(error_scfoccu);
   $('#scfoccu').removeClass('has-error');
  }

//Educational Attainment

  if($.trim($('#scfeduc').val()).length == 0)
  {
   error_scfeduc = 'Educational Attainment is required';
   $('#error_scfeduc').text(error_scfeduc);
   $('#scfeduc').addClass('has-error');
  }
  else
  {
   error_scfeduc = '';
   $('#error_scfeduc').text(error_scfeduc);
   $('#scfeduc').removeClass('has-error');
  }



  // Mothers's Last Name
  if($.trim($('#scmlname').val()).length == 0)
  {
   error_scmlname = 'Last Name is required';
   $('#error_scmlname').text(error_scmlname);
   $('#scmlname').addClass('has-error');
  }
  else
  {
   error_scmlname = '';
   $('#error_scmlname').text(error_scmlname);
   $('#scmlname').removeClass('has-error');
  }

  //Mother's First Name
  if($.trim($('#scmfname').val()).length == 0)
  {
   error_scmfname = 'First Name is required';
   $('#error_scmfname').text(error_scmfname);
   $('#scmfname').addClass('has-error');
  }
  else
  {
   error_scmfname = '';
   $('#error_scmfname').text(error_scmfname);
   $('#scmfname').removeClass('has-error');
  }

  //Mother's Middle Name

  if($.trim($('#scmmname').val()).length == 0)
  {
   error_scmmname = 'Put N/A if none';
   $('#error_scmmname').text(error_scmmname);
   $('#scmmname').addClass('has-error');
  }
  else
  {
   error_scmmname= '';
   $('#error_scmmname').text(error_scmmname);
   $('#scmmname').removeClass('has-error');
  }

  // Father Suffix
  if($.trim($('#scmnext').val()).length == 0)
  {
   error_scmnext = 'Put N/A if none';
   $('#error_scmnext').text(error_scmnext);
   $('#scmnext').addClass('has-error');
  }
  else
  {
   error_scmnext = '';
   $('#error_scmnext').text(error_scmnext);
   $('#scmnext').removeClass('has-error');
  }

  //Mother Status

  if($.trim($('#scmstatus').val()).length == 0)
  {
   error_scmstatus = 'Status is required';
   $('#error_scmstatus').text(error_scmstatus);
   $('#scmstatus').addClass('has-error');
  }
  else
  {
   error_scmstatus = '';
   $('#error_scmstatus').text(error_scmstatus);
   $('#scmstatus').removeClass('has-error');
  }

  //Father Address

  if($.trim($('#scmaddress').val()).length == 0)
  {
   error_scmaddress= 'Address is required';
   $('#error_scmaddress').text(error_scmaddress);
   $('#scmaddress').addClass('has-error');
  }
  else
  {
   error_scmaddress = '';
   $('#error_scmaddress').text(error_scmaddress);
   $('#scmaddress').removeClass('has-error');
  }

  //Occupation

  if($.trim($('#scmoccu').val()).length == 0)
  {
   error_scmoccu= 'Put N/A if none';
   $('#error_scmoccu').text(error_scmoccu);
   $('#scmoccu').addClass('has-error');
  }
  else
  {
   error_scmoccu = '';
   $('#error_scmoccu').text(error_scmoccu);
   $('#scmoccu').removeClass('has-error');
  }

//Educational Attainment

  if($.trim($('#scmeduc').val()).length == 0)
  {
   error_scmeduc = 'Educational Attainment is required';
   $('#error_scmeduc').text(error_scmeduc);
   $('#scmeduc').addClass('has-error');
  }
  else
  {
   error_scmeduc= '';
   $('#error_scmeduc').text(error_scmeduc);
   $('#scmeduc').removeClass('has-error');
  }


  //Total Gross Income

  if($.trim($('#scptgross').val()).length == 0)
  {
   error_scptgross = 'Total Gross income is required';
   $('#error_scptgross').text(error_scptgross);
   $('#scptgross').addClass('has-error');
  }
  else
  {
   error_scptgross = '';
   $('#error_scptgross').text(error_scptgross);
   $('#scptgross').removeClass('has-error');
  }

  //Total Siblings in the Family

  if($.trim($('#scnsibling').val()).length == 0)
  {
   error_scnsibling = 'Total Sibling is required';
   $('#error_scnsibling').text(error_scnsibling);
   $('#scnsibling').addClass('has-error');
  }
  else
  {
   error_scnsibling= '';
   $('#error_scnsibling').text(error_scnsibling);
   $('#scnsibling').removeClass('has-error');
  }







  if( error_scflname != '' ||
  error_scffname != '' ||
  error_scfmname != '' ||
  error_scfnext != '' ||
  error_scfstatus != '' ||
  error_scfaddress != '' ||
  error_scfoccu != '' ||
  error_scfeduc != '' ||
  error_scmlname != '' ||
  error_scmfname != '' ||
  error_scmmname != '' ||
  error_scmnext != '' ||
  error_scmstatus != '' ||
  error_scmaddress != '' ||
  error_scmoccu != '' ||
  error_scmeduc != '' ||
  error_scptgross != '' ||
  error_scnsibling != '' )
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
  
  var error_scsintend = '';
  var error_scsadd = '' ;
  var error_scschooltype = '';
  var error_sccourse= '';
  var error_sccoursestat= '';

  
  if($.trim($('#scsintend').val()).length == 0)
  {
   error_scsintend = 'School intended to enroll is required';
   $('#error_scsintend').text(error_scsintend );
   $('#scsintend').addClass('has-error');
  }
  else
  {
   error_scsintend = '';
   $('#error_scsintend').text(error_scsintend);
   $('#scsintend').removeClass('has-error');
  }

  if($.trim($('#scsadd').val()).length == 0)
  {
   error_scsadd = 'School Address is required';
   $('#error_scsadd').text(error_scsadd );
   $('#scsadd').addClass('has-error');
  }
  else
  {
   error_scsadd = '';
   $('#error_scsadd').text(error_scsadd);
   $('#scsadd').removeClass('has-error');
  }

  if($.trim($('#scschooltype').val()).length == 0)
  {
   error_scschooltype = 'School Type is required';
   $('#error_scschooltype').text(error_scschooltype);
   $('#scschooltype').addClass('has-error');
  }
  else
  {
   error_scschooltype = '';
   $('#error_scschooltype').text(error_scschooltype);
   $('#scschooltype').removeClass('has-error');
  }

  if($.trim($('#sccourse').val()).length == 0)
  {
   error_sccourse = 'Course is required';
   $('#error_sccourse').text(error_sccourse);
   $('#sccourse').addClass('has-error');
  }
  else
  {
   error_sccourse = '';
   $('#error_sccourse').text(error_sccourse);
   $('#sccourse').removeClass('has-error');
  }

  if($.trim($('#sccoursestat').val()).length == 0)
  {
   error_sccoursestat = 'Course Status required';
   $('#error_sccoursestat').text(error_sccoursestat);
   $('#sccoursestat').addClass('has-error');
  }
  else
  {
   error_sccoursestat = '';
   $('#error_sccoursestat').text(error_sccoursestat);
   $('#sccoursestat').removeClass('has-error');
  }

  if(error_scsintend != '' || 
     error_scsadd != '' ||
     error_scschooltype != '' ||
     error_sccourse != '' ||
     error_sccoursestat != '' 
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
  
  var error_scaemail = '';
  var error_scapass = '';
  
  if($.trim($('#scaemail').val()).length == 0)
  {
   error_scaemail = 'Email is required';
   $('#error_scaemail').text(error_scaemail);
   $('#scaemail').addClass('has-error');
  }
  else
  {
   error_scaemail = '';
   $('#error_scaemail').text(error_scaemail);
   $('#scaemail').removeClass('has-error');
  }
  
  if($.trim($('#scapass').val()).length == 0)
  {
   error_scapass = 'Password is required';
   $('#error_scapass').text(error_scapass);
   $('#scapass').addClass('has-error');
  }
  else
  {
   error_scapass = '';
   $('#error_scapass').text(error_scapass);
   $('#scapass').removeClass('has-error');
  }

  if(error_scaemail != '' || 
     error_scapass != '')
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