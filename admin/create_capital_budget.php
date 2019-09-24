<?php 
include('include/mainheader.php');
include('include/config.php');
// inserting data to database
if(isset($_POST['submit']))
{
$bugtname=$_POST['budgetname'];
$fy=$_POST['fy'];
$budgettype=$_POST['budgettype'];
$costcentercode=$_POST['costcentercode'];
$costcenters=$_POST['costcenters'];
$accountcode=$_POST['accountcode'];
$budgeline=$_POST['budgetline'];
$item1=$_POST['item1'];
$item2=$_POST['item2'];
$itme3=$_POST['item3'];
$notes=$_POST['descrpt'];
$attach1=$_POST['attachment1'];
$attach2=$_POST['attachment2'];
$amount=$_POST['proposedamount'];
$approvalone=$_POST['approvalone'];
$approvaltwo=$_POST['approvaltwo'];
$name=$_POST['names'];
$query="insert into  capitalbudget (BudgetName,FinanicalYear,BugetType,CostCenterCode,CostCenter,AccountCode, BudgetLine,Budget_Item_One,Budget_Item_Two,Budget_Item_Three,BudgetNotes,Attachment_one,Attachment_Two,proposedamount,approval_one,approval_two,Created_By) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $db->prepare($query);
$rc=$stmt->bind_param('sssssssssssssssss',$bugtname,$fy,$budgettype,$costcentercode,$costcenters,$accountcode,$budgeline,$item1,$item2,$itme3,$notes,$attach1,$attach2,$amount,$approvalone,$approvaltwo,$name);
$stmt->execute();
echo"<script>alert('New Budget has been Created');</script>";
}

?>
<style>

textarea {
    width: 780px;
    height: 100px;
    padding: 12px 15px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
</style>
<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Admin </a></li>
          
            <a href="capitalbudget.php" class="breadcrumb-item ">Budgets </a>
            <a href="capitalbudget.php" class="breadcrumb-item "> Budget </a>

            <a href="capitalbudget.php" class="breadcrumb-item "> Captial Budget </a>
          <li class="breadcrumb-item active"> Create Capital Budget </li>

        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Create New Capital Budget</div> 
          <div class="card-body">
            <!-- add new budget item form -->
            <form class="form-inline" method="POST">
            <div class="form-group">
              <label for="exampleInputName2">Budget Name :&nbsp; &emsp;&emsp;&emsp;&emsp;  </label>
              <input type="text" class="form-control" id="budgetname" name="budgetname"  size="100" required="">
            </div>
            <br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Finanical Year : &emsp;&emsp; &emsp;  &emsp; </label>
              <input type="text" class="form-control" id="fy" name="fy"  size="100" value="2018/2019" readonly="">
            </div>
            <br><br>
            <div class="form-group">
              <label for="exampleInputName2">Budget Type :&emsp;&emsp;&emsp;&emsp;&emsp; </label>
              <input type="text" class="form-control" id="" name="budgettype"  size="100" value="Capital Budget" readonly="">
            </div>
            <br><br><br>
            <div class="form-group">
            <label class="col-sm-16 control-label"> Cost Center Code :&emsp;&nbsp; &nbsp; </label>
            <div class="col-lm-16">&nbsp;&nbsp;
            <select name="costcentercode" id="costcenters"  class="form-control" required> 
            <option value="">Select Cost Center code</option>
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
            <label class="col-sm-16 control-label"> AccountCode :&emsp;&nbsp; &nbsp; &emsp; &emsp; </label>
            <div class="col-lm-16">
            <select name="accountcode" id="costcenters"  class="form-control" required> 
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
             <br><br><br> 
             <div class="form-group">
            <label class="col-sm-16 control-label"> Budget Line :&emsp;&nbsp; &nbsp; &emsp;&emsp; </label>
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
             </div>
         </div>
		<div class="row">
		 <label for="exampleInputName2">Budget Items : &emsp;&emsp; &emsp;  &nbsp; </label>		    <div class="col">
		     <input type="text" name="item1" class="form-control" placeholder=" Item One" required="">
		    </div>
		    <div class="col">
		      <input type="text"  name="item2" class="form-control" placeholder="Item Two ">
		    </div>
		    <div class="col">
		      <input type="text" name="item3" class="form-control" placeholder="Item Three ">
		    </div>
            <button type="button" class="btn btn-success">Add  More </button>
		  </div> 
             <br><br><br>
            <div class="form-group">
              <label for="exampleInputName2">Budget Notes :&emsp; &emsp; &nbsp;  &nbsp; &nbsp;</label>
              <textarea name="descrpt"  rows="3" required="">
              	
              </textarea>
            </div>           
             <br><br><br><br>
            <div class="form-group">
              <label for="exampleInputName2" >Attachment 1 : &emsp; &emsp; &emsp; &nbsp; </label>
              <input type="file" class="form-control" id="amount" name="attachment1"  size="100" required=""> &emsp;
               <label for="exampleInputName2">Attachment 2 :&emsp; </label>
              <input type="file" class="form-control" id="amount" name="attachment2"  size="100">
            </div>

            <br><br><br>
 
            <div class="form-group">
              <label for="exampleInputName2">ProposedAmount :&emsp;&emsp; &nbsp; &nbsp; </label>
              <input type="text" class="form-control" id="amount" name="proposedamount" required=""  size="100">
            </div>
            <br><br><br> 
            <div class="form-group">
              <label for="exampleInputName2">Approval One :&emsp; &emsp;&emsp; &emsp; </label>
              <input type="text" class="form-control" id="exampleInputName2"  size="100" name="approvalone" required="">
            </div>&emsp; 
            <br><br><br> 
             <div class="form-group">
              <label for="exampleInputName2">Approval Two :&emsp; &emsp;&emsp; &emsp; </label>
              <input type="text" class="form-control" id="exampleInputName2"  size="100" name="approvaltwo" required="">
            </div>&emsp;    
             <br><br><br> 
           <div class="form-group">
              <label for="exampleInputName2">Created By :&emsp; &emsp;  &emsp;&emsp; &emsp; </label>
              <input type="text" class="form-control" id="exampleInputName2"  size="100" name="names" required="">
            </div>&emsp;   
            <br>
            <div class="col" style="padding-left: 500px; "  ><br>
              <button type="submit" name="submit"  class="btn btn-primary">Create Budget</button>

          </div>

           
          </form>
<!-- 



// $amount=$_POST('proposedamount');
// $approvalone=$_POST('approvalone');
// $approvaltwo=$_POST('approvaltwo');
// $name=$_POST('names');


// FinanicalYear,BugetType, CostCenterCode ,CosCostCenter,AccountCode,BudgetLine, Budget_Item_One,  Budget_Item_Two,Budget_Item_Three,BudgetNotes,Attachment_one, Attachment_Two,proposedamount,approval_one,approval_two,Created_By)Values('$bugtname','$fy','$budgettype','$costcentercode','$costcenters','$accountcode','$budgeline','$item1','$item2','$item3','$notes','$attach1','attach2','$amount','$approvalone','$approvaltwo','$name')");


 -->






