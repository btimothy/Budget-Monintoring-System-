 <?php 
 include('include/mainheader.php');
 include('include/config.php');

 if (isset($_GET['id'])) {
  $id =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM department 
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
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Department</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-alt"></i>
            Manage Department</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/no</th>
                    <th>DepNo</th>
                    <th>ISFCode</th>
                    <th>DeptName</th>
                    <th>DeptAccount</th>
                    <th>ApprovedAmount</th>
                    <th>createdON</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>DepNo</th>
                    <th>ISFCode</th>
                    <th>DeptName</th>
                    <th>DeptAccount</th>
                    <th>ApprovedAmount</th>
                    <th>CreatedON</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <?php  
                $result = mysqli_query($db,"SELECT *FROM department");
                $count=1;
                while($row=mysqli_fetch_array($result)) {?>
                  <tbody>
                  <tr>
                  <td><?php echo $count?></td>
                  <td><?php echo  $row['DepNo']?></td>
                  <td><?php echo  $row['ISFCode']?></td> 
                  <td><?php echo  $row['DeptName']?></td>
                  <td><?php echo  $row['DeptAccount']?></td>
                  <td><?php echo $row['ApprovedAmount']?></td>
                  <td><?php echo  $row['createdON']?></td>
                  <td>
    <a href="managedepartment.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want you delete')" <i class="fa fa-delete">Delete</i></a>


   
          
                    
                  </td>
                  </tr>
              
                </tbody>
                                <?php $count=$count+1; } ?>

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
    <i class="fas fa-angle-up">Top</i>
  </a>