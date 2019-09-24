 <?php 
 include('include/mainheader.php');
 include('include/config.php');
?>
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Virement</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Manage Virement</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                     <th>Budget Name</th>
                   <th>Budget Line From</th>
                    <th>Budget Line To </th>
                    <th>Amount</th>
                    <th>Made On</th></tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Budget Name</th>
                   <th>Budget Line From</th>
                    <th>Budget Line To </th>
                    <th>Amount</th>
                    <th>Made On</th>
                  </tr>
                </tfoot>        
                </tbody>
                <?php
                 $fetch = "select * from Virement"; 
                // <!-- retrival usin mysqli oop -->
                $query=$db->query($fetch);
                while ($row =$query->fetch_assoc()) {
                  echo
                  "
                  <tr>
                  <td>".$row['budgetname']."</td>
                  <td>".$row['from_Budget_line']."</td>
                  <td>".$row['To_budget_line']."</td>
                  <td>".$row['amount']."</td>
                  <td>".$row['madeon']."</td>

                  </tr>
                  ";
                }
                              
?>
          
              </table>
            </div>
          </div>
          
<!-- Buktimo0.@ fluttwave acc -->
      <!-- /. end of container-fluid -->

      </div>
      
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