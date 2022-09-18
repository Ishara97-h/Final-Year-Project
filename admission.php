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
    $h=($_POST["height"]);
    $w=($_POST["weight"]);
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
    form{
      padding-left:330px;
      
    }
    h3{
      padding-left:100px;
    }
    .btn{
      margin-left:55px;
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
<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>
<div class="content-wrapper" >
<section class="content">
    <br>
    <form action="" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              
              <h3 class="card-title" >Patient Admission</h3>
            </div>
            <div class="card-body">
            <table><tr><td>
                <div class="form-group">
                  <label for="inputName">Register ID</label>
                  <input type="text" id="inputName" class="form-control" name="reg_id" value="<?php echo $_SESSION['reg_id'];?>">
                </div></td><td>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="pname" value="<?php echo $_SESSION['pname'];?>">
                </div></td></tr></table>
                <div class="form-group">
                  <label for="inputName">BHT</label>
                  <input type="text" id="inputBHT" class="form-control" name="bht" value="<?php echo $bht;?>">
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Height in Inches</label>
                  <input type="text" id="inputHeight" class="form-control" name="height" value="<?php echo $h;?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Weight in KG</label>
                  <input type="text" id="inputWeight" class="form-control" name="weight" value="<?php echo $w;?>">
                </div>
                <div class="btn">
                  <div class="col-12">
                    <input type="submit"  value="Calculate"  class="btn btn-primary ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">BMI Value</label>
                  <input type="text" id="inputBMI" class="form-control" name="bmi" value="<?php echo $bmi;?>">
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
      
    </section>
      
</div>
</body>
</html>
