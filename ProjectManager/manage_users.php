<?php 
 include('include/mainheader.php');
 include('include/config.php');
 if(isset($_GET['id']))
{
  $id=intval($_GET['id']);
  $adn="delete from users where id=?";
    $stmt= $db->prepare($adn);
    $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        if ($adn) {
   echo " <script>alter('user Deleted');</script>"; 
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

        
          <li class="breadcrumb-item active">Manage Users</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Manage Capital Budget</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/no</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Added On</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Added On</th>
                    <th>Action</th>

                  </tr>
                </tfoot>
                <?php 
$ret="select * from users";
$stmt= $db->prepare($ret) ;
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
    {
      ?>
<tr>
<td><?php echo $cnt;;?></td>
<td><?php echo $row->username ;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->user_type;?></td>
<td><?php echo $row->postingDate;?></td>
<td>
<a href="editemployee.php?id=<?php echo $row->id;?>"><i class="fa fa-eye"></i></a>&nbsp;
<a href="manage_users.php?id=<?php echo $row->id;?>" onclick="return confirm('Do you want to delete');"> <i class="fa fa-trash"></i></a>


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
