 <?php 
 include('include/mainheader.php');
 include('include/config.php');
 if (isset($_POST['add'])) {
  $fy= $_POST['fy'];
  $budgetname=$_POST['budgetname'];
  $costcenters=$_POST['costcenters'];
  $accname=$_POST['accname'];
  $accode=$_POST['acccode'];
  $amount=$_POST['amount'];
  $sql="SELECT AccountName FROM budget_line where AccountName=?";
  $stmt1 = $db->prepare($sql);
  $stmt1->bind_param('s',$accname);
  $stmt1->execute();
  $stmt1->store_result(); 
  $row_cnt=$stmt1->num_rows;;
  if($row_cnt>0)
  {
  echo"<script>alert('Budget Line already exist');</script>";
  }
  else
  $sql=mysqli_query($db,"insert into budget_line(Fy,BudgetName, CostCenter, AccountName,AccountCode,ApprovedAmount)values('$fy','$budgetname','$costcenters','$accname','$accode','$amount')");
  if ($sql) {
   echo"<script>alert('Budget Line  Added Succssfully');</script>";
      }
      else{
        echo "something went wrong";
      }
   }

?>
<div id="content-wrapper">

      <div class="container-fluid"  >

        <!-- Breadcrumbs-->
        <ol class="breadcrumb" >
          <li class="breadcrumb-item" >
            <a href="dashboard.php">Admin </a></li>
          
            <a href="dashboard.php" class="breadcrumb-item ">Dashboard </a>
            <a href="currentbudget.php" class="breadcrumb-item ">Capital  Budget </a>
            <a href="budgetline.php" class="breadcrumb-item ">Budget Line </a>
            

          </li>
         
         <a href="budgetline.php" class="breadcrumb-item ">Budget Line </a>
          </li>
          <li class="breadcrumb-item active"> Add Budget Line </li>

        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-th"></i>
                </div>
                <div class="mr-5">Budget Line</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="budgetline.php">
                <span class="float-left">Manage Budget Line</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-plus"></i>
                </div>
                <div class="mr-5">Budget Line</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Add Budget Line  </span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Add New Budget Line</div>
          <div class="card-body">
            <!-- add new budget item form -->
            <form class="form-inline" method="POST">
            <div class="form-group">
              <label for="exampleInputName2">Finanical Year:&nbsp; &emsp;&emsp; </label>
              <input type="text" class="form-control" name="fy" id="fy"  size="100" value="2018/2019" readonly="">
            </div>
            <br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Budget:&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</label>
           <input type="text" class="form-control" name="budgetname" id="budgetname" size="100" value="Capital Budget" readonly="" >
            </div>
            <br><br><br>
            <div class="form-group">
            <label class="col-sm-16 control-label">Cost Center Code: </label>
            <div class="col-lm-16">&nbsp;&nbsp;
            <select name="costcenters" id="costcenters"  class="form-control" required> 
            <option value="">Select Cost Center</option>
            <?php $query ="SELECT * FROM costcenters";
            $stmt2 = $db->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->cost_center_code;?>"><?php echo $row->cost_center_code;?>&nbsp;&nbsp; &nbsp; &nbsp;(<?php echo $row->names;?>) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>
            <?php } ?>
            </select>
             </div></div>

            <br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Account Name:&emsp;&nbsp;&nbsp;&nbsp;  &nbsp;</label>
              <input type="text" class="form-control" id="account"  size="100" name="accname">
            </div>
            <br><br>
             <div class="form-group">
              <label for="exampleInputName2">Account Code:&emsp;&nbsp;&nbsp;&nbsp;  &nbsp;</label>
              <input type="text" class="form-control" name="acccode" id="account"  size="100" >
            </div>
            <br><br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Approved Amount: &nbsp; </label>
              <input type="text" class="form-control" name="amount" id="amount"  size="100">
            </div>
       
            <div class="form-group">&emsp; &emsp;
            <input type="submit" name="add" Value="Add " class="btn btn-primary">

          </div>

           
          </form>

          </div>


<div class="card-footer small text-muted">Develop By Bukeye Timothy From Kyambogo Unversity</div>
        </div>

      </div>
      <!-- /.container-fluid -->





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
  <a class="scroll-to-top rounded" href="#page-top" >
    <i class="fas fa-angle-up" ></i>
  </a> 