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

<div id="acadModal" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
    	<form method="post" id="acad_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Add Academic Scholar</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
        			<span id="form_message"></span>
		          	<div class="form-group">
						<div class="row">
							<div class="col">
								<h4 class="sub-title">Account Details</h4>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" name="saemail" id="saemail" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-sm">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="sapass" id="sapass" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
		          		</div>
		          	</div>
                    <div class="form-group">
					  <h4 class="sub-title">Personal Details</h4>
                        <div class="row gap-3">
                            <div class="col-sm">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="sfname" id="sfname" class="form-control" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-sm">
                                <label>Middle Name<span class="text-danger">*</span></label>
                                <input type="text" name="smname" id="smname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
							<div class="col-sm">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="slname" id="slname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
							<div class="col-sm">
                                <label>Date of Birth<span class="text-danger">*</span></label>
                                <input type="text" name="sdbirth" id="sdbirth" readonly class="form-control" required />
                            </div>
                            <div class="col-sm">
								<label>Citizenship<span class="text-danger">*</span></label>
                                <input type="text" name="sctship" id="sctship" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm">
                                <label>Address<span class="text-danger">*</span></label>
                                <textarea type="text" name="saddress" id="saddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
							<div class="col-sm">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" name="semail" id="semail" class="form-control" required data-parsley-trigger="keyup" />
								<span id="error_semail" class="text-danger"></span>
                            </div>
                            <div class="col-sm">
								<label>Contact Number<span class="text-danger">*</span></label>
                                <input type="text" name="scontact" id="scontact" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
								<label>Select Gender</label>
									<select name="sgender" id="sgender" class="form-control" required>
										<option value="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
							</div>
                        </div> 
                    </div>
                    <div class="form-group">
					  <h4 class="sub-title">Family Details</h4>
					  <h5 class="sub-title">Guardian Details</h5>
                        <div class="row gap-3">
                            <div class="col">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="gfname" id="gfname" class="form-control" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col">
                                <label>Middle Name<span class="text-danger">*</span></label>
                                <input type="text" name="gmname" id="gmname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
							<div class="col">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="glname" id="glname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Address<span class="text-danger">*</span></label>
									<textarea type="text" name="gaddress" id="gaddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
								</div>
							</div>
                    	</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" name="gcontact" id="gcontact" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Occupation/Position<span class="text-danger">*</span></label>
									<input type="text" name="goccu" id="goccu" class="form-control" required data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Company<span class="text-danger">*</span></label>
									<input type="text" name="gcompany" id="gcompany" class="form-control" required data-parsley-trigger="keyup" />
								</div>
							</div>
                    	</div>
                    </div>
					<div class="form-group">
					  <h5 class="sub-title">Father Details</h5>
                        <div class="row gap-3">
                            <div class="col">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="ffname" id="ffname" class="form-control" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col">
                                <label>Middle Name<span class="text-danger">*</span></label>
                                <input type="text" name="fmname" id="fmname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
							<div class="col">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="flname" id="flname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Address<span class="text-danger">*</span></label>
									<textarea type="text" name="faddress" id="faddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
								</div>
							</div>
                    	</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" name="fcontact" id="fcontact" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Occupation/Position<span class="text-danger">*</span></label>
									<input type="text" name="foccu" id="foccu" class="form-control" required data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Company<span class="text-danger">*</span></label>
									<input type="text" name="fcompany" id="fcompany" class="form-control" required data-parsley-trigger="keyup" />
								</div>
							</div>
                    	</div>
                    </div>
					<div class="form-group">
					  <h5 class="sub-title">Mother Details</h5>
                        <div class="row gap-3">
                            <div class="col">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="mfname" id="mfname" class="form-control" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col">
                                <label>Middle Name<span class="text-danger">*</span></label>
                                <input type="text" name="mmname" id="mmname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
							<div class="col">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="mlname" id="mlname" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Address<span class="text-danger">*</span></label>
									<textarea type="text" name="maddress" id="maddress" class="form-control" required data-parsley-trigger="keyup"></textarea>
								</div>
							</div>
                    	</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Contact Number<span class="text-danger">*</span></label>
									<input type="text" name="mcontact" id="mcontact" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Occupation/Position<span class="text-danger">*</span></label>
									<input type="text" name="moccu" id="moccu" class="form-control" required data-parsley-trigger="keyup" />
								</div>
								<div class="col">
									<label>Company<span class="text-danger">*</span></label>
									<input type="text" name="mcompany" id="mcompany" class="form-control" required data-parsley-trigger="keyup" />
								</div>
							</div>
                    	</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Parents Combine Yearly Income<span class="text-danger">*</span></label>
									<input type="text" name="spcyincome" id="spcyincome" class="form-control" required data-parsley-trigger="keyup" />
								</div>
							</div>
                    	</div>
						<div class="form-group">
						<h4 class="sub-title">Achievements</h4>
							<div class="row">
								<div class="col">
									<label>Awards and Recognitions<span class="text-danger">*</span></label>
									<textarea type="text" name="sraward" id="sraward" class="form-control" required data-parsley-trigger="keyup"></textarea>
								</div>
							</div>
                    	</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm">
									<label>Date Award Received<span class="text-danger">*</span></label>
									<input type="text" name="sdawardrceive" id="sdawardrceive" readonly class="form-control" required />
								</div>
								<div class="col-sm">
									<label>GWA<span class="text-danger">*</span></label>
									<input type="text" name="sagwa" id="sagwa" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="form-group">
						<h4 class="sub-title">Requirements</h4>
							<div class="row">
								<div class="col-sm">
									<label>Submit Photocopy of Report Card<span class="text-danger">*</span></label>
									<input type="text" name="sadsprc" id="sadsprc" readonly class="form-control" required />
								</div>
								<div class="col-sm">
									<label>Submit Photocopy of Good Moral<span class="text-danger">*</span></label>
									<input type="text" name="sadspgm" id="sadspgm" readonly class="form-control" required />
								</div>
								<div class="col-sm">
									<label>Submit Certificate of Recognition<span class="text-danger">*</span></label>
									<input type="text" name="sadspcr" id="sadspcr" readonly class="form-control" required />
								</div>
							</div>
						</div> 
						<div class="form-group">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
								<label>Select Scholar Type</label>
									<select name="sacapstype" id="sacapstype" class="form-control" required>
										<option value="New">New</option>
										<option value="Old Scholar">Old Scholar</option>
									</select>
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
<style>
.removeRow
{
    background-color: #FF0000;
    color:#FFFFFF;
}
</style>
<script>
$(document).ready(function(){

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

    $('#sdbirth').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });
	$('#sdawardrceive').datepicker({
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

	$('#add_acad').click(function(){
		
		$('#acad_form')[0].reset();

		$('#acad_form').parsley().reset();

    	$('#modal_title').text('Add Academic Scholar');

    	$('#action').val('Add');

    	$('#submit_button').val('Add');

    	$('#acadModal').modal('show');

    	$('#form_message').html('');

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
                $('#saemail').val(data.saemail);
                $('#sapass').val(data.sapass);
				// Personal Details
                $('#sfname').val(data.sfname);
                $('#smname').val(data.smname);
				$('#slname').val(data.slname);
				$('#sdbirth').val(data.sdbirth);
                $('#sctship').val(data.sctship);
				$('#saddress').val(data.saddress);
				$('#semail').val(data.semail);
                $('#scontact').val(data.scontact);
				$('#sgender').val(data.sgender);
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
				$('#sraward').val(data.sraward);
				$('#sdawardrceive').val(data.sdawardrceive);
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
				html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.saemail+'</td></tr>';
				// Personal Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Personal Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.sfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.smname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.slname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date of Birth</th><td width="60%">'+data.sdbirth+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Citizenship</th><td width="60%">'+data.sctship+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.saddress+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Email Address</th><td width="60%">'+data.semail+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.scontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Gender</th><td width="60%">'+data.sgender+'</td></tr>';
				// Family Details
				// Guardian Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Family Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Guardian Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.gfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.gmname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.glname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.gaddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.gcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.goccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.gcompany+'</td></tr>';
				// Father Details
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Father Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.ffname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.fmname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.flname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.faddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.fcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.foccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.fcompany+'</td></tr>';
				// Mother Details
				html += '<tr><th width="40%" class="text-left" style="font-size:18px">Mother Details</th><td width="60%"></td></tr>';
                html += '<tr><th width="40%" class="text-right">First Name</th><td width="60%">'+data.mfname+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Middle Name</th><td width="60%">'+data.mmname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Last Name</th><td width="60%">'+data.mlname+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Address</th><td width="60%">'+data.maddress+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Contact Number</th><td width="60%">'+data.mcontact+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Occupation/Position</th><td width="60%">'+data.moccu+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Company</th><td width="60%">'+data.mcompany+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Parents Combine Yearly Income</th><td width="60%">'+data.spcyincome+'</td></tr>';
				// Achievement Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Achievement Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Grade/GWA</th><td width="60%">'+data.sagwa+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Award Received</th><td width="60%">'+data.sraward+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Date Received</th><td width="60%">'+data.sdawardrceive+'</td></tr>';
				// Requirement Details
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Requirement Details</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Submit Photocopy of Report Card</th><td width="60%">'+data.sadsprc+'</td></tr>';
                html += '<tr><th width="40%" class="text-right">Submit Photocopy of Good Moral</th><td width="60%">'+data.sadspgm+'</td></tr>';
				html += '<tr><th width="40%" class="text-right">Submit Certificate of Recognition</th><td width="60%">'+data.sadspcr+'</td></tr>';
				// Scholar Type
				html += '<tr><th width="40%" class="text-left" style="font-size:20px">Scholar Category</th><td width="60%"></td></tr>';
				html += '<tr><th width="40%" class="text-right">Scholar Type</th><td width="60%">'+data.sacapstype+'</td></tr>';
                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#acad_details').html(html);

            }

        })
    });

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
            alert("Select atleast one records");
        }
    });

});
</script>