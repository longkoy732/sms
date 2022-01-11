<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SMS | Register</title>
    <!-- Bootstrap CSS -->
    <link href="../vendor/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../vendor/fontawesome-free/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../vendor/datepicker/bootstrap-datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="../vendor/parsley/parsley.css"/>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-select/bootstrap-select.min.css"/>

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
   <h2 align="center">Create Account</h2><br />
   <span id="message"></span>
   <form method="post" id="student_register_form">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active_tab1" id="list_ss_id_details" style="border:1px solid #ccc">Student ID Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_family_details" style="border:1px solid #ccc">Family Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_education_details" style="border:1px solid #ccc">Education Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_account_details" style="border:1px solid #ccc">Account Details</a>
            </li>
        </ul>
<!-- Student ID Details -->
  <div class="tab-content" style="margin-top:16px;">
    <div class="tab-pane show active" id="ss_id_details">
      <div class="card">
          <div class="card-header" style="font-weight: bold; font-size: 16px;">Fill Student ID Details</div>
          <div class="card-body">
              <div class="form-group">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                          <label>Student ID NO.<span class="text-danger">*</span></label>
                          <input type="text" name="ss_id" id="ss_id" class="form-control" />
                          <span id="error_ss_id" class="text-danger"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group text-center">
              <a class="btn btn-primary" href="index.php" role="button">Back</a>
              <button type="button" name="btn_ss_id_details" id="btn_ss_id_details" class="btn btn-success btn-md">Next</button>
              </div>
          </div>
      </div>
    </div>
<!-- Personal Details -->
    <div class="tab-pane" id="personal_details">
        <div class="card">
          <div class="card-header" style="font-weight: bold; font-size: 16px;">Fill Personal Details</div>
            <div class="card-body">
              <div class="form-group">
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
                    <option value="">-Select-</option>
                    <option value="N/A">N/A</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                    </select>
                    <span id="error_snext" class="text-danger"></span>
                  </div>
                  <div class="col-xs-10 col-sm-12 col-md-4">
                    <label>Date of Birth<span class="text-danger">*</span></label>
                      <input type="date" name="sdbirth" id="sdbirth" autocomplete="off" class="form-control" />
                    <span id="error_sdbirth" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                    <label>Select Gender<span class="text-danger">*</span></label>
                    <select name="sgender" id="sgender" class="form-control" required>
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span id="error_sgender" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="saddress" id="saddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_saddress" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Zip Code<span class="text-danger">*</span></label>
                    <input type="text" name="szcode" id="szcode" class="form-control" />
                    <span id="error_szcode" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="scontact" id="scontact" class="form-control" />
                    <span id="error_scontact" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Email Address<span class="text-danger">*</span></label>
                    <input type="text" name="semail" id="semail" class="form-control" />
                    <span id="error_semail" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Citizenship<span class="text-danger">*</span></label>
                    <input type="text" name="sctship" id="sctship" class="form-control" />
                    <span id="error_sctship" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Select Civil Status<span class="text-danger">*</span></label>
                    <select name="scivilstat" id="scivilstat" class="form-control" required>
                      <option value="">Select Status</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                    </select>
                    <span id="error_scivilstat" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>DSWD Household/4PS NO.<span class="text-danger">*</span></label>
                    <input type="text" name="s4psno" id="s4psno" class="form-control" />
                    <span id="error_s4psno" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <label>Type of Disability(if applicable)<span class="text-danger">*</span></label>
                    <input type="text" name="sdisability" id="sdisability" class="form-control" />
                    <span id="error_sdisability" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                    <label>PWD ID<span class="text-danger">*</span></label>
                    <input type="text" name="spwdid" id="spwdid" class="form-control" />
                    <span id="error_spwdid" class="text-danger"></span>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label>Reasons/Circumtances Applying for Scholarship<span class="text-danger">*</span></label>
                    <textarea type="text" name="srappsship" id="srappsship" class="form-control" required data-parsley-trigger="keyup"></textarea>
                    <span id="error_srappsship" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="form-group text-center">
                <button type="button" name="previous_btn_personal" id="previous_btn_personal" class="btn btn-primary btn-md">Previous</button>
                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-success btn-md">Next</button>
              </div>
            </div>
        </div>
      </div>
<!-- Family Details -->
      <div class="tab-pane" id="family_details">
        <div class="card">
        <div class="card-header" style="font-weight: bold; font-size: 16px;">Fill Family Details</div>
          <div class="card-body">
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
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                      <label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
                      <input type="text" name="saspcyincome" id="saspcyincome" class="form-control" />
                      <span id="error_saspcyincome" class="text-danger"></span>
                    </div>
                </div>
              </div>
              <div class="form-group text-center">
                <button type="button" name="previous_btn_family_details" id="previous_btn_family_details" class="btn btn-primary btn-md">Previous</button>
                <button type="button" name="btn_family_details" id="btn_family_details" class="btn btn-success btn-md">Next</button>
              </div>
          </div>
        </div>
      </div>
<!-- Education Details -->
    <div class="tab-pane" id="education_details">
          <div class="card">
            <div class="card-header" style="font-weight: bold; font-size: 16px;">Fill Personal Details</div>
              <div class="card-body">
                <div class="form-group">
                  <h4 class="sub-title">Previous</h4>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label>School Attended<span class="text-danger">*</span></label>
                      <textarea type="text" name="spschname" id="spschname" class="form-control" required data-parsley-trigger="keyup"></textarea>
                      <span id="error_spschname" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label>School Address<span class="text-danger">*</span></label>
                      <textarea type="text" name="spsaddress" id="spsaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                      <span id="error_spsaddress" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4"> 
                      <label>School Type<span class="text-danger">*</span></label>
                      <select name="spstype" id="spstype" class="form-control" required>
                        <option value="">Select School Type</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                      </select>
                      <span id="error_spstype" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <label>Course<span class="text-danger">*</span></label>
                      <input type="text" name="spscourse" id="spscourse" class="form-control" />
                      <span id="error_spscourse" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <label>Year/Grade Level<span class="text-danger">*</span></label>
                      <input type="text" name="spsyrlvl" id="spsyrlvl" class="form-control" />
                      <span id="error_spsyrlvl" class="text-danger"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h4 class="sub-title">Current</h4>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label>School Intended to enroll In<span class="text-danger">*</span></label>
                      <textarea type="text" name="scsintend" id="scsintend" class="form-control" required data-parsley-trigger="keyup"></textarea>
                      <span id="error_scsintend" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label>School Address<span class="text-danger">*</span></label>
                      <textarea type="text" name="scsadd" id="scsadd" class="form-control" required data-parsley-trigger="keyup"></textarea>
                      <span id="error_scsadd" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <label>School Type<span class="text-danger">*</span></label>
                      <select name="scschooltype" id="scschooltype" class="form-control" required>
                        <option value="">Select School Type</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                      </select>
                      <span id="error_scschooltype" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                      <label>Course<span class="text-danger">*</span></label>
                      <input type="text" name="sccourse" id="sccourse" class="form-control" />
                      <span id="error_sccourse" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                      <label>Course Priority<span class="text-danger">*</span></label>
                      <input type="text" name="sccourseprio" id="sccourseprio" class="form-control" />
                      <span id="error_sccourseprio" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                      <label>Year/Grade Level<span class="text-danger">*</span></label>
                      <input type="text" name="scsyrlvl" id="scsyrlvl" class="form-control" />
                      <span id="error_scsyrlvl" class="text-danger"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group text-center">
                  <button type="button" name="previous_btn_education" id="previous_btn_education" class="btn btn-primary btn-md">Previous</button>
                  <button type="button" name="btn_education_details" id="btn_education_details" class="btn btn-success btn-md">Next</button>
                </div>
              </div>
          </div>
        </div>
<!-- Account Details -->
        <div class="tab-pane" id="account_details">
          <div class="card">
          <div class="card-header" style="font-weight: bold; font-size: 16px;">Fill Account Details</div>
            <div class="card-body">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="saemail" id="saemail" class="form-control" />
                <span id="error_saemail" class="text-danger"></span>
              </div>
              <div class="form-group">
              <label>Password</label>
              <input type="text" name="sapass" id="sapass" class="form-control" />
              <span id="error_sapass" class="text-danger"></span>
              </div>
              <div class="form-group text-center">
              <button type="button" name="previous_btn_account" id="previous_btn_account" class="btn btn-primary btn-md">Previous</button>
              <input type="hidden" name="action" value="student_register" />
              <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-success" value="Register" />
              </div>
            </div>
            </div>
     </div>
    </div>
   </form>
  </div>
<!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<script>
// Student Details
    $(document).ready(function(){

  // sid 
    $('#btn_ss_id_details').click(function(){

    var error_ss_id = '';

    if($.trim($('#ss_id').val()).length == 0)
    {
    error_ss_id = 'Student ID No. is required';
    $('#error_ss_id').text(error_ss_id);
    $('#ss_id').addClass('has-error');
    }
    else
    {
    error_ss_id = '';
    $('#error_ss_id').text(error_ss_id);
    $('#ss_id').removeClass('has-error');
    }

    if(error_ss_id != '' )
    {
      return false;
    }
    else{
      $('#list_ss_id_details').removeClass('active active_tab1');
      $('#list_ss_id_details').removeAttr('href data-toggle');
      $('#ss_id_details').removeClass('active');
      $('#list_ss_id_details').addClass('inactive_tab1');
      $('#list_personal_details').removeClass('inactive_tab1');
      $('#list_personal_details').addClass('active_tab1 active');
      $('#list_personal_details').attr('href', '#personal_details');
      $('#list_personal_details').attr('data-toggle', 'tab');
      $('#personal_details').addClass('active in');
    }
    });

    $('#previous_btn_personal').click(function(){
    $('#list_personal_details').removeClass('active active_tab1');
    $('#list_personal_details').removeAttr('href data-toggle');
    $('#personal_details').removeClass('active in');
    $('#list_personal_details').addClass('inactive_tab1');
    $('#list_ss_id_details').removeClass('inactive_tab1');
    $('#list_ss_id_details').addClass('active_tab1 active');
    $('#list_ss_id_details').attr('href', '#ss_id_details');
    $('#list_ss_id_details').attr('data-toggle', 'tab');
    $('#ss_id_details').addClass('active in');
    });
  // Personal Details
      $('#btn_personal_details').click(function(){
      var error_sfname = '';
      var error_smname = '';
      var error_slname = '';
      var error_snext = '';
      var error_sdbirth = '';
      var error_sgender = '';
      var error_saddress = '';
      var error_szcode = '';
      var error_scontact = '';
      var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
      var error_semail = '';
      var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
      var error_sctship = '';
      var error_scivilstat = '';
      var error_sdisability = '';
      var error_s4psno = '';
      var error_spwdid = '';
      var error_srappsship = '';
      
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
      error_smname = 'Put N/A if None';
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

      //Suffix

      if($.trim($('#snext').val()).length == 0)
      {
      error_snext = 'Select N/A if None';
      $('#error_snext').text(error_snext);
      $('#snext').addClass('has-error');
      }
      else
      {
      error_snext = '';
      $('#error_snext').text(error_snext);
      $('#snext').removeClass('has-error');
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

      if($.trim($('#szcode').val()).length == 0)
      {
      error_szcode = 'Zip Code is required';
      $('#error_szcode').text(error_szcode);
      $('#szcode').addClass('has-error');
      }
      else
      {
      error_szcode = '';
      $('#error_szcode').text(error_szcode);
      $('#szcode').removeClass('has-error');
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

      if($.trim($('#scivilstat').val()).length == 0)
      {
      error_scivilstat = 'Civil Status is required';
      $('#error_scivilstat').text(error_scivilstat);
      $('#scivilstat').addClass('has-error');
      }
      else
      {
      error_scivilstat = '';
      $('#error_scivilstat').text(error_scivilstat);
      $('#scivilstat').removeClass('has-error');
      }

      if($.trim($('#s4psno').val()).length == 0)
      {
      error_s4psno = 'Put N/A if None';
      $('#error_s4psno').text(error_s4psno);
      $('#s4psno').addClass('has-error');
      }
      else
      {
      error_s4psno = '';
      $('#error_s4psno').text(error_s4psno);
      $('#s4psno').removeClass('has-error');
      }

      if($.trim($('#sdisability').val()).length == 0)
      {
      error_sdisability = 'Put N/A if None';
      $('#error_sdisability').text(error_sdisability);
      $('#sdisability').addClass('has-error');
      }
      else
      {
      error_sdisability = '';
      $('#error_sdisability').text(error_sdisability);
      $('#sdisability').removeClass('has-error');
      }

      if($.trim($('#spwdid').val()).length == 0)
      {
      error_spwdid = 'Put N/A if None';
      $('#error_spwdid').text(error_spwdid);
      $('#spwdid').addClass('has-error');
      }
      else
      {
      error_spwdid = '';
      $('#error_spwdid').text(error_spwdid);
      $('#spwdid').removeClass('has-error');
      }

      if($.trim($('#srappsship').val()).length == 0)
      {
      error_srappsship = 'Put N/A if None';
      $('#error_srappsship').text(error_srappsship);
      $('#srappsship').addClass('has-error');
      }
      else
      {
      error_srappsship = '';
      $('#error_srappsship').text(error_srappsship);
      $('#srappsship').removeClass('has-error');
      }

      if(error_sfname != '' || error_smname != '' 
      || error_slname != '' || error_snext != ''
      || error_sdbirth != '' || error_sgender != ''
      || error_saddress != '' || error_szcode != ''
      || error_scontact != '' || error_semail != '' 
      || error_sctship != '' || error_scivilstat != '' 
      || error_sdisability != '' || error_s4psno != ''
      || error_spwdid != '' || error_srappsship != ''
      )
      {
      return false;
      }
      else
      {
      $("#saemail").val($("#semail").val()); 
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
      $('#list_family_details').attr('href', '#family_details');
      $('#list_family_details').attr('data-toggle', 'tab');
      $('#family_details').addClass('active in');
    });
  // Education Details
    $('#btn_education_details').click(function(){
      
      var error_spschname = '';
      var error_spsaddress = '';
      var error_spstype = '';
      var error_spscourse = '';
      var error_spsyrlvl = '';
      var error_scsintend = '';
      var error_scsadd = '';
      var error_scschooltype = '';
      var error_sccourse = '';
      var error_sccourseprio = '';
      var error_scsyrlvl = '';

      if($.trim($('#spschname').val()).length == 0)
      {
      error_spschname = 'School Name is required';
      $('#error_spschname').text(error_spschname);
      $('#spschname').addClass('has-error');
      }
      else
      {
      error_spschname = '';
      $('#error_spschname').text(error_spschname);
      $('#spschname').removeClass('has-error');
      }
      
      if($.trim($('#spsaddress').val()).length == 0)
      {
      error_spsaddress = 'School Address is required';
      $('#error_spsaddress').text(error_spsaddress);
      $('#spsaddress').addClass('has-error');
      }
      else
      {
      error_spsaddress = '';
      $('#error_spsaddress').text(error_spsaddress);
      $('#spsaddress').removeClass('has-error');
      }

      if($.trim($('#spstype').val()).length == 0)
      {
      error_spstype = 'School Type is required';
      $('#error_spstype').text(error_spstype);
      $('#spstype').addClass('has-error');
      }
      else
      {
      error_spstype = '';
      $('#error_spstype').text(error_spstype);
      $('#spstype').removeClass('has-error');
      }

      if($.trim($('#spscourse').val()).length == 0)
      {
      error_spscourse = 'School Course is required';
      $('#error_spscourse').text(error_spscourse);
      $('#spscourse').addClass('has-error');
      }
      else
      {
      error_spscourse = '';
      $('#error_spscourse').text(error_spscourse);
      $('#spscourse').removeClass('has-error');
      }

      if($.trim($('#spsyrlvl').val()).length == 0)
      {
      error_spsyrlvl = 'Year/Grade Level is required';
      $('#error_spsyrlvl').text(error_spsyrlvl);
      $('#spsyrlvl').addClass('has-error');
      }
      else
      {
      error_spsyrlvl = '';
      $('#error_spsyrlvl').text(error_spsyrlvl);
      $('#spsyrlvl').removeClass('has-error');
      }

      if($.trim($('#scsintend').val()).length == 0)
      {
      error_scsintend = 'School Intended to Enroll is required';
      $('#error_scsintend').text(error_scsintend);
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
      $('#error_scsadd').text(error_scsadd);
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
      error_sccourse = 'School Course is required';
      $('#error_sccourse').text(error_sccourse);
      $('#sccourse').addClass('has-error');
      }
      else
      {
      error_sccourse = '';
      $('#error_sccourse').text(error_sccourse);
      $('#sccourse').removeClass('has-error');
      }

      if($.trim($('#sccourseprio').val()).length == 0)
      {
      error_sccourseprio = 'Course Priority is required';
      $('#error_sccourseprio').text(error_sccourseprio);
      $('#sccourseprio').addClass('has-error');
      }
      else
      {
      error_sccourseprio = '';
      $('#error_sccourseprio').text(error_sccourseprio);
      $('#sccourseprio').removeClass('has-error');
      }

      if($.trim($('#scsyrlvl').val()).length == 0)
      {
      error_scsyrlvl = ' Year/Grade Level is required';
      $('#error_scsyrlvl').text(error_scsyrlvl);
      $('#scsyrlvl').addClass('has-error');
      }
      else
      {
      error_scsyrlvl = '';
      $('#error_scsyrlvl').text(error_scsyrlvl);
      $('#scsyrlvl').removeClass('has-error');
      }

      if(error_spschname != '' ||
      error_spsaddress != '' ||
      error_spstype != '' ||
      error_spscourse != '' ||
      error_spsyrlvl != '' ||
      error_scsintend != '' ||
      error_scsadd != '' ||
      error_scschooltype != '' ||
      error_sccourse != '' ||
      error_sccourseprio != '' ||
      error_scsyrlvl != '' )
      {
      return false;
      }
      else
      {
        $('#list_education_details').removeClass('active active_tab1');
        $('#list_education_details').removeAttr('href data-toggle');
        $('#education_details').removeClass('active');
        $('#list_education_details').addClass('inactive_tab1');
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
      $('#list_education_details').removeClass('inactive_tab1');
      $('#list_education_details').addClass('active_tab1 active');
      $('#list_education_details').attr('href', '#education_details');
      $('#list_education_details').attr('data-toggle', 'tab');
      $('#education_details').addClass('active in');
    });
// Account Details
    $('#btn_submit').click(function(){
      
      // var error_saemail = '';
      // var error_sapass = '';
      
      // if($.trim($('#saemail').val()).length == 0)
      // {
      // error_saemail = 'Email is required';
      // $('#error_saemail').text(error_saemail);
      // $('#saemail').addClass('has-error');
      // }
      // else
      // {
      // error_saemail = '';
      // $('#error_saemail').text(error_saemail);
      // $('#saemail').removeClass('has-error');
      // }
      
      // if($.trim($('#sapass').val()).length == 0)
      // {
      // error_sapass = 'Password is required';
      // $('#error_sapass').text(error_sapass);
      // $('#sapass').addClass('has-error');
      // }
      // else
      // {
      // error_sapass = '';
      // $('#error_sapass').text(error_sapass);
      // $('#sapass').removeClass('has-error');
      // }

      // if(error_sapass != '')
      // {
      // return false;
      // }
      // else
      // {  
      // $('#btn_submit').attr("disabled", "disabled");
      // $(document).css('cursor', 'prgress');
      // $("#register_form").submit();
      $('#student_register_form').parsley();
    
    $('#student_register_form').on('submit', function(event){
      event.preventDefault();
      if($('#student_register_form').parsley().isValid())
      {
        $.ajax({
          url:"register_action.php",
          method:"POST",
          data:$(this).serialize(),
          dataType:'json',
          beforeSend:function(){
            $('#btn_submit').attr('disabled', 'disabled');
          },
          success:function(data)
          {
            $('#btn_submit').attr('disabled', false);
            $('#student_register_form')[0].reset();
            if(data.error !== '')
            {
              $('#message').html(data.error);
            }
            if(data.success != '')
            {
              $('#message').html(data.success);
            }
          }
        });
      }

    });
      // }
    });
  });           
</script>
