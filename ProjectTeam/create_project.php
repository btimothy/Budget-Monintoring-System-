 <?php 
 include('include/mainheader.php');
 include('include/config.php');
 if (isset($_POST['add'])) {
  $procode=$_POST['pcode'];
  $pname=$_POST['pname'];
  $pofficer=$_POST['poff'];
  $probj=$_POST['pbj'];
  $desc=$_POST['descrpt'];
  $Duration=$_POST['dur'];
  $estc=$_POST['est'];
  $bapp=$_POST['bp'];
  $boconst=$_POST['bcot'];
  $dppp=$_POST['depwp'];
  $promember=$_POST['names'];
  
   $sql="SELECT ProjectCode FROM projects where ProjectCode=?";
  $stmt1 = $db->prepare($sql);
  $stmt1->bind_param('s',$procode);
  $stmt1->execute();
  $stmt1->store_result(); 
  $row_cnt=$stmt1->num_rows;
  if($row_cnt>0)
  {
  echo"<script>alert('Project  already exist');</script>";
  }
  else

  
  $sql=mysqli_query($db,"insert into projects(ProjectCode ,ProjectName,ProjectManager,ProjectObjective,Description,ExpectedDuration,EstimatedCost,BoardApproval,BoardConstraint,Department_Work_Plan)values('$procode','$pname','$pofficer','$probj','$desc','$Duration','$estc','$bapp','$boconst','$dppp')");
  if ($sql) {
   echo"<script>alert('New  Project Has been created Succssfully');</script>";
      }
      else{
        echo "something went wrong";
      }
   }

?>
<style>

textarea {
    width: 100%;
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

      <div class="container-fluid"  >

        <!-- Breadcrumbs-->
        <ol class="breadcrumb" >
          <li class="breadcrumb-item" >
            <a href="dashboard.php">Admin </a></li>
          
            <a href="dashboard.php" class="breadcrumb-item ">Admin</a>
            <a href="currentbudget.php" class="breadcrumb-item ">Project Management  </a>
            

          </li>
         
          </li>
          <li class="breadcrumb-item active"> Create New Project </li>

        </ol>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Adding New New Project</div>
          <div class="card-body">
            <!-- add new budget item form -->
            <form  method="POST">
            <div class="form-group">
            <label for="exampleInput">Project Code :</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="pcode" required="">
           </div>
             <div class="form-group">
           <label for="exampleInput">Project Name:</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="pname" required="">
           </div>

          <div class="form-group">
           <label for="exampleInput">Project Officer:</label>
            <input type="text" class="form-control" id=""  name="poff" required="">
           </div>

           <div class="form-group">
           <label for="exampleInput">Project Objective:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="pbj" required="">
           </div>
           <div class="form-group">
              <label for="exampleInputName2">Project Description:</label>
              <textarea name="descrpt"  rows="3" required=""></textarea>
            </div>  
            <div class="form-group">
           <label for="exampleInput">Expected Duration:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="dur">
           </div> 
           <div class="form-group">
           <label for="exampleInput">Estimated Cost:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="est" required="">
           </div>
           <div class="form-group">
           <label for="exampleInput">Board Approval:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="bp" required="">
           </div>
           <div class="form-group">
           <label for="exampleInput">Board Condition:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="bcot" required="">
           </div>
           <div class="form-group">
           <label for="exampleInput">Department WorkPlan:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="depwp" required="">
           </div>
             <div class="form-group">
            <label class="col-sm-16 control-label"> Add Project Member: </label>
            <div class="col-lm-16">
            <select name="names" id=""  class="form-control" required> 
            <option value="">Add project member</option>
            <?php $sql = "SELECT FullName  FROM project_team WHERE FullName NOT IN('admin')";
            $stmt2 = $db->prepare($sql);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->FullName;?>"><?php echo $row->FullName;?></option>
            <?php } ?>
            </select>
             </div></div>
         

            <div class="form-group">&emsp; &emsp;
            <input type="submit" name="add" Value="create Project " class="btn btn-primary">

          </div>

           
          </form>

          </div>
          <div class="card-footer small text-muted">User:Admin</div>
        </div>

      </div>
      <!-- /.container-fluid-->

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