 <?php 
 include('include/mainheader.php');
 include('include/config.php');
 if (isset($_POST['add'])) {
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $Phone=$_POST['phone'];
  $costcenters=$_POST['costcenters'];
  $user_type=$_POST['user_type'];
  $section=$_POST['section'];
  $role=$_POST['role'];
  $sql="SELECT email FROM project_team where email=?";
  $stmt1 = $db->prepare($sql);
  $stmt1->bind_param('s',$email);
  $stmt1->execute();
  $stmt1->store_result(); 
  $row_cnt=$stmt1->num_rows;
  if($row_cnt>0)
  {
  echo"<script>alert('Member already exist');</script>";
  }
  else
  $sql=mysqli_query($db,"insert into project_team(FullName,Email,Phone,Section,CostCenter,UserType,Role)values('$fname',' $email','$Phone', '$section' ,'$costcenters','$user_type','$role')");
  if ($sql) {
   echo"<script>alert('Member  Added Succssfully');</script>";
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
          
            <a href="dashboard.php" class="breadcrumb-item ">Admin</a>
            <a href="currentbudget.php" class="breadcrumb-item ">Project Management  </a>
            <a href="budgetline.php" class="breadcrumb-item ">Project Team</a>
            

          </li>
         
          </li>
          <li class="breadcrumb-item active"> Add Project Member </li>

        </ol>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Adding New Project Member</div>
          <div class="card-body">
            <!-- add new budget item form -->
            <form  method="POST">
            <div class="form-group">
            <label for="exampleInputname">Full Name:</label>
            <input type="text" class="form-control" id="name" aria-describedby="fname" name="fname">
           </div>
             <div class="form-group">
           <label for="exampleInputemail">Email:</label>
            <input type="email" class="form-control" id="name" aria-describedby="email" name="email">
           </div>
           <div class="form-group">
           <label for="exampleInputphone">Phone:</label>
            <input type="text" class="form-control" id="name" aria-describedby="phone" name="phone">
           </div>

            <div class="form-group">
            <label class="col-sm-16 control-label">Cost Center: </label>
            <div class="col-lm-16">
            <select name="costcenters" id="costcenters"  class="form-control" required> 
            <option value="">Select Cost Center</option>
            <?php $query ="SELECT * FROM costcenters";
            $stmt2 = $db->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->names;?>"><?php echo $row->names;?></option>
            <?php } ?>
            </select>
             </div></div>
             <div class="form-group">
           <label for="exampleInputphone">Section:</label>
            <input type="text" class="form-control" id="name" aria-describedby="" name="section">
           </div>
             <div class="form-group">
            <label class="col-sm-16 control-label">User Category: </label>
            <div class="col-lm-16">
            <select name="user_type" id=""  class="form-control" required> 
            <option value="">Select User Category</option>
            <?php $sql = "SELECT username,user_type FROM users WHERE user_type NOT IN('admin')";
            $stmt2 = $db->prepare($sql);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($row=$res->fetch_object())
            {
            ?>
            <option  value="<?php echo $row->user_type;?>"><?php echo $row->user_type;?></option>
            <?php } ?>
            </select>
             </div></div>
             <div class="form-group">
            <label for="exampleFormControlSelect1">Assign Role</label>
            <select name="role" class="form-control" id="exampleFormControlSelect1">
              <option value="Project Manager">Project Manager</option>
              <option value="Programer">Programmer </option>
              <option value="Business Analyst">Business Analyst</option>
              <option value="Database Designer">Database Designer</option>
              <option value="System Analyst">System Analyst</option>
              <option value="System Tester">System Tester</option>
              <option value="Project Sponser">Project Sponser</option>
             <option value="Prject Contributor">Prject Contributor</option>
            <option value="System Artihecture">System Artihecture</option>
              <option value="Qulality Assurance Personel">Qulality Assurance Personel</option>
              <option value="Documenter" >Documenter</option>
              <option value="End User">End User</option>

            </select>
          </div>

            <div class="form-group">&emsp; &emsp;
            <input type="submit" name="add" Value="Add " class="btn btn-primary">

          </div>

           
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
  <a class="scroll-to-top rounded" href="#page-top" >
    <i class="fas fa-angle-up" ></i>
  </a> 