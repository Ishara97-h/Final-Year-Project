
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
    .btn1 {
      margin-left: 150px;
      width: 100px;
    }
    form{
      width:120%;
      padding-left:150px;
    }
    
    </style>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('topbar.php')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  
<!-- ./wrapper -->

<!-- jQuery -->

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
              
              <h3 class="card-title" >Register Patients</h3>
            </div>
            <div class="card-body">
            <table style="width:100%"><tr><td>
                <div class="form-group">
                  <label for="inputName">Register ID</label><span style="color:red">*</span>
                  <input type="text" id="inputName" class="form-control" name="reg_id" value="<?php echo $reg_id;?>">
                </div></td><td>
                <div class="form-group">
                  <label for="inputName">Name</label><span style="color:red">*</span>
                  <input type="text" id="inputName" class="form-control" name="pname" value="<?php echo $pname;?>">
                </div></td></tr><tr><td >
                <div class="form-group">
                  <label for="inputName">Age</label><span style="color:red">*</span>
                  <input type="text" id="inputBday" class="form-control" name="age" value="<?php echo $age;?>">
                </div>
</td></tr><tr><td>
                <div class="form-group">
                  <label for="inputStatus">Gender</label><span style="color:red">*</span>
                  <select id="inputStatus" class="form-control custom-select" width="50%" name="gender">
                    <option selected disabled>Select one</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div></td><td>
                  <div class="form-group">
                  <label for="inputStatus">Blood Group</label><span style="color:red">*</span>
                  <select id="inputStatus" class="form-control custom-select" width="50%" name="bg">
                    <option selected disabled>Select one</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                  </select>
                </div></td></tr></table>
                <div class="form-group">
                  <label for="inputDescription">Address</label><span style="color:red">*</span>
                  <textarea id="inputDescription" class="form-control" rows="2" name="address" ><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Phone Number</label><span style="color:red">*</span>
                  <input type="text" id="inputClientCompany" class="form-control" name="phone_no" value="<?php echo $phone_no;?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">NIC</label><span style="color:red">*</span>
                  <input type="text" id="inputProjectLeader" class="form-control" name="nic" value="<?php echo $nic;?>">
                </div>
                <div >
                  
                    <hr width="100%" height="50px" color="black">
                  
                </div>
                <!--<table><tr><td>
                <div class="form-group">
                  <label for="inputName">Register ID</label>
                  <input type="text" id="inputName" class="form-control" name="reg_id" value="<?php# echo $_SESSION['reg_id'];?>">
                </div></td><td>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="pname" value="<?php #echo $_SESSION['pname'];?>">
                </div></td></tr></table>-->
                <div class="form-group">
                  <label for="inputName">BHT</label><span style="color:red">*</span>
                  <input type="text" id="inputBHT" class="form-control" name="bht" value="<?php echo $bht;?>">
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Height in Inches</label><span style="color:red">*</span>
                  <input type="text" id="inputHeight" class="form-control" name="inch" value="<?php echo $h;?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Weight in KG</label><span style="color:red">*</span>
                  <input type="text" id="inputWeight" class="form-control" name="kg" value="<?php echo $w;?>">
                </div>
                <div class="btn1">
                  <div class="col-12">
                    <input type="submit"  value="Calculate"  class="btn btn-primary ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">BMI Value</label>
                  <input type="text" id="inputBMI" class="form-control" name="bmi" value="<?php echo $bmi;?>">
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


