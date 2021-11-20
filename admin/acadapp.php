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
		<h1 class="h3 mb-4 text-gray-800">Academic Application Management</h1>

		<!-- DataTales Example -->
		<span id="message"></span>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col">
						<h6 class="m-0 font-weight-bold text-primary">Applicant List</h6>
					</div>
					<div class="col" align="right">
						<button type="button" name="add_acad" id="add_acad" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
						<button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-times"></i></button>
						<button type="button" name="approve_all" id="approve_all" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-thumbs-up"></i></button>
						<button type="button" name="reject_all" id="reject_all" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-thumbs-down"></i></button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="acad_table" width="100%" cellspacing="0">
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
	<div id="acadModal" class="modal fade">
		<div class="modal-dialog modal-lg modal-dialog-scrollable">
			<form method="post" id="acad_form" class="needs-validation" novalidate>
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modal_title">Add Academic Scholar</h4>
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
									<input type="text" name="safname" id="safname" class="form-control" required/>
									<span id="error_safname" class="text-danger"></span>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3">
									<label>Middle Name<span class="text-danger">*</span></label>
									<input type="text" name="samname" id="samname" class="form-control" required/>
									<span id="error_samname" class="text-danger"></span>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3">
									<label>Last Name<span class="text-danger">*</span></label>
									<input type="text" name="salname" id="salname" class="form-control" required/>
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
									<input type="text" name="sadbirth" id="sadbirth" readonly class="form-control" required />
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
								<div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" name="sacontact" id="sacontact" class="form-control" />
									<span id="error_sacontact" class="text-danger"></span>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5">
									<label>Course<span class="text-danger">*</span></label>
									<input type="text" name="sacourse" id="sacourse" class="form-control" />
									<span id="error_sacourse" class="text-danger"></span>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">
									<label>Grade/Year Level<span class="text-danger">*</span></label>
									<input type="text" name="sagyl" id="sagyl" class="form-control" />
									<span id="error_sagyl" class="text-danger"></span>
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
							<h5 class="sub-title" style="font-weight: bold; font-size: 16px;">Guardian Details</h5>
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
							<h5 class="sub-title" style="font-weight: bold; font-size: 16px;">Father Details</h5>
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
							<h5 class="sub-title" style="font-weight: bold; font-size: 16px;">Mother Details</h5>
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
						</div>
						</div>
						</div>
						<div class="form-group">
							<div class="card">
							<div class="card-header" style="font-weight: bold; font-size: 18px;">Achievement Details</div>
								<div class="card-body">
								<div class="form-group">
								<label>Grade/GWA</label>
								<input type="text" name="sagwa" id="sagwa" class="form-control" />
								<span id="error_sagwa" class="text-danger"></span>
								</div>
								<div class="form-group">
								<label>Award Received</label>
								<textarea name="saraward" id="saraward" class="form-control"></textarea>
								<span id="error_saraward" class="text-danger"></span>
								</div>
								<div class="form-group">
								<label>Date Received</label>
									<input type='text' name="sadawardrceive" id="sadawardrceive" readonly class="form-control" required>
									<span id="error_sadawardrceive" class="text-danger"></span>
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
											<label>Date Receive Report Card<span class="text-danger">*</span></label>
											<input type="text" name="sadsprc" id="sadsprc" readonly class="form-control" />
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4">
											<label>Date Receive Good Moral<span class="text-danger">*</span></label>
											<input type="text" name="sadspgm" id="sadspgm" readonly class="form-control" />
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4">
											<label>Date Receive Cert. of Recog.<span class="text-danger">*</span></label>
											<input type="text" name="sadspcr" id="sadspcr" readonly class="form-control" />
										</div>
									</div>
									<div class="row g-3">
										<div class="col-xs-12 col-sm-12 col-md-4">
											<label>Select Report Card Status<span class="text-danger">*</span></label>
											<select name="sadsprcstat" id="sadsprcstat" class="form-control" required>
											<option value="">-Select-</option>
											<option value="Received">Received</option>
											<option value="Not-Received">Not-Received</option>
											</select>
											<span id="error_sadsprcstat" class="text-danger"></span>
										</div>
											<div class="col-xs-12 col-sm-12 col-md-4">
											<label>Select Good Moral Status<span class="text-danger">*</span></label>
											<select name="sadspgmstat" id="sadspgmstat" class="form-control" required>
											<option value="">-Select-</option>
											<option value="Received">Received</option>
											<option value="Not-Received">Not-Received</option>
											</select>
											<span id="error_sadspgmstat" class="text-danger"></span>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4">
											<label>Select Cert. of Recog. Status<span class="text-danger">*</span></label>
											<select name="sadspcrstat" id="sadspcrstat" class="form-control" required>
											<option value="">-Select-</option>
											<option value="Received">Received</option>
											<option value="Not-Received">Not-Received</option>
											</select>
											<span id="error_sadspcrstat" class="text-danger"></span>
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
									<input type="text" name="saaemail" id="saaemail" class="form-control" />
									<span id="error_saaemail" class="text-danger"></span>
									</div>
									<div class="form-group">
									<label>Password</label>
									<input type="password" name="sapass" id="sapass" class="form-control" />
									<span id="error_sapass" class="text-danger"></span>
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
										<select name="sagrantstat" id="sagrantstat" class="form-control" required>
										<option value="">-Select-</option>
										<option value="New">New</option>
										<option value="Old">Old</option>
										</select>
										<span id="error_sagrantstat" class="text-danger"></span>
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
				<div class="modal-body" id="acad_details">
					
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
<script>
$(document).ready(function(){
// Table Function
	var dataTable = $('#acad_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"acadapp_action.php",
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

    $('#sadbirth').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
	$('#sadawardrceive').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
	$('#sadsprc').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
	$('#sadspgm').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
	$('#sadspcr').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });

// Add Validation&Submit
	$('#add_acad').click(function(){

		$('#acadModal').modal('show');

		$('#acad_form')[0].reset();

		$('#acad_form').parsley().reset();

		$('#modal_title').text('Add Academic Scholar');

		$('#submit_button').click(function(){
		
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
			var error_sagwa = '';
			var error_saraward = '';
			var error_sadawardrceive = '';
			var error_sadsprcstat = '';
			var error_sadspgmstat = '';
			var error_sadspcrstat = '';
			var error_flexCheckDefault = '';
			var error_sagrantstat = '';
			var error_saaemail = '';
  			var error_sapass = '';

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
			
			// Achievement
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
			error_sadawardrceive = 'Date Award Received is required';
			$('#error_sadawardrceive').text(error_sadawardrceive);
			$('#sadawardrceive').addClass('has-error');
			}
			else
			{
			error_sadawardrceive = '';
			$('#error_sadawardrceive').text(error_sadawardrceive);
			$('#sadawardrceive').removeClass('has-error');
			}

			if($.trim($('#sadsprcstat').val()).length == 0)
			{
			error_sadsprcstat = 'Report Card Status is required';
			$('#error_sadsprcstat').text(error_sadsprcstat);
			$('#sadsprcstat').addClass('has-error');
			}
			else
			{
			error_sadsprcstat = '';
			$('#error_sadsprcstat').text(error_sadsprcstat);
			$('#sadsprcstat').removeClass('has-error');
			}

			if($.trim($('#sadspgmstat').val()).length == 0)
			{
			error_sadspgmstat = 'Good Moral Status is required';
			$('#error_sadspgmstat').text(error_sadspgmstat);
			$('#sadspgmstat').addClass('has-error');
			}
			else
			{
			error_sadspgmstat = '';
			$('#error_sadspgmstat').text(error_sadspgmstat);
			$('#sadspgmstat').removeClass('has-error');
			}

			if($.trim($('#sadspcrstat').val()).length == 0)
			{
			error_sadspcrstat = 'Cert. of Recog. Status is required';
			$('#error_sadspcrstat').text(error_sadspcrstat);
			$('#sadspcrstat').addClass('has-error');
			}
			else
			{
			error_sadspcrstatt = '';
			$('#error_sadspcrstat').text(error_sadspcrstat);
			$('#sadspcrstat').removeClass('has-error');
			}

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

			if($.trim($('#sagrantstat').val()).length == 0)
			{
			error_sagrantstat = 'Date Received is required';
			$('#error_sagrantstat').text(error_sagrantstat);
			$('#sagrantstat').addClass('has-error');
			}
			else
			{
			error_sagrantstat = '';
			$('#error_sagrantstat').text(error_sagrantstat);
			$('#sagrantstat').removeClass('has-error');
			}

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

			if(error_safname != '' 
			|| error_samname != '' 
			|| error_salname != '' 
			|| error_sanext != ''
			|| error_sadbirth != '' 
			|| error_sactship != '' 
			|| error_saaddress != '' 
			|| error_sapemail != '' 
			|| error_sacontact != '' 
			|| error_sacourse != '' 
			|| error_sagyl != '' 
			|| error_sagfname != '' 
			|| error_sagmname != '' 
			|| error_saglname != '' 
			|| error_sagnext != '' 
			|| error_sagaddress != '' 
			|| error_sagcontact != '' 
			|| error_sagoccu != '' 
			|| error_sagcompany != '' 
			|| error_saffname != '' 
			|| error_safmname != '' 
			|| error_saflname != '' 
			|| error_safnext != '' 
			|| error_safaddress != '' 
			|| error_safcontact != '' 
			|| error_safoccu != '' 
			|| error_safcompany != '' 
			|| error_samfname != '' 
			|| error_sammname != '' 
			|| error_samlname != '' 
			|| error_samnext != '' 
			|| error_samaddress != '' 
			|| error_samcontact != '' 
			|| error_samoccu != '' 
			|| error_samcompany != '' 
			|| error_saspcyincome != ''
			|| error_sagwa != ''
			|| error_saraward != ''
			|| error_sadawardrceive != ''
			|| error_sadsprcstat != ''
			|| error_sadspgmstat != ''
			|| error_sadspcrstat != ''
			|| error_flexCheckDefault != ''
			|| error_sagrantstat != ''
			|| error_saaemail != ''
     		|| error_sapass != ''
			)
			{
			return false;
			}
			else
			{
				$('#action').val('Add');

				$('#submit_button').val('Add');

				$('#form_message').html('');
			}
	
		});
	});

	$('#acad_form').parsley();

	$('#acad_form').on('submit', function(event){
		event.preventDefault();
		if($('#acad_form').parsley().isValid())
		{		
			$.ajax({
				url:"acadapp_action.php",
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
						$('#acadModal').modal('hide');
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

		var sacad_id = $(this).data('id');

		$('#acad_form')[0].reset();

		$('#acad_form').parsley().reset();

		$('#form_message').html('');

		$.ajax({

	      	url:"acadapp_action.php",

	      	method:"POST",

	      	data:{sacad_id:sacad_id, action:'fetch_single'},

	      	dataType:'JSON',

	      	success:function(data)
	      	{
				// Account Details
                $('#saaemail').val(data.saaemail);
                $('#sapass').val(data.sapass);
				// Personal Details
                $('#safname').val(data.safname);
                $('#samname').val(data.samname);
				$('#salname').val(data.salname);
				$('#sadbirth').val(data.sadbirth);
                $('#sactship').val(data.sactship);
				$('#saaddress').val(data.saaddress);
				$('#sapemail').val(data.sapemail);
                $('#sacontact').val(data.sacontact);
				$('#sagender').val(data.sagender);
				// Family Details
				// Guardian Details
                $('#gfname').val(data.gfname);
                $('#gmname').val(data.gmname);
				$('#glname').val(data.glname);
				$('#gaddress').val(data.gaddress);
                $('#gcontact').val(data.gcontact);
				$('#goccu').val(data.goccu);
				$('#gcompany').val(data.gcompany);
				// Father Details
                $('#ffname').val(data.ffname);
                $('#fmname').val(data.fmname);
				$('#flname').val(data.flname);
				$('#faddress').val(data.faddress);
                $('#fcontact').val(data.fcontact);
				$('#foccu').val(data.foccu);
				$('#fcompany').val(data.fcompany);
				// Mother Details
                $('#mfname').val(data.mfname);
                $('#mmname').val(data.mmname);
				$('#mlname').val(data.mlname);
				$('#maddress').val(data.maddress);
                $('#mcontact').val(data.mcontact);
				$('#moccu').val(data.moccu);
				$('#mcompany').val(data.mcompany);
				$('#spcyincome').val(data.spcyincome);
				// Achievement Details
                $('#sagwa').val(data.sagwa);
				$('#saraward').val(data.saraward);
				$('#sadawardrceive').val(data.sadawardrceive);
				// Requirement Details
				$('#sadsprc').val(data.sadsprc);
				$('#sadspgm').val(data.sadspgm);
				$('#sadspcr').val(data.sadspcr);
				// Requirement Details
				$('#sacapstype').val(data.sacapstype);

	        	$('#modal_title').text('Edit Applicant Info');

	        	$('#action').val('Edit');

	        	$('#submit_button').val('Edit');

	        	$('#acadModal').modal('show');

	        	$('#hidden_id').val(sacad_id);

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

        		url:"acadapp_action.php",

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

			url:"acadapp_action.php",

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
        var sacad_id = $(this).data('id');

        $.ajax({

            url:"acadapp_action.php",

            method:"POST",

            data:{sacad_id:sacad_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';
			// Account Details
				html += '<tr><th width="40%" class="text-right" style="font-size:20px">Account Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.saaemail+'</td></tr>';
			// Personal Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Personal Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.safname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.samname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.salname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.sanext+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date of Birth</th><td width="60%">'+data.sadbirth+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Citizenship</th><td width="60%">'+data.sactship+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.saaddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.sapemail+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.sacontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Gender</th><td width="60%">'+data.sagender+'</td></tr>';
			// Family Details
				// Guardian Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Family Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Guardian Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.sagfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.sagmname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.saglname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.sagnext+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.sagaddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.sagcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.sagoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.sagcompany+'</td></tr>';
				// Father Details
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Father Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.saffname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.safmname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.saflname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.safnext+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.safaddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.safcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.safoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.safcompany+'</td></tr>';
				// Mother Details
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Mother Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.samfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.sammname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.samlname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Suffix</th><td width="60%">'+data.samnext+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.samaddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.samcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.samoccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.samcompany+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Parents Combine Yearly Income</th><td width="60%">'+data.saspcyincome+'</td></tr>';
			// Achievement Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Achievement Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Grade/GWA</th><td width="60%">'+data.sagwa+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Award Received</th><td width="60%">'+data.saraward+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date Received</th><td width="60%">'+data.sadawardrceive+'</td></tr>';
			// Requirement Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Requirement Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Date Receive Report Card</th><td width="60%">'+data.sadsprc+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Report Card Status</th><td width="60%">'+data.sadsprcstat+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Date Receive Good Moral</th><td width="60%">'+data.sadspgm+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Good Moral Status</th><td width="60%">'+data.sadspgmstat+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date Receive Certificate of Recognition</th><td width="60%">'+data.sadspcr+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Certificate of Recognition Status</th><td width="60%">'+data.sadspcrstat+'</td></tr>';
			// Scholarship Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Scholarship Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Scholarship Type</th><td width="60%">'+data.sacapstype+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Grant Status</th><td width="60%">'+data.sagrantstat+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Scholarship Status</th><td width="60%">'+data.sascholarstat+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date Applied</th><td width="60%">'+data.sadapply+'</td></tr>';
                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#acad_details').html(html);

            }

        })
    });

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
                url:"acadapp_action.php",
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
                url:"acadapp_action.php",
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

    $('#delete_all').click(function(){
        var checkbox = $('.checkbox:checked');
        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });

            $.ajax({
                url:"acadapp_action.php",
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