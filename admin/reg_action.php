<?php 

// register_action.php

include('../class/dbcon.php');

$object = new sms;
if(isset($_POST["action"]))
{

if($_POST['action'] == 'student_register')
{
    $error = '';

    $success = '';

    $data = array(
        ':sfname'	=>	$_POST["sfname"]
    );

    $object->query = "
    SELECT * FROM tbl_sample
    WHERE sfname = :sfname
    ";

    $object->execute($data);

    if($object->row_count() > 0)
    {
        $error = '<div class="alert alert-danger">School ID Number Already Exists</div>';
    }
    else
    {
        
        $data = array(
            ':sfname'				        =>	$object->clean_input($_POST["sfname"]),
            ':smname'			            =>	$object->clean_input($_POST["smname"]),
            ':slname'			            =>	$object->clean_input($_POST["slname"])
        );

        $object->query = "
        INSERT INTO tbl_sample 
        (sfname, smname, slname) 
        VALUES (:sfname, :smname, :slname)
        ";

        $object->execute($data);

        $success = '<div class="alert alert-success">Student Data Added</div>';
    }

    $output = array(
        'error'		=>	$error,
        'success'	=>	$success
    );
    echo json_encode($output);
}

}

?>