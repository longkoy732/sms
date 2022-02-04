<?php

include('../class/dbcon.php');

$object = new sms;

if(!$object->is_login())
{
    header("location:".$object->base_url."");
}

if($_SESSION['type'] != 'Student')
{
    header("location:".$object->base_url."");
}

$object->query = "
    SELECT * FROM tbl_student
    WHERE s_id = '".$_SESSION["admin_id"]."'
    ";

$result = $object->get_result();

include('header.php');

?>
                    
                    <form method="post" id="profile_form" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                            <h1 class="h3 mb-4 text-gray-800">Student Profile Management</h1>
                            <span id="message"></span>
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <h5 style="font-weight: bold; font-size: 18px">Profile</h5>
                                    </div>
                                    <div class="col" align="right">
                                        <input type="hidden" name="action" value="student_profile" />
                                        <!-- <input type="hidden" name="hidden_id" id="hidden_id" /> -->
                                        <button type="submit" name="edit_button" id="edit_button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                        <span id="form_message"></span>
                                    <!-- <fieldset disabled> -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <label>Student First Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="sfname" id="sfname" class="form-control" required data-parsley-trigger="keyup" />
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <label>Student Middle Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="smname" id="smname" class="form-control" required data-parsley-trigger="keyup" />
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <label>Student Last Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="slname" id="slname" class="form-control" required data-parsley-trigger="keyup" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Date of Birth <span class="text-danger">*</span></label>
                                                    <input type="date" name="sdbirth" id="sdbirth" class="form-control" />
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="saddress" id="saddress" class="form-control" required data-parsley-trigger="keyup" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Course<span class="text-danger">*</span></label>
                                                    <select name="sccourse" id="sccourse" class="form-control" required>
                                                    <option value="">-Select-</option>
                                                    <option value="BSIT">BSIT</option>
                                                    <option value="BSBA">BSBA</option>
                                                    <option value="BEED">BEED</option>
                                                    <option value="BSED">BSED</option>
                                                    <option value="BSCRIM">BSCRIM</option>
                                                    <option value="BSHM">BSHM</option>
                                                    <option value="BSTM">BSTM</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Year Level<span class="text-danger">*</span></label>
                                                    <select name="scsyrlvl" id="scsyrlvl" class="form-control" required>
                                                    <option value="">-Select-</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <!-- <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Email Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="semail" id="semail" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
                                                </div> -->
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Email Address<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" name="semail" id="semail" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button">Change</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Password <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="password" name="spass" id="spass" class="form-control" required  data-parsley-trigger="keyup" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button">Change</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <label>Student Password <span class="text-danger">*</span></label>
                                                    <input type="password" name="spass" id="spass" class="form-control" required  data-parsley-trigger="keyup" />
                                                </div> -->
                                            </div>
                                        </div>
                                    <!-- </fieldset> -->
                                        <!-- <div class="form-group">
                                            <label>Student Image <span class="text-danger">*</span></label>
                                            <br />
                                            <input type="file" name="student_profile_image" id="student_profile_image" />
                                            <div id="uploaded_image"></div>
                                            <input type="hidden" name="hidden_student_profile_image" id="hidden_student_profile_image" />
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php
                include('footer.php');
                ?>

<script>
$(document).ready(function(){

    <?php
    foreach($result as $row)
    {
    ?>
    $('#sfname').val("<?php echo $row['sfname']; ?>");
    $('#smname').val("<?php echo $row['smname']; ?>");
    $('#slname').val("<?php echo $row['slname']; ?>");
    $('#sdbirth').val("<?php echo $row['sdbirth']; ?>");
    $('#saddress').val("<?php echo $row['saddress']; ?>");
    $('#sccourse').val("<?php echo $row['sccourse']; ?>");
    $('#scsyrlvl').val("<?php echo $row['scsyrlvl']; ?>");
    $('#semail').val("<?php echo $row['semail']; ?>");
    $('#spass').val("<?php echo $row['spass']; ?>");
    
    <?php
    }
    ?>

    $('#profile_form').parsley();

	$('#profile_form').on('submit', function(event){
		event.preventDefault();
		if($('#profile_form').parsley().isValid())
		{		
			$.ajax({
				url:"profile_action.php",
				method:"POST",
				data:new FormData(this),
                dataType:'json',
                contentType:false,
                processData:false,
				beforeSend:function()
				{
					$('#edit_button').attr('disabled', 'disabled');
					$('#edit_button').html('wait...');
				},
				success:function(data)
				{
					$('#edit_button').attr('disabled', false);
                    $('#edit_button').html('<i class="fas fa-edit"></i> Edit');

                    $('#sfname').val(data.sfname);
                    $('#smname').val(data.smname);
                    $('#slname').val(data.slname);
                    $('#sdbirth').val(data.sdbirth);
                    $('#saddress').text(data.saddress);
                    $('#sccourse').text(data.sccourse);
                    $('#scsyrlvl').text(data.scsyrlvl);
                    $('#semail').text(data.semail);
                    $('#spass').text(data.spass);

                    if(data.student_profile_image != '')
                    {
                        $('#uploaded_image').html('<img src="'+data.student_profile_image+'" class="img-thumbnail" width="100" />');

                        $('#user_profile_image').attr('src', data.student_profile_image);
                    }

                    $('#hidden_student_profile_image').val(data.student_profile_image);
						
                    $('#message').html(data.success);

					setTimeout(function(){

				        $('#message').html('');

				    }, 5000);
				}
			})
		}
	});

});
</script>