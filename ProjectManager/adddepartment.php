<?php 
 include('include/mainheader.php');
 include('include/config.php');
 if (isset($_POST['submit'])) {
  $depno=$_POST['depno'];
  $isfcode=$_POST['isfcode'];
  $dename=$_POST['deptname'];
  $deptaccounts=$_POST['deptaccount'];
  $amount=$_POST['amount'];
  $sql=mysqli_query($db,"insert into department(DepNo,ISFCode, DeptName,DeptAccount,ApprovedAmount)values('$depno','$isfcode','$dename','$deptaccounts',$amount)");
  if ($sql) {
echo"<script>alert('New Department has been added successfully');</script>";
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
          <li class="breadcrumb-item active">Departments</li>
        </ol>
       <!--  add diplay code here -->
       
       <!-- //add new cost center -->            
<form method="post" class="form-horizontal">
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">DepNo:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="depno" id="depno" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">ISF Code:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="isfcode" id="isfcode" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">DeptName:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="deptname" id="deptname" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">DeptAccount:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="deptaccount" id="deptaccount" value="" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">ApprovedAmount:
</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="amount" id="amount" value="" required="required">
</div>
</div>
<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit" value="Add Department">
                        </div>
                      </div>

                    </form>

       <!-- /.container-fluid -->

      </div>











<!-- //same footer on all page -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Bank Of Uganda</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

