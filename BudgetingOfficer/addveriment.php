<?php 
include("include/mainheader.php");
include('include/config.php');
if (isset($_POST['make'])) {
	$bname=$_POST['bname'];
	$fbl=$_POST['bgline'];
	$tbl=$_POST['tbgline'];
  $amount=$_POST['amount'];
  $madeby=$_POST['yname'];

	
	$sql = mysqli_query($db,"insert into   virement(budgetname,from_Budget_line,To_budget_line,amount,virement_made_by)VALUES('$bname','$fbl','$tbl','$amount','$madeby')");
	if ($sql) {
		echo "<script>alert('Virement made Successfully');</script>";
	}
	else{
		echo "something went wrong";
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
            <a href="dashboard.php">Admin</a></li>

           <a href="dashboard.php" class="breadcrumb-item">Dashboard</a>
            <a href="dashboard.php" class="breadcrumb-item">Virement</a>

          </li>
          <li class="breadcrumb-item active"> Make Virement</li>
        </ol>
       <!-- diplay code here -->
       
       <!-- //add new cost center -->
                <form  class="form-horizontal"  action=""  method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label"> Virement Name :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="vname" placeholder="" required="" autofocus="">
                       </div>
                    </div>
                    <div class="form-group">
                      <label for="inputuserid" class="col-sm-2 control-label"> Budget Name :</label>
                      <div class="col-sm-10">
                   <select class="form-control" name="bname" required="">
                    <option value="Capital Budget">Capital Budget</option>
                    <option value="Reccurancy Budget">Reccurancy Budget</option>
                   
                  </select>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="inputuserid" class="col-sm-2 control-label"> From Budget Line:</label>
                        <div class="col-sm-10">
                            <select name="bgline" class="form-control" required> 
                      <option value="">Select Budget Line From</option>
                      <?php $query ="SELECT * FROM budget_line";
                      $stmt2 = $db->prepare($query);
                      $stmt2->execute();
                      $res=$stmt2->get_result();
                      while($row=$res->fetch_object())
                      {
                      ?>
                      <option  value="<?php echo $row->AccountName;?>"><?php echo $row->AccountName;?></option>
                      <?php } ?>
                      </select>


                       </div>
                    </div>
                    <div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label">  To Budget Line :</label>
                        <div class="col-sm-10">
                            <select name="tbgline" class="form-control" required> 
                      <option value="">Select Budget Line From</option>
                      <?php $query ="SELECT * FROM budget_line";
                      $stmt2 = $db->prepare($query);
                      $stmt2->execute();
                      $res=$stmt2->get_result();
                      while($row=$res->fetch_object())
                      {
                      ?>
                      <option  value="<?php echo $row->AccountName;?>"><?php echo $row->AccountName;?></option>
                      <?php } ?>
                      </select>



                       </div>
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label"> Virement Amount :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="amount" placeholder="" >
                       </div>
                    </div><div class="form-group">
                        <label for="inputuserid" class="col-sm-2 control-label"> Your Name :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="yname" placeholder="" >
                       </div>
                    </div>
                    
                  <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
             <input type="submit" name="make" class="btn btn-primary btn-block" value="Make Virement " >
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
            <span>Copyright © Bou 2019 Developed By Bukeye Timothy</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
