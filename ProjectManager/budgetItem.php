<!-- SELECT sum(budget_line.ApprovedAmount-budget_item.Amount) FROM budget_line INNER JOIN budget_item ON budget_line.id=budget_item.id

 -->
<!-- 
 SELECT sum(budget_line.ApprovedAmount-budget_item.Amount) FROM budget_line INNER JOIN budget_item ON budget_line.id=budget_item.id GROUP BY budget_line.ApprovedAmount ,budget_item.Amount

 -->
<?php 
 include('include/mainheader.php');
  include('include/config.php');

?>
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Admin </a></li>
          
            <a href="dashboard.php" class="breadcrumb-item ">Dashboard </a>
            <a href="currentbudget.php" class="breadcrumb-item ">Current Budget </a>

          </li>
         <a href="budgetline.php" class="breadcrumb-item ">Budget Line </a>

          </li>
          <li class="breadcrumb-item active">Budget Item </li>

        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-th"></i>
                </div>
                <div class="mr-5">Subline</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="budgetItem.php">
                <span class="float-left">Manage Subline</span>
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
                  <i class="fas fa-fw fa-plus"></i>
                </div>
                <div class="mr-5"> Budget Item</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addbudgetItem.php">
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
            <i class="fas fa-plus"></i>
            Manage Budget Items</div>
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


             <!--  Application key [base64:/X+4MCcbDY8UQzYo8qRzGyPVss9pWJlvCHwr530Ly2s=] set successfully. -->


                  <?php 
                  $result =mysqli_query($db, "select * from budget_item");
                  $count =1;
                  while ($rows=mysqli_fetch_array($result)){?>
                 <tbody>
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
                  <td><a href="manageProjectTeam.php?id=<?php echo $row->id;?>" onclick="return confirm('Do you want to Delete a Project Member');"> 
  <i class="fa fa-trash"></i></a></td>
               <?php
$count=$count+1;
} ?>
                  
                  <tr>
                    
                    
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