<?php 
include("include/mainheader.php");
include('include/config.php');
if (isset($_POST['add'])) {
	$fy=$_POST['fy'];
	$amount=$_POST['amount'];
	$status=$_POST['status'];
	$result ="select FinancialYear from financial_year where FinancialYear=?";
	$check=$db->prepare($result);
	$check->bind_param('s',$fy);
	$check->execute();
	$check->store_result();
	$row_cnt=$check->num_rows;
	if ($row_cnt>0){
		echo "<script>alert('Already is a Closed Year');</script>";
	}
	else{
	$sql = mysqli_query($db,"insert into   financial_year(FinancialYear,approvedAmount,Status)VALUES('$fy','$amount','$status')");
	if ($sql) {
		echo "<script>alert('New Finacial Year Added Successfully');</script>";
	}
	else{
		echo "something went wrong";
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
          <li class="breadcrumb-item active">Finacial Year</li>
        </ol>
       <!-- diplay code here -->
       
       <!-- //add new cost center -->
                <form  class="form-horizontal"  action=""  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="inputuserid" class="col-sm-2 control-label"> Finanical Year :</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="fy" placeholder="e.g 2019/2020 " required="" autofocus="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label"> Approved&nbsp;Amount :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="amount" placeholder="" required="" autofocus="">
                       </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Status :</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="status">
                            <option value="">select status</option>
                             <option value="Opened">Opened</option>
                                <option value="Closed">Closed </option>
                            </select>
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
            <span>Copyright © BOU 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
