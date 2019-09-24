<?php 
 include('include/mainheader.php');
 include('include/config.php');
 if(isset($_GET['id']))
{
  $id=intval($_GET['id']);
  $adn="delete from project_team where id=?";
    $stmt= $db->prepare($adn);
    $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        if ($adn) {
   echo " <script>alter('Project Member Deleted');</script>"; 
} 
            
}
 ?>
 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="capitalbudget.php" >Admin</a></li>
             <a href="capitalbudget.php" class="breadcrumb-item">Budget</a>

        
            <a href="capitalbudget.php" class="breadcrumb-item">capital budget</a>

        
          <li class="breadcrumb-item active">Manage Project Team</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Manage Project Memeber</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/no</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Cost Center</th>
                    <th>Section</th>
                    <th>User Category</th>
                    <th>Role</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Cost Center</th>
                    <th>Section</th>
                    <th>User Category</th>
                    <th>Role</th>
                    <th>Action</th>

                  </tr>
                </tfoot>
                <?php 
$ret="select * from project_team";
$stmt= $db->prepare($ret) ;
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
    {
      ?>
<tr>
<td><?php echo $cnt;;?></td>
<td><?php echo $row->FullName;?></td>
<td><?php echo $row->Email;?></td>
<td><?php echo $row->Phone;?></td>
<td><?php echo $row->CostCenter;?></td>
<td><?php echo $row->Section?></td>
<td><?php echo $row->UserType;?></td>
<td><?php echo $row->Role;?></td>
<td>

<a href="manageProjectTeam.php?id=<?php echo $row->id;?>" onclick="return confirm('Do you want to Delete a Project Member');"> 
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
