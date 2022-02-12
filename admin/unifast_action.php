
<?php 

// academic_action.php

include('../class/dbcon.php');

$object = new sms;

$object->query = "
    SELECT * FROM tbl_student
    WHERE s_id = '".$_SESSION["admin_id"]."'
    ";

$result = $object->get_result();
    

if(isset($_POST["action"]))
{
    foreach($result as $row)
    {
       
        if($_POST['action'] == 'student_unifast_apply')
        {
            $error = '';

            $success = '';

            $object->query = "
            SELECT * FROM tbl_student
            WHERE s_scholar_stat = 'Pending' OR s_scholar_stat = 'Approved' OR s_scholar_stat = 'Rejected'
            ";

            $object->execute();

            if($object->row_count() > 0)
            {
                $error = '<div class="alert alert-danger">You already Applied. If you have concern, Please Contact Admin</div>';
            }
            else
            {

                if($error == '')
                {

                    $object->query = "
                    UPDATE tbl_student 
                    SET sfname = :sfname, 
                    smname = :smname, 
                    slname = :slname,
                    snext = :snext, 
                    sgender = :sgender,
                    sdbirth = :sdbirth, 
                    scontact = :scontact,
                    saddress = :saddress,
                    spschname = :spschname,
                    spscourse = :spscourse,
                    spsyrlvl = :spsyrlvl,
                    semail = :semail,
                    sffname = :sffname,
                    sfmname = :sfmname,
                    sflname = :sflname,
                    sfnext = :sfnext,
                    smfname = :smfname,
                    smmname = :smmname,
                    smlname = :smlname,
                    smnext = :smnext,
                    s4psno = :s4psno,
                    spcyincome = :spcyincome,
                    spwdid = :spwdid,
                    ssdfile = :ssdfile,
                    s_scholar_stat = 'Pending',
                    s_grant_stat = 'New',
                    s_applied_on = :s_applied_on,
                    s_scholarship_type = 'UNIFAST'
                    WHERE s_id = '".$_SESSION["admin_id"]."'         
                    ";

                    $data = array(
                        ':sfname'				        =>	$object->clean_input($_POST["sfname"]),
                        ':smname'			            =>	$object->clean_input($_POST["smname"]),
                        ':slname'			            =>	$object->clean_input($_POST["slname"]),
                        ':snext'		                =>	$object->clean_input($_POST["snext"]),
                        ':sgender'				        =>	$object->clean_input($_POST["sgender"]),
                        ':sdbirth'				        =>	$object->clean_input($_POST["sdbirth"]),
                        ':scontact'				        =>	$object->clean_input($_POST["scontact"]),
                        ':saddress'				        =>	$object->clean_input($_POST["saddress"]),
                        ':spschname'				    =>	$object->clean_input($_POST["spschname"]),
                        ':spscourse'				    =>	$object->clean_input($_POST["saddress"]),
                        ':spsyrlvl'				        =>	$object->clean_input($_POST["spsyrlvl"]),
                        ':semail'			            =>	$object->clean_input($_POST["semail"]),
                        ':sffname'			            =>	$object->clean_input($_POST["sffname"]),
                        ':sfmname'			            =>	$object->clean_input($_POST["sfmname"]),
                        ':sflname'		                =>	$object->clean_input($_POST["sflname"]),
                        ':sfnext'				        =>	$object->clean_input($_POST["sfnext"]),
                        ':smfname'			            =>	$object->clean_input($_POST["smfname"]),
                        ':smmname'			            =>	$object->clean_input($_POST["smmname"]),
                        ':smlname'		                =>	$object->clean_input($_POST["smlname"]),
                        ':smnext'				        =>	$object->clean_input($_POST["smnext"]),
                        ':s4psno'			            =>	$object->clean_input($_POST["s4psno"]),
                        ':spcyincome'			        =>	$object->clean_input($_POST["spcyincome"]),
                        ':spwdid'		                =>	$object->clean_input($_POST["spwdid"]),
                        ':ssdfile'			            =>	$object->clean_input($_POST["ssdfile"]),
                        ':s_applied_on'				    =>	$object->now
                    );

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
    }

}

?>