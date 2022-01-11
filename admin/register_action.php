<?php 

// register_action.php

include('../class/dbcon.php');

$object = new sms;

if($_POST['action'] == 'student_register')
{
    $error = '';

    $success = '';

    $data = array(
        ':ss_id'	=>	$_POST["ss_id"]
    );

    $object->query = "
    SELECT * FROM tbl_sample
    WHERE ss_id = :ss_id
    ";

    $object->execute($data);

    if($object->row_count() > 0)
    {
        $error = '<div class="alert alert-danger">School ID Number Already Exists</div>';
    }
    else
    {
        
        $data = array(
            ':ss_id'		                =>	$object->clean_input($_POST["ss_id"]),
            ':sfname'				        =>	$object->clean_input($_POST["sfname"]),
            ':smname'			            =>	$object->clean_input($_POST["smname"]),
            ':slname'			            =>	$object->clean_input($_POST["slname"])
            // ':snext'		                =>	$object->clean_input($_POST["snext"])
            // ':sdbirth'				        =>	$object->clean_input($_POST["sdbirth"]),
            // ':sgender'				        =>	$object->clean_input($_POST["sgender"]),
            // ':saddress'				        =>	$object->clean_input($_POST["saddress"]),
            // ':szcode'		                =>	$object->clean_input($_POST["szcode"]),
            // ':scontact'				        =>	$object->clean_input($_POST["scontact"]),
            // ':semail'			            =>	$object->clean_input($_POST["semail"]),
            // ':sctship'			            =>	$object->clean_input($_POST["sctship"]),
            // ':scivilstat'		            =>	$object->clean_input($_POST["scivilstat"]),
            // ':sdisability'		            =>	$object->clean_input($_POST["sdisability"]),
            // ':s4psno'			            =>	$object->clean_input($_POST["s4psno"]),
            // ':spwdid'			            =>	$object->clean_input($_POST["spwdid"]),
            // ':srappsship'		            =>	$object->clean_input($_POST["srappsship"]),
            // ':sgfname'		                =>	$object->clean_input($_POST["sgfname"]),
            // ':sgmname'				        =>	$object->clean_input($_POST["sgmname"]),
            // ':sglname'			            =>	$object->clean_input($_POST["sglname"]),
            // ':sgnext'			            =>	$object->clean_input($_POST["sgnext"]),
            // ':sglstatus'		            =>	$object->clean_input($_POST["sglstatus"]),
            // ':sgaddress'			        =>	$object->clean_input($_POST["sgaddress"]),
            // ':sgeduc'				        =>	$object->clean_input($_POST["sgeduc"]),
            // ':sgcontact'			        =>	$object->clean_input($_POST["sgcontact"]),
            // ':sgoccu'		                =>	$object->clean_input($_POST["sgoccu"]),
            // ':sgcompany'			        =>	$object->clean_input($_POST["sgcompany"]),
            // ':sffname'			            =>	$object->clean_input($_POST["sffname"]),
            // ':sfmname'			            =>	$object->clean_input($_POST["sfmname"]),
            // ':sflname'		                =>	$object->clean_input($_POST["sflname"]),
            // ':sfnext'				        =>	$object->clean_input($_POST["sfnext"]),
            // ':sflstatus'			        =>	$object->clean_input($_POST["sflstatus"]),
            // ':sfaddress'			        =>	$object->clean_input($_POST["sfaddress"]),
            // ':sfeduc'		                =>	$object->clean_input($_POST["sfeduc"]),
            // ':sfcontact'		            =>	$object->clean_input($_POST["sfcontact"]),
            // ':sfoccu'			            =>	$object->clean_input($_POST["sfoccu"]),
            // ':sfcompany'			        =>	$object->clean_input($_POST["sfcompany"]),
            // ':smfname'			            =>	$object->clean_input($_POST["smfname"]),
            // ':smmname'			            =>	$object->clean_input($_POST["smmname"]),
            // ':smlname'		                =>	$object->clean_input($_POST["smlname"]),
            // ':smnext'				        =>	$object->clean_input($_POST["smnext"]),
            // ':smlstatus'			        =>	$object->clean_input($_POST["smlstatus"]),
            // ':smaddress'			        =>	$object->clean_input($_POST["smaddress"]),
            // ':scsadd'		                =>	$object->clean_input($_POST["scsadd"]),
            // ':scschooltype'		            =>	$object->clean_input($_POST["scschooltype"]),
            // ':sccourse'			            =>	$object->clean_input($_POST["sccourse"]),
            // ':sccourseprio'			        =>	$object->clean_input($_POST["sccourseprio"]),
            // ':snsibling'			        =>	$object->clean_input($_POST["snsibling"]),
            // ':spcyincome'			        =>	$object->clean_input($_POST["spcyincome"]),
            // ':spschname'			        =>	$object->clean_input($_POST["spschname"]),
            // ':spsaddress'			        =>	$object->clean_input($_POST["spsaddress"]),
            // ':spstype'		                =>	$object->clean_input($_POST["spstype"]),
            // ':spscourse'	                =>	$object->clean_input($_POST["spscourse"]),
            // ':spsyrlvl'			            =>	$object->clean_input($_POST["spsyrlvl"]),
            // ':scsintend'			        =>	$object->clean_input($_POST["scsintend"]),
            // ':scsadd'		                =>	$object->clean_input($_POST["scsadd"]),
            // ':scschooltype'	                =>	$object->clean_input($_POST["scschooltype"]),
            // ':sccourse'			            =>	$object->clean_input($_POST["sccourse"]),
            // ':sccourseprio'			        =>	$object->clean_input($_POST["sccourseprio"]),
            // ':scsyrlvl'			            =>	$object->clean_input($_POST["scsyrlvl"]),
            // ':spass'			            =>	$object->clean_input($_POST["spass"]),
            // ':student_added_on'				=>	$object->now
        );

        $object->query = "
        INSERT INTO tbl_sample 
        (ss_id, sfname, smname, slname) 
        VALUES (:ss_id, :sfname, :smname, :slname)
        ";

        $object->execute($data);

    }

    $output = array(
        'error'		=>	$error,
        'success'	=>	$success
    );
    echo json_encode($output);
}

?>