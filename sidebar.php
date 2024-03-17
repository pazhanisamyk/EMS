<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Employee Management System</title>
  <link rel="icon" href="https://www.freeiconspng.com/uploads/sales-icon-7.png">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200,300,300,400,400,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="aloginwel.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Employee Management System</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="aloginwel.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Tables
      </div>
      <li class="nav-item">
        <a class="nav-link" href="addemp.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Add Employee</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="viewemp.php">
          <i class="fas fa-fw fa-user"></i>
          <span>View Employee</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="assign.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Assign Project</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="assignproject.php">
          <i class="fas fa-fw fa-archive"></i>
          <span>Project Status</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="salaryemp.php">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Salary Table</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="empleave.php">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Employee Leave</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="alogin.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Logout</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


    </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">  
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <?php include_once 'topbar.php'; ?>
                    
    