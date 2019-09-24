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
          <li class="breadcrumb-item active">Cost Centers</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Manage Cost Centers</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Budget Name</th>
                    <th>Finanical Year</th>
                    <th>BudgetType</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>Budget Name</th>
                    <th>Finanical Year</th>
                    <th>BudgetType</th>
                  </tr>
                </tfoot>
                <!-- php code here from db -->
                <?php 

                $sql = "SELECT id,BudgetName,FinanicalYear,BugetType FROM capitalbudget";
               $result = mysqli_query($db,$sql) or die(mysqli_error());
            while ($row    = mysqli_fetch_array($result))
            {

                $id=$row['id'];
                $Name     = $row['BudgetName'];
                $Username = $row['FinanicalYear'];
                $Password = $row['BugetType'];

            }
            
?>
                
                  <tbody>
                  	<td><?php echo "$id";?></td>
                  	<td>
                  		<?php echo("$Name");?>
                  	</td>
                  	<td>
                  		<?php echo ("$Username");?>
                  	</td>
                  	<td>
                  		<?php echo ("$Password");?>
                  	</td>
                 
                </tbody>

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







 

<!-- code   back up  -->
<?php 
 include('include/mainheader.php');
 include('include/config.php');
 
 ?>
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="capitalbudget.php" >Admin</a></li>
             <a href="capitalbudget.php" class="breadcrumb-item">Budget</a>

        
            <a href="capitalbudget.php" class="breadcrumb-item">capital budget</a>
            <a href="manage_capital_budget.php" class="breadcrumb-item"> Manage capital budget</a>


          </li>
          <li class="breadcrumb-item active">View Capital Budget </li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Budget Details</div>
          <div class="card-body">
            <div class="table-responsive">
            <?php 
            $sql = "select * from capitalbudget";
            $view=mysqli_query($db,$sql) or die(mysqli_error());
            while ($row=mysqli_fetch_array($view)) {
            
                $id=$row['id'];
                $Name     = $row['BudgetName'];
                $fy = $row['FinanicalYear'];
                $BugetType = $row['BugetType'];
                $CostCenterCode=$row['CostCenterCode'];
                $CostCenter=$row['CostCenter'];
                $AccountCode=$row['AccountCode'];
                $BudgetLine=$row['BudgetLine'];
                $BudgetItemOne=$row['Budget_Item_One'];
                $BudgetItemtwo=$row['Budget_Item_Two'];
                $BudgetItemthree=$row['Budget_Item_Three'];
                $BudgetNotes=$row['BudgetNotes'];
                $Attachment_one=$row['Attachment_one'];
                $Attachmenttwo=$row['Attachment_Two'];
                $proposedamount=$row['proposedamount'];
                $approval_one=$row['approval_one'];
                $approval_two=$row['approval_two'];
                $Created_By=$row['Created_By'];
                $Created_Date=$row['Created_Date'];


                 

              }
                echo(
                  "<b>ID &emsp;</b> :"." &emsp;"."$id"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                  "<b>Budget Name &emsp;</b> :"." &emsp;"."$Name"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                  "<b>Finanical Year &emsp;</b> :"." &emsp;"."$fy"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                   "<b>Buget Type &emsp;</b> :"." &emsp;"."$BugetType"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                   "<b>Cost Center Code &emsp;</b> :"." &emsp;"."$CostCenterCode"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                    "<b>Cost Center &emsp;</b> :"." &emsp;"."$CostCenter"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                     "<b> Account Code &emsp;</b> :"."&emsp;"."$AccountCode"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                      "<b>BudgetLine &emsp;</b> :"."&emsp;"."$BudgetLine"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                   "<b>Budget Item One &emsp;</b>:"."&emsp;"."$BudgetItemOne"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                    "<b>Budget Item Two &emsp;</b>:"."&emsp;"."$BudgetItemtwo"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                     "<b>Budget Item Three &emsp;</b>:"."&emsp;"."$BudgetItemthree"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                     "<b>BudgetNotes &emsp;</b>:"."&emsp;"."$BudgetNotes"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                     "<b>Attachment One &emsp;</b>:"."&emsp;"."$Attachment_one"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                     "<b>Attachment Two &emsp;</b>:"."&emsp;"."$Attachmenttwo"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                 "<b>Proposed Amount &emsp;</b>:"."&emsp;"."$proposedamount"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                 "<b>Appoval One &emsp;</b>:"."&emsp;"."$approval_one"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                 "<b>Appoval Two &emsp;</b>:"."&emsp;"."$approval_two"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                 "<b>Created By &emsp;</b>:"."&emsp;"."$Created_By"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>".
                 "<b>Created_Date &emsp;</b>:"."&emsp;"."$Created_Date"."<br>"."----------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>"










  





                );
              
            ?>
                


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

