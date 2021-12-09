<?php

include('../class/dbcon.php');

$object = new sms;


// Search and Table
    if(isset($_POST["action"]))
    {
        if($_POST["action"] == 'fetch')
        {
            $order_column = array('sclname', 'scfname', 'scmname', 'scnext', 'scsaddress', 'scpemail', 'scmnum', 'scgender', 'scschstat', 'scdapply');
            /* Common Data
                +sclname, +scfname, +scmname, +scmnum, +scnext, +scgender, +scpemail, +scschstat		
            */
            $output = array();
            
            $main_query = "
            SELECT * FROM tbl_ched WHERE scschstat = 'Pending'
            ";

            $search_query = '';
            
            if(isset($_POST['search']['value']))
            {
                $search_query .= 'AND (sclname LIKE "%'.$_POST['search']['value'].'%" 
                OR scfname LIKE "%'.$_POST['search']['value'].'%" 
                OR scmname LIKE "%'.$_POST['search']['value'].'%" 
                OR scsaddress LIKE "%'.$_POST['search']['value'].'%" 
                OR scmnum LIKE "%'.$_POST['search']['value'].'%"
                OR scpemail LIKE "%'.$_POST['search']['value'].'%")';
            }

            if(isset($_POST["order"]))
            {
                $order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
            }
            else
            {
                $order_query = 'ORDER BY sched_id ASC ';
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
                        $sub_array[] = $check = '<div style="text-align: center;"><input type="checkbox" class="checkbox" value="'.$row["sched_id"].'" /></div>';
                        $sub_array[] = $row["sclname"];
                        $sub_array[] = $row["scfname"];
                        $sub_array[] = $row["scmname"];
                        $sub_array[] = $row["scnext"];
                        $sub_array[] = $row["scsaddress"];
                        $sub_array[] = $row["scmnum"];
                        $sub_array[] = $row["scgender"];
                        $sub_array[] = $row["scpemail"];
                        $status = '';
                        if($row["scschstat"] == 'Pending')
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-warning btn-sm status_button" data-id="'.$row["sched_id"].'" data-status="'.$row["scschstat"].'">Pending</button>';
                        }
                        else if($row["scschstat"] == 'Approved')
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-success btn-sm status_button" data-id="'.$row["sched_id"].'" data-status="'.$row["scschstat"].'">Approved</button>';
                        }
                        else
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-danger btn-sm status_button" data-id="'.$row["sched_id"].'" data-status="'.$row["scschstat"].'">Rejected</button>';
                        }
                        $sub_array[] = $status;
                        $sub_array[] = '
                        <div align="center">
                        <button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["sched_id"].'"><i class="fas fa-eye"></i></button>
                        <button type="button" name="edit_button" class="btn btn-warning btn-circle btn-sm edit_button" data-id="'.$row["sched_id"].'"><i class="fas fa-edit"></i></button>
                        <button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="'.$row["sched_id"].'"><i class="fas fa-times"></i></button>
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
// Add Query
    if($_POST["action"] == 'Add')
    {
        $error = '';

        $success = '';

        $data = array(
            ':scaemail'	=>	$_POST["scaemail"]
        );

        $object->query = "
        SELECT * FROM tbl_ched
        WHERE scaemail = :scaemail
        ";

        $object->execute($data);

        if($object->row_count() > 0)
        {
            $error = '<div class="alert alert-danger">Email Address Already Exists</div>';
        }
        else
        {
            $object->query = "
            INSERT INTO tbl_ched
            (scfname, scmname, sclname, scnext, scdbirth, scgender, sccivilstat, scpbirth, scaddress, sczcode, scschname, scsaddress,  
            scstype, schygrade, scctship, scmnum, scpemail, scdisability, scflname, scffname, scfmname, scfnext, scfstatus, scfaddress, scfoccu, 
            scfeduc, scmlname, scmfname, scmmname, scmnext, scmstatus, scmaddress, scmoccu, scmeduc, scptgross, scnsibling, scsintend, scsadd, 
            scschooltype, sccourse, sccoursestat, scdrprc, scdrprcstat, scdrbrgyin, scdrbrgyinstat, scdrpgm, scdrpgmstat, scschtype, scaemail, scapass, scgrantstat, 
            scschstat, scdapply) 
            VALUES (:scfname, :scmname, :sclname, :scnext, :scdbirth, :scgender, :sccivilstat, :scpbirth, :scaddress, :sczcode, 
            :scschname, :scsaddress, :scstype, :schygrade, :scctship, :scmnum, :scpemail, :scdisability, :scflname, :scffname, :scfmname, 
            :scfnext, :scfstatus, :scfaddress, :scfoccu, :scfeduc, :scmlname, :scmfname, :scmmname, :scmnext, :scmstatus, :scmaddress, :scmoccu, :scmeduc, 
            :scptgross, :scnsibling, :scsintend, :scsadd, :scschooltype, :sccourse, :sccoursestat, :scdrprc, :scdrprcstat, :scdrbrgyin, :scdrbrgyinstat, 
            :scdrpgm, :scdrpgmstat, 'CHED', :scaemail, :scapass, :scgrantstat, 'Pending', '$object->now')";
            
            $password_hash = password_hash($_POST["scapass"], PASSWORD_DEFAULT);

            if($error == '')
            {
                $data = array(
                    // Personal Details
                    ':scfname'					    =>	$object->clean_input($_POST["scfname"]),
                    ':scmname'					    =>	$object->clean_input($_POST["scmname"]),
                    ':sclname'					    =>	$object->clean_input($_POST["sclname"]),
                    ':scnext'					  	=>	$object->clean_input($_POST["scnext"]),
                    ':scdbirth'					  	=>	$object->clean_input($_POST["scdbirth"]),
                    ':scgender'					  	=>	$object->clean_input($_POST["scgender"]),
                    ':sccivilstat'				    =>	$object->clean_input($_POST["sccivilstat"]),
                    ':scpbirth'						=>	$object->clean_input($_POST["scpbirth"]),
                    ':scaddress'					=>	$object->clean_input($_POST["scaddress"]),
                    ':sczcode'						=>	$object->clean_input($_POST["sczcode"]),
                    ':scschname'					=>	$object->clean_input($_POST["scschname"]),
                    ':scsaddress'					=>	$object->clean_input($_POST["scsaddress"]),
                    ':scstype'						=>	$object->clean_input($_POST["scstype"]),
                    ':schygrade'					=>	$object->clean_input($_POST["schygrade"]),
                    ':scctship'						=>	$object->clean_input($_POST["scctship"]),
                    ':scmnum'					    =>	$object->clean_input($_POST["scmnum"]),
                    ':scpemail'					    =>	$object->clean_input($_POST["scpemail"]),
                    ':scdisability'					=>	$object->clean_input($_POST["scdisability"]),
                    // Family Details
                    // Father Details
                    ':scffname'				      	=>	$object->clean_input($_POST["scffname"]),
                    ':scfmname'					    =>	$object->clean_input($_POST["scfmname"]),
                    ':scflname'					    =>	$object->clean_input($_POST["scflname"]),
                    ':scfnext'			        	=>	$object->clean_input($_POST["scfnext"]),
                    ':scfstatus'			        =>	$object->clean_input($_POST["scfstatus"]),
                    ':scfaddress'					=>	$object->clean_input($_POST["scfaddress"]),
                    ':scfoccu'				      	=>	$object->clean_input($_POST["scfoccu"]),
                    ':scfeduc'					    =>	$object->clean_input($_POST["scfeduc"]),
                    // Mother Details
                    ':scmfname'				      	=>	$object->clean_input($_POST["scmfname"]),
                    ':scmmname'					    =>	$object->clean_input($_POST["scmmname"]),
                    ':scmlname'					    =>	$object->clean_input($_POST["scmlname"]),
                    ':scmnext'			        	=>	$object->clean_input($_POST["scmnext"]),
                    ':scmstatus'			        =>	$object->clean_input($_POST["scmstatus"]),
                    ':scmaddress'					=>	$object->clean_input($_POST["scmaddress"]),
                    ':scmoccu'				      	=>	$object->clean_input($_POST["scmoccu"]),
                    ':scmeduc'					    =>	$object->clean_input($_POST["scmeduc"]),
                    ':scptgross'				    =>	$object->clean_input($_POST["scptgross"]),
                    ':scnsibling'				  	=>	$object->clean_input($_POST["scnsibling"]),
                    // Education Details
                    ':scsintend'				    =>	$object->clean_input($_POST["scsintend"]),
                    ':scsadd'					    =>	$object->clean_input($_POST["scsadd"]),
                    ':scschooltype'		  			=>	$object->clean_input($_POST["scschooltype"]),
                    ':sccourse'				        =>	$object->clean_input($_POST["sccourse"]),
                    ':sccoursestat'					=>	$object->clean_input($_POST["sccoursestat"]),
                    // Requirements Details
                    ':scdrprc'				   		=>	$object->clean_input($_POST["scdrprc"]),
                    ':scdrprcstat'					=>	$object->clean_input($_POST["scdrprcstat"]),
                    ':scdrpgm'		  				=>	$object->clean_input($_POST["scdrpgm"]),
                    ':scdrpgmstat'				    =>	$object->clean_input($_POST["scdrpgmstat"]),
                    ':scdrbrgyin'				    =>	$object->clean_input($_POST["scdrbrgyin"]),
                    ':scdrbrgyinstat'				=>	$object->clean_input($_POST["scdrbrgyinstat"]),
                    // Scholarship Status Details 
                    ':scgrantstat'					=>	$object->clean_input($_POST["scgrantstat"]),
                    // Account Details
                    ':scaemail'			      		=>	$object->clean_input($_POST["scaemail"]),
                    ':scapass'				      	=>  $password_hash
                );

                $object->execute($data);

                $success = '<div class="alert alert-success">Applicant Data Added</div>';
            }
        }

        $output = array(
            'error'		=>	$error,
            'success'	=>	$success
        );

        echo json_encode($output);

    }

// Single Fetch Query
    if($_POST["action"] == 'fetch_single')
    {
        $object->query = "
        SELECT * FROM tbl_ched 
        WHERE sched_id = '".$_POST["sched_id"]."'
        ";

        $result = $object->get_result();

        $data = array();

        foreach($result as $row)
        {
            // Account Details
            $data['scaemail'] = $row['scaemail'];
            $data['scapass'] = $row['scapass'];
            // Personal Details
            $data['scfname'] = $row['scfname'];
            $data['scmname'] = $row['scmname'];
            $data['sclname'] = $row['sclname'];
            $data['scnext'] = $row['scnext'];
            $data['scdbirth'] = $row['scdbirth'];
            $data['sccivilstat'] = $row['sccivilstat'];
            $data['scsaddress'] = $row['scsaddress'];
            $data['scpemail'] = $row['scpemail'];
            $data['scmnum'] = $row['scmnum'];
            $data['sncourse'] = $row['sncourse'];
            $data['snyrlvl'] = $row['snyrlvl'];
            $data['scgender'] = $row['scgender'];
            // Family Details
            // Guardian Details
            $data['sngfname'] = $row['sngfname'];
            $data['sngmname'] = $row['sngmname'];
            $data['snglname'] = $row['snglname'];
            $data['sngnext'] = $row['sngnext'];
            $data['sngaddress'] = $row['sngaddress'];
            $data['sngcontact'] = $row['sngcontact'];
            $data['sngoccu'] = $row['sngoccu'];
            $data['sngcompany'] = $row['sngcompany'];
            // Father Details
            $data['scffname'] = $row['scffname'];
            $data['scfmname'] = $row['scfmname'];
            $data['scflname'] = $row['scflname'];
            $data['scfnext'] = $row['scfnext'];
            $data['scfaddress'] = $row['scfaddress'];
            $data['snfcontact'] = $row['snfcontact'];
            $data['scfoccu'] = $row['scfoccu'];
            $data['snfcompany'] = $row['snfcompany'];
            // Mother Details
            $data['snmfname'] = $row['snmfname'];
            $data['snmmname'] = $row['snmmname'];
            $data['snmlname'] = $row['snmlname'];
            $data['snmnext'] = $row['snmnext'];
            $data['snmaddress'] = $row['snmaddress'];
            $data['snmcontact'] = $row['snmcontact'];
            $data['snmoccu'] = $row['snmoccu'];
            $data['snmcompany'] = $row['snmcompany'];
            $data['snspcyincome'] = $row['snspcyincome'];
            // Application Details
            $data['snrappnas'] = $row['snrappnas'];
            $data['snbos'] = $row['snbos'];
            $data['snsskills'] = $row['snsskills'];
            $data['sntwinterest'] = $row['sntwinterest'];
            // Education Details
            $data['snpschatt'] = $row['snpschatt'];
            $data['snpschadd'] = $row['snpschadd'];
            $data['snpyrlvl'] = $row['snpyrlvl']; 
            // Requirement Details
            $data['scdrprc'] = $row['scdrprc'];
            $data['scdrprcstat'] = $row['scdrprcstat'];
            $data['scdrpgm'] = $row['scdrpgm'];
            $data['scdrpgmstat'] = $row['scdrpgmstat'];
            $data['sntbytpic'] = $row['sntbytpic'];
            $data['sntbytpicstat'] = $row['sntbytpicstat'];
            $data['scdrbrgyin'] = $row['scdrbrgyin'];
            $data['scdrbrgyinstat'] = $row['scdrbrgyinstat'];
            $data['snpscef'] = $row['snpscef'];
            $data['snpscefstat'] = $row['snpscefstat'];
            // Scholar Type
            $data['snacapstype'] = $row['snacapstype'];
            $data['scgrantstat'] = $row['scgrantstat'];
            $data['scschstat'] = $row['scschstat'];
            $data['scdapply'] = $row['scdapply'];
        }

        echo json_encode($data);
    }

// Edit Query
    if($_POST["action"] == 'Edit')
    {
        $error = '';

        $success = '';

        $data = array(
            ':scaemail'		=>	$_POST["scaemail"],
            ':sched_id'	=>	$_POST['hidden_id']
        );

        $object->query = "
        SELECT * FROM tbl_ched 
        WHERE scaemail = :scaemail 
        AND sched_id != :sched_id
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
                UPDATE tbl_ched
                SET scaemail = :scaemail,
                scapass = :scapass,
                scfname = :scfname,
                scmname = :scmname,
                sclname = :sclname,
                scnext = :scnext,
                scdbirth = :scdbirth,
                sccivilstat = :sccivilstat,
                scsaddress = :scsaddress,
                scpemail = :scpemail,
                scmnum = :scmnum,
                sncourse = :sncourse,
                snyrlvl = :snyrlvl,
                scgender = :scgender,
                sngfname = :sngfname, 
                sngmname = :sngmname,
                snglname = :snglname,
                sngnext = :sngnext,
                sngaddress = :sngaddress,
                sngcontact = :sngcontact,
                sngoccu = :sngoccu,
                sngcompany = :sngcompany,
                scffname = :scffname,
                scfmname = :scfmname,
                scflname = :scflname,
                scfnext = :scfnext,
                scfaddress = :scfaddress,
                snfcontact = :snfcontact,
                scfoccu = :scfoccu,
                snfcompany = :snfcompany,
                snmfname = :snmfname,
                snmmname = :snmmname,
                snmlname = :snmlname,
                snmnext = :snmnext,
                snmaddress = :snmaddress,
                snmcontact = :snmcontact,
                snmoccu = :snmoccu,
                snmcompany = :snmcompany,
                snspcyincome = :snspcyincome,
                snrappnas = :snrappnas,
                snbos = :snbos,
                snsskills = :snsskills,
                sntwinterest = :sntwinterest,
                snpschatt = :snpschatt,
                snpschadd = :snpschadd,
                snpyrlvl = :snpyrlvl,
                scdrprc = :scdrprc,
                scdrprcstat = :scdrprcstat,
                scdrpgm = :scdrpgm,
                scdrpgmstat = :scdrpgmstat,
                sntbytpic = :sntbytpic,
                sntbytpicstat = :sntbytpicstat,
                scdrbrgyin = :scdrbrgyin,
                scdrbrgyinstat = :scdrbrgyinstat,
                snpscef = :snpscef,
                snpscefstat = :snpscefstat,
                scgrantstat = :scgrantstat
                WHERE sched_id = '".$_POST['hidden_id']."'
                ";

                $password_hash = password_hash($_POST["scapass"], PASSWORD_DEFAULT);

                $data = array(
                    // Personal Details
                    ':scfname'					    =>	$object->clean_input($_POST["scfname"]),
                    ':scmname'					    =>	$object->clean_input($_POST["scmname"]),
                    ':sclname'					    =>	$object->clean_input($_POST["sclname"]),
                    ':scnext'					  	=>	$object->clean_input($_POST["scnext"]),
                    ':scdbirth'					  	=>	$object->clean_input($_POST["scdbirth"]),
                    ':sccivilstat'				    	=>	$object->clean_input($_POST["sccivilstat"]),
                    ':scsaddress'					=>	$object->clean_input($_POST["scsaddress"]),
                    ':scpemail'					    =>	$object->clean_input($_POST["scpemail"]),
                    ':scmnum'					=>	$object->clean_input($_POST["scmnum"]),
                    ':scgender'					  	=>	$object->clean_input($_POST["scgender"]),
                    ':sncourse'						=>	$object->clean_input($_POST["sncourse"]),
                    ':snyrlvl'						=>	$object->clean_input($_POST["snyrlvl"]),
                    // Family Details
                    // Guardian Details
                    ':sngfname'				      	=>	$object->clean_input($_POST["sngfname"]),
                    ':sngmname'				      	=>	$object->clean_input($_POST["sngmname"]),
                    ':snglname'			        	=>	$object->clean_input($_POST["snglname"]),
                    ':sngnext'			        	=>	$object->clean_input($_POST["sngnext"]),
                    ':sngaddress'					=>	$object->clean_input($_POST["sngaddress"]),
                    ':sngcontact'					=>	$object->clean_input($_POST["sngcontact"]),
                    ':sngoccu'					    =>	$object->clean_input($_POST["sngoccu"]),
                    ':sngcompany'					=>	$object->clean_input($_POST["sngcompany"]),
                    // Father Details
                    ':scffname'				      	=>	$object->clean_input($_POST["scffname"]),
                    ':scfmname'					    =>	$object->clean_input($_POST["scfmname"]),
                    ':scflname'					    =>	$object->clean_input($_POST["scflname"]),
                    ':scfnext'			        	=>	$object->clean_input($_POST["scfnext"]),
                    ':scfaddress'					=>	$object->clean_input($_POST["scfaddress"]),
                    ':snfcontact'					=>	$object->clean_input($_POST["snfcontact"]),
                    ':scfoccu'				      	=>	$object->clean_input($_POST["scfoccu"]),
                    ':snfcompany'				   	=>	$object->clean_input($_POST["snfcompany"]),
                    // Mother Details
                    ':snmfname'				      	=>	$object->clean_input($_POST["snmfname"]),
                    ':snmmname'					    =>	$object->clean_input($_POST["snmmname"]),
                    ':snmlname'					    =>	$object->clean_input($_POST["snmlname"]),
                    ':snmnext'			        	=>	$object->clean_input($_POST["snmnext"]),
                    ':snmaddress'					=>	$object->clean_input($_POST["snmaddress"]),
                    ':snmcontact'					=>	$object->clean_input($_POST["snmcontact"]),
                    ':snmoccu'				      	=>	$object->clean_input($_POST["snmoccu"]),
                    ':snmcompany'				    =>	$object->clean_input($_POST["snmcompany"]),
                    ':snspcyincome'				  	=>	$object->clean_input($_POST["snspcyincome"]),
                    // Application Details
                    ':snrappnas'				    =>	$object->clean_input($_POST["snrappnas"]),
                    ':snbos'					  	=>	$object->clean_input($_POST["snbos"]),
                    ':snsskills'		  			=>	$object->clean_input($_POST["snsskills"]),
                    ':sntwinterest'		  			=>	$object->clean_input($_POST["sntwinterest"]),
                    // Education Details
                    ':snpschatt'				    =>	$object->clean_input($_POST["snpschatt"]),
                    ':snpschadd'					=>	$object->clean_input($_POST["snpschadd"]),
                    ':snpyrlvl'		  				=>	$object->clean_input($_POST["snpyrlvl"]),
                    // Requirements Details
                    ':scdrprc'				   		=>	$object->clean_input($_POST["scdrprc"]),
                    ':scdrprcstat'					=>	$object->clean_input($_POST["scdrprcstat"]),
                    ':scdrpgm'		  				=>	$object->clean_input($_POST["scdrpgm"]),
                    ':scdrpgmstat'				    =>	$object->clean_input($_POST["scdrpgmstat"]),
                    ':sntbytpic'					=>	$object->clean_input($_POST["sntbytpic"]),
                    ':sntbytpicstat'		  		=>	$object->clean_input($_POST["sntbytpicstat"]),
                    ':scdrbrgyin'				    =>	$object->clean_input($_POST["scdrbrgyin"]),
                    ':scdrbrgyinstat'				=>	$object->clean_input($_POST["scdrbrgyinstat"]),
                    ':snpscef'		  				=>	$object->clean_input($_POST["snpscef"]),
                    ':snpscefstat'		  			=>	$object->clean_input($_POST["snpscefstat"]),
                    // Scholarship Status Details 
                    ':scgrantstat'					=>	$object->clean_input($_POST["scgrantstat"]),
                    // Account Details
                    ':scaemail'			      		=>	$object->clean_input($_POST["scaemail"]),
                    ':scapass'				      	=>  $password_hash
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

// Change Status Query
    if($_POST["action"] == 'change_status')
    {
        $data = array(
            ':scschstat'		=>	$_POST['next_status']
        );

        $object->query = "
        UPDATE tbl_ched
        SET scschstat = :scschstat 
        WHERE sched_id = '".$_POST["id"]."'
        ";

        $object->execute($data);

        echo '<div class="alert alert-success">Class Status change to '.$_POST['next_status'].'</div>';
    }
// Approve All Query
    if($_POST["action"] == 'approve_all')
    {
        for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
        {
        $object->query = "
            UPDATE tbl_ched 
            SET scschstat = 'Approved'
            WHERE sched_id = '".$_POST["checkbox_value"][$count]."'";

            $object->execute();
        }
        echo '<div class="alert alert-success">Selected Applicant Data Approved</div>';
    }
// Reject All Query
    if($_POST["action"] == 'reject_all')
    {
        for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
        {
        $object->query = "
            UPDATE tbl_ched 
            SET scschstat = 'Rejected'
            WHERE sched_id = '".$_POST["checkbox_value"][$count]."'";

            $object->execute();
        }
        echo '<div class="alert alert-success">Selected Applicant Data Rejected</div>';
    }
// Delete All Query
    if($_POST["action"] == 'delete_all')
    {
        for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
        {
        $object->query = "
            DELETE FROM tbl_ched 
            WHERE sched_id = '".$_POST["checkbox_value"][$count]."'";

            $object->execute();
        }
        echo '<div class="alert alert-success">Selected Applicant Data Deleted</div>';
    }

// Delete Query
    if($_POST["action"] == 'delete')
    {
        $object->query = "
        DELETE FROM tbl_ched 
        WHERE sched_id = '".$_POST["id"]."'
        ";

        $object->execute();

        echo '<div class="alert alert-success">Non-Academic Applicant Data Deleted</div>';
    }
    }

    ?>