 <?php 
 include('include/mainheader.php');
  include('include/config.php');
 if (isset($_GET['id'])) {
  $id =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM budget_item
    WHERE id='$id'");
  if ($sql) {
   echo " <script>alter('Data Deleted');</script>"; 
 }
 }

?>
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Admin </a></li>
          
            <a href="dashboard.php" class="breadcrumb-item ">Dashboard </a>
            <a href="currentbudget.php" class="breadcrumb-item ">Current Budget </a>
            <a href="budgetLine.php" class="breadcrumb-item ">Budget Line </a>



          </li>
         

          </li>
          <li class="breadcrumb-item active">Manage Budget Item</li>

        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Budget Items</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" 
              href="">
                <span class="float-left">Manage Budget Item</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"> Budget Item</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addBudgetItem.php">
                <span class="float-left">Add New Budget Item  </span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Budget Item</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/No</th>
                    <th>ItemID</th>
                    <th>Finanical Year</th>
                    <th>Budget Name</th>
                    <th>Cost Center </th>
                    <th>Account Code</th>
                    <th>Budget Line</th>
                    <th>Activity</th>
                    <th>Amount</th>
                    <th>Notes</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>S/No</th>
                    <th>ItemID</th>
                    <th>Finanical Year</th>
                    <th>Budget Name</th>
                    <th>Cost Center </th>
                    <th>Account Code</th>
                    <th>Budget Line</th>
                    <th>Activity</th>
                    <th>Amount</th>
                    <th>Notes</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                  <?php 
                  $result =mysqli_query($db, "SELECT * from budget_item");
                  $count =1;
                  while ($rows=mysqli_fetch_array($result)){?>
                 <tbody>
                  <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $rows['ItemID'];?></td>
                  <td><?php echo $rows['Financial_year'];?></td>
                  <td><?php echo $rows['BudgetName'];?></td>
                  <td><?php echo $rows['CostCenter'];?> </td>
                  <td><?php echo $rows['AccountCode'];?></td>
                  <td><?php echo $rows['Budgetline'];?></td>
                  <td><?php echo $rows['Activity'];?></td>
                  <td><?php echo $rows['Amount'];?></td>
                  <td><?php echo $rows['Notes'];?></td>
                  <td>
                    <a href="ManageBudgetItem.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want you delete')" <i class="fa fa-delete">Delete</i></a>

                  </td>
                

                 </tr></tbody>
                   <?php $count= $count+1;}?>
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