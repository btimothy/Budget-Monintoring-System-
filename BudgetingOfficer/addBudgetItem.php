 <?php 
 include('include/mainheader.php');
 include('include/config.php');
 if (isset($_POST['submit'])) {
   $itemid = $_POST['itemid'];
   $fy=$_POST['fy'];
   $budgetname=$_POST['budget'];
   $costcenters=$_POST['costcenters'];
   $account=$_POST['account'];
   $budgetline=$_POST['budgetline'];
   $item=$_POST['item'];
   $amount=$_POST['amount'];
   $notes=$_POST['notes'];
   $sql=mysqli_query($db,"insert into budget_item(ItemID,Financial_year,  BudgetName,CostCenter,AccountCode,Budgetline, Activity,Amount,Notes)values(' $itemid','$fy','$budgetname','$costcenters','$account','$budgetline','$item','$amount','$notes')");
   if ($sql) {
     echo "<script>alert('New budget Item Added successfully');</script>";

   }
   else{
    echo "failed";
   }

 }
?>
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Budgetting Officer </a></li>
          
            <a href="dashboard.php" class="breadcrumb-item ">Dashboard </a>
            <a href="currentbudget.php" class="breadcrumb-item ">Current Budget </a>
            <a href="budgetline.php" class="breadcrumb-item ">Budget Line </a>

          </li>
         
         <a href="manageBudgetItem.php" class="breadcrumb-item ">Budget Items </a>
          </li>
          <li class="breadcrumb-item active"> Add Budget Item </li>

        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-th"></i>
                </div>
                <div class="mr-5">Budget Items</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="ManageBudgetItem.php">
                <span class="float-left">Manage Budget Items</span>
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
                <div class="mr-5">Add Budget Item</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addBudgetItem.php">
                <span class="float-left">Add New Budget Item  </span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Add New Budget Items</div> 
          <div class="card-body">
            <!-- add new budget item form -->
            <form class="form-inline" method="POST">
            <div class="form-group">
              <label for="exampleInputName2">ItemID:&nbsp; &emsp;&emsp;&emsp;&emsp; &nbsp; </label>
              <input type="text" class="form-control" id="itemid" name="itemid"  size="100">
            </div>
            <div class="form-group">
              <label for="exampleInputName2">Finanical Year: &emsp;&emsp;</label>
              <input type="text" class="form-control" id="fy" name="fy"  size="100" value="2018/2019" readonly="">
            </div>
            <br><br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Budget:&emsp;&emsp;&emsp;&emsp;&emsp;</label>
              <input type="text" class="form-control" id="" name="budget"  size="100" value="Capital Budget" readonly="">
            </div>
             <br><br><br><br>
            <div class="form-group">
            <label class="col-sm-16 control-label"> Cost Center :&emsp;&nbsp; &nbsp; &emsp; &emsp;</label>
            <div class="col-lm-16">&nbsp;&nbsp;
            <select name="costcenters" id="costcenters"  class="form-control" required> 
            <option value="">Select Cost Center Name</option>
            <?php $query ="SELECT * FROM costcenters";
            $stmt2 = $db->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->names;?>">&nbsp;&nbsp; &nbsp; &nbsp;<?php echo $row->names;?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>
            <?php } ?>
            </select>
             </div></div>



            <br><br><br>
             <div class="form-group">
            <label class="col-sm-16 control-label"> AccountCode:&emsp;&nbsp; &nbsp; </label>
            <div class="col-lm-16">
            <select name="account" id="costcenters"  class="form-control" required> 
            <option value="">Select AccountCode</option>
            <?php $query ="SELECT * FROM budget_line";
            $stmt2 = $db->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->AccountCode;?>"><?php echo $row->AccountCode;?>&nbsp;&nbsp; &nbsp; &nbsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>
            <?php } ?>
            </select>
             </div></div>
             <div class="form-group">
            <label class="col-sm-16 control-label"> Budget Line:&emsp;&nbsp; &nbsp; </label>
            <div class="col-lm-16">&nbsp;&nbsp;
            <select name="budgetline" id="costcenters"  class="form-control" required> 
            <option value="">Choosen Budget Line</option>
            <?php $query ="SELECT * FROM budget_line";
            $stmt2 = $db->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->AccountName;?>"><?php echo $row->AccountName;?>&nbsp;&nbsp; &nbsp; &nbsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>
            <?php } ?>
            </select>
             </div></div>

            <br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Activity:&emsp; &emsp;&emsp;&emsp;  &nbsp; </label>
              <input type="text" class="form-control" id="exampleInputName2"  size="100" name="item">
            </div>
            <br><br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Amount:&emsp; &emsp;&emsp; &emsp; </label>
              <input type="text" class="form-control" id="amount" name="amount"  size="100">
            </div>
            <br><br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Notes:&emsp; &emsp;&emsp; &emsp; </label>
              <input type="text" class="form-control" id="exampleInputName2"  size="100" name="notes">
            </div>&emsp;     
            <div class="form-group">
              <button type="submit" name="submit"  class="btn btn-primary">  Add Budget Item</button>

          </div>


          <style type="text/css">
          buttonss {
  color: white;
  background-color: green;
}

buttonss:hover {
  background-color: white;
  border: 2px solid green;
  color: green;
}
</style>
<!-- Syntax
The syntax for the :active CSS selector is:

element:hover { style_properties } -->
           
          </form>
          </div>
          <div class="card-footer small text-muted">User:Admin</div>
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"><br>Top</i>
  </a>