
<?php
session_start();
//include ('reg_server.php');
$reg_id="";
//$pname="";
$bht="";
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/1 - crop.png">
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
    .btn1{
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
 
    //$bmi="";
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
if(isset($_GET['reg_id']))
{
$reg_id=$_GET['reg_id'];
if(isset($_POST['admit']))
{
$bht=$_POST['bht'];
$inch=$_POST['inch'];
$kg=$_POST['kg'];
//$bmi=$_POST['bmi'];
$query3=mysqli_query($db,"update patients set bht='$bht', inch='$inch',kg='$kg' where reg_id='$reg_id'");
if($query3)
{
header('location:patient_ad.php');
}
}
$query1="select * from patients where reg_id='$reg_id'";
$results = mysqli_query($db, $query1);
    if (mysqli_num_rows($results) == 1) {
while($row=mysqli_fetch_assoc($results)){
    $reg_id = $row['reg_id'];
    #$prjct_name = $row['prjct_name'];
    //$bmi = $row['bmi'];

    
?>
<div class="wrapper">
  <!-- Navbar -->
  <?php include('topbar.php')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
 
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
                </div></td><tr><tr><td>
                <div class="form-group">
                  <label for="inputName">BHT</label>
                  <input type="text" id="bht" class="form-control" name="bht" value="<?php echo $row['bht'];?>">
                </div></td></tr><tr><td >
                <div class="form-group">
                  <label for="inputName">Height</label>
                  <input type="text" id="inch" class="form-control" name="inch" value="<?php echo $row['inch'];?>">
                </div>
</td></tr></table>
                <div class="form-group">
                  <label for="inputDescription">Weight</label>
                  <input type="text" id="kg" class="form-control" name="kg" value="<?php echo $row['kg'];?>">
                </div>
                <div class="btn1">
                  <div class="col-12">
                    <input type="submit"  value="Calculate" name="cal"  class="btn btn-primary ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">BMI</label>
                  <input type="text" id="bmi" class="form-control" name="bmi" value="<?php echo $bmi;?>">
                </div>
                
                <div >
                  
                    <hr width="100%" height="50px" color="black">
                  
                </div>
               
                <div class="btn1">
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
