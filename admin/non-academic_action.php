
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
        
        if($_POST['action'] == 'student_nonacad_apply')
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
                sdbirth = :sdbirth, 
                sgender = :sgender,
                saddress = :saddress,
                scontact = :scontact,
                semail = :semail,
                sctship = :sctship,
                sgfname = :sgfname,
                sgmname = :sgmname,
                sglname = :sglname,
                sgnext = :sgnext,
                sgaddress = :sgaddress,
                sgcontact = :sgcontact,
                sgoccu = :sgoccu,
                sgcompany = :sgcompany,
                sffname = :sffname,
                sfmname = :sfmname,
                sflname = :sflname,
                sfnext = :sfnext,
                sfaddress = :sfaddress,
                sfcontact = :sfcontact,
                sfoccu = :sfoccu,
                sfcompany = :sfcompany,
                smfname = :smfname,
                smmname = :smmname,
                smlname = :smlname,
                smnext = :smnext,
                smaddress = :smaddress,
                smcontact = :smcontact,
                smoccu = :smoccu,
                smcompany = :smcompany,
                spcyincome = :spcyincome,
                srappnas = :srappnas,
                sbos = :sbos,
                ssskills = :ssskills,
                stwinterest = :stwinterest,
                spschname = :spschname,
                spsaddress = :spsaddress,
                spsyrlvl = :spsyrlvl,
                s_scholar_stat = 'Pending',
                s_grant_stat = 'New',
                s_applied_on = :s_applied_on,
                s_scholarship_type = 'Non-Academic'
                WHERE s_id = '".$_SESSION["admin_id"]."'         
                ";

                $data = array(
                  ':sfname'				          =>	$object->clean_input($_POST["sfname"]),
                  ':smname'			            =>	$object->clean_input($_POST["smname"]),
                  ':slname'			            =>	$object->clean_input($_POST["slname"]),
                  ':snext'		              =>	$object->clean_input($_POST["snext"]),
                  ':sdbirth'				        =>	$object->clean_input($_POST["sdbirth"]),
                  ':sgender'				        =>	$object->clean_input($_POST["sgender"]),
                  ':sctship'			          =>	$object->clean_input($_POST["sctship"]),
                  ':saddress'				        =>	$object->clean_input($_POST["saddress"]),
                  ':scontact'				        =>	$object->clean_input($_POST["scontact"]),
                  ':semail'			            =>	$object->clean_input($_POST["semail"]),
                  ':sgfname'		            =>	$object->clean_input($_POST["sgfname"]),
                  ':sgmname'				        =>	$object->clean_input($_POST["sgmname"]),
                  ':sglname'			          =>	$object->clean_input($_POST["sglname"]),
                  ':sgnext'			            =>	$object->clean_input($_POST["sgnext"]),
                  ':sgaddress'			        =>	$object->clean_input($_POST["sgaddress"]),
                  ':sgcontact'			        =>	$object->clean_input($_POST["sgcontact"]),
                  ':sgoccu'		              =>	$object->clean_input($_POST["sgoccu"]),
                  ':sgcompany'			        =>	$object->clean_input($_POST["sgcompany"]),
                  ':sffname'			          =>	$object->clean_input($_POST["sffname"]),
                  ':sfmname'			          =>	$object->clean_input($_POST["sfmname"]),
                  ':sflname'		            =>	$object->clean_input($_POST["sflname"]),
                  ':sfnext'				          =>	$object->clean_input($_POST["sfnext"]),
                  ':sfaddress'			        =>	$object->clean_input($_POST["sfaddress"]),
                  ':sfcontact'		          =>	$object->clean_input($_POST["sfcontact"]),
                  ':sfoccu'			            =>	$object->clean_input($_POST["sfoccu"]),
                  ':sfcompany'			        =>	$object->clean_input($_POST["sfcompany"]),
                  ':smfname'			          =>	$object->clean_input($_POST["smfname"]),
                  ':smmname'			          =>	$object->clean_input($_POST["smmname"]),
                  ':smlname'		            =>	$object->clean_input($_POST["smlname"]),
                  ':smnext'				          =>	$object->clean_input($_POST["smnext"]),
                  ':smaddress'			        =>	$object->clean_input($_POST["smaddress"]),
                  ':smcontact'		          =>	$object->clean_input($_POST["smcontact"]),
                  ':smoccu'			            =>	$object->clean_input($_POST["smoccu"]),
                  ':smcompany'			        =>	$object->clean_input($_POST["smcompany"]),
                  ':spcyincome'			        =>	$object->clean_input($_POST["spcyincome"]),
                  ':srappnas'			          =>	$object->clean_input($_POST["srappnas"]),
                  ':sbos'			              =>	$object->clean_input($_POST["sbos"]),
                  ':ssskills'			          =>	$object->clean_input($_POST["ssskills"]),
                  ':stwinterest'			      =>	$object->clean_input($_POST["stwinterest"]),
                  ':spschname'			        =>	$object->clean_input($_POST["spschname"]),
                  ':spsaddress'			        =>	$object->clean_input($_POST["spsaddress"]),
                  ':spsyrlvl'			          =>	$object->clean_input($_POST["spsyrlvl"]),
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