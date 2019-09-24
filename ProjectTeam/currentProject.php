<?php 
 include('include/mainheader.php');
 include('include/config.php');
 if(isset($_GET['id']))
{
  $id=intval($_GET['id']);
  $adn="delete from projects where id=?";
    $stmt= $db->prepare($adn);
    $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        if ($adn) {
   echo " <script>alter(' Project  Deleted');</script>"; 
} 
            
}
 ?>
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="capitalbudget.php" >Project Manager</a></li>
             <a href="capitalbudget.php" class="breadcrumb-item">Project Management </a>
        
          <li class="breadcrumb-item active">Ongoing Projects</li>
        </ol>
         <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"> Project Progress </div>
                <i>70%</i>
              </div>
              <a class="card-footer text-white clearfix small z-1" 
              href="">
                <span class="float-left">View Details </span>
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
                  <i class="fas fa-fw fa-plus"></i>
                </div>
                <div class="mr-5">5 Notification</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addMainBudgetLine.php">
                <span class="float-left">Project Updates  </span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          

         
         <!-- end of contain -->
        </div>

        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Ongoing Projects Management</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Project Manager</th>
                    <th>Project Members</th>
                    <th>Project Objective</th>
                    <th>Description</th>
                    <th>Expected Duration</th>
                    <th>Estimated Cost</th>
                    <th>BoardApproval</th>
                    <th>BoardConstraint</th>
                    <th>Department_Work_Plan</th>
                    <th>Started On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Project Manager</th>
                    <th>Project Members</th>
                    <th>Project Objective</th>
                    <th>Description</th>
                    <th>Expected Duration</th>
                    <th>Estimated Cost</th>
                    <th>BoardApproval</th>
                    <th>BoardConstraint</th>
                    <th>Department_Work_Plan</th>
                    <th>Started On</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <?php 
$ret="select * from projects";
$stmt= $db->prepare($ret) ;
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
    {
      ?>
<tr>
<td><?php echo $cnt;;?></td>
<td><?php echo $row->ProjectCode;?></td>
<td><?php echo $row->ProjectName;?></td>
<td><?php echo $row->ProjectManager;?></td>
<td><?php echo $row->ProjectMembers;?></td>
<td><?php echo $row->ProjectObjective?></td>
<td><?php echo $row->Description;?></td>
<td><?php echo $row->ExpectedDuration;?></td>
<td><?php echo $row->EstimatedCost;?></td>
<td><?php echo $row->BoardApproval;?></td>
<td><?php echo $row->BoardConstraint;?></td>
<td><?php echo $row->Department_Work_Plan;?></td>
<td><?php echo $row->createdOn;?></td>
<td>
<a href="editemployee.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;
<a href="view_budget.php?id=<?php echo $row->id;?>"><i class="fa fa-eye"></i></a>&nbsp;
<a href="currentProject.php?id=<?php echo $row->id;?>" onclick="return confirm('Do you want to Delete a Project ');"> 
  <i class="fa fa-trash"></i></a>


<?php
$cnt=$cnt+1;
} ?>
<style >
  .fa,fa-eye{
    background-color: ;
  }
  .fa,fa-eye:hover{
    background-color: none;

  }
</style>
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
