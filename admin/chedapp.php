<!-- Includes&Session -->
    <?php

    include('../class/dbcon.php');

    $object = new sms;

    if(!$object->is_login())
    {
        header("location:".$object->base_url."admin");
    }

    if($_SESSION['type'] != 'Admin')
    {
        header("location:".$object->base_url."");
    }

    include('header.php');

    ?>
<!-- Table -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">CHED Application Management</h1>

    <!-- DataTales Example -->
    <span id="message"></span>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Applicant List</h6>
                </div>
                <div class="col" align="right">
                    <button type="button" name="add_ched" id="add_ched" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                    <button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-times"></i></button>
                    <button type="button" name="approve_all" id="approve_all" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-thumbs-up"></i></button>
                    <button type="button" name="reject_all" id="reject_all" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-thumbs-down"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="ched_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Suffix</th>
                            <th>Address</th>
                            <th>Contact No.</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
<!-- Add Modal -->
    <div id="chedModal" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form method="post" id="ched_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title">Add CHED Scholar</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span id="form_message"></span>
                        <div class="form-group">
                        <div class="card">
                        <div class="card-header" style="font-weight: bold; font-size: 18px;">Personal Details</div>
                        <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <label>First Name<span class="text-danger">*</span></label>
                                    <input type="text" name="scfname" id="scfname" class="form-control" required/>
                                    <span id="error_scfname" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <label>Middle Name<span class="text-danger">*</span></label>
                                    <input type="text" name="scmname" id="scmname" class="form-control" placeholder="Put N/A if none" required/>
                                    <span id="error_scmname" class="text-danger"></span>
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <label>Last Name<span class="text-danger">*</span></label>
                                    <input type="text" name="sclname" id="sclname" class="form-control" required/>
                                    <span id="error_sclname" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <label>Select Suffix<span class="text-danger">*</span></label>
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
                                    <input type="date" name="scdbirth" id="scdbirth" class="form-control" required>
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
                                    <input type="text" name="scdisability" id="scdisability" class="form-control" placeholder="Put N/A if none" required/>
                                    <span id="error_scdisability" class="text-danger"></span>
                                </div>      
                                </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="card">
                        <div class="card-header" style="font-weight: bold; font-size: 18px;">Family Details</div>
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Father Details</h4>
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
                                        <input type="text" name="scfmname" id="scfmname" class="form-control" placeholder="Put N/A if none" required/>
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
                                        <span id="error_snnext" class="text-danger"></span>
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
                                        <input type="text" name="scfoccu" id="scfoccu" class="form-control" placeholder="Put N/A if none" required/>
                                        <span id="error_scfoccu" class="text-danger"></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <label>Educational Attainment<span class="text-danger">*</span></label>
                                        <input type="text" name="scfeduc" id="scfeduc" class="form-control" placeholder="Put N/A if none" required/>
                                        <span id="error_scfeduc" class="text-danger"></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label>Address<span class="text-danger">*</span></label>
                                        <textarea type="text" name="scfaddress" id="scfaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                                        <span id="pob" class="text-danger"></span>
                                        <span id="error_scfaddress" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Mother Details</h4>
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
                                        <input type="text" name="scmmname" id="scmmname" class="form-control" placeholder="Put N/A if none" required/>
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
                                        <span id="error_snnext" class="text-danger"></span>
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
                                        <input type="text" name="scmoccu" id="scmoccu" class="form-control" placeholder="Put N/A if none" required/>
                                        <span id="error_scmoccu" class="text-danger"></span>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <label>Educational Attainment<span class="text-danger">*</span></label>
                                        <input type="text" name="scmeduc" id="scmeduc" class="form-control" placeholder="Put N/A if none" required/>
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
                                        <input type="text" name="scnsibling" id="scnsibling" class="form-control" placeholder="Put N/A if none" required/>
                                        <span id="error_scnsibling" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Education Details</div>
                            <div class="card-body">
                                <div class="form-group">
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
                                            <input type="text" name="sccourse" id="sccourse" class="form-control" required/>
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
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Requirements Details</div>
                                <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Report Card<span class="text-danger">*</span></label>
                                            <input type="date" name="scdrprc" id="scdrprc" autocomplete="off" class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Good Moral<span class="text-danger">*</span></label>
                                            <input type="date" name="scdrpgm" id="scdrpgm" autocomplete="off" class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Brgy. Indigency<span class="text-danger">*</span></label>
                                            <input type="date" name="scdrbrgyin" id="scdrbrgyin" autocomplete="off" class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Report Card Status<span class="text-danger">*</span></label>
                                            <select name="scdrprcstat" id="scdrprcstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_scdrprcstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Good Moral Status<span class="text-danger">*</span></label>
                                            <select name="scdrpgmstat" id="scdrpgmstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_scdrpgmstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Brgy. Indigency Status<span class="text-danger">*</span></label>
                                            <select name="scdrbrgyinstat" id="scdrbrgyinstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_scdrbrgyinstat" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Account Details</div>
                                <div class="card-body">
                                    <div class="form-group">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="text" name="scaemail" id="scaemail" class="form-control" required/>
                                    <span id="error_scaemail" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input type="password" name="scapass" id="scapass" class="form-control" required/>
                                    <span id="error_scapass" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Scholarship Details</div>
                                <div class="card-body">
                                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                        <label>Select Grant Status<span class="text-danger">*</span></label>
                                        <select name="scgrantstat" id="scgrantstat" class="form-control" required>
                                        <option value="">-Select-</option>
                                        <option value="New">New</option>
                                        <option value="Old">Old</option>
                                        </select>
                                        <span id="error_scgrantstat" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="hidden" name="action" id="action" value="Add" />
                        <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- View Modal -->
    <div id="viewModal" class="modal fade">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title">View Student Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="nonacad_details">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- CSS Style -->
    <style>
    .removeRow
    {
        background-color: #FF0000;
        color:#FFFFFF;
    }
    </style>
<!-- Script -->
    <script>

    $(document).ready(function(){
// Table Function
    var dataTable = $('#ched_table').DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax" : {
            url:"chedapp_action.php",
            type:"POST",
            data:{action:'fetch'}
        },
        "columnDefs":[
            {
                "targets":[0],
                "orderable":false,
                'checkboxes': {
                'selectRow': true
            }
            },
        ],
        'select': {
        'style': 'multi'
        },
        // 'order': [[1, 'asc']]	
    });

// Add
    $('#add_ched').click(function(){

        $('#ched_form')[0].reset();

        $('#ched_form').parsley().reset();

        $('#modal_title').text('Add CHED Scholar');

        $('#action').val('Add');

        $('#submit_button').val('Add');

        $('#chedModal').modal('show');

        $('#form_message').html('');

    });
// Submit
    $('#ched_form').parsley();

    $('#ched_form').on('submit', function(event){
        event.preventDefault();
        if($('#ched_form').parsley().isValid())
        {		
            $.ajax({
                url:"chedapp_action.php",
                method:"POST",
                data: new FormData(this),
                dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend:function()
                {
                    $('#submit_button').attr('disabled', 'disabled');
                    $('#submit_button').val('wait...');
                },
                success:function(data)
                {
                    $('#submit_button').attr('disabled', false);
                    if(data.error != '')
                    {
                        $('#form_message').html(data.error);
                        $('#submit_button').val('Add');
                    }
                    else
                    {
                        $('#chedModal').modal('hide');
                        $('#message').html(data.success);
                        dataTable.ajax.reload();

                        setTimeout(function(){

                            $('#message').html('');

                        }, 5000);
                    }
                }
            })
        }
    });

// Edit
    $(document).on('click', '.edit_button', function(){

        var snacad_id = $(this).data('id');

        $('#ched_form')[0].reset();

        $('#ched_form').parsley().reset();

        $('#form_message').html('');

        $.ajax({

            url:"chedapp_action.php",

            method:"POST",

            data:{snacad_id:snacad_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
    // Account Details
                $('#scaemail').val(data.scaemail);
                $('#scapass').val(data.scapass);
    // Personal Details
                $('#snfname').val(data.snfname);
                $('#snmname').val(data.snmname);
                $('#snlname').val(data.snlname);
                $('#snnext').val(data.snnext);
                $('#sndbirth').val(data.sndbirth);
                $('#snctship').val(data.snctship);
                $('#snaddress').val(data.snaddress);
                $('#snpemail').val(data.snpemail);
                $('#sncontact').val(data.sncontact);
                $('#sncourse').val(data.sncourse);
                $('#snyrlvl').val(data.snyrlvl);
                $('#sngender').val(data.sngender);
    // Family Details
        // Guardian Details
                $('#sngfname').val(data.sngfname);
                $('#sngmname').val(data.sngmname);
                $('#snglname').val(data.snglname);
                $('#sngnext').val(data.sngnext);
                $('#sngaddress').val(data.sngaddress);
                $('#sngcontact').val(data.sngcontact);
                $('#sngoccu').val(data.sngoccu);
                $('#sngcompany').val(data.sngcompany);
        // Father Details
                $('#snffname').val(data.snffname);
                $('#snfmname').val(data.snfmname);
                $('#snflname').val(data.snflname);
                $('#snfnext').val(data.snfnext);
                $('#snfaddress').val(data.snfaddress);
                $('#snfcontact').val(data.snfcontact);
                $('#snfoccu').val(data.snfoccu);
                $('#snfcompany').val(data.snfcompany);
        // Mother Details
                $('#snmfname').val(data.snmfname);
                $('#snmmname').val(data.snmmname);
                $('#snmlname').val(data.snmlname);
                $('#snmnext').val(data.snmnext);
                $('#snmaddress').val(data.snmaddress);
                $('#snmcontact').val(data.snmcontact);
                $('#snmoccu').val(data.snmoccu);
                $('#snmcompany').val(data.snmcompany);
                $('#snspcyincome').val(data.snspcyincome);
    // Application Details
                $('#snrappnas').val(data.snrappnas);
                $('#snbos').val(data.snbos);
                $('#snsskills').val(data.snsskills);
                $('#sntwinterest').val(data.sntwinterest);
    // Education Details
                $('#snpschatt').val(data.snpschatt);
                $('#snpschadd').val(data.snpschadd);
                $('#snpyrlvl').val(data.snpyrlvl);
    // Requirement Details
                $('#scdrprc').val(data.scdrprc);
                $('#scdrprcstat').val(data.scdrprcstat);
                $('#scdrpgm').val(data.scdrpgm);
                $('#scdrpgmstat').val(data.scdrpgmstat);
                $('#sntbytpic').val(data.sntbytpic);
                $('#sntbytpicstat').val(data.sntbytpicstat);
                $('#scdrbrgyin').val(data.scdrbrgyin);
                $('#scdrbrgyinstat').val(data.scdrbrgyinstat);
                $('#snpscef').val(data.snpscef);
                $('#snpscefstat').val(data.snpscefstat);
    // Scholarship Details
                $('#snacapstype').val(data.snacapstype);
                $('#scgrantstat').val(data.scgrantstat);
                $('#snascholarstat').val(data.snascholarstat);
                $('#snadapply').val(data.snadapply);

                $('#modal_title').text('Edit Applicant Info');

                $('#action').val('Edit');

                $('#submit_button').val('Edit');

                $('#chedModal').modal('show');

                $('#hidden_id').val(snacad_id);

            }

        })

        });

// Change Status
    $(document).on('click', '.status_button', function(){
        var id = $(this).data('id');
        var status = $(this).data('status');
        var next_status = 'Approved';
        if(status == 'Approved')
        {
            next_status = 'Rejected';
        }
        if(confirm("Are you sure you want to "+next_status+" it?"))
        {

            $.ajax({

                url:"chedapp_action.php",

                method:"POST",

                data:{id:id, action:'change_status', status:status, next_status:next_status},

                success:function(data)
                {

                    $('#message').html(data);

                    dataTable.ajax.reload();

                    setTimeout(function(){

                        $('#message').html('');

                    }, 5000);

                }

            })

        }
    });

// Delete Function
    $(document).on('click', '.delete_button', function(){

    var id = $(this).data('id');

    if(confirm("Are you sure you want to remove it?"))
    {

        $.ajax({

            url:"chedapp_action.php",

            method:"POST",

            data:{id:id, action:'delete'},

            success:function(data)
            {

                $('#message').html(data);

                dataTable.ajax.reload();

                setTimeout(function(){

                    $('#message').html('');

                }, 5000);

            }

        })

    }

    });

// View Function
    $(document).on('click', '.view_button', function(){
        var snacad_id = $(this).data('id');

        $.ajax({

            url:"chedapp_action.php",

            method:"POST",

            data:{snacad_id:snacad_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';
            // Account Details
                html += '<tr><th width="40%" class="text-right" style="font-size:20px">Account Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.scaemail+'</td></tr>';
            // Personal Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Personal Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.snfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.snmname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.snlname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.snnext+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date of Birth</th><td width="60%">'+data.sndbirth+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Gender</th><td width="60%">'+data.sngender+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Citizenship</th><td width="60%">'+data.snctship+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.snaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.snpemail+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.sncontact+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Course</th><td width="60%">'+data.sncourse+'</td></tr>'; 
                html += '<tr><th width="40%" class="text-right">Grade/Year Level</th><td width="60%">'+data.snyrlvl+'</td></tr>';
            // Family Details
                // Guardian Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Family Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-left" style="font-size:18px">Guardian Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.sngfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.sngmname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.snglname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.sngnext+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.sngaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.sngcontact+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.sngoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.sngcompany+'</td></tr>';
                // Father Details
                html += '<tr><th width="40%" class="text-left" style="font-size:18px">Father Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.snffname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.snfmname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.snflname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.snfnext+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.snfaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.snfcontact+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.snfoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.snfcompany+'</td></tr>';
                // Mother Details
                html += '<tr><th width="40%" class="text-left" style="font-size:18px">Mother Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.snmfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.snmmname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.snmlname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.snmnext+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.snmaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.snmcontact+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.snmoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.snmcompany+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Parents Combine Yearly Income</th><td width="60%">'+data.snspcyincome+'</td></tr>';
            // Achievement Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Application Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Grade/GWA</th><td width="60%">'+data.snrappnas+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Award Received</th><td width="60%">'+data.snbos+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Received</th><td width="60%">'+data.snsskills+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Received</th><td width="60%">'+data.sntwinterest+'</td></tr>';
            // Education Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Education Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Grade/GWA</th><td width="60%">'+data.snpschatt+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Award Received</th><td width="60%">'+data.snpschadd+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Received</th><td width="60%">'+data.snpyrlvl+'</td></tr>';
            // Requirement Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Requirement Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Report Card</th><td width="60%">'+data.scdrprc+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Report Card Status</th><td width="60%">'+data.scdrprcstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.scdrpgm+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.scdrpgmstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.sntbytpic+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.sntbytpicstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.scdrbrgyin+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.scdrbrgyinstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.snpscef+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.snpscefstat+'</td></tr>';
            // Scholarship Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Scholarship Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Scholarship Type</th><td width="60%">'+data.snacapstype+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Grant Status</th><td width="60%">'+data.scgrantstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Scholarship Status</th><td width="60%">'+data.snascholarstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Applied</th><td width="60%">'+data.snadapply+'</td></tr>';
                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#nonacad_details').html(html);

            }

        })
    });

// Select
    $(document).on('click', '.select_all', function(){
        var inputs = $("check_all");
        for(var i = 0; i < inputs.length; i++) 
        { 
            var id = inputs[i].getAttribute("id");
            if(type == "check_all") 
            {
                if(this.checked) 
                {
                    inputs[i].checked = true;
                } 
                else 
                {
                    inputs[i].checked = false;
                }
            } 
        }
        });
// Checkbox
    $(document).on('click', '.checkbox', function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
        });

// Approve 
    $('#approve_all').click(function(){
        var checkbox = $('.checkbox:checked');
        var approve_status = 'Approved';
        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });

            $.ajax({
                url:"chedapp_action.php",
                method:"POST",
                data:{checkbox_value:checkbox_value, approve_status:approve_status, action:'approve_all'},
                success:function(data)
                {
                    $('.removeRow').fadeOut(1500);
                    $('#message').html(data);

                    dataTable.ajax.reload();

                    setTimeout(function(){

                        $('#message').html('');

                    }, 5000);
                }
            });
        }
        else
        {
            alert("Please select at least one records");
        }
    });

// Reject
    $('#reject_all').click(function(){
        var checkbox = $('.checkbox:checked');
        var reject_status = 'Rejected';
        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });

            $.ajax({
                url:"chedapp_action.php",
                method:"POST",
                data:{checkbox_value:checkbox_value, reject_status:reject_status, action:'reject_all'},
                success:function(data)
                {
                    $('.removeRow').fadeOut(1500);
                    $('#message').html(data);

                    dataTable.ajax.reload();

                    setTimeout(function(){

                        $('#message').html('');

                    }, 5000);
                }
            });
        }
        else
        {
            alert("Please select at least one records");
        }
    });

// Delete All
    $('#delete_all').click(function(){
        var checkbox = $('.checkbox:checked');
        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });

            $.ajax({
                url:"chedapp_action.php",
                method:"POST",
                data:{checkbox_value:checkbox_value, action:'delete_all'},
                success:function(data)
                {
                    $('.removeRow').fadeOut(1500);
                    $('#message').html(data);

                    dataTable.ajax.reload();

                    setTimeout(function(){

                        $('#message').html('');

                    }, 5000);
                }
            });
        }
        else
        {
            alert("Please select at least one records");
        }
    });

    });
    </script>