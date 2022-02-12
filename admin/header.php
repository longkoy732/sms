<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scholarship Management System</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../vendor/parsley/parsley.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/bootstrap.min.css"/> -->

    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap-select/bootstrap-select.min.css"/>

    <link rel="stylesheet" type="text/css" href="../vendor/datepicker/bootstrap-datepicker.css"/>
    
<style>
    .box
    {
    width:800px;
    margin:0 auto;
    }
    .active_tab1
    {
    background-color:#fff;
    color:#333; 
    font-weight: 600;
    }
    .inactive_tab1
    {
    background-color: #f5f5f5;
    color: #333;
    cursor: not-allowed;
    }
    .has-error
    {
    border-color:#cc0000;
    background-color:#ffff99;
    }
    .scholar-info{
        border: 0;
        pointer-events: none;
        background-color: transparent;
    }
    .sinfo-lbl{
        font-weight: bold;
        font-size: 16px;
    }
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
                <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="student_dashboard.php"> -->
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                </div> -->
                <!-- <i class="fas fa-laugh-wink"></i> -->
                <?php 
                if($_SESSION['type'] == 'Admin')
                {
                ?>
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                    <i class="fas fa-laugh-wink"></i>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                    </a>
                <?php 
                }
                if($_SESSION['type'] == 'Student')
                {
                ?>
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="student_dashboard.php">
                    <i class="fas fa-laugh-wink"></i>
                    <div class="sidebar-brand-text mx-3">Student</div>
                    </a>
                <?php 
                }
                ?>
                

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php
            if($_SESSION['type'] == 'Admin')
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="scholars.php">
                    <i class="fas fa-user-clock"></i>
                    <span>Scholars</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="csv.php">
                    <i class="fas fa-file-excel"></i>
                    <span>CSV</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-user-clock"></i>
                    <span>Scholars</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h4 class="collapse-header">Scholarship Applications</h4>
                        <a class="collapse-item" href="acadapp.php">Academic</a>
                        <a class="collapse-item" href="nonacadapp.php">Non-Academic</a>
                        <a class="collapse-item" href="unifastapp.php">UNIFAST</a>
                        <a class="collapse-item" href="chedapp.php">CHED</a>
                    </div>
                </div>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-check"></i>
                    <span>Approved Scholars</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h4 class="collapse-header">Scholarship Grantees</h4>
                        <a class="collapse-item" href="acadgrants.php">Academic</a>
                        <a class="collapse-item" href="nonacadgrants.php">Non-Academic</a>
                        <a class="collapse-item" href="unifastgrants.php">UNIFAST</a>
                        <a class="collapse-item" href="chedgrants.php">CHED</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-user-times"></i>
                    <span>Rejected Scholars</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h4 class="collapse-header">Scholarship Rejections</h4>
                        <a class="collapse-item" href="acadreject.php">Academic</a>
                        <a class="collapse-item" href="nonacadreject.php">Non-Academic</a>
                        <a class="collapse-item" href="unifastreject.php">UNIFAST</a>
                        <a class="collapse-item" href="chedreject.php">CHED</a>
                    </div>
                </div>
            </li> -->
            <?php
            }
            else{
            ?>
             <li class="nav-item">
                <a class="nav-link" href="student_dashboard.php">
                    <i class="fas fa-user-clock"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php
            if($_SESSION['s_stat'] == 'Approved' || $_SESSION['s_stat'] == 'Renewal')
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="renew.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>Renew Scholarship</span></a>
            </li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="apply.php">
                    <i class="fas fa-notes-medical"></i>
                    <span>Apply Scholarship</span></a>
            </li>
            <?php
            }
            ?>
            <?php
            }
            if($_SESSION['type'] == 'Admin')
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="far fa-id-card"></i>
                    <span>Profile</span></a>
            </li>
            <?php
            } 
            else
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="student_profile.php">
                    <i class="far fa-id-card"></i>
                    <span>Profile</span></a>
            </li>
            <?php
            }
            ?>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <?php
                        $user_name = '';
                        $user_profile_image = '';

                        if($_SESSION['type'] == 'Admin')
                        {
                            $object->query = "
                            SELECT * FROM tbl_admin
                            WHERE admin_id = '".$_SESSION['admin_id']."'
                            ";

                            $user_result = $object->get_result();

                            foreach($user_result as $row)
                            {
                                $user_name = $row['admin_name'];
                                $user_profile_image = '../img/undraw_profile.svg';
                            }
                        }

                        if($_SESSION['type'] == 'Student')
                        {
                            $object->query = "
                            SELECT * FROM tbl_student 
                            WHERE s_id = '".$_SESSION['admin_id']."'
                            ";

                            $user_result = $object->get_result();
                            
                            foreach($user_result as $row)
                            {
                                $user_name = $row['semail'];
                                $user_profile_image = '../img/undraw_profile.svg';
                            }
                        }

                        if($_SESSION['type'] == 'Patient')
                        {
                            $object->query = "
                            SELECT * FROM tbl_patient 
                            WHERE patient_id = '".$_SESSION['admin_id']."'
                            ";

                            $user_result = $object->get_result();
                            
                            foreach($user_result as $row)
                            {
                                $user_name = $row['patient_name'];
                                // $user_profile_image = $row['patient_profile_image'];
                            }
                        }

                        
                        ?>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="user_profile_name"><?php echo $user_name; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $user_profile_image; ?>" id="user_profile_image">
                            </a>
                            <!-- Dropdown - User Information -->
                            <?php
                            if($_SESSION['type'] == 'Admin')
                            {
                            ?>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <?php
                            }
                            if($_SESSION['type'] == 'Student')
                            {
                            ?>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="student_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">