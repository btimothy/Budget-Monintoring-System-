<?php 
 include('include/mainheader.php');
 include('config.php');

 if (isset($_POST['add'])) {
$appamount=$_POST['amount'];
$gid=$_GET['costcenterID']
$sql="Update cost_center_code  costcenters where cost_center_code=?";
$query="update courses set course_code=?,course_sn=?,course_fn=? where id=?";
$stmt1 = $db->prepare($sql);
$stmt1->bind_param('s',$ccode);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert('cost centers already exist');</script>";
}
else{

$sql =  mysqli_query($db,"insert into costcenters(cost_center_code,names,type,approvedAmount) 
        values('$ccode','$cname','$type','$appamount')");
if ($sql) {
echo"<script>alert(' New Cost Center Added succefully');</script>";

}
else{ 
echo"<script>alert('Something Went Wrong ');</script>";
}

}

 }
?>


<!-- general contain start -->
    <div id="content-wrapper">

      <div class="container-fluid">
<!-- general container  end -->
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Cost Center</li>
        </ol>
       <!-- diplay code here -->
       
       <!-- //add new cost center -->
                <form  class="form-horizontal"  action=""  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputuserid" class="col-sm-2 control-label"> Cost Center Code :</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="code" placeholder=" " required="code" autofocus="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label"> Cost Center Name :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cname" placeholder="" required="cname" autofocus="">
                       </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Type :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="type">
                                <option value="">select cost center type</option>
                                <option value="Department">Department</option>
                                <option value="Directirate">Directirate </option>
                                <option value="Division">Division</option>  
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Approved_Amount:</label>
                        <div class="col-sm-10">
                          <input type="float" class="form-control" name="amount" id="inputPassword3" placeholder=" " required="number" autofocus="">
                        </div>
                    </div>

                  <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
             <input type="submit" name="add" class="btn btn-primary btn-block" value="Add  " >
    </div>
  </div>
                  </form> 


       <!-- /.container-fluid -->

      </div>
     <form></form>











<!-- //same footer on all page -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

