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
    <h1 class="h3 mb-4 text-gray-800">UNIFAST Application Management</h1>

<!-- DataTales Example -->
    <span id="message"></span>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Applicant List</h6>
                </div>
                <div class="col" align="right">
                    <button type="button" name="add_unifast" id="add_unifast" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                    <button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-times"></i></button>
                    <button type="button" name="approve_all" id="approve_all" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-thumbs-up"></i></button>
                    <button type="button" name="reject_all" id="reject_all" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-thumbs-down"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="unifast_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
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
    <div id="unifastModal" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form method="post" id="unifast_form" class="needs-validation" novalidate>
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title">Add UNIFAST Scholar</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span id="form_message"></span>
                        <div class="form-group">
                        <div class="card">
                        <div class="card-header" style="font-weight: bold; font-size: 18px;">Student ID Details</div>
                        <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                    <label  >Student ID NO.<span class="text-danger">*</span></label>
                                    <input  type="text" name="sustudent_id" id="sustudent_id" class="form-control" />
                                    <span id="error_sustudent_id" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="card">
                        <div class="card-header" style="font-weight: bold; font-size: 18px;">Personal Details</div>
                        <div class="card-body">
                        <div class="form-group">
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
                                    <input type="text" name="susmname" id="susmname" class="form-control" />
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
                                    <input type="text" name="susfmname" id="susfmname" class="form-control" />
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
                        </div>
                        <div class="form-group">
                            <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Mother Details</h4>
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
                                    <input type="text" name="susmmname" id="susmmname" class="form-control" />
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
                                    <input type="text" name="susdswd" id="susdswd" class="form-control" />
                                    <span id="error_susdswd" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label>Household Capital Income<span class="text-danger">*</label>
                                    <input type="text" name="sushci" id="sushci" class="form-control" />
                                    <span id="error_sushci" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <label>Specify Disability / Attached PWD Id<span class="text-danger">*</label>
                                    <input type="text" name="susdid" id="susdid" class="form-control" />
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
                                            <label>Date Recv. Phoc. PSA<span class="text-danger">*</span></label>
                                            <input type="text" name="sudrpic" id="sudrpic" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. 2x2 ID Picture<span class="text-danger">*</span></label>
                                            <input type="text" name="sudrpsa" id="sudrpsa" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Brgy. Indigency<span class="text-danger">*</span></label>
                                            <input type="text" name="sudrobr" id="sudrobr" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Phoc. PSA Status<span class="text-danger">*</span></label>
                                            <select name="sudrpicstat" id="sudrpicstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_sudrpicstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select 2x2 ID Pic. Status<span class="text-danger">*</span></label>
                                            <select name="sudrpsastat" id="sudrpsastat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_sudrpsastat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Brgy. Res. Status<span class="text-danger">*</span></label>
                                            <select name="sudrobrstat" id="sudrobrstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_sudrobrstat" class="text-danger"></span>
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
                                    <label>Email</label>
                                    <input type="text" name="susaemail" id="susaemail" class="form-control" />
                                    <span id="error_susaemail" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="susapass" id="susapass" class="form-control" />
                                    <span id="error_susapass" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Scholarship Details</div>
                                <div class="card-body">
                                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                        <label>Select Grant Status</label>
                                        <select name="susgrantstat" id="susgrantstat" class="form-control" required>
                                        <option value="">-Select-</option>
                                        <option value="New">New</option>
                                        <option value="Old">Old</option>
                                        </select>
                                        <span id="error_susgrantstat" class="text-danger"></span>
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
    var dataTable = $('#unifast_table').DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax" : {
            url:"unifastapp_action.php",
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

    $('#sndbirth').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
    $('#sudrpic').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
    $('#sudrpsa').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
    $('#sudrobr').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
    $('#snpbrgyin').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
    $('#snpscef').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });

// Add Validation&Submit
    $('#add_unifast').click(function(){

        $('#unifastModal').modal('show');

        $('#modal_title').text('Add UNIFAST Scholar');

        $('#submit_button').val('Add');

        $('#unifast_form')[0].reset();

        $('#unifast_form').parsley().reset();

        $('#submit_button').click(function(){
// Error Verify
        var error_sustudent_id = '';
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
        var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
        var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
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
        var error_sudrpicstat = '';
        var error_sudrpsastat = '';
        var error_sudrobrstat = '';

// Student ID Details
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
// Personal Details
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
        error_susmname = 'Put N/A if None';
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
        error_susgender = 'Gender is required';
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
// Family Details
        // Father Last Name
        if($.trim($('#susflname').val()).length == 0)
        {
        error_susflname = 'Last Name is required';
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
    
// Requirements Details
        
        if($.trim($('#sudrpsastat').val()).length == 0)
        {
        error_sudrpsastat = 'PSA Status is required';
        $('#error_sudrpsastat').text(error_sudrpsastat);
        $('#sudrpsastat').addClass('has-error');
        }
        else
        {
        error_sudrpsastat = '';
        $('#error_sudrpsastat').text(error_sudrpsastat);
        $('#sudrpsastat').removeClass('has-error');
        }

        if($.trim($('#sudrpicstat').val()).length == 0)
        {
        error_sudrpicstat = '2x2 ID pic. Status is required';
        $('#error_sudrpicstat').text(error_sudrpicstat);
        $('#sudrpicstat').addClass('has-error');
        }
        else
        {
        error_sudrpicstat = '';
        $('#error_sudrpicstat').text(error_sudrpicstat);
        $('#sudrpicstat').removeClass('has-error');
        }

        if($.trim($('#sudrobrstat').val()).length == 0)
        {
        error_sudrobrstat = 'Brgy. Res. Status is required';
        $('#error_sudrobrstat').text(error_sudrobrstat);
        $('#sudrobrstat').addClass('has-error');
        }
        else
        {
        error_sudrobrstat = '';
        $('#error_sudrobrstat').text(error_sudrobrstat);
        $('#sudrobrstat').removeClass('has-error');
        }
// Scholarship Details
    if($.trim($('#susgrantstat').val()).length == 0)
        {
        error_susgrantstat = 'Grant Status is required';
        $('#error_susgrantstat').text(error_susgrantstat);
        $('#susgrantstat').addClass('has-error');
        }
        else
        {
        error_susgrantstat = '';
        $('#error_susgrantstat').text(error_susgrantstat);
        $('#susgrantstat').removeClass('has-error');
        }
// Account Details
    if($.trim($('#susaemail').val()).length == 0)
    {
    error_susaemail = 'Email is required';
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
    error_susapass = 'Password is required';
    $('#error_susapass').text(error_susapass);
    $('#susapass').addClass('has-error');
    }
    else
    {
    error_susapass = '';
    $('#error_susapass').text(error_susapass);
    $('#susapass').removeClass('has-error');
    }
// Verification
            if(error_sustudent_id != ''                     
            || error_suslname != '' 
            || error_susfname != ''
            || error_susmname != '' 
            || error_susnext != ''
            || error_susgender != '' 
            || error_susdbirth != ''
            || error_suscontact != '' 
            || error_susaddress != ''
            || error_susspattended != '' 
            || error_suscp != ''
            || error_susyl != '' 
            || error_suspemail != ''
            || error_susflname != '' 
            || error_susffname != '' 
            || error_susfmname != '' 
            || error_susfnext != '' 
            || error_susmlname != '' 
            || error_susmfname != '' 
            || error_susmmname	 != '' 
            || error_susmnext != '' 
            || error_susdswd != '' 
            || error_susdid != '' 
            || error_sushci != '' 
            || error_susdfilled != ''
            || error_sudrpicstat != ''
            || error_sudrpsastat != ''
            || error_sudrobrstat != ''
            || error_susaemail != ''
            || error_ssusapass != ''
            )
            {
            return false;
            }
            else
            {
                $('#action').val('Add');

                $('#form_message').html('');
            }

        });
    });
// Submit
    $('#unifast_form').parsley();

    $('#unifast_form').on('submit', function(event){
        event.preventDefault();
        if($('#unifast_form').parsley().isValid())
        {		
            $.ajax({
                url:"unifastapp_action.php",
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
                        $('#unifastModal').modal('hide');
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

        var sunifast_id = $(this).data('id');

        $('#unifast_form')[0].reset();

        $('#unifast_form').parsley().reset();

        $('#form_message').html('');

        $.ajax({

            url:"unifastapp_action.php",

            method:"POST",

            data:{sunifast_id:sunifast_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
    // Account Details
                $('#susaemail').val(data.susaemail);
                $('#susapass').val(data.susapass);
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
                $('#sudrpic').val(data.sudrpic);
                $('#sudrpicstat').val(data.sudrpicstat);
                $('#sudrpsa').val(data.sudrpsa);
                $('#sudrpsastat').val(data.sudrpsastat);
                $('#sudrobr').val(data.sudrobr);
                $('#sudrobrstat').val(data.sudrobrstat);
                $('#snpbrgyin').val(data.snpbrgyin);
                $('#snpbrgyinstat').val(data.snpbrgyinstat);
                $('#snpscef').val(data.snpscef);
                $('#snpscefstat').val(data.snpscefstat);
    // Scholarship Details
                $('#snacapstype').val(data.snacapstype);
                $('#susgrantstat').val(data.susgrantstat);
                $('#snascholarstat').val(data.snascholarstat);
                $('#snadapply').val(data.snadapply);

                $('#modal_title').text('Edit Applicant Info');

                $('#action').val('Edit');

                $('#submit_button').val('Edit');

                $('#unifastModal').modal('show');

                $('#hidden_id').val(sunifast_id);

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

                url:"unifastapp_action.php",

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

            url:"unifastapp_action.php",

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
        var sunifast_id = $(this).data('id');

        $.ajax({

            url:"unifastapp_action.php",

            method:"POST",

            data:{sunifast_id:sunifast_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';
            // Account Details
                html += '<tr><th width="40%" class="text-right" style="font-size:20px">Account Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.susaemail+'</td></tr>';
            // Personal Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Personal Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.snfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.snmname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.snlname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.snnext+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date of Birth</th><td width="60%">'+data.sndbirth+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Citizenship</th><td width="60%">'+data.snctship+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.snaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.snpemail+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.sncontact+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Gender</th><td width="60%">'+data.sngender+'</td></tr>';
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
                html += '<tr><th width="40%" class="text-right">Date Receive Report Card</th><td width="60%">'+data.sudrpic+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Report Card Status</th><td width="60%">'+data.sudrpicstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.sudrpsa+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.sudrpsastat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.sudrobr+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.sudrobrstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.snpbrgyin+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.snpbrgyinstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.snpscef+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.snpscefstat+'</td></tr>';
            // Scholarship Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Scholarship Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Scholarship Type</th><td width="60%">'+data.snacapstype+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Grant Status</th><td width="60%">'+data.susgrantstat+'</td></tr>';
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
                url:"unifastapp_action.php",
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
                url:"unifastapp_action.php",
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
                url:"unifastapp_action.php",
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