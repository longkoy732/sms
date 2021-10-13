<?php

include('../class/dbcon.php');
$object = new sms;

if(isset($_POST["action"]))
{
    if($_POST["action"] == 'Submit')
	{
		$error = '';

		$success = '';

		$data = array(
			':sfname'	=>	$_POST["sfname"]
		);

		$object->query = "
		SELECT * tbl_acad
		WHERE sfname = :sfname
		";

		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div class="alert alert-danger">Email Address Already Exists</div>';
		}
		else {
			if($error == '')
			{
				$data = array(
					':sfname'					    =>	$object->clean_input($_POST["sfname"]),
                    ':smname'					    =>	$object->clean_input($_POST["smname"]),
                    ':slname'					    =>	$object->clean_input($_POST["slname"]),
                    ':sdbirth'					    =>	$object->clean_input($_POST["sdbirth"]),
					':sctship'				        =>	$object->clean_input($_POST["sctship"]),
                    ':saddress'					    =>	$object->clean_input($_POST["saddress"]),
                    ':semail'					    =>	$object->clean_input($_POST["semail"]),
                    ':scontact'					    =>	$object->clean_input($_POST["scontact"]),
                    ':sgender'					    =>	$object->clean_input($_POST["sgender"]),
					':gfname'				        =>	$object->clean_input($_POST["gfname"]),
					':gmname'				        =>	$object->clean_input($_POST["gmname"]),
					':glname'			            =>	$object->clean_input($_POST["glname"]),
                    ':gaddress'					    =>	$object->clean_input($_POST["gaddress"]),
                    ':gcontact'					    =>	$object->clean_input($_POST["gcontact"]),
                    ':goccu'					    =>	$object->clean_input($_POST["goccu"]),
                    ':gcompany'					    =>	$object->clean_input($_POST["gcompany"]),
					':ffname'				        =>	$object->clean_input($_POST["ffname"]),
                    ':fmname'					    =>	$object->clean_input($_POST["fmname"]),
                    ':flname'					    =>	$object->clean_input($_POST["flname"]),
                    ':faddress'					    =>	$object->clean_input($_POST["faddress"]),
                    ':fcontact'					    =>	$object->clean_input($_POST["fcontact"]),
					':foccu'				        =>	$object->clean_input($_POST["foccu"]),
					':fcompany'				        =>	$object->clean_input($_POST["fcompany"]),
					':mfname'				        =>	$object->clean_input($_POST["mfname"]),
                    ':mmname'					    =>	$object->clean_input($_POST["mmname"]),
                    ':mlname'					    =>	$object->clean_input($_POST["mlname"]),
                    ':maddress'					    =>	$object->clean_input($_POST["maddress"]),
                    ':mcontact'					    =>	$object->clean_input($_POST["mcontact"]),
					':moccu'				        =>	$object->clean_input($_POST["moccu"]),
					':mcompany'				        =>	$object->clean_input($_POST["mcompany"]),
                    ':spcyincome'				    =>	$object->clean_input($_POST["spcyincome"]),
                    ':sagwa'				        =>	$object->clean_input($_POST["sagwa"]),
                    ':sraward'					    =>	$object->clean_input($_POST["sraward"]),
                    ':sdawardrceive'				=>	$object->clean_input($_POST["sdawardrceive"]),
                    ':sadsprc'					    =>	$object->clean_input($_POST["sadsprc"]),
                    ':sadspgm'					    =>	$object->clean_input($_POST["sadspgm"]),
					':sadspcr'				        =>	$object->clean_input($_POST["sadspcr"]),
                    ':saemail'			            =>	$object->clean_input($_POST["saemail"]),
					':sapass'				        =>	$_POST["sapass"],
					':sascholarstat'				=>	'Pending',
					':sadapply'				        =>	$object->now
				);

				$object->query = "
				INSERT INTO tbl_acad
				(sfname, smname, slname, sdbirth, sctship, saddress, semail, scontact, sgender, gfname, gmname,
                glname, gaddress, gcontact, goccu, gcompany, ffname, fmname, flname, faddress, fcontact, foccu,
                fcompany, mfname, mmname, mlname, maddress, mcontact, moccu, mcompany, spcyincome, sagwa, sraward, 
                sdawardrceive, sadsprc, sadspgm, sadspcr, saemail, sapass, sascholarstat, sadapply) 
				VALUES (:sfname, :smname, :slname, :sdbirth, :scitiship,
                :saddress, :semail, :scontact, :gender, :gfname, :gmname, :glname, :gaddress, 
                :gcontact, :goccu, :gcompany, :ffname, :fmname, :flname, :faddress, 
                :fcontact, :foccu, :fcompany, :mfname, :mmname, :mlname, :maddress, 
                :mcontact, :moccu, :mcompany, :spcyincome, :sagwa, :sraward, :sdawardrceive, 
                :sadsprc, :sadspgm, :sadspcr, :saemail, :sapass, :sascholarstat, 
                :sadapply)
				";

				$object->execute($data);

				$success = '<div class="alert alert-success">Student Data Added</div>';
			}
		}

		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

// $message = '';
// if(isset($_POST["email"]))
// {
//  sleep(5);
//  $query = "
//  INSERT INTO tbl_login 
//  (first_name, last_name, gender, email, password, address, mobile_no) VALUES 
//  (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
//  ";
//  $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
//  $user_data = array(
//   ':first_name'  => $_POST["first_name"],
//   ':last_name'  => $_POST["last_name"],
//   ':gender'   => $_POST["gender"],
//   ':email'   => $_POST["email"],
//   ':password'   => $password_hash,
//   ':address'   => $_POST["address"],
//   ':mobile_no'  => $_POST["mobile_no"]
//  );
//  $statement = $connect->prepare($query);
//  if($statement->execute($user_data))
//  {
//   $message = '
//   <div class="alert alert-success">
//   Registration Completed Successfully
//   </div>
//   ';
//  }
//  else
//  {
//   $message = '
//   <div class="alert alert-success">
//   There is an error in Registration
//   </div>
//   ';
//  }
// }
// =======================================================================================================================
$connect = new PDO("mysql:host=localhost;dbname=sms", "root", "");
$message = '';
$date = date("Y-m-d H:i:s",  STRTOTIME(date('h:i:sa')));
if(isset($_POST["sfname"]))
{
  $query = "
  INSERT INTO tbl_acad
     (sfname, smname, slname, sdbirth, sctship, saddress, semail, scontact, sgender, gfname, gmname,
     glname, gaddress, gcontact, goccu, gcompany, ffname, fmname, flname, faddress, fcontact, foccu,
     fcompany, mfname, mmname, mlname, maddress, mcontact, moccu, mcompany, spcyincome, sagwa, sraward, 
     sdawardrceive, sadsprc, sadspgm, sadspcr, saemail, sapass, sascholarstat, sadapply) 
     VALUES (:sfname, :smname, :slname, :sdbirth, :sctship,:saddress, :semail, :scontact, :sgender, 
     :gfname, :gmname, :glname, :gaddress, :gcontact, :goccu, :gcompany, :ffname, :fmname, :flname, 
     :faddress, :fcontact, :foccu, :fcompany, :mfname, :mmname, :mlname, :maddress, 
     :mcontact, :moccu, :mcompany, :spcyincome, :sagwa, :sraward, :sdawardrceive, 
     :sadsprc, :sadspgm, :sadspcr, :saemail, :sapass, 'Pending', 
     '$date')";
  // $password_hash = password_hash($_POST["sapass"], PASSWORD_DEFAULT);

 $user_data = array(
                    ':sfname'					    =>	$_POST["sfname"],
                    ':smname'					    =>	$_POST["smname"],
                    ':slname'					    =>	$_POST["slname"],
                    ':sdbirth'					  =>	$_POST["sdbirth"],
					          ':sctship'				    =>	$_POST["sctship"],
                    ':saddress'					  =>	$_POST["saddress"],
                    ':semail'					    =>	$_POST["semail"],
                    ':scontact'					  =>	$_POST["scontact"],
                    ':sgender'					  =>	$_POST["sgender"],
					          ':gfname'				      =>	$_POST["gfname"],
					          ':gmname'				      =>	$_POST["gmname"],
					          ':glname'			        =>	$_POST["glname"],
                    ':gaddress'					  =>	$_POST["gaddress"],
                    ':gcontact'					  =>	$_POST["gcontact"],
                    ':goccu'					    =>	$_POST["goccu"],
                    ':gcompany'					  =>	$_POST["gcompany"],
					          ':ffname'				      =>	$_POST["ffname"],
                    ':fmname'					    =>	$_POST["fmname"],
                    ':flname'					    =>	$_POST["flname"],
                    ':faddress'					  =>	$_POST["faddress"],
                    ':fcontact'					  =>	$_POST["fcontact"],
					          ':foccu'				      =>	$_POST["foccu"],
					          ':fcompany'				    =>	$_POST["fcompany"],
					          ':mfname'				      =>	$_POST["mfname"],
                    ':mmname'					    =>	$_POST["mmname"],
                    ':mlname'					    =>	$_POST["mlname"],
                    ':maddress'					  =>	$_POST["maddress"],
                    ':mcontact'					  =>	$_POST["mcontact"],
					          ':moccu'				      =>	$_POST["moccu"],
					          ':mcompany'				    =>	$_POST["mcompany"],
                    ':spcyincome'				  =>	$_POST["spcyincome"],
                    ':sagwa'				      =>	$_POST["sagwa"],
                    ':sraward'					  =>	$_POST["sraward"],
                    ':sdawardrceive'		  =>	$_POST["sdawardrceive"],
                    ':sadsprc'					  =>	$_POST["sadsprc"],
                    ':sadspgm'					  =>	$_POST["sadspgm"],
					          ':sadspcr'				    =>	$_POST["sadspcr"],
                    ':saemail'			      =>	$_POST["saemail"],
					          ':sapass'				      =>  $_POST["sapass"]
 );
 
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
}
?>