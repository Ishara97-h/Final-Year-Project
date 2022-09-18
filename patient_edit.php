
<?php
include ('reg_server.php');
$reg_id="";
$pname="";
$bht="";
 $bmi="";
 $h="";
    $w="";
if($_POST!=null)
{
    $h=($_POST["inch"]);
    $w=($_POST["kg"]);
    $index =0;
    if($h !=0 && $w !=0)
        $index = round($w*2.204/($h*$h)* 703,2);
 
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="underweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
        $bmi="normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="overweight - BMI : " . $index;  
        $bmiStyle="alert alert-warning";
    } else {
        $bmi="obese - BMI : " .$index;  
        $bmiStyle="alert alert-danger";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/9217577d69b796f7fae8e0f838ee11a7--medical-logo-medical-center.jpg">
  <title>AnesCare</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
    
    h3{
      padding-left:150px;
    }
    .btn{
      margin-left:80px;
      width:100px;
    }
    form{
      width:120%;
      padding-left:150px;
    }
    
    </style>
  
</head>
<body class="hold-transition sidebar-mini">
<?php
include('db_connect.php');

if(isset($_GET['reg_id']))
{
$reg_id=$_GET['reg_id'];
if(isset($_POST['admit']))
{
$pname=$_POST['pname'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$query3=mysqli_query($db,"update patients set pname='$pname', address='$address',phone_no='$phone_no'  where reg_id='$reg_id'");
if($query3)
{
header('location:patient_details.php');
}
}
$query1="select * from patients where reg_id='$reg_id'";
$results = mysqli_query($db, $query1);
    if (mysqli_num_rows($results) == 1) {
while($row=mysqli_fetch_assoc($results)){
    $reg_id = $row['reg_id'];
    #$prjct_name = $row['prjct_name'];

    
?>
<div class="wrapper">
  <!-- Navbar -->
  <?php include('topbar.php')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
    <br>
    
      
    </section>
    <form action="" method="POST" style="padding-left:350px;">

      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              
              <h3 class="card-title" >Update Patient Details</h3>
            </div>
            <div class="card-body">
            <table style="width:100%"><tr><td>
                <div class="form-group">
                  <label for="inputName">Register ID</label>
                  <input type="text" id="inputName" class="form-control" name="reg_id" value="<?php echo $row['reg_id'];?>">
                </div></td><td>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="pname" value="<?php echo $row['pname'];?>">
                </div></td></tr><tr><td >
                <div class="form-group">
                  <label for="inputName">Age</label>
                  <input type="text" id="inputBday" class="form-control" name="age" value="<?php echo $row['age'];?>">
                </div>
</td></tr></table>
                <div class="form-group">
                  <label for="inputDescription">Address</label>
                  <textarea id="inputDescription" class="form-control" rows="2" name="address" ><?php echo $row['address']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Phone Number</label>
                  <input type="text" id="inputClientCompany" class="form-control" name="phone_no" value="<?php echo $row['phone_no'];?>">
                </div>
                
                <div >
                  
                    <hr width="100%" height="50px" color="black">
                  
                </div>
               
                <div class="btn">
                  <div class="col-12">
                    <input type="submit" name="admit" value="Submit" class="btn btn-success">
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </form>
        <?php
}
    }
  }?>
    <!-- /.content -->
  </div>
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>
</html>
