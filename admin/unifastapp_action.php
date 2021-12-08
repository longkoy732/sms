<?php

    include('../class/dbcon.php');

    $object = new sms;


// Search and Table
    if(isset($_POST["action"]))
    {
        if($_POST["action"] == 'fetch')
        {
            $order_column = array('suslname', 'susfname', 'susmname', 'susgender', 'suscontact', 'susaddress', 'suspemail', 'susschstat', 'susdapply');
            /* Common Data
                +suslname, +susfname, +susmname, +suscontact, +susgender, +suspemail, +susschstat		
            */
            $output = array();
            
            $main_query = "
            SELECT * FROM tbl_unifast WHERE susschstat = 'Pending'
            ";

            $search_query = '';
            
            if(isset($_POST['search']['value']))
            {
                $search_query .= 'AND (suslname LIKE "%'.$_POST['search']['value'].'%" 
                OR susfname LIKE "%'.$_POST['search']['value'].'%" 
                OR susmname LIKE "%'.$_POST['search']['value'].'%" 
                OR susaddress LIKE "%'.$_POST['search']['value'].'%" 
                OR suscontact LIKE "%'.$_POST['search']['value'].'%"
                OR suspemail LIKE "%'.$_POST['search']['value'].'%")';
            }

            if(isset($_POST["order"]))
            {
                $order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
            }
            else
            {
                $order_query = 'ORDER BY sunifast_id ASC ';
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
                        $sub_array[] = $check = '<div style="text-align: center;"><input type="checkbox" class="checkbox" value="'.$row["sunifast_id"].'" /></div>';
                        $sub_array[] = $row["suslname"];
                        $sub_array[] = $row["susfname"];
                        $sub_array[] = $row["susmname"];
                        $sub_array[] = $row["susaddress"];
                        $sub_array[] = $row["suscontact"];
                        $sub_array[] = $row["susgender"];
                        $sub_array[] = $row["suspemail"];
                        $status = '';
                        if($row["susschstat"] == 'Pending')
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-warning btn-sm status_button" data-id="'.$row["sunifast_id"].'" data-status="'.$row["susschstat"].'">Pending</button>';
                        }
                        else if($row["susschstat"] == 'Approved')
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-success btn-sm status_button" data-id="'.$row["sunifast_id"].'" data-status="'.$row["susschstat"].'">Approved</button>';
                        }
                        else
                        {
                            $status = '<button type="button" name="status_button" class="btn btn-danger btn-sm status_button" data-id="'.$row["sunifast_id"].'" data-status="'.$row["susschstat"].'">Rejected</button>';
                        }
                        $sub_array[] = $status;
                        $sub_array[] = '
                        <div align="center">
                        <button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["sunifast_id"].'"><i class="fas fa-eye"></i></button>
                        <button type="button" name="edit_button" class="btn btn-warning btn-circle btn-sm edit_button" data-id="'.$row["sunifast_id"].'"><i class="fas fa-edit"></i></button>
                        <button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="'.$row["sunifast_id"].'"><i class="fas fa-times"></i></button>
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
            ':susaemail'	=>	$_POST["susaemail"]
        );

        $object->query = "
        SELECT * FROM tbl_unifast
        WHERE susaemail = :susaemail
        ";

        $object->execute($data);

        if($object->row_count() > 0)
        {
            $error = '<div class="alert alert-danger">Email Address Already Exists</div>';
        }
        else
        {
            $object->query = "
            INSERT INTO tbl_unifast
            (sustudent_id, suslname, susfname, susmname, susnext, susgender, susdbirth, suscontact, susaddress, susspattended, suscp, susyl, 
            suspemail, susflname, susffname, susfmname, susfnext, susmlname, susmfname, susmmname, susmnext, susdswd, sushci, susdid, susdfilled, sudrpicstat, 
            sudrpsastat, sudrobrstat, sustype, susaemail, susapass, susgrantstat, susschstat, susdapply) 
            VALUES (:sustudent_id, :suslname, :susfname, :susmname, :susnext, :susgender, :susdbirth, :suscontact, :susaddress, :susspattended	, 
            :suscp, :susyl, :suspemail, :susflname, :susffname, :susfmname, :susfnext, :susmlname, :susmfname, :susmmname, :susmnext, :susdswd, 
            :sushci, :susdid, :susdfilled, :sudrpicstat, :sudrpsastat, :sudrobrstat, 'Unifast', :susaemail, :susapass, :susgrantstat, 'Pending', '$object->now')
            ";
            
            $password_hash = password_hash($_POST["susapass"], PASSWORD_DEFAULT);

            if($error == '')
            {
                $data = array(
                    // Personal Details
                    ':susfname'					    =>	$object->clean_input($_POST["susfname"]),
                    ':susmname'					    =>	$object->clean_input($_POST["susmname"]),
                    ':suslname'					    =>	$object->clean_input($_POST["suslname"]),
                    ':snnext'					  	=>	$object->clean_input($_POST["snnext"]),
                    ':sndbirth'					  	=>	$object->clean_input($_POST["sndbirth"]),
                    ':snctship'				    	=>	$object->clean_input($_POST["snctship"]),
                    ':susaddress'					=>	$object->clean_input($_POST["susaddress"]),
                    ':suspemail'					    =>	$object->clean_input($_POST["suspemail"]),
                    ':suscontact'					=>	$object->clean_input($_POST["suscontact"]),
                    ':susgender'					  	=>	$object->clean_input($_POST["susgender"]),
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
                    ':snffname'				      	=>	$object->clean_input($_POST["snffname"]),
                    ':snfmname'					    =>	$object->clean_input($_POST["snfmname"]),
                    ':snflname'					    =>	$object->clean_input($_POST["snflname"]),
                    ':snfnext'			        	=>	$object->clean_input($_POST["snfnext"]),
                    ':snfaddress'					=>	$object->clean_input($_POST["snfaddress"]),
                    ':snfcontact'					=>	$object->clean_input($_POST["snfcontact"]),
                    ':snfoccu'				      	=>	$object->clean_input($_POST["snfoccu"]),
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
                    ':sudrpic'				   		=>	$object->clean_input($_POST["sudrpic"]),
                    ':sudrpicstat'					=>	$object->clean_input($_POST["sudrpicstat"]),
                    ':sudrpsa'		  				=>	$object->clean_input($_POST["sudrpsa"]),
                    ':sudrpsastat'				    =>	$object->clean_input($_POST["sudrpsastat"]),
                    ':sudrobr'					    =>	$object->clean_input($_POST["sudrobr"]),
                    ':sudrobrstat'		  		    =>	$object->clean_input($_POST["sudrobrstat"]),
                    ':snpbrgyin'				    =>	$object->clean_input($_POST["snpbrgyin"]),
                    ':snpbrgyinstat'				=>	$object->clean_input($_POST["snpbrgyinstat"]),
                    ':snpscef'		  				=>	$object->clean_input($_POST["snpscef"]),
                    ':snpscefstat'		  			=>	$object->clean_input($_POST["snpscefstat"]),
                    // Scholarship Status Details 
                    ':susgrantstat'					=>	$object->clean_input($_POST["susgrantstat"]),
                    // Account Details
                    ':susaemail'			      		=>	$object->clean_input($_POST["susaemail"]),
                    ':susapass'				      	=>  $password_hash
                );

                $object->execute($data);

                $success = '<div class="alert alert-success">Non-Academic Scholar Applicant Added</div>';
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
        SELECT * FROM tbl_unifast
        WHERE sunifast_id = '".$_POST["sunifast_id"]."'
        ";

        $result = $object->get_result();

        $data = array();

        foreach($result as $row)
        {
            // Account Details
            $data['susaemail'] = $row['susaemail'];
            $data['susapass'] = $row['susapass'];
            // Personal Details
            $data['susfname'] = $row['susfname'];
            $data['susmname'] = $row['susmname'];
            $data['suslname'] = $row['suslname'];
            $data['snnext'] = $row['snnext'];
            $data['sndbirth'] = $row['sndbirth'];
            $data['snctship'] = $row['snctship'];
            $data['susaddress'] = $row['susaddress'];
            $data['suspemail'] = $row['suspemail'];
            $data['suscontact'] = $row['suscontact'];
            $data['sncourse'] = $row['sncourse'];
            $data['snyrlvl'] = $row['snyrlvl'];
            $data['susgender'] = $row['susgender'];
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
            $data['snffname'] = $row['snffname'];
            $data['snfmname'] = $row['snfmname'];
            $data['snflname'] = $row['snflname'];
            $data['snfnext'] = $row['snfnext'];
            $data['snfaddress'] = $row['snfaddress'];
            $data['snfcontact'] = $row['snfcontact'];
            $data['snfoccu'] = $row['snfoccu'];
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
            $data['sudrpic'] = $row['sudrpic'];
            $data['sudrpicstat'] = $row['sudrpicstat'];
            $data['sudrpsa'] = $row['sudrpsa'];
            $data['sudrpsastat'] = $row['sudrpsastat'];
            $data['sudrobr'] = $row['sudrobr'];
            $data['sudrobrstat'] = $row['sudrobrstat'];
            $data['snpbrgyin'] = $row['snpbrgyin'];
            $data['snpbrgyinstat'] = $row['snpbrgyinstat'];
            $data['snpscef'] = $row['snpscef'];
            $data['snpscefstat'] = $row['snpscefstat'];
            // Scholar Type
            $data['snacapstype'] = $row['snacapstype'];
            $data['susgrantstat'] = $row['susgrantstat'];
            $data['susschstat'] = $row['susschstat'];
            $data['susdapply'] = $row['susdapply'];
        }

        echo json_encode($data);
    }

// Edit Query
    if($_POST["action"] == 'Edit')
    {
        $error = '';

        $success = '';

        $data = array(
            ':susaemail'	=>	$_POST["susaemail"],
            ':sunifast_id'			=>	$_POST['hidden_id']
        );

        $object->query = "
        SELECT * FROM tbl_unifast 
        WHERE susaemail = :susaemail 
        AND sunifast_id != :sunifast_id
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
                UPDATE tbl_unifast
                SET susaemail = :susaemail,
                susapass = :susapass,
                susfname = :susfname,
                susmname = :susmname,
                suslname = :suslname,
                snnext = :snnext,
                sndbirth = :sndbirth,
                snctship = :snctship,
                susaddress = :susaddress,
                suspemail = :suspemail,
                suscontact = :suscontact,
                sncourse = :sncourse,
                snyrlvl = :snyrlvl,
                susgender = :susgender,
                sngfname = :sngfname, 
                sngmname = :sngmname,
                snglname = :snglname,
                sngnext = :sngnext,
                sngaddress = :sngaddress,
                sngcontact = :sngcontact,
                sngoccu = :sngoccu,
                sngcompany = :sngcompany,
                snffname = :snffname,
                snfmname = :snfmname,
                snflname = :snflname,
                snfnext = :snfnext,
                snfaddress = :snfaddress,
                snfcontact = :snfcontact,
                snfoccu = :snfoccu,
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
                sudrpic = :sudrpic,
                sudrpicstat = :sudrpicstat,
                sudrpsa = :sudrpsa,
                sudrpsastat = :sudrpsastat,
                sudrobr = :sudrobr,
                sudrobrstat = :sudrobrstat,
                snpbrgyin = :snpbrgyin,
                snpbrgyinstat = :snpbrgyinstat,
                snpscef = :snpscef,
                snpscefstat = :snpscefstat,
                susgrantstat = :susgrantstat
                WHERE sunifast_id = '".$_POST['hidden_id']."'
                ";

                $password_hash = password_hash($_POST["susapass"], PASSWORD_DEFAULT);

                $data = array(
                    // Personal Details
                    ':susfname'					    =>	$object->clean_input($_POST["susfname"]),
                    ':susmname'					    =>	$object->clean_input($_POST["susmname"]),
                    ':suslname'					    =>	$object->clean_input($_POST["suslname"]),
                    ':snnext'					  	=>	$object->clean_input($_POST["snnext"]),
                    ':sndbirth'					  	=>	$object->clean_input($_POST["sndbirth"]),
                    ':snctship'				    	=>	$object->clean_input($_POST["snctship"]),
                    ':susaddress'					=>	$object->clean_input($_POST["susaddress"]),
                    ':suspemail'					    =>	$object->clean_input($_POST["suspemail"]),
                    ':suscontact'					=>	$object->clean_input($_POST["suscontact"]),
                    ':susgender'					  	=>	$object->clean_input($_POST["susgender"]),
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
                    ':snffname'				      	=>	$object->clean_input($_POST["snffname"]),
                    ':snfmname'					    =>	$object->clean_input($_POST["snfmname"]),
                    ':snflname'					    =>	$object->clean_input($_POST["snflname"]),
                    ':snfnext'			        	=>	$object->clean_input($_POST["snfnext"]),
                    ':snfaddress'					=>	$object->clean_input($_POST["snfaddress"]),
                    ':snfcontact'					=>	$object->clean_input($_POST["snfcontact"]),
                    ':snfoccu'				      	=>	$object->clean_input($_POST["snfoccu"]),
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
                    ':sudrpic'				   		=>	$object->clean_input($_POST["sudrpic"]),
                    ':sudrpicstat'					=>	$object->clean_input($_POST["sudrpicstat"]),
                    ':sudrpsa'		  				=>	$object->clean_input($_POST["sudrpsa"]),
                    ':sudrpsastat'				    =>	$object->clean_input($_POST["sudrpsastat"]),
                    ':sudrobr'					=>	$object->clean_input($_POST["sudrobr"]),
                    ':sudrobrstat'		  		=>	$object->clean_input($_POST["sudrobrstat"]),
                    ':snpbrgyin'				    =>	$object->clean_input($_POST["snpbrgyin"]),
                    ':snpbrgyinstat'				=>	$object->clean_input($_POST["snpbrgyinstat"]),
                    ':snpscef'		  				=>	$object->clean_input($_POST["snpscef"]),
                    ':snpscefstat'		  			=>	$object->clean_input($_POST["snpscefstat"]),
                    // Scholarship Status Details 
                    ':susgrantstat'					=>	$object->clean_input($_POST["susgrantstat"]),
                    // Account Details
                    ':susaemail'			      		=>	$object->clean_input($_POST["susaemail"]),
                    ':susapass'				      	=>  $password_hash
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
            ':susschstat'		=>	$_POST['next_status']
        );

        $object->query = "
        UPDATE tbl_unifast
        SET susschstat = :susschstat 
        WHERE sunifast_id = '".$_POST["id"]."'
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
            UPDATE tbl_unifast 
            SET susschstat = 'Approved'
            WHERE sunifast_id = '".$_POST["checkbox_value"][$count]."'";

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
            UPDATE tbl_unifast 
            SET susschstat = 'Rejected'
            WHERE sunifast_id = '".$_POST["checkbox_value"][$count]."'";

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
            DELETE FROM tbl_unifast 
            WHERE sunifast_id = '".$_POST["checkbox_value"][$count]."'";

            $object->execute();
        }
        echo '<div class="alert alert-success">Selected Applicant Data Deleted</div>';
    }

// Delete Query
    if($_POST["action"] == 'delete')
    {
        $object->query = "
        DELETE FROM tbl_unifast 
        WHERE sunifast_id = '".$_POST["id"]."'
        ";

        $object->execute();

        echo '<div class="alert alert-success">Non-Academic Applicant Data Deleted</div>';
    }
    }

    ?>