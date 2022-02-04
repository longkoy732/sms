<?php

include('../class/dbcon.php');

$object = new sms;

if($_POST["action"] == 'student_profile')
{
	sleep(2);

	$error = '';

	$success = '';

	$student_profile_image = '';

	$data = array(
		':semail'		=>	$_POST["semail"],
		':s_id'			=>	$_POST['hidden_id']
	);

	$object->query = "
	SELECT * FROM tbl_student 
	WHERE semail = :semail 
	AND s_id != :s_id
	";

	$object->execute($data);

	if($object->row_count() > 0)
	{
		$error = '<div class="alert alert-danger">Email Address Already Exists</div>';
	}
	else
	{
		$student_profile_image = $_POST["hidden_student_profile_image"];

		if($_FILES['student_profile_image']['name'] != '')
		{
			$allowed_file_format = array("jpg", "png");

	    	$file_extension = pathinfo($_FILES["student_profile_image"]["name"], PATHINFO_EXTENSION);

	    	if(!in_array($file_extension, $allowed_file_format))
		    {
		        $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
		    }
		    else if (($_FILES["student_profile_image"]["size"] > 2000000))
		    {
		       $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
		    }
		    else
		    {
		    	$new_name = rand() . '.' . $file_extension;

				$destination = '../images/' . $new_name;

				move_uploaded_file($_FILES['student_profile_image']['tmp_name'], $destination);

				$student_profile_image = $destination;
		    }
		}

		if($error == '')
		{
			$data = array(
				':sfname'						=>	$object->clean_input($_POST["sfname"]),
				':smname'						=>	$object->clean_input($_POST["smname"]),
				':slname'						=>	$object->clean_input($_POST["slname"]),
				':sdbirth'						=>	$object->clean_input($_POST["sdbirth"]),
				':saddress'						=>	$object->clean_input($_POST["saddress"]),
				':sccourse'						=>	$object->clean_input($_POST["sccourse"]),
				':scsyrlvl'						=>	$object->clean_input($_POST["scsyrlvl"]),
				':semail'						=>	$object->clean_input($_POST["semail"]),
				// ':spass'						=>	$object->clean_input($_POST["spass"]),
				// ':student_profile_image'		=>	$student_profile_image,
			);

			$object->query = "
			UPDATE tbl_student  
			SET sfname = :sfname, 
			smname = :smname, 
			slname = :slname, 
			sdbirth = :sdbirth, 
			saddress = :saddress, 
			sccourse = :sccourse, 
			scsyrlvl = :scsyrlvl, 
			semail = :semail,  
			student_profile_image = :student_profile_image 
			WHERE s_id = '".$_POST['hidden_id']."'
			";
			$object->execute($data);

			$success = '<div class="alert alert-success">student Data Updated</div>';
		}			
	}

	$output = array(
		'error'					=>	$error,
		'success'				=>	$success,
		'sfname'				=>	$_POST["sfname"],
		'smname'				=>	$_POST["smname"],
		'slname'				=>	$_POST["slname"],
		'sdbirth'				=>	$_POST["sdbirth"],
		'saddress'				=>	$_POST["saddress"],
		'sccourse'				=>	$_POST["sccourse"],
		'scsyrlvl'				=>	$_POST["scsyrlvl"],
		'semail'				=>	$_POST["semail"],
		'student_profile_image'	=>	$student_profile_image,
		
	);

	echo json_encode($output);
}

if($_POST["action"] == 'admin_profile')
{
	sleep(2);

	$error = '';

	$success = '';

	$school_logo = $_POST['hidden_school_logo'];

	if($_FILES['school_logo']['name'] != '')
	{
		$allowed_file_format = array("jpg", "png");

	    $file_extension = pathinfo($_FILES["school_logo"]["name"], PATHINFO_EXTENSION);

	    if(!in_array($file_extension, $allowed_file_format))
		{
		    $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
		}
		else if (($_FILES["school_logo"]["size"] > 2000000))
		{
		   $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
	    }
		else
		{
		    $new_name = rand() . '.' . $file_extension;

			$destination = '../images/' . $new_name;

			move_uploaded_file($_FILES['school_logo']['tmp_name'], $destination);

			$school_logo = $destination;
		}
	}

	if($error == '')
	{
		$data = array(
			':admin_email_address'			=>	$object->clean_input($_POST["admin_email_address"]),
			':admin_password'				=>	$_POST["admin_password"],
			':admin_name'					=>	$object->clean_input($_POST["admin_name"]),
			':school_name'					=>	$object->clean_input($_POST["school_name"]),
			':school_address'				=>	$object->clean_input($_POST["school_address"]),
			':school_contact_no'			=>	$object->clean_input($_POST["school_contact_no"]),
			':school_logo'					=>	$school_logo
		);

		$object->query = "
		UPDATE tbl_admin  
		SET admin_email_address = :admin_email_address, 
		admin_password = :admin_password, 
		admin_name = :admin_name, 
		school_name = :school_name, 
		school_address = :school_address, 
		school_contact_no = :school_contact_no, 
		school_logo = :school_logo 
		WHERE admin_id = '".$_SESSION["admin_id"]."'
		";
		$object->execute($data);

		$success = '<div class="alert alert-success">Admin Data Updated</div>';

		$output = array(
			'error'					=>	$error,
			'success'				=>	$success,
			'admin_email_address'	=>	$_POST["admin_email_address"],
			'admin_password'		=>	$_POST["admin_password"],
			'admin_name'			=>	$_POST["admin_name"], 
			'school_name'			=>	$_POST["school_name"],
			'school_address'		=>	$_POST["school_address"],
			'school_contact_no'		=>	$_POST["school_contact_no"],
			'school_logo'			=>	$school_logo
		);

		echo json_encode($output);
	}
	else
	{
		$output = array(
			'error'					=>	$error,
			'success'				=>	$success
		);
		echo json_encode($output);
	}
}

?>