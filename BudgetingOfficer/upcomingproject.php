 <?php 
 include('include/mainheader.php');
?>
 
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Budgeting Officer</a>
          </li>
           <li class="breadcrumb-item active">Projects</li>

          <li class="breadcrumb-item active">Upcoming Projects</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Upcoming Projects</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  	<th>Project Code</th>
                    <th>Project Name</th>
                    <th>Project Objective</th>
                    <th>Project Description</th>
                    <th>Estimated Costs</th>
                    <th>Expected Duration</th>
                    <th>Start date</th>
                    <th>Board Approval</th>
                    <th>Board Constraint</th>
                    <th>Department Work Plan</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Project Code</th>
                    <th> Project Name</th>
                    <th>Project Objective</th>
                    <th>Project Description</th>
                    <th>Estimated Costs</th>
                    <th>Expected Duration</th>
                    <th>Start date</th>
                    <th>Board Approval</th>
                    <th>Board Constraint</th>
                    <th>Department Work Plan</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>45001</td>
                    <td>Staff rooms renovation </td>
                    <td>To renovate staff rooms</td>
                    <td>Rooms changing at IT support Departments</td>
                    <td>Ugx:150,000,000</td>
                    <td>1years</td>
                    <td>05/05/2019 </td>
                    <td>NO</td>
                    <td>No</td>
                    <td>Yes</td>
                  </tr>
                  
                  
                </tbody>
              </table>
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