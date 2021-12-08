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
    <h1 class="h3 mb-4 text-gray-800">Non-Academic Application Management</h1>

    <!-- DataTales Example -->
    <span id="message"></span>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Applicant List</h6>
                </div>
                <div class="col" align="right">
                    <button type="button" name="add_nonacad" id="add_nonacad" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                    <button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-times"></i></button>
                    <button type="button" name="approve_all" id="approve_all" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-thumbs-up"></i></button>
                    <button type="button" name="reject_all" id="reject_all" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-thumbs-down"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="nonacad_table" width="100%" cellspacing="0">
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
    <div id="nonacadModal" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <form method="post" id="nonacad_form" class="needs-validation" novalidate>
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title">Add Non-Academic Scholar</h4>
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
                                    <input type='text' name="sndbirth" id="sndbirth" class="form-control" readonly>
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
                                <div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">
                                    <label>Contact Number<span class="text-danger">*</span></label>
                                    <input type="text" name="sncontact" id="sncontact" class="form-control" />
                                    <span id="error_sncontact" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <label>Course<span class="text-danger">*</span></label>
                                    <input type="text" name="sncourse" id="sncourse" class="form-control" />
                                    <span id="error_sncourse" class="text-danger"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">
                                    <label>Grade/Year Level<span class="text-danger">*</span></label>
                                    <input type="text" name="snyrlvl" id="snyrlvl" class="form-control" />
                                    <span id="error_snyrlvl" class="text-danger"></span>
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
                            <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Guardian Details</h4>
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
                                <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Father Details</h4>
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
                                <h4 class="sub-title" style="font-weight: bold; font-size: 16px;">Mother Details</h4>
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
                                <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                    <label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
                                    <input type="text" name="snspcyincome" id="snspcyincome" class="form-control" />
                                    <span id="error_snspcyincome" class="text-danger"></span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                            <div class="card-header" style="font-weight: bold; font-size: 18px;">Application Details</div>
                                <div class="card-body">
                                <div class="form-group">
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
                                            <input type="text" name="snasprc" id="snasprc" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Good Moral<span class="text-danger">*</span></label>
                                            <input type="text" name="snapgm" id="snapgm" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. 2x2 ID Picture<span class="text-danger">*</span></label>
                                            <input type="text" name="sntbytpic" id="sntbytpic" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Report Card Status<span class="text-danger">*</span></label>
                                            <select name="snasprcstat" id="snasprcstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_snasprcstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Good Moral Status<span class="text-danger">*</span></label>
                                            <select name="snapgmstat" id="snapgmstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_snapgmstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select 2x2 ID Pic. Status<span class="text-danger">*</span></label>
                                            <select name="sntbytpicstat" id="sntbytpicstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_sntbytpicstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Date Recv. Brgy. Indigency<span class="text-danger">*</span></label>
                                            <input type="text" name="snpbrgyin" id="snpbrgyin" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                            <label>Date Recv. Enrollment Form<span class="text-danger">*</span></label>
                                            <input type="text" name="snpscef" id="snpscef" readonly class="form-control" />
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <label>Select Brgy. Indigency Status<span class="text-danger">*</span></label>
                                            <select name="snpbrgyinstat" id="snpbrgyinstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_snpbrgyinstat" class="text-danger"></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                                            <label>Select ENRL Form Status<span class="text-danger">*</span></label>
                                            <select name="snpscefstat" id="snpscefstat" class="form-control" required>
                                            <option value="">-Select-</option>
                                            <option value="Received">Received</option>
                                            <option value="Not-Received">Not-Received</option>
                                            </select>
                                            <span id="error_snpscefstat" class="text-danger"></span>
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
                                    <input type="text" name="snaemail" id="snaemail" class="form-control" />
                                    <span id="error_snaemail" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="snapass" id="snapass" class="form-control" />
                                    <span id="error_snapass" class="text-danger"></span>
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
                                        <select name="sngrantstat" id="sngrantstat" class="form-control" required>
                                        <option value="">-Select-</option>
                                        <option value="New">New</option>
                                        <option value="Old">Old</option>
                                        </select>
                                        <span id="error_sngrantstat" class="text-danger"></span>
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
        var dataTable = $('#nonacad_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"nonacadapp_action.php",
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
        $('#snasprc').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
        $('#snapgm').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
        $('#sntbytpic').datepicker({
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
    $('#add_nonacad').click(function(){

        $('#nonacadModal').modal('show');

        $('#modal_title').text('Add Non-Academic Scholar');

        $('#submit_button').val('Add');

        $('#nonacad_form')[0].reset();

        $('#nonacad_form').parsley().reset();

        $('#submit_button').click(function(){
// Error Verify
            var error_snfname = '';
            var error_snmname = '';
            var error_snlname = '';
            var error_snnext = '';
            var error_sndbirth = '';
            var error_sngender = '';
            var error_snctship = '';
            var error_snaddress = '';
            var error_snpemail = '';
            var error_sncontact = '';
            var emailval = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/;
            var pcnumval = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
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
            var error_snrappnas = '';
            var error_snbos = '';
            var error_snsskills = '';
            var error_sntwinterest = '';
            var error_snpschatt = '';
            var error_snpyrlvl = '';
            var error_snpschadd = '';
            var error_snasprcstat = '';
            var error_snapgmstat = '';
            var error_sntbytpicstat = '';
            var error_snpbrgyinstat = '';
            var error_snpscefstat = '';
            var error_sngrantstat = '';
            var error_snaemail = '';
            var error_snapass = '';

// Personal Details
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
// Family Details
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
        error_snmcontact = '';
        $('#error_snmcontact').text(error_snmcontact);
        $('#snmcontact').removeClass('has-error');
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
// Application Details
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

// Education Details
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
// Requiremtents Details
    if($.trim($('#snasprcstat').val()).length == 0)
    {
    error_snasprcstat = 'Report Card Status is required';
    $('#error_snasprcstat').text(error_snasprcstat);
    $('#snasprcstat').addClass('has-error');
    }
    else
    {
    error_snasprcstat = '';
    $('#error_snasprcstat').text(error_snasprcstat);
    $('#snasprcstat').removeClass('has-error');
    }

    if($.trim($('#snapgmstat').val()).length == 0)
    {
    error_snapgmstat = 'Good Moral Status is required';
    $('#error_snapgmstat').text(error_snapgmstat);
    $('#snapgmstat').addClass('has-error');
    }
    else
    {
    error_snapgmstat = '';
    $('#error_snapgmstat').text(error_snapgmstat);
    $('#snapgmstat').removeClass('has-error');
    }

    if($.trim($('#sntbytpicstat').val()).length == 0)
    {
    error_sntbytpicstat = '2x2 ID pic. Status is required';
    $('#error_sntbytpicstat').text(error_sntbytpicstat);
    $('#sntbytpicstat').addClass('has-error');
    }
    else
    {
    error_sntbytpicstat = '';
    $('#error_sntbytpicstat').text(error_sntbytpicstat);
    $('#sntbytpicstat').removeClass('has-error');
    }

    if($.trim($('#snpbrgyinstat').val()).length == 0)
    {
    error_snpbrgyinstat = 'Brgy. Indegency Status is required';
    $('#error_snpbrgyinstat').text(error_snpbrgyinstat);
    $('#snpbrgyinstat').addClass('has-error');
    }
    else
    {
    error_snpbrgyinstat = '';
    $('#error_snpbrgyinstat').text(error_snpbrgyinstat);
    $('#snpbrgyinstat').removeClass('has-error');
    }

    if($.trim($('#snpscefstat').val()).length == 0)
    {
    error_snpscefstat = 'Enrollment Form Status is required';
    $('#error_snpscefstat').text(error_snpscefstat);
    $('#snpscefstat').addClass('has-error');
    }
    else
    {
    error_snpscefstat = '';
    $('#error_snpscefstat').text(error_snpscefstat);
    $('#snpscefstat').removeClass('has-error');
    }
// Scholarship Details
    if($.trim($('#sngrantstat').val()).length == 0)
        {
        error_sngrantstat = 'Grant Status is required';
        $('#error_sngrantstat').text(error_sngrantstat);
        $('#sngrantstat').addClass('has-error');
        }
        else
        {
        error_sngrantstat = '';
        $('#error_sngrantstat').text(error_sngrantstat);
        $('#sngrantstat').removeClass('has-error');
        }
// Account Details
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
// Verification
            if(error_snfname != ''                        
            || error_snmname != '' 
            || error_snlname != '' 
            || error_snnext != '' 
            || error_sndbirth != '' 
            || error_snctship != '' 
            || error_snaddress != '' 
            || error_snpemail != '' 
            || error_sncontact != ''
            || error_sngender != ''
            || error_sncourse != '' 
            || error_snyrlvl != ''
            || error_sngfname != '' 
            || error_sngmname != '' 
            || error_snglname != '' 
            || error_sngnext != '' 
            || error_sngaddress != '' 
            || error_sngcontact != '' 
            || error_sngoccu != '' 
            || error_sngcompany != '' 
            || error_snffname != '' 
            || error_snfmname != '' 
            || error_snflname != '' 
            || error_snfnext != '' 
            || error_snfaddress != '' 
            || error_snfcontact != '' 
            || error_snfoccu != '' 
            || error_snfcompany != '' 
            || error_snmfname != '' 
            || error_snmmname != '' 
            || error_snmlname != ''
            || error_snmnext != '' 
            || error_snmaddress != '' 
            || error_snmcontact != '' 
            || error_snmoccu != '' 
            || error_snmcompany != '' 
            || error_snspcyincome != ''
            || error_snrappnas != ''
            || error_snbos != ''
            || error_snsskills != ''
            || error_sntwinterest != ''
            || error_snpschatt != ''
            || error_snpschadd != ''
            || error_snpyrlvl != ''
            || error_snasprcstat != ''
            || error_snapgmstat != ''
            || error_sntbytpicstat != ''
            || error_snpbrgyinstat != ''
            || error_snpscefstat != ''
            || error_sngrantstat != ''
            || error_snaemail != ''
            || error_snapass != ''
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
    $('#nonacad_form').parsley();

    $('#nonacad_form').on('submit', function(event){
        event.preventDefault();
        if($('#nonacad_form').parsley().isValid())
        {		
            $.ajax({
                url:"nonacadapp_action.php",
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
                        $('#nonacadModal').modal('hide');
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

        $('#nonacad_form')[0].reset();

        $('#nonacad_form').parsley().reset();

        $('#form_message').html('');

        $.ajax({

            url:"nonacadapp_action.php",

            method:"POST",

            data:{snacad_id:snacad_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
    // Account Details
                $('#snaemail').val(data.snaemail);
                $('#snapass').val(data.snapass);
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
                $('#snasprc').val(data.snasprc);
                $('#snasprcstat').val(data.snasprcstat);
                $('#snapgm').val(data.snapgm);
                $('#snapgmstat').val(data.snapgmstat);
                $('#sntbytpic').val(data.sntbytpic);
                $('#sntbytpicstat').val(data.sntbytpicstat);
                $('#snpbrgyin').val(data.snpbrgyin);
                $('#snpbrgyinstat').val(data.snpbrgyinstat);
                $('#snpscef').val(data.snpscef);
                $('#snpscefstat').val(data.snpscefstat);
    // Scholarship Details
                $('#snacapstype').val(data.snacapstype);
                $('#sngrantstat').val(data.sngrantstat);
                $('#snascholarstat').val(data.snascholarstat);
                $('#snadapply').val(data.snadapply);

                $('#modal_title').text('Edit Applicant Info');

                $('#action').val('Edit');

                $('#submit_button').val('Edit');

                $('#nonacadModal').modal('show');

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

                url:"nonacadapp_action.php",

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

            url:"nonacadapp_action.php",

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

            url:"nonacadapp_action.php",

            method:"POST",

            data:{snacad_id:snacad_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';
            // Account Details
                html += '<tr><th width="40%" class="text-right" style="font-size:20px">Account Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.snaemail+'</td></tr>';
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
                html += '<tr><th width="40%" class="text-right">Date Receive Report Card</th><td width="60%">'+data.snasprc+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Report Card Status</th><td width="60%">'+data.snasprcstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.snapgm+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.snapgmstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.sntbytpic+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.sntbytpicstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.snpbrgyin+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.snpbrgyinstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.snpscef+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.snpscefstat+'</td></tr>';
            // Scholarship Details
                html += '<tr><th width="40%" class="text-left" style="font-size:20px">Scholarship Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">Scholarship Type</th><td width="60%">'+data.snacapstype+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Grant Status</th><td width="60%">'+data.sngrantstat+'</td></tr>';
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
                url:"nonacadapp_action.php",
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
                url:"nonacadapp_action.php",
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
                url:"nonacadapp_action.php",
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