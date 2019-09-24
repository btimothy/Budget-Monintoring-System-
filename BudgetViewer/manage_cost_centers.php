 
<!-- . -->
 <?php 
 include('include/mainheader.php');
 include('include/config.php');

 if (isset($_GET['costcenterID'])) {
  $Code =$_GET['costcenterID'];
  $sql =mysqli_query($db,"DELETE FROM costcenters 
    WHERE costcenterID='$Code'");
  if ($sql) {
   echo "<script>alter('data deleted');</script>"; 
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
                    <th>Cost Center Code</th>
                    <th>Cost Name</th>
                    <th>Type</th>
                    <th>Approved Amount(UGX)</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/no</th>
                    <th>Cost Center Code</th>
                    <th>Cost Name</th>
                    <th>Type</th>
                    <th>Approved Amount(UGX)</th>
                    <th >Action</th>
                  </tr>
                </tfoot>
                <?php  
                $result = mysqli_query($db,"SELECT *FROM costcenters");
                $count=1;
                while($row=mysqli_fetch_array($result)) {?>
                  <tbody>
                  <tr>
                    <td><?php echo $count?></td>
                  <td><?php echo  $row['cost_center_code']?></td>
                  <td><?php echo  $row['names']?></td> <td><?php echo  $row['type']?></td>
                  <td><?php echo  $row['approvedAmount']?></td>
                  <td>
         
               <a href="manage_cost_centers.php?costcenterID=<?php echo $row['costcenterID'];?>" onclick="return confirm('Are you sure you want yo delete')" <i class="fa fa-trash">Delete</i></a>


   
          
                    
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
    <i class="fas fa-angle-up"></i>
  </a>