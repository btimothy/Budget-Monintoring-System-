 <?php 
include('include/mainheader.php');
include('include/config.php');
// ======count users=========
$result ="SELECT count(*) FROM users ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($countusers);
$stmt->fetch();
$stmt->close();
//=======end here=======
// ======count cost center=========
$result ="SELECT count(*) FROM costcenters ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($countcc);
$stmt->fetch();
$stmt->close();
//=======end here=======
// ======count created projects=========
$result ="SELECT count(*) FROM projects ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($countproject);
$stmt->fetch();
$stmt->close();
//=======end here=======
// ======count created budgets=========
$result ="SELECT count(*) FROM capitalbudget ";
$stmt = $db->prepare($result);
$stmt->execute();
$stmt->bind_result($countbudget);
$stmt->fetch();
$stmt->close();
//=======end here=======


?>
<div id="content-wrapper">

      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Budgeting Officer</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
          <li class="breadcrumb-item ">
          <i  style="color: #888; padding-right: 120px;"  >(<?php echo ucfirst($_SESSION['user']['username']); ?>)</i></li>

        </ol>


        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $countcc; ?> Cost Centers!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage_cost_centers.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 Departments!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 Project Notifications!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
<!-- users management -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5"><?php echo $countusers;?>
                Users!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage_users.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-th"></i>
                </div>
                <div class="mr-5"><?php echo $countbudget;?>
                Created Budgets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage_capital_budget.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div><div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-align-justify"></i>
                </div>
                <div class="mr-5"><?php echo $countproject;?>
                Created Projects!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="currentProject.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div><div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php echo $countusers;?>
                Current Projects!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage_users.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div><div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white  o-hidden h-100" style="background-color: brown;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                Budget Expense Analysis!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="manage_users.php">
                <span class="float-left">Track Expenses</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

             






      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © BoU 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>