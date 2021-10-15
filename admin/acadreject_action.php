<?php

include('../class/dbcon.php');

$object = new sms;



if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('slname', 'sfname', 'smname', 'saddress', 'semail', 'scontact', 'sgender', 'sascholarstat', 'sadapply');
		/* Common Data
			+slname, +sfname, +smname, +sdbirth, +scontact, +sgender, +semail, +sascholarstat		
		*/
		$output = array();
		
		$main_query = "
		SELECT * FROM tbl_acad WHERE sascholarstat = 'Rejected'
		";

		$search_query = '';
		
		if(isset($_POST['search']['value']))
		{
			$search_query .= 'AND (slname LIKE "%'.$_POST['search']['value'].'%" 
			OR sfname LIKE "%'.$_POST['search']['value'].'%" 
			OR smname LIKE "%'.$_POST['search']['value'].'%" 
			OR saddress LIKE "%'.$_POST['search']['value'].'%" 
			OR semail LIKE "%'.$_POST['search']['value'].'%"
			OR scontact LIKE "%'.$_POST['search']['value'].'%"
			OR sgender LIKE "%'.$_POST['search']['value'].'%")';
		}

		if(isset($_POST["order"]))
		{
			$order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_query = 'ORDER BY sacad_id DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$object->query = $main_query .$search_query .$order_query;

		$object->execute();

		$filtered_rows = $object->row_count();

		$object->query .= $limit_query;

		$result = $object->get_result();

		$object->query = $main_query;

		$object->execute();

		$total_rows = $object->row_count();

		$data = array();

				foreach($result as $row)
				{
					$sub_array = array();
					$sub_array[] = $check = '<div style="text-align: center;"><input type="checkbox" class="checkbox" value="'.$row["sacad_id"].'" /></div>';
					$sub_array[] = $row["slname"];
					$sub_array[] = $row["sfname"];
					$sub_array[] = $row["smname"];
					$sub_array[] = $row["saddress"];
					$sub_array[] = $row["scontact"];
					$sub_array[] = $row["sgender"];
					$sub_array[] = $row["semail"];
					$status = '';
					if($row["sascholarstat"] == 'Pending')
					{
						$status = '<button type="button" name="status_button" class="btn btn-warning btn-sm status_button" data-id="'.$row["sacad_id"].'" data-status="'.$row["sascholarstat"].'">Pending</button>';
					}
					else if($row["sascholarstat"] == 'Approved')
					{
						$status = '<button type="button" name="status_button" class="btn btn-success btn-sm status_button" data-id="'.$row["sacad_id"].'" data-status="'.$row["sascholarstat"].'">Approved</button>';
					}
					else
					{
						$status = '<button type="button" name="status_button" class="btn btn-danger btn-sm status_button" data-id="'.$row["sacad_id"].'" data-status="'.$row["sascholarstat"].'">Rejected</button>';
					}
					$sub_array[] = $status;
					$sub_array[] = '
					<div align="center">
					<button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["sacad_id"].'"><i class="fas fa-eye"></i></button>
					<button type="button" name="edit_button" class="btn btn-warning btn-circle btn-sm edit_button" data-id="'.$row["sacad_id"].'"><i class="fas fa-edit"></i></button>
					<button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="'.$row["sacad_id"].'"><i class="fas fa-times"></i></button>
					</div>
					';
					$data[] = $sub_array;
				}
	
				$output = array(
					"draw"    			=> 	intval($_POST["draw"]),
					"recordsTotal"  	=>  $total_rows,
					"recordsFiltered" 	=> 	$filtered_rows,
					"data"    			=> 	$data
				);
					
				echo json_encode($output);
	  		
	}

	// if($_POST["action"] == 'Add')
	// {
	// 	$error = '';

	// 	$success = '';

	// 	$data = array(
	// 		':saemail'	=>	$_POST["saemail"]
	// 	);

	// 	$object->query = "
	// 	SELECT * FROM tbl_acad
	// 	WHERE saemail = :saemail
	// 	";

	// 	$object->execute($data);

	// 	if($object->row_count() > 0)
	// 	{
	// 		$error = '<div class="alert alert-danger">Email Address Already Exists</div>';
	// 	}
	// 	else
	// 	{
	// 			$object->query = "
	// 			INSERT INTO tbl_acad
	// 			(saemail, sapass, sfname, smname, slname, sdbirth, sctship, saddress, semail, scontact, sgender, gfname, gmname,
	// 			glname, gaddress, gcontact, goccu, gcompany, ffname, fmname, flname, faddress, fcontact, foccu,
	// 			fcompany, mfname, mmname, mlname, maddress, mcontact, moccu, mcompany, spcyincome, sagwa, sraward, 
	// 			sdawardrceive, sadsprc, sadspgm, sadspcr, sacapstype, sascholarstat, sadapply) 
	// 			VALUES (:saemail, :sapass, :sfname, :smname, :slname, :sdbirth, :sctship,:saddress, :semail, :scontact, :sgender, 
	// 			:gfname, :gmname, :glname, :gaddress, :gcontact, :goccu, :gcompany, :ffname, :fmname, :flname, 
	// 			:faddress, :fcontact, :foccu, :fcompany, :mfname, :mmname, :mlname, :maddress, 
	// 			:mcontact, :moccu, :mcompany, :spcyincome, :sagwa, :sraward, :sdawardrceive, 
	// 			:sadsprc, :sadspgm, :sadspcr, :sacapstype, 'Pending', '$object->now')
	// 			";

	// 			$password_hash = password_hash($_POST["sapass"], PASSWORD_DEFAULT);

	// 		if($error == '')
	// 		{
	// 			$data = array(
	// 				// Account Details
	// 				':saemail'			      		=>	$object->clean_input($_POST["saemail"]),
	// 				':sapass'				      	=>  $password_hash,
	// 				// Personal Details
    //                 ':sfname'					    =>	$object->clean_input($_POST["sfname"]),
    //                 ':smname'					    =>	$object->clean_input($_POST["smname"]),
    //                 ':slname'					    =>	$object->clean_input($_POST["slname"]),
    //                 ':sdbirth'					  	=>	$object->clean_input($_POST["sdbirth"]),
	// 				':sctship'				    	=>	$object->clean_input($_POST["sctship"]),
    //                 ':saddress'					  	=>	$object->clean_input($_POST["saddress"]),
    //                 ':semail'					    =>	$object->clean_input($_POST["semail"]),
    //                 ':scontact'					  	=>	$object->clean_input($_POST["scontact"]),
    //                 ':sgender'					  	=>	$object->clean_input($_POST["sgender"]),
	// 				// Family Details
	// 				// Guardian Details
	// 				':gfname'				      	=>	$object->clean_input($_POST["gfname"]),
	// 				':gmname'				      	=>	$object->clean_input($_POST["gmname"]),
	// 				':glname'			        	=>	$object->clean_input($_POST["glname"]),
    //                 ':gaddress'					  	=>	$object->clean_input($_POST["gaddress"]),
    //                 ':gcontact'					  	=>	$object->clean_input($_POST["gcontact"]),
    //                 ':goccu'					    =>	$object->clean_input($_POST["goccu"]),
    //                 ':gcompany'					  	=>	$object->clean_input($_POST["gcompany"]),
	// 				// Father Details
	// 				':ffname'				      	=>	$object->clean_input($_POST["ffname"]),
    //                 ':fmname'					    =>	$object->clean_input($_POST["fmname"]),
    //                 ':flname'					    =>	$object->clean_input($_POST["flname"]),
    //                 ':faddress'					  	=>	$object->clean_input($_POST["faddress"]),
    //                 ':fcontact'					  	=>	$object->clean_input($_POST["fcontact"]),
	// 				':foccu'				      	=>	$object->clean_input($_POST["foccu"]),
	// 				':fcompany'				    	=>	$object->clean_input($_POST["fcompany"]),
	// 				// Mother Details
	// 				':mfname'				      	=>	$object->clean_input($_POST["mfname"]),
    //                 ':mmname'					    =>	$object->clean_input($_POST["mmname"]),
    //                 ':mlname'					    =>	$object->clean_input($_POST["mlname"]),
    //                 ':maddress'					  	=>	$object->clean_input($_POST["maddress"]),
    //                 ':mcontact'					  	=>	$object->clean_input($_POST["mcontact"]),
	// 				':moccu'				      	=>	$object->clean_input($_POST["moccu"]),
	// 				':mcompany'				    	=>	$object->clean_input($_POST["mcompany"]),
    //                 ':spcyincome'				  	=>	$object->clean_input($_POST["spcyincome"]),
	// 				// Achievement Details
    //                 ':sagwa'				      	=>	$object->clean_input($_POST["sagwa"]),
    //                 ':sraward'					  	=>	$object->clean_input($_POST["sraward"]),
    //                 ':sdawardrceive'		  		=>	$object->clean_input($_POST["sdawardrceive"]),
	// 				// Requirement Details
    //                 ':sadsprc'					  	=>	$object->clean_input($_POST["sadsprc"]),
    //                 ':sadspgm'					  	=>	$object->clean_input($_POST["sadspgm"]),
	// 				':sadspcr'				    	=>	$object->clean_input($_POST["sadspcr"]),
	// 				// Scholar Type
	// 				':sacapstype'				    =>	$object->clean_input($_POST["sacapstype"])
 	// 			);

	// 			$object->execute($data);

	// 			$success = '<div class="alert alert-success">Academic Scholar Applicant Added</div>';
	// 		}
	// 	}

	// 	$output = array(
	// 		'error'		=>	$error,
	// 		'success'	=>	$success
	// 	);

	// 	echo json_encode($output);

	// }

	if($_POST["action"] == 'fetch_single')
	{
		$object->query = "
		SELECT * FROM tbl_acad 
		WHERE sacad_id = '".$_POST["sacad_id"]."'
		";

		$result = $object->get_result();

		$data = array();

		foreach($result as $row)
		{
			// Account Details
			$data['saemail'] = $row['saemail'];
			$data['sapass'] = $row['sapass'];
			// Personal Details
			$data['sfname'] = $row['sfname'];
			$data['smname'] = $row['smname'];
			$data['slname'] = $row['slname'];
			$data['sdbirth'] = $row['sdbirth'];
			$data['sctship'] = $row['sctship'];
			$data['saddress'] = $row['saddress'];
			$data['semail'] = $row['semail'];
			$data['scontact'] = $row['scontact'];
			$data['sgender'] = $row['sgender'];
			// Family Details
			// Guardian Details
			$data['gfname'] = $row['gfname'];
			$data['gmname'] = $row['gmname'];
			$data['glname'] = $row['glname'];
			$data['gaddress'] = $row['gaddress'];
			$data['gcontact'] = $row['gcontact'];
			$data['goccu'] = $row['goccu'];
			$data['gcompany'] = $row['gcompany'];
			// Father Details
			$data['ffname'] = $row['ffname'];
			$data['fmname'] = $row['fmname'];
			$data['flname'] = $row['flname'];
			$data['faddress'] = $row['faddress'];
			$data['fcontact'] = $row['fcontact'];
			$data['foccu'] = $row['foccu'];
			$data['fcompany'] = $row['fcompany'];
			// Mother Details
			$data['mfname'] = $row['mfname'];
			$data['mmname'] = $row['mmname'];
			$data['mlname'] = $row['mlname'];
			$data['maddress'] = $row['maddress'];
			$data['mcontact'] = $row['mcontact'];
			$data['moccu'] = $row['moccu'];
			$data['mcompany'] = $row['mcompany'];
			$data['spcyincome'] = $row['spcyincome'];
			// Achievement Details
			$data['sagwa'] = $row['sagwa'];
			$data['sraward'] = $row['sraward'];
			$data['sdawardrceive'] = $row['sdawardrceive'];
			// Requirement Details
			$data['sadsprc'] = $row['sadsprc'];
			$data['sadspgm'] = $row['sadspgm'];
			$data['sadspcr'] = $row['sadspcr'];
			// Scholar Type
			$data['sacapstype'] = $row['sacapstype'];
		}

		echo json_encode($data);
	}

	if($_POST["action"] == 'Edit')
	{
		$error = '';

		$success = '';

		$data = array(
			':saemail'	=>	$_POST["saemail"],
			':sacad_id'			=>	$_POST['hidden_id']
		);

		$object->query = "
		SELECT * FROM tbl_acad 
		WHERE saemail = :saemail 
		AND sacad_id != :sacad_id
		";

		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div class="alert alert-danger">Email Address Already Exists</div>';
		}
		else
		{
				
			if($error == '')
			{
				$object->query = "
				UPDATE tbl_acad
				SET saemail = :saemail,
				sapass = :sapass,
				sfname = :sfname,
				smname = :smname,
				slname = :slname,
				sdbirth = :sdbirth,
				sctship = :sctship,
				saddress = :saddress,
				semail = :semail,
				scontact = :scontact,
				sgender = :sgender,
				gfname = :gfname, 
				gmname = :gmname,
				glname = :glname,
				gaddress = :gaddress,
				gcontact = :gcontact,
				goccu = :goccu,
				gcompany = :gcompany,
				ffname = :ffname,
				fmname = :fmname,
				flname = :flname,
				faddress = :faddress,
				fcontact = :fcontact,
				foccu = :foccu,
				fcompany = :fcompany,
				mfname = :mfname,
				mmname = :mmname,
				mlname = :mlname,
				maddress = :maddress,
				mcontact = :mcontact,
				moccu = :moccu,
				mcompany = :mcompany,
				spcyincome = :spcyincome,
				sagwa = :sagwa,
				sraward = :sraward,
				sdawardrceive = :sdawardrceive,
				sadsprc = :sadsprc,
				sadspgm = :sadspgm,
				sadspcr = :sadspcr,
				sacapstype = :sacapstype
				WHERE sacad_id = '".$_POST['hidden_id']."'
				";

				$password_hash = password_hash($_POST["sapass"], PASSWORD_DEFAULT);

				$data = array(
					// Account Details
					':saemail'			      		=>	$object->clean_input($_POST["saemail"]),
					':sapass'				      	=>  $password_hash,
					// Personal Details
                    ':sfname'					    =>	$object->clean_input($_POST["sfname"]),
                    ':smname'					    =>	$object->clean_input($_POST["smname"]),
                    ':slname'					    =>	$object->clean_input($_POST["slname"]),
                    ':sdbirth'					  	=>	$object->clean_input($_POST["sdbirth"]),
					':sctship'				    	=>	$object->clean_input($_POST["sctship"]),
                    ':saddress'					  	=>	$object->clean_input($_POST["saddress"]),
                    ':semail'					    =>	$object->clean_input($_POST["semail"]),
                    ':scontact'					  	=>	$object->clean_input($_POST["scontact"]),
                    ':sgender'					  	=>	$object->clean_input($_POST["sgender"]),
					// Family Details
					// Guardian Details
					':gfname'				      	=>	$object->clean_input($_POST["gfname"]),
					':gmname'				      	=>	$object->clean_input($_POST["gmname"]),
					':glname'			        	=>	$object->clean_input($_POST["glname"]),
                    ':gaddress'					  	=>	$object->clean_input($_POST["gaddress"]),
                    ':gcontact'					  	=>	$object->clean_input($_POST["gcontact"]),
                    ':goccu'					    =>	$object->clean_input($_POST["goccu"]),
                    ':gcompany'					  	=>	$object->clean_input($_POST["gcompany"]),
					// Father Details
					':ffname'				      	=>	$object->clean_input($_POST["ffname"]),
                    ':fmname'					    =>	$object->clean_input($_POST["fmname"]),
                    ':flname'					    =>	$object->clean_input($_POST["flname"]),
                    ':faddress'					  	=>	$object->clean_input($_POST["faddress"]),
                    ':fcontact'					  	=>	$object->clean_input($_POST["fcontact"]),
					':foccu'				      	=>	$object->clean_input($_POST["foccu"]),
					':fcompany'				    	=>	$object->clean_input($_POST["fcompany"]),
					// Mother Details
					':mfname'				      	=>	$object->clean_input($_POST["mfname"]),
                    ':mmname'					    =>	$object->clean_input($_POST["mmname"]),
                    ':mlname'					    =>	$object->clean_input($_POST["mlname"]),
                    ':maddress'					  	=>	$object->clean_input($_POST["maddress"]),
                    ':mcontact'					  	=>	$object->clean_input($_POST["mcontact"]),
					':moccu'				      	=>	$object->clean_input($_POST["moccu"]),
					':mcompany'				    	=>	$object->clean_input($_POST["mcompany"]),
                    ':spcyincome'				  	=>	$object->clean_input($_POST["spcyincome"]),
					// Achievement Details
                    ':sagwa'				      	=>	$object->clean_input($_POST["sagwa"]),
                    ':sraward'					  	=>	$object->clean_input($_POST["sraward"]),
                    ':sdawardrceive'		  		=>	$object->clean_input($_POST["sdawardrceive"]),
					// Requirement Details
                    ':sadsprc'					  	=>	$object->clean_input($_POST["sadsprc"]),
                    ':sadspgm'					  	=>	$object->clean_input($_POST["sadspgm"]),
					':sadspcr'				    	=>	$object->clean_input($_POST["sadspcr"]),
					// Scholar Type
					':sacapstype'				    =>	$object->clean_input($_POST["sacapstype"])
 				);

				$object->execute($data);

				$success = '<div class="alert alert-success">Applicant Data Updated</div>';
			}			
		}

		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

	if($_POST["action"] == 'change_status')
	{
		$data = array(
			':sascholarstat'		=>	$_POST['next_status']
		);

		$object->query = "
		UPDATE tbl_acad
		SET sascholarstat = :sascholarstat 
		WHERE sacad_id = '".$_POST["id"]."'
		";

		$object->execute($data);

		echo '<div class="alert alert-success">Class Status change to '.$_POST['next_status'].'</div>';
	}

	if($_POST["action"] == 'approve_all')
	{
		for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
		{
		$object->query = "
			UPDATE tbl_acad 
			SET sascholarstat = 'Approved'
			WHERE sacad_id = '".$_POST["checkbox_value"][$count]."'";

			$object->execute();
		}
		echo '<div class="alert alert-success">Selected Applicant Data Approved</div>';
	}

	if($_POST["action"] == 'reject_all')
	{
		for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
		{
		$object->query = "
			UPDATE tbl_acad 
			SET sascholarstat = 'Rejected'
			WHERE sacad_id = '".$_POST["checkbox_value"][$count]."'";

			$object->execute();
		}
		echo '<div class="alert alert-success">Selected Applicant Data Rejected</div>';
	}

	if($_POST["action"] == 'delete_all')
	{
		for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
		{
		$object->query = "
			DELETE FROM tbl_acad 
			WHERE sacad_id = '".$_POST["checkbox_value"][$count]."'";

			$object->execute();
		}
		echo '<div class="alert alert-success">Selected Applicant Data Deleted</div>';
	}

	if($_POST["action"] == 'delete')
	{
		$object->query = "
		DELETE FROM tbl_acad 
		WHERE sacad_id = '".$_POST["id"]."'
		";

		$object->execute();

		echo '<div class="alert alert-success">Academic Applicant Data Deleted</div>';
	}
}

?>